<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-12"></div>
        <div class="col-12">
            <div class="row mx-auto">
                <div class="container_post col-7 col-md-9">
                    <div class="titulo_post col-12">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="imagem_post col-12"><?php echo get_the_post_thumbnail() ?></div>
                    <div class="conteudo_post col-12"><?php echo get_the_content();  ?></div>
                    <div class="branco"></div>
                    <div class="infos_post col-12 d-flex align-items-center justify-content-between p-3">
                        <p><?php echo get_the_modified_date(); ?></p> 
                        <a href="<?php echo get_category_link(get_cat_ID(get_the_category()[0]->name))?>"><p><?php echo get_the_category()[0]->name; ?></p></a>
                    </div>
                </div>
                <div class=" col-5 col-md-3">
                    <div class="ads verticalAdsInterno"></div>
                </div>
            </div>
            <?php
    ?>
        </div>
        <div class="col-12"></div>
    </div>
</div>
<?php
get_footer();
?>
