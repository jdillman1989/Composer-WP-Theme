<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element
 *
 * @package WordPress
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php 
		wp_head(); 
		echo header_style();
	?>
</head>

<body>

	<div class="container">

		<div class="header">

			<div class="logo">
			</div>

			<div class="header-info">
				
				<div class="tagline">
					<h1>The Music of<br><span class="ball">Karen Ball</span></h1>
				</div>

				<div class="nav">
					<?php
						wp_nav_menu( 
							array( 'theme_location' => 'primary' ) 
						); 
					?>
				</div>
			</div>
		</div>

		<div class="content">