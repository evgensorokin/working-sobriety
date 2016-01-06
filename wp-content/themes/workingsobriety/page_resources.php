<?php
/* Template Name: Resources page */
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

    <section class="resources-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">


                    <?php
                    $args = array('post_type' => 'post', 'posts_per_page' => -1, 'category_name' => 'Addiction and Recovery Support Groups');
                    $loop = new WP_Query( $args );
                    if( $loop->have_posts() ) :
                    ?>
                    <div class="list-resources">
                        <span class="title">Addiction and Recovery Support Groups</span>
                        <ul>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?> <?php the_excerpt() ? ' - '. the_excerpt() : '' ?></a></li>
                        <?php endwhile; wp_reset_query(); ?>
                        </ul>
                    </div>
                    <?php endif; ?>

                </div>
                <div class="col-sm-6">

                    <?php
                    $args = array('post_type' => 'post', 'posts_per_page' => -1, 'category_name' => 'Other Programs and Resources', 'orderby' => 'post_date', 'order' => 'ASC');
                    $loop = new WP_Query( $args );
                    if( $loop->have_posts() ) :
                        ?>
                        <div class="list-resources">
                            <span class="title">Other Programs and Resources</span>
                            <ul>
                                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            <?php
                                            if ( !empty( $post->post_excerpt ) ) :
                                                ' - ' . the_excerpt();
                                            endif;
                                            ?></li>
                                <?php endwhile; wp_reset_query(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>