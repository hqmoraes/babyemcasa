<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-12"></div>
        <div class="col-12">
            <div class="container_post col-12 d-flex row align-items-center mx-auto">
                <div class="titulo_post col-12">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="imagem_post col-12"><?php echo get_the_post_thumbnail() ?></div>
                <div class="resumo_post col-12"><?php echo get_the_content();  ?></div>
                <div class="branco"></div>
                <div class="infos_post col-12 d-flex align-items-center justify-content-between p-3">
                    <p><?php echo get_the_modified_date(); ?></p> 
                    <p><?php echo get_the_category()[0]->name; ?></p>
                </div>
            </div><?php
    ?>
        </div>
        <div class="col-12"></div>
    </div>
</div>
<?php
get_footer();
?>
