<?php
/**
* @package   Warp Theme Framework
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

/*
	Class: WarpHelperSystem
		Wordpress system helper class, provides Wordpress 3.0 Blog integration (http://wordpress.org)
*/
class WarpHelperSystem extends WarpHelper {

	/* system path */
	var $path;

	/* system url */
	var $url;

	/* cache path */
	var $cache_path;

	/* cache time */
	var $cache_time;

	/* theme prefix */
	var $prefix;

	/* theme xml */
	var $xml;

	/* query */
	var $query;

	/* widgets */
	var $widgets;
    
	/* all widget options */
	var $widget_options;
	
	/* all menu items options */
	var $menu_item_options;
	
	/* all config overrides */
	var $config_overrides;
	
	/*
		Function: Constructor
			Class Constructor.
	*/
	function __construct() {
		parent::__construct();

		// parse site url
		$urlinfo = parse_url(get_option('siteurl'));
		$url     = $urlinfo['path'];

		// init vars
		$this->path       = rtrim(str_replace(DIRECTORY_SEPARATOR, '/', ABSPATH), '/');
		$this->url        = $url != '/' ? $url : null;
		$this->cache_path = rtrim(str_replace(DIRECTORY_SEPARATOR, '/', get_template_directory()), '/').'/cache';
		$this->cache_time = 86400;
		$this->prefix     = get_template().'_';
		
		// set callback
		$this->callbacks['construct'][] = 'init';
	}

