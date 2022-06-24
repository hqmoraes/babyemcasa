<?php   $cat = get_cat_ID(single_cat_title("", false));

    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $query = array('orderby'=>'title','order'=>'DESC','cat'=>$cat,'posts_per_page'=>5,'paged'=>$paged);
    $exibir_posts = new WP_Query($query);
            if ( $exibir_posts->have_posts() ) {
                while ( $exibir_posts->have_posts() ) {
                    $exibir_posts->the_post(); ?>
                            <section class="container container_posts">
                                <div class="row align-items-center">
                                    <div class="col-4 col-md-3">
                                        <div class="imagem_posts my-2" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>)"></div>
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
                wp_reset_query();
            }
?>
        </div>
        <aside class="col-md-2 mt-4">
            <?php get_template_part('template-parts/navigation/barra_lateral'); ?>
        </aside>