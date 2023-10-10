<?php get_header(); ?>

<div class="singlePost">
    <div class="container">
        <h1 class="text-[5rem] font-extrabold my-8"><?php the_title(); ?></h1>
        <?php if( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    }
                    ?>

                    <ul class="flex gap-4 mb-4">
                        <li><?php echo get_field('post_author'); ?></li>
                        <li><?php the_category() ?></li>
                        <li><?php echo get_the_date() ?></li>
                    </ul>

                    <?php the_content(); ?>

    </div>
</div>




<?php get_footer(); ?>