<?php get_header('page'); ?>
<?php if(have_posts()): the_post(); ?>
<section class="Header-Page">
    <h2><?php the_title(); ?></h2>
</section>

<!--+Content+-->
<section class="Content-Page">
    <div class="Box-Info-Page">
        <p><i class="icon ion-md-person"></i> <?php the_author(); ?></p>
        <p><i class="icon ion-md-folder-open"></i> <?php the_category('&gt;'); ?></p>
        <p><i class="icon ion-md-calendar"></i> <?php the_time('d/m/Y'); ?></p>
    </div>
    <div class="Box-Content-Page">
        <div class="Box-Imagen-Content">
            <?php the_post_thumbnail(); ?>
        </div>
        <?php the_content(); ?>
    </div>
</section>
<?php comments_template( ); ?>
<?php endif; ?>
<?php get_footer(); ?>