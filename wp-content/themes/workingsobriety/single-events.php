<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<?php
// Start the loop.
while ( have_posts() ) : the_post();
?>

<section class="main-big-image inner-title">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-8">

                <h1><?php the_title(); ?></h1>

            </div>
        </div>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 hidden-xs">

                <div class="sidebar-content">
                    <img src="img/img-rel-1.jpg" class="img-responsive" />
                    <img src="img/img-rel-2.jpg" class="img-responsive" />
                    <img src="img/img-rel-3.jpg" class="img-responsive" />
                    <img src="img/img-rel-4.jpg" class="img-responsive" />
                </div>

            </div>
            <div class="col-sm-8 col-xs-12">

                <div class="main-content">

                    <?php the_content(); ?>

                </div>

            </div>
        </div>
    </div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>
