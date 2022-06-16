<div class="container principal">
    <div class="row mb-4">
            <div class="col-12 mt-4">
                <?php query_posts(array('orderby'=>'title','order'=>'DESC'));
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>
                        <div class="col-12 d-flex py-1">
                            <div class="col-12 pe-2">
                                <div class="container_posts col-12 d-flex row align-items-center mx-auto">
                                    <div class="titulo_posts col-12"><h1><?php the_title(); ?></h1></div>
                                    <div class="imagem_posts col-4 col-md-3"><?php the_post_thumbnail($size = '225w', $attr = ''); ?></div>
<!--                                    <div class="imagem_posts col-4 col-md-3" style="width:10rem; height: 12rem; background-size: cover; background-position: center top; background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div> -->
                                    <div class="resumo_posts col-8 col-md-9"><p style="font-size:1.5rem"><?php echo get_the_excerpt();  ?></p></div>
                                    <div class="branco"></div>
                                    <div class="infos_posts col-12 d-flex align-items-center justify-content-between p-3">
                                        <p><?php echo get_the_modified_date(); ?></p> 
                                        <a href="<?php echo get_category_link(get_cat_ID(get_the_category()[0]->name))?>"><p><?php echo get_the_category()[0]->name; ?></p></a>
                                    </div>
                                </div>
                            </div>                                
                        </div>       
                            <?php
                                } 
                            } ?>
            </div>
    </div>
</div>