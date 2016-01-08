<?php
/* Template Name: Contact Us page */
get_header();
?>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

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

    <section class="content-section contact-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">

                    <div class="map-address">
                        <?php $location = get_field('google_map'); if( !empty($location) ): ?>
                        <div class="map">
                            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                        </div>
                        <?php endif; ?>
                        <div class="address">
                            <?php the_content(); ?>
                        </div>
                    </div>

                </div>

                <div class="col-sm-8">

                    <div class="contact-form">

                        <?php echo do_shortcode('[contact-form-7 id="120" title="Contact form"]'); ?>

                    </div>

                </div>
            </div>
        </div>
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>
