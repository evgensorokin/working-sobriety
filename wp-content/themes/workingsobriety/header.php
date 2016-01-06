<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link href='https://fonts.googleapis.com/css?family=Sorts+Mill+Goudy' rel='stylesheet' type='text/css'>
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-xs-8">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="img-responsive" /></a>
			</div>
			<div class="col-sm-8 col-xs-4">
				<span class="button-menu pull-right visible-xs"></span>

                <?php
                wp_nav_menu( array(
                    'container'      => '',
                    'theme_location' => 'primary',
                    'menu_class'     => 'pull-right hidden-xs',
                ) );
                ?>
			</div>
		</div>
		<div class="row collapse-menu">
			<div class="col-xs-12">
                <?php
                wp_nav_menu( array(
                    'container'      => '',
                    'theme_location' => 'primary',
                    'menu_class'     => '',
                ) );
                ?>
			</div>
		</div>
	</div>
</header>