<?php

/**
 * Template Name: Services
 */

?>

<?php get_header();?>

<div class="title">
    <div class="container">
    <h1 class="text-[5rem] font-extrabold my-8">My Services</h1>
    </div>
</div>

<section class="recent py-10">
        <div class="container">
            
            <div class="recentWrapper lg:grid lg:grid-cols-3 lg:gap-6">

            <?php 
                    $args = array(
                        'post_type' => 'servicesPost',
                        'posts_per_page' => 3,
                        
                    );
                    $newQuery = new WP_Query($args)
                    ?>

                    <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

                <div class="recentItem mb-8">
                    <h2 class=""><?php the_title() ?></h2>
                    <?php echo get_the_post_thumbnail();?>
                    <p class="mb-6"><?php the_excerpt();?></p>
                    <a class="inline-block bg-gray-600 py-2 px-6 rounded-full" href="<?php echo get_field('btn_link') ?>"><?php echo get_field('btn_label') ?></a>
                </div>

                <?php 
                    endwhile;
                    else :
                    echo "no available content yet";
                    endif;
                    wp_reset_postdata();
                    ?>

                    
            </div>
        </div>
    </section>

<?php get_footer();?>