	/*
		Function: init
			Initialize system configuration

		Returns:
			Void
	*/
	function init() {

		// init options
        $this->widget_options    = get_option('warp_widget_options', array());
		$this->menu_item_options = get_option($this->prefix.'menu-items', array());
		$this->config_overrides  = get_option($this->prefix.'overrides', array());

		// init helpers
		$path    = $this->getHelper('path');
		$config  = $this->getHelper('config');
		$modules = $this->getHelper('modules');
        $dom     = $this->getHelper('dom');

		// set cache directory
		if (!file_exists($this->cache_path)) {
			mkdir($this->cache_path, 0755);
		}

		// set paths
		$path->register($this->path.'/wp-admin', 'admin');
		$path->register($this->path, 'site');
		$path->register($this->cache_path, 'cache');
		$path->register($path->path('warp:systems/wordpress/menus'), 'menu');
		$path->register($path->path('warp:systems/wordpress/widgets'), 'widgets');
		$path->register($path->path('template:').'/widgets', 'widgets');

		// set translations
		load_theme_textdomain('warp', $path->path('template:languages'));

		// get theme xml
		$this->xml = $dom->create($path->path('template:template.xml'), 'xml');

		// get parameter
        $options = array();

        foreach ($this->xml->find('params') as $param) {
            
            foreach ($param->children("param") as $setting) {
            	$name = $setting->attr("name");

            	$options[$param->attr('group')][] = $setting;

            	if ($name == 'presets') {
                    $config->set('presets', array());
                } else {
                    $config->set($name, get_option($this->prefix.$name, $setting->attr('default')));
                }

            }
		}

        $config->set('warp.settings.theme', $options);

		// get module positions
        $options   = array();

        foreach ($this->xml->find('positions > position') as $position) {
            $name           = $position->text();
            $options[$name] = array('configurable' => true);

            if ($position->attr("configurable")==='0') {
            	$options[$name]['configurable'] = false;
                $options[$name]['info'] = $position->attr('info') ? $position->attr('info') : 'This position is not configurable.';
            }

            $modules->register($name);
		}

        $config->set('warp.positions', $options);

		// load widgets
		foreach ($path->dirs('widgets:') as $name) {
			if ($file = $path->path("widgets:{$name}/{$name}.php")) {
				require_once($file);
			}
		}

		// add actions
		add_action('wp_ajax_warp_search', array($this, 'ajaxSearch'));
		add_action('wp_ajax_nopriv_warp_search', array($this, 'ajaxSearch'));

		// register main menu	
		register_nav_menus(array('main_menu' => 'Main Navigation Menu'));

		// is admin or site
		if (is_admin()) {
			
			// load helper
			$this->warp->loadHelper(array('control'));
			
			// add actions
			add_action('admin_init', array($this, '_adminInit'));
		    add_action('admin_menu', array($this, '_adminMenu'));

		} else {

			// add actions
			add_action('wp', array($this, 'overrideConfig'));

			// set custom menu walker
            add_filter('wp_nav_menu_args', create_function('$args','if (empty($args["walker"])) $args["walker"] = new WarpMenuWalker();return $args;'));

            // allow & and special html chars in menu item
            add_filter('wp_setup_nav_menu_item', create_function('$menu_item','$menu_item->title = htmlspecialchars($menu_item->title, ENT_COMPAT, "UTF-8");return $menu_item;'));

            // filter widgets that should not be displayed
			add_filter('widget_display_callback', create_function('$instance,$widget,$args','
					$warp = Warp::getInstance();
					$w = $warp->system->getWidget($widget->id);
					return $w->display ? $instance : false;
			'),10, 3);

            // remove auto-linebreaks ?
            if (!$config->get('wpautop', 1)) {
            	remove_filter('the_content', 'wpautop');
			}

			// dynamic presets ?
	        if ($config->get('allow_dynamic_preset')) {

				if (!session_id()) session_start();

				if (isset($_GET[$this->warp->preset_var])) {
					$_SESSION['_current_preset'] = preg_replace('/[^A-Z0-9-]/i', '', $_GET[$this->warp->preset_var]);
				}

				$config->set('_current_preset', isset($_SESSION['_current_preset']) ? $_SESSION['_current_preset'] : null);
	        }

			$config->set('actual_date', date('d. M Y'));
		}

	}

	/*
		Function: getQuery
			Get current query information

		Returns:
			Object
	*/
	function getQuery() {
        global $wp_query;

		// create, if not set
		if (empty($this->query)) {
			
			// init vars
	        $obj   = $wp_query->get_queried_object();
			$query = array();

			// find current page type
			foreach (array('home', 'front_page', 'archive', 'search', 'single', 'page', 'category') as $type) {
				if (call_user_func('is_'.$type)) {
					$query[] = $type;

					if ($type == 'page') {
						$query[] = 'page-'.$obj->ID;
					}

					if ($type == 'category') {
						$query[] = 'cat-'.$obj->cat_ID;
					}
				}
			}
			
			$this->query = $query;
		}

		return $this->query;
	}

	/*
		Function: getPostCount
			Retrieve current post count

		Returns:
			Int
	*/
	function getPostCount() {
		global $wp_query;
		return $wp_query->post_count;
	}

	/*
		Function: getWidget
			Retrieve a widget by id

		Parameters:
			$id - Widget ID

		Returns:
			Object
	*/
	function getWidget($id) {
		global $wp_registered_widgets;
		
	    $widget  = null;
		$options = $this->widget_options;

		if (isset($wp_registered_widgets[$id]) && ($data = $wp_registered_widgets[$id])) {
			$widget = new stdClass();
			
			foreach (array('id', 'name', 'classname', 'description') as $var) {
				$widget->$var = isset($data[$var]) ? $data[$var] : null;
			}

			if (isset($data['callback']) && is_array($data['callback']) && ($object = current($data['callback']))) {
				if (is_a($object, 'WP_Widget')) {

					$widget->type = $object->id_base;

					if (isset($data['params'][0]['number'])) {

						$number = $data['params'][0]['number'];
						$params = get_option($object->option_name);

						if (false === $params && isset($object->alt_option_name)) {
							$params = get_option($object->alt_option_name);
						}

						if (isset($params[$number])) {
							$widget->params = $params[$number];
						}
					}
				}
			} else if ($id == 'nav_menu-0') {
			    $widget->type = 'nav_menu';
			}
			
			if (empty($widget->name)) {
				$widget->name = ucfirst($widget->type);
			}

			if (empty($widget->params)) {
				$widget->params = array();
			}

			$widget->options = isset($options[$id]) ? $options[$id] : array();
			$widget->display = $this->displayWidget($widget);
		}
		
		return $widget;
	}

	/*
		Function: getWidgets
			Retrieve widgets

		Parameters:
			$position - Position

		Returns:
			Array
	*/
	function getWidgets($position = null) {

		if (empty($this->widgets)) {
		    foreach (wp_get_sidebars_widgets() as $pos => $ids) {

				if (!is_array($ids) || empty($ids)) {
					continue;
				}

				$this->widgets[$pos] = array();

				foreach ($ids as $id) {
					$this->widgets[$pos][$id] = $this->getWidget($id);
				}
			}
		}

		if (!is_null($position)) {
			return isset($this->widgets[$position]) ? $this->widgets[$position] : array();
		}
	
		return $this->widgets;
	}

	/*
		Function: displayWidget
			Checks if a widget should be displayed

		Returns:
			Boolean
	*/
	function displayWidget($widget) {
	    if (!isset($widget->options['display']) || in_array('*', $widget->options['display'])) return true;
		
		foreach ($this->getQuery() as $q) {
		    if (in_array($q, $widget->options['display'])) {
				return true;
			}
		}

		return false;
	}
	
	/*
		Function: overrideConfig
			Overrides default config based on page

		Returns:
			Void
	*/
	function overrideConfig() {
	    if (!count($this->config_overrides)) return;
		
		foreach ($this->getQuery() as $q) {
            if (isset($this->config_overrides[$q])) {
				$this->warp->config->parseString($this->config_overrides[$q]);
			}
		}
	}

	/*
		Function: isBlog

		Returns:
			Boolean
	*/
	function isBlog() {
		return true;
	}

	/*
		Function: isPreview
			Checks for default widgets in theme preview 

		Returns:
			Boolean
	*/
	function isPreview($position) {
		
		// preview postions
		$positions = array('logo', 'right');

		return is_preview() && in_array($position, $positions);
	}
	
	/*
		Function: ajaxSearch
			Ajax search callback

		Returns:
			String
	*/
	function ajaxSearch(){
		global $wp_query;

		$result = array('results' => array());
		$query  = isset($_REQUEST['s']) ? $_REQUEST['s']:"";

		if (strlen($query)>=3) {
			
			$wp_query->query_vars['post_status'] = 'publish';
			$wp_query->query_vars['s'] = $query;
			$wp_query->is_search = true;

			foreach ($wp_query->get_posts() as $post) {
			    
			    $content = !empty($post->post_excerpt) ? strip_tags(do_shortcode($post->post_excerpt)) : strip_tags(do_shortcode($post->post_content));
			    
			    if (strlen($content) > 255) {
			        $content = substr($content, 0, 254).'...';
			    }
			    
			    $result['results'][] = array(
					'title' => $post->post_title,
					'text'  => $content,
					'url'   => get_permalink($post->ID)
				);
			}
		}

		die(json_encode($result));
	}

	/*
		Function: _adminInit
			Admin init actions

		Returns:
			Void
	*/
	function _adminInit() {
		
	    if ((defined('DOING_AJAX') && DOING_AJAX) && isset($_POST['warp-ajax-save'])) {

			// update option values
		    foreach ($_POST as $option => $value) {
		        if (preg_match('/^(warp_|'.preg_quote($this->prefix, '/').')/', $option)) {
		            update_option($option, $value);
		        }
		    }

		    die();
		}
		
		// add css/js
	    $path = $this->getHelper('path'); 		
		$info = parse_url(site_url());
		$url  = sprintf('/%s/i', preg_quote($info['path'], '/'));

		if (isset($_GET['page']) && in_array($_GET['page'], array('warp', 'warp_widget'))) {
			wp_enqueue_script('warp-js-admin', preg_replace($url, '', $path->url('warp:systems/wordpress/js/admin.js'), 1));
		}

		wp_enqueue_style('warp-css-admin', preg_replace($url, '', $path->url('warp:systems/wordpress/css/admin.css'), 1));
		wp_enqueue_script('warp-js-wp-admin', preg_replace($url, '', $path->url('warp:systems/wordpress/js/wp-admin.js'), 1));

		// add actions
		add_action('wp_ajax_save_nav_settings', array($this,'_save_nav_settings'));
		add_action('wp_ajax_get_nav_settings', array($this,'_get_nav_settings'));
	}

	/*
		Function: _adminMenu
			Admin menu actions

		Returns:
			Void
	*/
	function _adminMenu() {

		// init vars
	    $path = $this->getHelper('path');
		$name = $this->xml->first('name');
		$icon = $path->url('warp:systems/wordpress/images/yoo_icon_16.png');

	    if (function_exists('add_object_page')) {
	        add_object_page('', $name->text(), 'edit_theme_options', 'warp', false, $icon);
	    } else {
	        add_menu_page('', $name->text(), 'edit_theme_options', 'warp', false, $icon); 
	    }

		add_submenu_page('warp', 'Theme Options', 'Theme Options', 'edit_theme_options', 'warp', array($this, '_adminThemeOptions'));
		add_submenu_page('warp', 'Widget Options', 'Widget Options', 'edit_theme_options', 'warp_widget', array($this, '_adminWidgetOptions'));
	}

	/*
		Function: _adminThemeOptions
			Render admin theme options layout

		Returns:
			Void
	*/	
	function _adminThemeOptions() {
		
		// init vars
		$path  = $this->getHelper('path');
        $dom   = $this->getHelper('dom');
        $http  = $this->getHelper('http');
        $check = $this->getHelper('checksum');
		
		// get warp xml
		$warp_xml = $dom->create($path->path('warp:warp.xml'), 'xml');

		// update check
		$update = null;
		if ($url = $warp_xml->first('updateUrl')->text()) {

			// get template info
			$template = get_template();
			$version  = $this->xml->first('version')->text();
			$url      = sprintf('%s?application=%s&version=%s&format=raw', $url, $template, $version);
			
			// only check once a day 
			if (get_option($this->prefix.'update_check') != date('Y-m-d').' '.$version) {
				if ($request = $http->get($url)) {
					update_option($this->prefix.'update_check', date('Y-m-d').' '.$version);
					update_option($this->prefix.'update_data', $request['body']);
				}
			}

			// decode update response
			$update = json_decode(get_option($this->prefix.'update_data'));
		}

		// verify theme files
		if (($checksums = $path->path('template:checksums')) && filesize($checksums)) {
			$check->verify($path->path('template:'), $log);
		} else {
			$log = false;
		}

	    echo $this->warp->template->render('admin/theme_options', array('xml' => $this->xml, 'warp_xml' => $warp_xml, 'update' => $update, 'checklog' => $log));
    }

	/*
		Function: _adminWidgetOptions
			Render admin widget options layout

		Returns:
			Void
	*/	
	function _adminWidgetOptions() {
	    
		// get position settings
		$position_settings = $this->warp->config->get('warp.positions');
		
		// get module settings
		$module_settings = array();
		$settings = $this->xml->first('modulesettings');

		foreach ($settings->children() as $setting) {
			$module_settings[$setting->attr('name')] = $setting;
		}
		
	    echo $this->warp->template->render('admin/widget_options', compact('position_settings', 'module_settings'));
    }
	
	/*
		Function: getMenuItemOptions
			Retrieve menu by id

		Parameters:
			$id - Menu Item ID

		Returns:
			Array
	*/
	function getMenuItemOptions($id) {
		return isset($this->menu_item_options[$id]) ? $this->menu_item_options[$id] : array();
	}
	
	/*
		Function: _save_nav_settings
			Saves menu item settings

		Returns:
			Void
	*/	
	function _save_nav_settings() {
	    
		if (isset($_POST['menu-item'])) {
			
			$menu_item_settings = $this->menu_item_options;
			
			foreach ($_POST['menu-item'] as $itemId=>$settings){
				$menu_item_settings[$itemId] = $settings;
			}
			
			update_option($this->prefix.'menu-items', $menu_item_settings);
			$this->menu_item_options = $menu_item_settings;
		}
		
		die();
    }
	
	/*
		Function: _get_nav_settings
			Returns menu item settings as json

		Returns:
			Boolean
	*/
	function _get_nav_settings() {
		die(json_encode($this->menu_item_options));
    }

}


/*
	Class: WarpMenuWalker
		Custom Menu Walker
*/
class WarpMenuWalker extends Walker_Nav_Menu {

	function start_lvl(&$output, $depth) {
		$output .= '<ul>';
	}

	function end_lvl(&$output, $depth) {
		$output .= '</ul>';
	}

	function start_el(&$output, $item, $depth, $args) {

		// get warp
		$warp = Warp::getInstance();

		// init vars
		$data = array();
		$classes = empty($item->classes) ? array() : (array) $item->classes;
		$options = $warp->system->getMenuItemOptions($item->ID);

		// set id
		$data['data-id'] = $item->ID;

		// is current item ?
		if (in_array('current-menu-item', $classes) || in_array('current_page_item', $classes)) {
			$data['data-menu-active'] = 2;

		// home/fronpage item
		} elseif ($item->url == 'index.php' && (is_home() || is_front_page())) {
			$data['data-menu-active'] = 2;
		}

		// has columns ?
		if (!empty($options['columns'])) {
			$data['data-menu-columns'] = (int) $options['columns'];			
		}

		// has columnwidth ?
		if (!empty($options['columnwidth'])) {
			$data['data-menu-columnwidth'] = (int) $options['columnwidth'];			
		}

		// has image ?
		if (!empty($options['image'])) {
			$upload = wp_upload_dir();
			$data['data-menu-image'] = trailingslashit($upload['baseurl']).$options['image'];			
		}

		// set item attributes
		$attributes = '';
		foreach ($data as $name => $value) {
			$attributes .= sprintf(' %s="%s"', $name, esc_attr($value));
		}

		// create item output
		$id = apply_filters('nav_menu_item_id', '', $item, $args);
		$output .= '<li'.(strlen($id) ? sprintf(' id="%s"', esc_attr($id)) : '').$attributes.'>';

		// set link attributes
		$attributes = '';
		foreach (array('attr_title' => 'title', 'target' => 'target', 'xfn' => 'rel', 'url' => 'href') as $var => $attr) {
			if (!empty($item->$var)) {
				$attributes .= sprintf(' %s="%s"', $attr, esc_attr($item->$var));
			}
		}

		// escape link title
		$item->title = htmlspecialchars($item->title, ENT_COMPAT, "UTF-8");

		// is separator ?
		if ($item->url == '#') {
			$format = '%s<span%s><span>%s</span></span>%s';
			$attributes = ' class="separator"';
		} else {
			$format = '%s<a%s><span>%s</span></a>%s';
		}

		// create link output
		$item_output = sprintf($format, $args->before, $attributes, $args->link_before.apply_filters('the_title', $item->title, $item->ID).$args->link_after, $args->after);

		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	}
	
	function end_el(&$output, $item, $depth) {
		$output .= '</li>';
	}	

}

/*
	Function: mb_strpos
		mb_strpos function for servers not using the multibyte string extension
*/
if (!function_exists('mb_strpos')) {
	function mb_strpos($haystack, $needle, $offset = 0) {
		return strpos($haystack, $needle, $offset);
	}
}