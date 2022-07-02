<div class="row mb-4 justify-content-center">
    <div class="col-12 d-flex flex-wrap">
        <div class="col-12 col-md-10">
            <?php   $cat = get_cat_ID(single_cat_title("", false));
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $query = array('orderby'=>'title','order'=>'DESC','cat'=>$cat,'posts_per_page'=>10,'paged'=>$paged);
                $exibir_posts = new WP_Query($query);
                        if ( $exibir_posts->have_posts() ) {
                            while ( $exibir_posts->have_posts() ) {
                                $exibir_posts->the_post(); ?>
                                <div class="container pb-2">
                                    <section class="row container-posts me-md-1">
                                        <div class="col-12 d-flex align-items-center flex-wrap">
                                            <img width="200" height="200" class="col-2 col-md-2 img-fluid" src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'thumbnail'); ?>" alt="<?php the_title() ?>">
                                            <div class="col-10 col-md-10 ps-3 resumo_posts">
                                                <h2><a href="<?php echo get_permalink();?>"><?php the_title(); ?></a></h2>
                                                <p class="d-none d-md-block"><?php echo get_the_excerpt(); ?></p>
                                            </div>
                                        </div>
                                    </section>
                                    <div class="row infos_posts align-items-center me-md-1">
                                        <a href="<?php echo get_category_link(get_cat_ID(get_the_category()[0]->name))?>"><p><?php echo get_the_category()[0]->name; ?></p></a>
                                    </div>
                                </div>    
                                    <?php
                            }
                            wp_reset_query();
                        }
                        ?>
        </div>
        <div class="col-12 col-md-2 mb-md-1"><?php get_template_part('template-parts/navigation/barra_lateral'); ?></div>
    </div>
</div>