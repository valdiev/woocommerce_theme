<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package woocommercetheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header>
        <nav>
            <div class="nav container">
                <div class="nav__links">
                    <?php wp_nav_menu([
                        'theme_location' => 'links_menu',
                        'container' => false]); ?>
                </div>
                <div class="nav__logo">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="nav__woocommerce">
                <?php wp_nav_menu([
                        'theme_location' => 'woocommerce_menu',
                        'container' => false]); ?>
                </div>
            </div>
            <div class="dashed-separator container"></div>
        </nav>
	</header><!-- #masthead -->
