<?php
/* Template Name: Evenets page */
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
<?php endwhile; ?>

<section class="events-list">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <div class="box-events">
                    <div class="row">

                        <?php
                        $args = array('post_type' => 'events', 'posts_per_page' => -1);
                        $loop = new WP_Query( $args );
                        ?>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                            <div class="col-sm-6">
                                <div class="rel-box">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    <div class="row">
                                        <div class="col-xs-6"><img src="<?= $feat_image;?>" class="img-responsive" /></div>
                                        <div class="col-xs-6"><p><?php the_excerpt(); ?></p></div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; wp_reset_query(); ?>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>