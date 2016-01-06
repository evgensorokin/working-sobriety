<?php
/* Template Name: About page */
get_header();
?>

<?php
// Start the loop.
while ( have_posts() ) : the_post();
    ?>
    <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
    <section class="main-big-image inner-title" style="background-image:url('<?= $feat_image;?>')">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-8">
                    <h1><?php the_field('title_h1'); ?></h1>
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

                    <?php if( have_rows('peoples') ): ?>

                    <div class="list-teams">
                        <?php while ( have_rows('peoples') ) : the_row(); ?>
                            <?php $image = get_sub_field('photo'); ?>
                            <div class="row-people">
                                <div class="row">
                                    <div class="col-xs-4 div-people">
                                        <div class="clear">
                                            <div class="col-sm-6">
                                                <p><?= the_sub_field('name'); ?></p>
                                                <span><?= the_sub_field('position'); ?></span>
                                            </div>
                                            <div class="col-sm-6"><img src="<?= $image ?>" class="img-responsive pull-right" /></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-8 div-desc">
                                        <div class="title"><?= the_sub_field('name'); ?>, <?= the_sub_field('position'); ?></div>
                                        <?= the_sub_field('description'); ?>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    </div>

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>
