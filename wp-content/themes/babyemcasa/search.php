<?php get_header(); ?>
<?php get_template_part('template-parts/navigation/nav_superior'); ?>
<h1 class="search-title">
<?php echo $wp_query->found_posts; ?> <?php _e( 'resultados para', 'locale' ); ?>: "<?php the_search_query(); ?>"
</h1>
<?php 
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); ?>
                    <section class="container container-posts mb-2">
                        <div class="row align-items-center">
                            <div class="col-4 col-md-3">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>" alt="<?php the_title();?>">
                            </div>
                            <div class="titulo_posts col-8 col-md-9"><h1><?php the_title(); ?></h1></div>
                        </div>
                        <div class="resumo_posts col-12"><p style="font-size:1.5rem"><?php echo get_the_excerpt();  ?></p></div>
                        <div class="branco"></div>
                        <div class="infos_posts col-12 d-flex align-items-center justify-content-between p-3">
                            <p><?php echo get_the_modified_date(); ?></p> 
                            <a href="<?php echo get_category_link(get_cat_ID(get_the_category()[0]->name))?>"><p><?php echo get_the_category()[0]->name; ?></p></a>
                        </div>
                    </section>
                <?php
        }
        wp_reset_postdata();
    }
?>
<?php get_template_part('template-parts/navigation/paginar'); ?>
<?php get_footer(); ?>
