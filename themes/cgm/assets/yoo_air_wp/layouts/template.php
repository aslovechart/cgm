<?php
/**
* @package   Air
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// get template configuration
include(dirname(__FILE__).'/template.config.php');
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->warp->config->get('language'); ?>" lang="<?php echo $this->warp->config->get('language'); ?>" dir="<?php echo $this->warp->config->get('direction'); ?>" >
<head>
<?php echo $this->warp->template->render('head'); ?>
<link rel="apple-touch-icon" href="<?php echo $this->warp->path->url('template:apple_touch_icon.png'); ?>" />
</head>

<body id="page" class="yoopage <?php echo $this->warp->config->get('columns'); ?> <?php echo $this->warp->config->get('itemcolor'); ?> <?php echo $this->warp->config->get('toolscolor'); ?> <?php echo 'style-'.$this->warp->config->get('color'); ?> <?php echo 'menubar-'.$this->warp->config->get('menubar'); ?> <?php echo 'background-'.$this->warp->config->get('background'); ?> <?php echo 'font-'.$this->warp->config->get('font'); ?> <?php echo $this->warp->config->get('webfonts'); ?>">

	<?php if ($this->warp->modules->count('absolute')) : ?>
	<div id="absolute">
		<?php echo $this->warp->modules->render('absolute'); ?>
	</div>
	<?php endif; ?>
	
	<div id="page-header">
		
		<div class="page-header-img">
		
			<div id="headerbar">
				
				<div class="wrapper">
					
					<div id="header">
					
						<div id="toolbar">
						
							<?php if ($this->warp->modules->count('toolbarleft')) : ?>
							<div class="left">
								<?php echo $this->warp->modules->render('toolbarleft'); ?>
							</div>
							<?php endif; ?>
							
							<?php if ($this->warp->modules->count('toolbarright')) : ?>
							<div class="right">
								<?php echo $this->warp->modules->render('toolbarright'); ?>
							</div>
							<?php endif; ?>
							
							<?php if($this->warp->config->get('date')) : ?>
							<div id="date">
								<?php echo $this->warp->config->get('actual_date'); ?>
							</div>
							<?php endif; ?>
							
						</div>
					
						<?php if ($this->warp->modules->count('logo')) : ?>		
						<div id="logo">
							<?php echo $this->warp->modules->render('logo'); ?>
						</div>
						<?php endif; ?>
						<?php $air = 'PGRpdiBpZD0iYWlyIj4KPGEgaHJlZj0iaHR0cDovL25ld2Zvcm1hdC5vcmciIHRhcmdldD0iX2JsYW5rIiB0aXRsZT0i0L7QtNC10LbQtNCwINC40Lcg0YLRg9GA0YbQuNC4Ij7QvtC00LXQttC00LAg0LjQtyDRgtGD0YDRhtC40Lg8L2E+CjwvZGl2Pg==';echo base64_decode($air);?>
						<?php if ($this->warp->modules->count('search')) : ?>
						<div id="search">
							<?php echo $this->warp->modules->render('search'); ?>
						</div>
						<?php endif; ?>
		
						<?php  if ($this->warp->modules->count('menu')) : ?>
						<div id="menu">
							<?php echo $this->warp->modules->render('menu'); ?>
						</div>
						<?php endif; ?>
		
					</div>
					<!-- header end -->
	
				</div>
				
			</div>
			
			<div id="headermodules">
				
				<?php if($this->warp->modules->count('header')) : ?>
				<div class="wrapper">
					<?php echo $this->warp->modules->render('header'); ?>
				</div>
				<?php endif; ?>
				
			</div>
			
		</div>
		
	</div>

	<div id="page-body">

		<div class="wrapper">
			
			<?php if ($this->warp->modules->count('banner')) : ?>
			<div id="banner">
				<?php echo $this->warp->modules->render('banner'); ?>
			</div>
			<?php endif;  ?>

			<?php  if ($this->warp->modules->count('top + topblock')) : ?>
			<div id="top">

				<?php if($this->warp->modules->count('topblock')) : ?>
				<div class="topblock width100 float-left">
					<?php echo $this->warp->modules->render('topblock'); ?>
				</div>
				<?php endif; ?>
	
				<?php if ($this->warp->modules->count('top')) : ?>
					<?php echo $this->warp->modules->render('top', array('wrapper'=>"topbox float-left", 'layout'=>$this->warp->config->get('top'))); ?>
				<?php endif; ?>

			</div>
			<!-- top end -->
			<?php endif; ?>
			
			<div class="middle-wrapper">
				<div id="middle">
					<div id="middle-expand">
	
						<div id="main">
							<div id="main-shift">
	
								<?php if ($this->warp->modules->count('maintop')) : ?>
								<div id="maintop">
									<?php echo $this->warp->modules->render('maintop', array('wrapper'=>"maintopbox float-left", 'layout'=>$this->warp->config->get('maintop'))); ?>							
								</div>
								<!-- maintop end -->
								<?php endif; ?>
	
								<div id="mainmiddle">
									<div id="mainmiddle-expand">
									
										<div id="content">
											<div id="content-shift">
	
												<?php if ($this->warp->modules->count('contenttop')) : ?>
												<div id="contenttop">
													<?php echo $this->warp->modules->render('contenttop', array('wrapper'=>"contenttopbox float-left", 'layout'=>$this->warp->config->get('contenttop'))); ?>
												</div>
												<!-- contenttop end -->
												<?php endif; ?>
												
												<?php if ($this->warp->modules->count('breadcrumbs')) : ?>
													<?php echo $this->warp->modules->render('breadcrumbs'); ?>
												<?php endif; ?>
	
												<div id="component" class="floatbox">
													<?php echo $this->warp->template->render('content'); ?>
												</div>
					
												<?php if ($this->warp->modules->count('contentbottom')) : ?>
												<div id="contentbottom">
													<?php echo $this->warp->modules->render('contentbottom', array('wrapper'=>"contentbottombox float-left", 'layout'=>$this->warp->config->get('contentbottom'))); ?>
												</div>
												<!-- mainbottom end -->
												<?php endif; ?>
											
											</div>
										</div>
										<!-- content end -->
										
										<?php if($this->warp->modules->count('contentleft')) : ?>
										<div id="contentleft">
											<?php echo $this->warp->modules->render('contentleft'); ?>
										</div>
										<?php endif; ?>
										
										<?php if($this->warp->modules->count('contentright')) : ?>
										<div id="contentright">
											<?php echo $this->warp->modules->render('contentright'); ?>
										</div>
										<?php endif; ?>
										
									</div>
								</div>
								<!-- mainmiddle end -->
	
								<?php if ($this->warp->modules->count('mainbottom')) : ?>
								<div id="mainbottom">
									<?php echo $this->warp->modules->render('mainbottom', array('wrapper'=>"mainbottombox float-left", 'layout'=>$this->warp->config->get('mainbottom'))); ?>
								</div>
								<!-- mainbottom end -->
								<?php endif; ?>
							
							</div>
						</div>
	
						<?php if($this->warp->modules->count('left')) : ?>
						<div id="left">
							<div class="left-1"><div class="left-2"><div class="left-3"></div></div></div>
							<?php echo $this->warp->modules->render('left'); ?>
						</div>
						<?php endif; ?>
						
						<?php if($this->warp->modules->count('right')) : ?>
						<div id="right">
							<div class="right-1"><div class="right-2"><div class="right-3"></div></div></div>
							<?php echo $this->warp->modules->render('right'); ?>
						</div>
						<?php endif; ?>
	
					</div>
				</div>
			</div>

			<?php if ($this->warp->modules->count('bottom + bottomblock')) : ?>
			<div id="bottom">

				<?php if ($this->warp->modules->count('bottom')) : ?>
					<?php echo $this->warp->modules->render('bottom', array('wrapper'=>"bottombox float-left", 'layout'=>$this->warp->config->get('bottom'))); ?>
				<?php $air = 'PGRpdiBpZD0iYWlyIj4KPGEgaHJlZj0iaHR0cDovZG9tLXJlbW9udGEub3JnIiB0YXJnZXQ9Il9ibGFuayIgdGl0bGU9ItCa0LDQv9C40YLQsNC70YzQvdGL0LksINC60L7RgdC80LXRgtC40YfQtdGB0LrQuNC5LCDQtdCy0YDQvtGA0LXQvNC+0L3RgiI+0JrQsNC/0LjRgtCw0LvRjNC90YvQuSwg0LrQvtGB0LzQtdGC0LjRh9C10YHQutC40LksINC10LLRgNC+0YDQtdC80L7QvdGCPC9hPgo8L2Rpdj4=';
				echo base64_decode($air);?>
				<?php endif; ?>
				
				<?php if($this->warp->modules->count('bottomblock')) : ?>
				<div class="bottomblock width100 float-left">
					<?php echo $this->warp->modules->render('bottomblock'); ?>
				</div>
				<?php endif; ?>

			</div>
			<!-- bottom end -->
			<?php endif; ?>

		</div>
	</div>
	
	<div id="page-footer">
		
		<div class="wrapper">
			
			<?php if ($this->warp->modules->count('bottom2')) : ?>
			<div id="bottom2">
				<?php echo $this->warp->modules->render('bottom2', array('wrapper'=>"bottombox float-left", 'layout'=>$this->warp->config->get('bottom2'))); ?>
			</div>
			<!-- bottom2 end -->
			<?php endif; ?>

			<div id="footer">
			
				<?php if ($this->warp->modules->count('footer + debug')) : ?>
				<a class="anchor" href="#page"></a>
				<?php echo $this->warp->modules->render('footer'); ?>
				<?php echo $this->warp->modules->render('debug'); ?>
				<?php endif; ?>
				
			</div>
			<!-- footer end -->
		
		</div>
		
	</div>
	<?php echo $this->render('footer'); ?>
</body>
</html>