<!DOCTYPE html>
<html lang='en'>

	<head>
		<title><?php echo get_bloginfo('name'); ?></title>
		<link href="<?php echo get_bloginfo('template_directory'); ?>/fonts/iconmonstr/css/iconmonstr-iconic-font.min.css" rel="stylesheet">
		<link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
	</head>

	<body>
		<?php if(is_user_logged_in()){ ?>
			<style>body{margin-top:40px;}</style>
		<?php } ?>
		<header>
			<?php if ( function_exists( 'the_custom_logo' ) ) {
				the_custom_logo();
			}
			
			?>
			
			<input id="menu-toggle" type="checkbox" />
			<i id="menu-burger" class="im im-menu"></i>
			<i id="menu-close" class="im im-x-mark"></i>
			
			<?php
			wp_nav_menu( array( 
				'theme_location' => 'header', 
				'container_class' => 'header-menu' ) ); 
			?>
		</header>

		<div id="head-gif">
			<h2>GIF GOES HERE!</h2>
		</div>
		
		<div id="content-body">
			<div class="home-block">
				Block 1!
			</div>
			<div class="home-block">
				Block 2!
			</div>
			<div class="home-block">
				Block 3!
			</div>
			<div class="home-block">
				Block 4!
			</div>
			<div class="home-block">
				Block 5!
			</div>
			<div class="home-block">
				Block 6!
			</div>
			
			<div id="content-footer">
			<?php get_footer(); ?>
		</div>
		</div>
	</body>

</html>
