<div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <?php query_posts(array('orderby'=>'title','order'=>'DESC'));
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>
                        <div class="container_posts col-12 d-flex row align-items-center mx-auto">
                        <div class="titulo_posts col-12"><h1><?php the_title(); ?></h1></div>
                        <div class="imagem_posts col-4 col-md-3"><?php echo get_the_post_thumbnail(); ?></div>
                        <div class="resumo_posts col-8 col-md-9"><?php echo get_the_excerpt();  ?></div>
                        <div class="branco"></div>
                            <div class="infos_posts col-12 d-flex align-items-center justify-content-between p-3">
                                <p><?php echo get_the_modified_date(); ?></p> 
                                <a href="<?php echo get_category_link(get_cat_ID(get_the_category()[0]->name))?>"><p><?php echo get_the_category()[0]->name; ?></p></a>
                            </div>
                        <div class="leiamais"><a href="<?php echo get_permalink() ?>">Continue lendo...</a></div>
                        </div><?php
                    } 
                } ?>
            </div>
            <div class="col-2"></div>
        </div>
    </div>