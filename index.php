<?php get_header(); ?>
<main>
<?php
    if( have_posts() ) {
        while( have_posts() ) {?>
            <article class="artigo"><?php the_post();?>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </article>
<?php       }}?>

  
</main>
<?php get_footer(); ?>