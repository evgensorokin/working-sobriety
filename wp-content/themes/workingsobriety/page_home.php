<?php
/* Template Name: Home page */
get_header();
?>

<?php
    // Start the loop.
    while ( have_posts() ) : the_post();
?>
<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

<section class="main-big-image" style="background-image:url('<?= $feat_image;?>')">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-8">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>

<?php $image = get_field('home_offer_img'); ?>
<section class="content-offer">
    <div class="container">
        <div class="row">
            <div class="col-sm-8"><img src="<?php echo $image; ?>" class="img-responsive" /></div>
            <div class="col-ms-4 vertical-transform">
                <div class="inner-transform text-center text-cont">
                    <?php the_field('home-offer-text'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="rel-offers">
    <div class="container">
        <div class="row">
            <?php
                $args = array('post_type' => 'events', 'posts_per_page' => 4);
                $loop = new WP_Query( $args );
            ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
            <div class="col-md-3 col-sm-6">
                <a href="<?php the_permalink(); ?>">
                    <div class="rel-box">
                        <div class="title vertical-transform">
                            <div class="inner-transform text-center">
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                        <div class="img-bg" style="background-image: url('<?= $feat_image;?>')"></div>
                    </div>
                </a>
            </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>