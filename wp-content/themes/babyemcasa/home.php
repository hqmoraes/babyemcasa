<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-12"></div>
        <div class="col-12">
        <?php 
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            ?>
            <div class="container_posts col-12 d-flex row align-items-center mx-auto">
                <div class="titulo_posts col-12">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="imagem_posts col-4 col-md-3"><?php echo get_the_post_thumbnail() ?></div>
                <div class="resumo_posts col-8 col-md-9"><?php echo substr(get_the_content(),0,200);  ?></div>
                <div class="leiamais"><a href="<?php echo get_permalink() ?>">Continue lendo...</a></div>
                <div class="branco"></div>
                <div class="infos_posts col-12 d-flex align-items-center justify-content-between p-3">
                    <p><?php echo get_the_modified_date(); ?></p> 
                    <p><?php echo get_the_category()[0]->name; ?></p>
                </div>
            </div><?php

        } 
    } 
    ?>
        </div>
        <div class="col-12"></div>
    </div>
</div>
<?php
get_footer();
?>
