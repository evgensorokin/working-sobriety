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
    <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
    <section class="main-big-image inner-title" <?php if(!empty($feat_image)) : ?>style="background-image:url('<?= $feat_image;?>')" <?php endif; ?>>
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
                <div class="col-md-10 col-md-offset-1 col-sm-12">
                    <?php $image = get_field('images_content'); ?>
                    <img src="<?php echo $image; ?>" class="img-responsive center-block img-center" />

                    <?php the_content(); ?>

                </div>
            </div>
        </div>
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>
