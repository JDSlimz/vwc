<!DOCTYPE html>
<html lang='en'>

	<head>
		<title><?php echo get_bloginfo('name'); ?></title>
		<link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
		<?php get_header(); ?>
	</head>

	<body>
		<?php if(is_user_logged_in()){ ?>
			<style>body{margin-top:40px;}</style>
		<?php } ?>
		<header>
			<?php if ( function_exists( 'the_custom_logo' ) ) {
				the_custom_logo();
			}
			
			wp_nav_menu( array( 
				'theme_location' => 'header', 
				'container_class' => 'header-menu' ) ); 
			?>
			
			<span id="menu-burger" class="dashicons dashicons-menu"></span>
		</header>

		<h2>GIF GOES HERE!</h2>
		<?php
		for($i=0;$i<4;$i++){ 
			echo '<h1>Site under construction!</h1>';
		}
		?>

		<?php get_footer(); ?>
	</body>

</html>
