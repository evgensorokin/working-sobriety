<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">

                <a href="#" class="paypal"><img src="<?php echo get_template_directory_uri(); ?>/img/paypal.png" /></a>

                <?php
                wp_nav_menu( array(
                    'container'      => 'div',
                    'theme_location' => 'social',
                    'menu_class'     => 'socials',
                ) );
                ?>

                <?php
                wp_nav_menu( array(
                    'container'      => '',
                    'theme_location' => 'primary',
                    'menu_class'     => '',
                ) );
                ?>

                <?php if ( is_active_sidebar( 'copyright' )  ) : ?>
                    <div class="copyright"><?php dynamic_sidebar( 'copyright' ); ?></div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
