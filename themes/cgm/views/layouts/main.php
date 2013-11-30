<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
    <head>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <?php
            $baseUrl = Yii::app()->theme->baseUrl . '/assets/';
            $cs = Yii::app()->getClientScript();
            $cs->registerCssFile($baseUrl . 'css/custom.css');
            $cs->registerCssFile($baseUrl . 'css/editor.css');
            $cs->registerCssFile($baseUrl . 'css/extensions.css');
            // $cs->registerCssFile($baseUrl . 'css/ie6hacks.css');
            // $cs->registerCssFile($baseUrl . 'css/ie7hacks.css');
            //$cs->registerCssFile($baseUrl . 'css/ie8hacks.css');
            $cs->registerCssFile($baseUrl . 'css/layout.css');
            $cs->registerCssFile($baseUrl . 'css/menus.css');
            $cs->registerCssFile($baseUrl . 'css/modules.css');

            $cs->registerCssFile($baseUrl . 'css/popups.css');
            $cs->registerCssFile($baseUrl . 'css/reset.css');
//            $cs->registerCssFile($baseUrl . 'css/rtl.css');
            $cs->registerCssFile($baseUrl . 'css/style.css');
            $cs->registerCssFile($baseUrl . 'css/system.css');
            $cs->registerCssFile($baseUrl . 'css/typography.css');
            $cs->registerCssFile($baseUrl . 'css/styles/red.css');
            Yii::app()->clientScript->registerCoreScript('jquery');
            $cs->registerScriptFile($baseUrl . 'warp/js/search.js');
