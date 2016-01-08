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

<section class="main-big-image inner-title events-header">
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

                <?php $images = get_field('images'); if( $images ): ?>
                <div class="sidebar-content">
                    <?php foreach( $images as $image ): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive" />
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

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
