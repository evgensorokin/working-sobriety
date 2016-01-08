<?php
/* Template Name: Events page */
get_header();
?>

<?php
// Start the loop.
while ( have_posts() ) : the_post();
?>
<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
<section class="main-big-image inner-title" <?php if(!empty($feat_image)) : ?>style="background-image:url('<?= $feat_image;?>')" <?php endif; ?>>
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

<section class="rel-offers">
    <div class="container">

        <div class="past-events">
            <h3>Past Events</h3>

            <div class="row">
                <?php
                $args = array('post_type' => 'events', 'posts_per_page' => 4,
                    'date_query' => array(
                        array(
                            'before'    => array(
                                'year'  => date("Y"),
                                'month' => date("m"),
                                'day'   => date("d"),
                            ),
                            'inclusive' => false,
                        ),
                    )
                );
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
                                    </div>
                                </div>
                                <div class="img-bg" style="background-image: url('<?= $feat_image;?>')"></div>
                            </div>
                        </a>
                    </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>