//            $cs->registerScriptFile($baseUrl . 'javascripts/jquery-ui-1.10.3.custom.min.js');
        ?> 
        <style type="text/css">body { min-width: 980px; }
            .wrapper { width: 980px; }
            #main-shift { margin-right: 260px; }
            #right { width: 250px; margin-left: -250px; }
            #menu .dropdown { width: 300px; }
            #menu .columns2 { width: 600px; }
            #menu .columns3 { width: 900px; }
            #menu .columns4 { width: 1200px; }


        </style>

    </head>

    <body id="page" class="yoopage column-right style-red menubar-glass background-glitter font-lucida ">


        <div id="page-header">

            <div class="page-header-img">

                <div id="headerbar">

                    <div class="wrapper">

                        <div id="header">

                            <div id="toolbar">


                                <div class="right">
                                    <div class="module mod-blank   first ">



                                        <a class="twitter" title="Follow us on Twitter" href="http://twitter.com/yootheme" target="_blank"><img height="25" width="25" alt="Follow us on Twitter" src="http://yootheme.com/demo/themes/wordpress/2010/air/wp-content/uploads/yootheme/toolbar_twitter.png"></a>
                                        <a class="rss" title="Subscribe to our RSS feed" href="http://www.yootheme.com/rss" target="_blank"><img height="25" width="25" alt="Subscribe to our RSS feed" src="http://yootheme.com/demo/themes/wordpress/2010/air/wp-content/uploads/yootheme/toolbar_feed.png"></a>		
                                    </div><div class="module mod-blank    last">



                                        <ul id="menu-top-menu" class="menu menu-accordion"><li class="level1 item1 first"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?cat=5" class="level1 item1 first"><span class="bg">Themes</span></a></li><li class="level1 item2"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?cat=9" class="level1 item2"><span class="bg">Warp</span></a></li><li class="level1 item3 last"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?cat=4" class="level1 item3 last"><span class="bg">Icons</span></a></li></ul>		
                                    </div>							</div>

                                <div id="date">
                                    29. Nov 2013							</div>

                            </div>


                            <div id="logo">
                                <a class="logo-icon correct-png" href="index.php" title="Home"></a>						</div>

                            <div id="search">

                                <div id="searchbox">
                                    <form action="http://yootheme.com/demo/themes/wordpress/2010/air/" method="get" role="search">
                                        <button class="magnifier" type="submit" value="Search"></button>
                                        <input type="text" value="" name="s" placeholder="search..." autocomplete="off"><ul class="results" style="display: none;"></ul>
                                            <button class="reset" type="reset" value="Reset"></button>
                                    </form>
                                </div>


                                <script type="text/javascript">
                                    jQuery(function($) {
                                        $('#searchbox input[name=s]').search({'url': 'http://yootheme.com/demo/themes/wordpress/2010/air/wp-admin/admin-ajax.php?action=warp_search', 'param': 's', 'msgResultsHeader': 'Search Results', 'msgMoreResults': 'More Results', 'msgNoResults': 'No results found'}).placeholder();
                                    });
                                </script>
                            </div>

                            <div id="menu">
                                <ul id="menu-menu" class="menu menu-dropdown"><li class="active level1 item1 first parent"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/" class="level1 item1 first parent active"><span class="bg">Home</span></a><div class="dropdown columns3" style="width: 600px; overflow: hidden;"><div style="overflow: hidden; width: 600px; height: 239px; opacity: 1; display: none;"><div style="min-width: 600px; min-height: 239px;"><div class="dropdown-t1"><div class="dropdown-t2"><div class="dropdown-t3"></div></div></div><div class="dropdown-1"><div class="dropdown-2"><div class="dropdown-3"><ul class="col1 level2 first"><li class="level2 item1 first active"><div class="group-box1"><div class="group-box2"><div class="group-box3"><div class="group-box4"><div class="group-box5"><div class="hover-box1"><div class="hover-box2"><div class="hover-box3"><div class="hover-box4"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?preset=default" class="level2 item1 first active"><span class="bg icon" style="background-image: url('http://yootheme.com/demo/themes/wordpress/2010/air/http://yootheme.com/demo/themes/wordpress/2010/air/wp-content/uploads/yootheme/menu/icon_redglitter.png');">Red Glitter</span></a></div></div></div></div></div></div></div></div></div></li><li class="level2 item2 active"><div class="group-box1"><div class="group-box2"><div class="group-box3"><div class="group-box4"><div class="group-box5"><div class="hover-box1"><div class="hover-box2"><div class="hover-box3"><div class="hover-box4"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?preset=brownmountains" class="level2 item2 active"><span class="bg icon" style="background-image: url('http://yootheme.com/demo/themes/wordpress/2010/air/http://yootheme.com/demo/themes/wordpress/2010/air/wp-content/uploads/yootheme/menu/icon_brownmountains.png');">Brown Mountains</span></a></div></div></div></div></div></div></div></div></div></li><li class="level2 item3 active"><div class="group-box1"><div class="group-box2"><div class="group-box3"><div class="group-box4"><div class="group-box5"><div class="hover-box1"><div class="hover-box2"><div class="hover-box3"><div class="hover-box4"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?preset=lilacspace" class="level2 item3 active"><span class="bg icon" style="background-image: url('http://yootheme.com/demo/themes/wordpress/2010/air/http://yootheme.com/demo/themes/wordpress/2010/air/wp-content/uploads/yootheme/menu/icon_lilacspace.png');">Lilac Space</span></a></div></div></div></div></div></div></div></div></div></li><li class="level2 item4 last active"><div class="group-box1"><div class="group-box2"><div class="group-box3"><div class="group-box4"><div class="group-box5"><div class="hover-box1"><div class="hover-box2"><div class="hover-box3"><div class="hover-box4"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?preset=greenaurora" class="level2 item4 last active"><span class="bg icon" style="background-image: url('http://yootheme.com/demo/themes/wordpress/2010/air/http://yootheme.com/demo/themes/wordpress/2010/air/wp-content/uploads/yootheme/menu/icon_greenaurora.png');">Green Aurora</span></a></div></div></div></div></div></div></div></div></div></li></ul><ul class="col2 level2"><li class="level2 item1 first active"><div class="group-box1"><div class="group-box2"><div class="group-box3"><div class="group-box4"><div class="group-box5"><div class="hover-box1"><div class="hover-box2"><div class="hover-box3"><div class="hover-box4"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?preset=redlandscape" class="level2 item1 first active"><span class="bg icon" style="background-image: url('http://yootheme.com/demo/themes/wordpress/2010/air/http://yootheme.com/demo/themes/wordpress/2010/air/wp-content/uploads/yootheme/menu/icon_redlandscape.png');">Red Landscape</span></a></div></div></div></div></div></div></div></div></div></li><li class="level2 item2 active"><div class="group-box1"><div class="group-box2"><div class="group-box3"><div class="group-box4"><div class="group-box5"><div class="hover-box1"><div class="hover-box2"><div class="hover-box3"><div class="hover-box4"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?preset=blueglitter" class="level2 item2 active"><span class="bg icon" style="background-image: url('http://yootheme.com/demo/themes/wordpress/2010/air/http://yootheme.com/demo/themes/wordpress/2010/air/wp-content/uploads/yootheme/menu/icon_blueglitter.png');">Blue Glitter</span></a></div></div></div></div></div></div></div></div></div></li><li class="level2 item3 active"><div class="group-box1"><div class="group-box2"><div class="group-box3"><div class="group-box4"><div class="group-box5"><div class="hover-box1"><div class="hover-box2"><div class="hover-box3"><div class="hover-box4"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?preset=bluephoto" class="level2 item3 active"><span class="bg icon" style="background-image: url('http://yootheme.com/demo/themes/wordpress/2010/air/http://yootheme.com/demo/themes/wordpress/2010/air/wp-content/uploads/yootheme/menu/icon_bluephoto.png');">Blue Photo</span></a></div></div></div></div></div></div></div></div></div></li><li class="level2 item4 last active"><div class="group-box1"><div class="group-box2"><div class="group-box3"><div class="group-box4"><div class="group-box5"><div class="hover-box1"><div class="hover-box2"><div class="hover-box3"><div class="hover-box4"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?preset=lilacbubbles" class="level2 item4 last active"><span class="bg icon" style="background-image: url('http://yootheme.com/demo/themes/wordpress/2010/air/http://yootheme.com/demo/themes/wordpress/2010/air/wp-content/uploads/yootheme/menu/icon_lilacbubbles.png');">Lilac Bubbles</span></a></div></div></div></div></div></div></div></div></div></li></ul><ul class="col3 level2 last"><li class="level2 item1 first active"><div class="group-box1"><div class="group-box2"><div class="group-box3"><div class="group-box4"><div class="group-box5"><div class="hover-box1"><div class="hover-box2"><div class="hover-box3"><div class="hover-box4"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?preset=turquoisegradient" class="level2 item1 first active"><span class="bg icon" style="background-image: url('http://yootheme.com/demo/themes/wordpress/2010/air/http://yootheme.com/demo/themes/wordpress/2010/air/wp-content/uploads/yootheme/menu/icon_turquoisegradient.png');">Turquoise Gradient</span></a></div></div></div></div></div></div></div></div></div></li><li class="level2 item2 active"><div class="group-box1"><div class="group-box2"><div class="group-box3"><div class="group-box4"><div class="group-box5"><div class="hover-box1"><div class="hover-box2"><div class="hover-box3"><div class="hover-box4"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?preset=brownlandscape" class="level2 item2 active"><span class="bg icon" style="background-image: url('http://yootheme.com/demo/themes/wordpress/2010/air/http://yootheme.com/demo/themes/wordpress/2010/air/wp-content/uploads/yootheme/menu/icon_brownlandscape.png');">Brown Landscape</span></a></div></div></div></div></div></div></div></div></div></li><li class="level2 item3 active"><div class="group-box1"><div class="group-box2"><div class="group-box3"><div class="group-box4"><div class="group-box5"><div class="hover-box1"><div class="hover-box2"><div class="hover-box3"><div class="hover-box4"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?preset=redaurora" class="level2 item3 active"><span class="bg icon" style="background-image: url('http://yootheme.com/demo/themes/wordpress/2010/air/http://yootheme.com/demo/themes/wordpress/2010/air/wp-content/uploads/yootheme/menu/icon_redaurora.png');">Red Aurora</span></a></div></div></div></div></div></div></div></div></div></li><li class="level2 item4 last active"><div class="group-box1"><div class="group-box2"><div class="group-box3"><div class="group-box4"><div class="group-box5"><div class="hover-box1"><div class="hover-box2"><div class="hover-box3"><div class="hover-box4"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?preset=greenmountains" class="level2 item4 last active"><span class="bg icon" style="background-image: url('http://yootheme.com/demo/themes/wordpress/2010/air/http://yootheme.com/demo/themes/wordpress/2010/air/wp-content/uploads/yootheme/menu/icon_greenmountains.png');">Green Mountains</span></a></div></div></div></div></div></div></div></div></div></li></ul></div></div></div><div class="dropdown-b1"><div class="dropdown-b2"><div class="dropdown-b3"></div></div></div></div></div></div></li><li class="level1 item2 parent"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?page_id=63" class="level1 item2 parent"><span class="bg">Features</span></a><div class="dropdown columns1" style="overflow: hidden;"><div style="overflow: hidden;"><div style="min-width: 300px; min-height: 125px;"><div class="dropdown-t1"><div class="dropdown-t2"><div class="dropdown-t3"></div></div></div><div class="dropdown-1"><div class="dropdown-2"><div class="dropdown-3"><ul class="col1 level2 first last"><li class="level2 item1 first last parent"><div class="group-box1"><div class="group-box2"><div class="group-box3"><div class="group-box4"><div class="group-box5"><div class="hover-box1"><div class="hover-box2"><div class="hover-box3"><div class="hover-box4"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?page_id=63" class="level2 item1 first last parent"><span class="bg icon" style="background-image: url('http://yootheme.com/demo/themes/wordpress/2010/air/wp-content/uploads/yootheme/menu/icon_warp5.png');"><span class="title">Warp</span><span class="subtitle">Theme Framework</span></span></a></div></div></div></div><div class="sub"><ul class="sub-menu level3"><li class="level3 item1 first"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?page_id=69" class="level3 item1 first"><span class="bg">Module Variations</span></a></li><li class="level3 item2 last"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?page_id=71" class="level3 item2 last"><span class="bg">Typography</span></a></li></ul></div></div></div></div></div></div></li></ul></div></div></div><div class="dropdown-b1"><div class="dropdown-b2"><div class="dropdown-b3"></div></div></div></div></div></div></li><li class="level1 item3"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?page_id=77" class="level1 item3"><span class="bg">Icons</span></a></li><li class="level1 item4 last parent"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?cat=29" class="level1 item4 last parent"><span class="bg"><span class="title">WordPress</span><span class="subtitle">categories</span></span></a><div class="dropdown columns1" style="overflow: hidden;"><div style="overflow: hidden; width: 300px; height: 211px; opacity: 1; display: none;"><div style="min-width: 300px; min-height: 211px;"><div class="dropdown-t1"><div class="dropdown-t2"><div class="dropdown-t3"></div></div></div><div class="dropdown-1"><div class="dropdown-2"><div class="dropdown-3"><ul class="col1 level2 first last"><li class="level2 item1 first parent"><div class="group-box1"><div class="group-box2"><div class="group-box3"><div class="group-box4"><div class="group-box5"><div class="hover-box1"><div class="hover-box2"><div class="hover-box3"><div class="hover-box4"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?cat=7" class="level2 item1 first parent"><span class="bg"><span class="title">Web Design</span><span class="subtitle">The latest design news</span></span></a></div></div></div></div><div class="sub"><ul class="sub-menu level3"><li class="level3 item1 first"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?cat=5" class="level3 item1 first"><span class="bg">Themes</span></a></li><li class="level3 item2 last"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?cat=4" class="level3 item2 last"><span class="bg">Icons</span></a></li></ul></div></div></div></div></div></div></li><li class="level2 item2 last parent"><div class="group-box1"><div class="group-box2"><div class="group-box3"><div class="group-box4"><div class="group-box5"><div class="hover-box1"><div class="hover-box2"><div class="hover-box3"><div class="hover-box4"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?cat=8" class="level2 item2 last parent"><span class="bg"><span class="title">Web Development</span><span class="subtitle">Great archive for developers</span></span></a></div></div></div></div><div class="sub"><ul class="sub-menu level3"><li class="level3 item1 first"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?cat=9" class="level3 item1 first"><span class="bg">Theme Framework</span></a></li><li class="level3 item2 last"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?cat=10" class="level3 item2 last"><span class="bg">Content Management</span></a></li></ul></div></div></div></div></div></div></li></ul></div></div></div><div class="dropdown-b1"><div class="dropdown-b2"><div class="dropdown-b3"></div></div></div></div></div></div></li></ul><ul class="menu menu-dropdown mod-dropdown">
                                    <li class="level1 parent separator">
                                        <span class="level1 parent separator">
                                            <span class="bg"><span class="title"><span class="color">Module</span> </span><span class="subtitle"> menu position</span></span>
                                        </span>
                                        <div class="dropdown columns1" style="overflow: hidden;">



                                            <div style="overflow: hidden; width: 300px; height: 77px; opacity: 1; display: none;"><div style="min-width: 300px; min-height: 77px;"><div class="dropdown-t1">
                                                        <div class="dropdown-t2">
                                                            <div class="dropdown-t3"></div>
                                                        </div>
                                                    </div><div class="dropdown-1">
                                                        <div class="dropdown-2">
                                                            <div class="dropdown-3">
                                                                <ul class="col1 level2 first last">
                                                                    <li class="level2 item1 first last">
                                                                        <div class="group-box1">
                                                                            <div class="group-box2">
                                                                                <div class="group-box3">
                                                                                    <div class="group-box4">
                                                                                        <div class="group-box5">
                                                                                            <div class="hover-box1">
                                                                                                <div class="hover-box2">
                                                                                                    <div class="hover-box3">
                                                                                                        <div class="hover-box4">
                                                                                                            <div class="module">Any widget can be placed in the drop down menu position.</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div><div class="dropdown-b1">
                                                        <div class="dropdown-b2">
                                                            <div class="dropdown-b3"></div>
                                                        </div>
                                                    </div></div></div></div>
                                    </li>
                                </ul>
                                <div class="fancy bg1" style="display: block; visibility: visible; opacity: 0; left: 294px; width: 127px;"><div class="fancy-1"><div class="fancy-2"><div class="fancy-3"></div></div></div></div></div>

                        </div>
                        <!-- header end -->

                    </div>

                </div>

                <div id="headermodules">

                    <div class="wrapper">
                        <div class="module mod-header   first last">


                            <div class="box-1 deepest">


                                <div class="demoimage"></div>
                                <div style="width: 45%; margin-top: 50px;">
                                    <h3 class="header">Create your favorite<br>color variation</h3>
                                    <p>Our new Air template allows you to pick your favorite template color and combine it with different background textures, menu bars and font faces to create your individual design.</p>
                                    <p class="readmore"><a href="?p=57" class="readmore">Read more...</a></p>
                                </div>		
                            </div>

                        </div>				</div>

                </div>

            </div>

        </div>

        <div id="page-body">

            <div class="wrapper">


                <div class="middle-wrapper">
                    <div id="middle">
                        <div id="middle-expand">

                            <div id="main">
                                <div id="main-shift">


                                    <div id="maintop">
                                        <div class="maintopbox float-left width100"><div class="module mod-box   first last">


                                                <div class="box-t1">
                                                    <div class="box-t2">
                                                        <div class="box-t3"></div>
                                                    </div>
                                                </div>

                                                <div class="box-1">
                                                    <div class="box-2">
                                                        <div class="box-3 deepest" style="min-height: 224px;">

                                                            <h3 class="header"><span class="header-2"><span class="header-3"></span></span></h3>

                                                            <div class="hover">
                                                                <a href="http://www.yootheme.com/zoo/app-bundle/product-catalog" target="_blank" style="padding-left: 90px; background: url(wp-content/uploads/yootheme/home_zoo_product.png) 10px 10px no-repeat;">
                                                                    <h3 style="margin: 5px 0px 5px 0px;">Product Catalog</h3>
                                                                    Clearly arranged catalog with many built-in features like alpha index and customer feedback.
                                                                </a>
                                                            </div>
                                                            <div class="hover">
                                                                <a href="http://www.yootheme.com/zoo/app-bundle/blog" target="_blank" style="padding-left: 90px; background: url(wp-content/uploads/yootheme/home_zoo_blog.png) 10px 10px no-repeat;">
                                                                    <h3 style="margin: 5px 0px 5px 0px;">Blog</h3>
                                                                    Easily build your own weblog with features like comments, tags and social bookmarks.
                                                                </a>
                                                            </div>
                                                            <div class="hover">
                                                                <a href="http://www.yootheme.com/zoo/app-bundle/download-archive" target="_blank" style="padding-left: 90px; background: url(wp-content/uploads/yootheme/home_zoo_downloads.png) 10px 10px no-repeat;">
                                                                    <h3 style="margin: 5px 0px 5px 0px;">Download Archive</h3>
                                                                    Provide file downloads which are protected from direct linking and much more.
                                                                </a>
                                                            </div>
                                                            <div class="hover">
                                                                <a href="http://www.yootheme.com/zoo/app-bundle/business-directory" target="_blank" style="padding-left: 90px; background: url(wp-content/uploads/yootheme/home_zoo_business.png) 10px 10px no-repeat;">
                                                                    <h3 style="margin: 5px 0px 5px 0px;">Business Directory</h3>
                                                                    Manage companies and their employees - Addresses are displayed on Google Maps.
                                                                </a>
                                                            </div>				
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="box-b1">
                                                    <div class="box-b2">
                                                        <div class="box-b3"></div>
                                                    </div>
                                                </div>

                                            </div></div>							
                                    </div>


                                    <div id="mainmiddle">
                                        <div id="mainmiddle-expand">

                                            <div id="content">
                                                <div id="content-shift">


                                                    <div class="breadcrumbs"><strong>Home</strong></div>													
                                                    <div id="component" class="floatbox">
                                                        <div id="system">


                                                            <div class="items items-col-1"><div class="width100 first last"><div id="item-57" class="item">

                                                                        <div class="date">
                                                                            <div class="month">Sep</div>
                                                                            <div class="day">20</div>
                                                                        </div>

                                                                        <h1 class="title"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?p=57" title="Air Theme">Air Theme</a></h1>

                                                                        <div class="content"><p class="fluid-image"><a href="?p=57"><img width="760" height="300" alt="New WordPress theme from YOOtheme" title="New WordPress theme from YOOtheme" src="wp-content/uploads/yootheme/blog_template.jpg"></a></p>
                                                                            <p>Welcome YOOtheme’s latest template: Air! Its light design, flexible layout and large presentation area put your products and content right into perspective. The elegant menu bar looks great in combination with a wide screen background image in the header.</p>
                                                                        </div>

                                                                        <p class="links">
                                                                            <a href="http://yootheme.com/demo/themes/wordpress/2010/air/?p=57" title="Air Theme">Continue Reading</a> |
                                                                            <a href="http://yootheme.com/demo/themes/wordpress/2010/air/?p=57#comments" title="Comment on Air Theme">6 Comments</a>	</p>


                                                                    </div><div id="item-45" class="item">

                                                                        <div class="date">
                                                                            <div class="month">Aug</div>
                                                                            <div class="day">25</div>
                                                                        </div>

                                                                        <h1 class="title"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?p=45" title="New Warp 5.5 framework">New Warp 5.5 framework</a></h1>

                                                                        <div class="content"><p class="fluid-image"><a href="?p=45"><img width="700" height="276" alt="New Warp 5.5 framework" title="New Warp 5.5 framework" src="wp-content/uploads/yootheme/blog_warp55.jpg"></a></p>
                                                                            <p>Over the last couple of months we developed the new Warp 5.5 theme framework which is the new foundation of all our YOOtheme templates. In this time we have rewritten the complete Warp theme framework to make it more modular, flexible and also extendible. All templates from 2010 and 2009 are updated to run on the new framework. This means more than 20 templates are using Warp 5.5!</p>
                                                                        </div>

                                                                        <p class="links">
                                                                            <a href="http://yootheme.com/demo/themes/wordpress/2010/air/?p=45" title="New Warp 5.5 framework">Continue Reading</a> |
                                                                            <a href="http://yootheme.com/demo/themes/wordpress/2010/air/?p=45#comments" title="Comment on New Warp 5.5 framework">3 Comments</a>	</p>


                                                                    </div><div id="item-40" class="item">

                                                                        <div class="date">
                                                                            <div class="month">Aug</div>
                                                                            <div class="day">18</div>
                                                                        </div>

                                                                        <h1 class="title"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?p=40" title="New Icon Set released">New Icon Set released</a></h1>

                                                                        <div class="content"><p class="fluid-image"><a href="?p=40"><img width="700" height="275" alt="Beautiful and handcrafted icon sets for web and print projects" title="Beautiful and handcrafted icon sets for web and print projects" src="wp-content/uploads/yootheme/blog_icons_files.jpg"></a></p>
                                                                            <p>YOOtheme is a well-known template and extension provider who helps you to create professional websites. But to make your website or interface design a real eye-catcher we got one thing missing: Icons! Icons are an essential tool to simplify user interfaces. We complete this with our beautiful and handcrafted icon sets for web and print projects. We got commercial icon sets and free stuff. Enjoy browsing through all the icons on our new <a href="http://www.yootheme.com/icons" target="_blank">icon club website</a>!</p>
                                                                        </div>

                                                                        <p class="links">
                                                                            <a href="http://yootheme.com/demo/themes/wordpress/2010/air/?p=40" title="New Icon Set released">Continue Reading</a> |
                                                                            <a href="http://yootheme.com/demo/themes/wordpress/2010/air/?p=40#comments" title="Comment on New Icon Set released">1 Comment</a>	</p>


                                                                    </div><div id="item-24" class="item">

                                                                        <div class="date">
                                                                            <div class="month">Jul</div>
                                                                            <div class="day">28</div>
                                                                        </div>

                                                                        <h1 class="title"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?p=24" title="ZOO 2.1 final arrived">ZOO 2.1 final arrived</a></h1>

                                                                        <div class="content"><p>The wait is over… We are really excited to announce that ZOO 2.1 is FINAL. We release the new version of ZOO 2.1 and as promised everybody can download ZOO for free. Since the BETA release we have made quite a few changes and fixed all known bugs. You can find more in information in the changelog file of the download package.</p>
                                                                            <p class="fluid-image" style="text-align: center;"><a href="?p=24"><img width="700" height="300" alt="ZOO 2.1 final arrived" title="ZOO 2.1 final arrived" src="wp-content/uploads/yootheme/blog_zoo20.png"></a></p>
                                                                        </div>

                                                                        <p class="links">
                                                                            <a href="http://yootheme.com/demo/themes/wordpress/2010/air/?p=24" title="ZOO 2.1 final arrived">Continue Reading</a> |
                                                                            <a href="http://yootheme.com/demo/themes/wordpress/2010/air/?p=24#respond" title="Comment on ZOO 2.1 final arrived">No Comments</a>	</p>


                                                                    </div><div id="item-19" class="item">

                                                                        <div class="date">
                                                                            <div class="month">Jun</div>
                                                                            <div class="day">14</div>
                                                                        </div>

                                                                        <h1 class="title"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?p=19" title="Free Social Icons Set">Free Social Icons Set</a></h1>

                                                                        <div class="content"><p class="fluid-image"><a href="?p=19"><img width="700" height="276" alt="Free Social Icons Set" title="Free Social Icons Set" src="wp-content/uploads/yootheme/blog_icons_socialbookmarks.jpg"></a></p>
                                                                            <p>Today we want to bring you the complete <a target="_blank" href="http://icons.yootheme.com/freebies">social bookmarks icon set as freebie</a>, including all sizes and even the vector source files. Using social bookmarks icons on your website has never been prettier. Easily share and bookmark content and spread it all over the world! We provide our social bookmarks icons with a high brand recognition, looking straight-lined and equally fresh styled. Of course they are designed to match with all our <a href="http://icons.yootheme.com/icon-club">club icon sets</a>.</p>
                                                                        </div>

                                                                        <p class="links">
                                                                            <a href="http://yootheme.com/demo/themes/wordpress/2010/air/?p=19" title="Free Social Icons Set">Continue Reading</a> |
                                                                            <a href="http://yootheme.com/demo/themes/wordpress/2010/air/?p=19#respond" title="Comment on Free Social Icons Set">No Comments</a>	</p>


                                                                    </div></div></div>		


                                                        </div>												</div>


                                                </div>
                                            </div>


                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div id="right" style="min-height: 1040px;">
                                <div class="right-1"><div class="right-2"><div class="right-3" style="min-height: 1040px;"></div></div></div>
                                <div class="module mod-shadowbox mod-menu mod-menu-shadowbox   first ">


                                    <div class="box-t1">
                                        <div class="box-t2">
                                            <div class="box-t3"></div>
                                        </div>
                                    </div>

                                    <div class="box-1">
                                        <div class="box-2">
                                            <div class="box-3 deepest">

                                                <h3 class="header"><span class="header-2"><span class="header-3"><span class="color">Sub</span> Menu</span></span></h3>

                                                <ul id="menu-sub-menu" class="menu menu-accordion"><li class="level1 item1 first active" style="background-color: rgb(247, 247, 248);"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/" class="level1 item1 first active"><span class="bg">Home</span></a></li><li class="separator level1 item2 parent toggler" style="background-color: rgb(247, 247, 248);"><span class="separator level1 item2 parent"><span class="bg">Web Design</span></span><div style="overflow: hidden; display: none; height: 0px;"><ul class="accordion level2"><li class="level2 item1 first"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?cat=5" class="level2 item1 first"><span class="bg">Themes</span></a></li><li class="level2 item2 last"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?cat=4" class="level2 item2 last"><span class="bg">Icons</span></a></li></ul></div></li><li class="separator level1 item3 last parent toggler" style="background-color: rgb(247, 247, 248);"><span class="separator level1 item3 last parent"><span class="bg">Web Development</span></span><div style="overflow: hidden; display: none; height: 0px;"><ul class="accordion level2"><li class="level2 item1 first"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?cat=9" class="level2 item1 first"><span class="bg">Theme Framework</span></a></li><li class="level2 item2 last"><a href="http://yootheme.com/demo/themes/wordpress/2010/air/?cat=10" class="level2 item2 last"><span class="bg">Content Management</span></a></li></ul></div></li></ul>				
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box-b1">
                                        <div class="box-b2">
                                            <div class="box-b3"></div>
                                        </div>
                                    </div>

                                </div><div class="module mod-line    ">

                                    <div class="header-1">
                                        <div class="header-2">
                                            <div class="header-3"></div>
                                        </div>
                                    </div>

                                    <h3 class="header"><span class="color">Warp5</span> Framework</h3>


                                    <div class="box-1 deepest with-header">
                                        This template is based on the fast and powerful Warp5 framework. We provide a comprehensive documentation how everything work.

                                        <p class="readmore"><a target="_blank" href="http://www.yootheme.com/warp/" class="readmore">Take a look...</a></p>	</div>

                                </div><div class="module mod-line    ">

                                    <div class="header-1">
                                        <div class="header-2">
                                            <div class="header-3"></div>
                                        </div>
                                    </div>

                                    <h3 class="header"><span class="color">Warp</span> 5.5 Features</h3>


                                    <div class="box-1 deepest with-header">
                                        <p style="margin: -5px 0px 5px 0px; text-align: center; font-size: 11px;">This template is based on warp 5.5</p>

                                        <ul class="button" style="margin: 0;">
                                            <li><a href="https://www.yootheme.com/blog/item/root/new-warp-55-framework" target="_blank">CSS/JS/Image Compression</a></li>
                                            <li><a href="https://www.yootheme.com/blog/item/root/new-warp-55-framework" target="_blank">Mootools 1.2 ready</a></li>
                                            <li><a href="https://www.yootheme.com/blog/item/root/new-warp-55-framework" target="_blank">Color Presets</a></li>
                                            <li><a href="https://www.yootheme.com/blog/item/root/new-warp-55-framework" target="_blank">Search Engine Optimized</a></li>
                                            <li><a href="https://www.yootheme.com/blog/item/root/new-warp-55-framework" target="_blank">Powerfull Menu System</a></li>
                                        </ul>	</div>

                                </div><div class="module mod-box    ">


                                    <div class="box-t1">
                                        <div class="box-t2">
                                            <div class="box-t3"></div>
                                        </div>
                                    </div>

                                    <div class="box-1">
                                        <div class="box-2">
                                            <div class="box-3 deepest">

                                                <h3 class="header"><span class="header-2"><span class="header-3">WordPress</span></span></h3>

                                                The Warp theme framework now supports WordPress!				
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box-b1">
                                        <div class="box-b2">
                                            <div class="box-b3"></div>
                                        </div>
                                    </div>

                                </div><div class="module mod-line    last">

                                    <div class="header-1">
                                        <div class="header-2">
                                            <div class="header-3"></div>
                                        </div>
                                    </div>

                                    <h3 class="header"><span class="color">YOOtheme</span> Links</h3>


                                    <div class="box-1 deepest with-header">

                                        <ul class="links">
                                            <li>
                                                <a href="http://www.yootheme.com/icons" target="_blank">Icons</a>
                                            </li>
                                            <li>
                                                <a href="http://www.yootheme.com/warp" target="_blank">Warp framework</a>
                                            </li>
                                            <li>
                                                <a href="http://www.yootheme.com" target="_blank">YOOtheme</a>
                                            </li>
                                            <li>
                                                <a href="http://www.yootheme.com/zoo" target="_blank">ZOO</a>
                                            </li>
                                        </ul>	</div>

                                </div>						</div>

                        </div>
                    </div>
                </div>
                <div id="bottom">

                    <div class="bottombox float-left width25 separator"><div class="module mod-shadowbox   first ">


                            <div class="box-t1">
                                <div class="box-t2">
                                    <div class="box-t3"></div>
                                </div>
                            </div>

                            <div class="box-1">
                                <div class="box-2">
                                    <div class="box-3 deepest" style="min-height: 40px;">


                                        <a href="http://www.yootheme.com" target="_blank" style="display: block; text-align: center; padding-top: 5px;">
                                            <img src="http://yootheme.com/demo/themes/wordpress/2010/air/wp-content/uploads/yootheme/bottom_yootheme.png" alt="Visit the YOOtheme website!" title="Visit the YOOtheme website!" width="150" height="35">
                                        </a>				
                                    </div>
                                </div>
                            </div>

                            <div class="box-b1">
                                <div class="box-b2">
                                    <div class="box-b3"></div>
                                </div>
                            </div>

                        </div></div><div class="bottombox float-left width25 separator"><div class="module mod-shadowbox    ">


                            <div class="box-t1">
                                <div class="box-t2">
                                    <div class="box-t3"></div>
                                </div>
                            </div>

                            <div class="box-1">
                                <div class="box-2">
                                    <div class="box-3 deepest" style="min-height: 40px;">


                                        <a href="http://www.yootheme.com/tools" target="_blank" style="display: block; text-align: center; padding-top: 5px;">
                                            <img src="http://yootheme.com/demo/themes/wordpress/2010/air/wp-content/uploads/yootheme/bottom_yootools.png" alt="Visit the YOOtools website!" title="Visit the YOOtools website!" width="127" height="35">
                                        </a>				
                                    </div>
                                </div>
                            </div>

                            <div class="box-b1">
                                <div class="box-b2">
                                    <div class="box-b3"></div>
                                </div>
                            </div>

                        </div></div><div class="bottombox float-left width25 separator"><div class="module mod-shadowbox    ">


                            <div class="box-t1">
                                <div class="box-t2">
                                    <div class="box-t3"></div>
                                </div>
                            </div>

                            <div class="box-1">
                                <div class="box-2">
                                    <div class="box-3 deepest" style="min-height: 40px;">


                                        <a href="http://www.yootheme.com/zoo" target="_blank" style="display: block; text-align: center; padding-top: 5px;">
                                            <img src="http://yootheme.com/demo/themes/wordpress/2010/air/wp-content/uploads/yootheme/bottom_zoo.png" alt="Visit the ZOO website!" title="Visit the ZOO website!" width="58" height="35">
                                        </a>				
                                    </div>
                                </div>
                            </div>

                            <div class="box-b1">
                                <div class="box-b2">
                                    <div class="box-b3"></div>
                                </div>
                            </div>

                        </div></div><div class="bottombox float-left width25"><div class="module mod-shadowbox    last">


                            <div class="box-t1">
                                <div class="box-t2">
                                    <div class="box-t3"></div>
                                </div>
                            </div>

                            <div class="box-1">
                                <div class="box-2">
                                    <div class="box-3 deepest" style="min-height: 40px;">


                                        <a href="http://www.yootheme.com/warp" target="_blank" style="display: block; text-align: center; padding-top: 5px;">
                                            <img src="http://yootheme.com/demo/themes/wordpress/2010/air/wp-content/uploads/yootheme/bottom_warp.png" alt="Visit the Warp5 website!" title="Visit the Warp5 website!" width="91" height="35">
                                        </a>				
                                    </div>
                                </div>
                            </div>

                            <div class="box-b1">
                                <div class="box-b2">
                                    <div class="box-b3"></div>
                                </div>
                            </div>

                        </div></div>								

                </div>
            </div>



        </div>


        <div id="page-footer">

            <div class="wrapper">

                <div id="bottom2">
                    <div class="bottombox float-left width25 separator">
                        <div class="module mod-separator   first ">


                            <div class="box-t1"></div>

                            <div class="box-1 deepest" style="min-height: 162px;">

                                <h3 class="header"><span class="header-2"><span class="header-3">Archive</span></span></h3>


                                <ul class="links">
                                    <li>
                                        <a href="http://yootheme.com/demo/themes/wordpress/2010/air/?m=201009">September 2010</a>
                                    </li>
                                    <li>
                                        <a href="http://yootheme.com/demo/themes/wordpress/2010/air/?m=201008">August 2010</a>
                                    </li>
                                    <li>
                                        <a href="http://yootheme.com/demo/themes/wordpress/2010/air/?m=201007">July 2010</a>
                                    </li>
                                    <li>
                                        <a href="http://yootheme.com/demo/themes/wordpress/2010/air/?m=201006">June 2010</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="box-b1"></div>

                        </div>

                    </div>
                    <div class="bottombox float-left width25 separator">
                        <div class="module mod-separator    ">


                            <div class="box-t1"></div>

                            <div class="box-1 deepest" style="min-height: 162px;">

                                <h3 class="header"><span class="header-2"><span class="header-3">Wordpress</span></span></h3>

                                This WordPress theme is powered by the Warp theme framework! Get Air and join the YOOtheme club today!
                            </div>

                            <div class="box-b1"></div>

                        </div>

                    </div>
                    <div class="bottombox float-left width25 separator">
                        <div class="module mod-separator    ">


                            <div class="box-t1"></div>

                            <div class="box-1 deepest" style="min-height: 162px;">

                                <h3 class="header"><span class="header-2"><span class="header-3">Contact</span></span></h3>

                                <p>John Q. Public<br/>10018 New York, NY<br/>United States
                                </p>
                                <p >
                                    call<br>/
                                        <span style="font-size: 26px;">1-212-5555-1</span>
                                </p>
                            </div>

                            <div class="box-b1"></div>

                        </div>

                    </div>
                    <div class="bottombox float-left width25"><div class="module mod-separator    last">


                            <div class="box-t1"></div>

                            <div class="box-1 deepest" style="min-height: 162px;">

                                <h3 class="header"><span class="header-2"><span class="header-3"><span class="color">Social</span> Bookmarks</span></span></h3>

                                <a href="http://www.twitter.com/yootheme" target="_blank" style="display: block; margin-bottom: 10px; padding-left: 30px; height: 20px; line-height: 20px; text-decoration: none; background: url(http://yootheme.com/demo/themes/wordpress/2010/air/wp-content/uploads/yootheme/icon_twitter.png) no-repeat;">Twitter</a>
                                <a href="http://www.facebook.com" target="_blank" style="display: block; margin-bottom: 10px; padding-left: 30px; height: 20px; line-height: 20px; text-decoration: none; background: url(http://yootheme.com/demo/themes/wordpress/2010/air/wp-content/uploads/yootheme/icon_facebook.png) no-repeat;">Facebook</a>
                                <a href="http://www.yootheme.com/rss" target="_blank" style="display: block; margin-bottom: 10px; padding-left: 30px; height: 20px; line-height: 20px; text-decoration: none; background: url(http://yootheme.com/demo/themes/wordpress/2010/air/wp-content/uploads/yootheme/icon_rss.png) no-repeat;">RSS-Feed</a>
                                <a href="http://www.flickr.com/" target="_blank" style="display: block; margin-bottom: 10px; padding-left: 30px; height: 20px; line-height: 20px; text-decoration: none; background: url(http://yootheme.com/demo/themes/wordpress/2010/air/wp-content/uploads/yootheme/icon_flickr.png) no-repeat;">Flickr</a>
                            </div>

                            <div class="box-b1"></div>

                        </div>

                    </div>		
                </div>

                <div id="footer">

                    <a class="anchor" href="#page"></a>
                    <ul id="menu-top-menu-1" class="menu menu-accordion">
                        <li class="level1 item1 first">
                            <a href="http://yootheme.com/demo/themes/wordpress/2010/air/?cat=5" class="level1 item1 first">
                                <span class="bg">Themes</span></a>
                        </li>
                        <li class="level1 item2">
                            <a href="http://yootheme.com/demo/themes/wordpress/2010/air/?cat=9" class="level1 item2">
                                <span class="bg">Warp</span>
                            </a>
                        </li>
                        <li class="level1 item3 last">
                            <a href="http://yootheme.com/demo/themes/wordpress/2010/air/?cat=4" class="level1 item3 last">
                                <span class="bg">Icons</span>
                            </a>
                        </li>
                    </ul>
                    Validates to <a href="http://validator.w3.org/check?uri=http://www.yootheme.com/demo/themes/wordpress/2010/air" target="_blank">XHTML 1.0</a> 
                    and 
                    <a href="http://jigsaw.w3.org/css-validator/validator?uri=http://www.yootheme.com/demo/themes/wordpress/2010/air&amp;profile=css3" target="_blank">CSS 3</a>
                    <br/>
                    Copyright © 2010 <a href="http://www.yootheme.com" target="_blank">YOOtheme</a>												
                </div>
                <!-- footer end -->

            </div>

        </div>


    </body>
</html>