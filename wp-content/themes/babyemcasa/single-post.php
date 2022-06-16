<?php get_header(); ?>
<div class="container">
    <div class="row mb-4">
        <div class="col-12"></div>
        <div class="col-12">
            <div class="row mx-auto">
                <div class="container_post col-12">
                    <div class="titulo_post col-12">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="col-12"><div style="width: 15rem; height: 15rem; margin: 0 auto 0 auto; background-image: url(<?php echo get_the_post_thumbnail_url(get_the_id(),'medium') ?>); background-size: cover"></div></div>
                    <div class="conteudo_post col-12" style="font-size: 1.5rem"><p><?php the_content();  ?><p></div>
                    <div class="branco"></div>
                    <div class="infos_post col-12 d-flex align-items-center justify-content-between p-3">
                        <p><?php echo get_the_modified_date(); ?></p> 
                        <a href="<?php echo get_category_link(get_cat_ID(get_the_category()[0]->name))?>"><p><?php echo get_the_category()[0]->name; ?></p></a>
                    </div>
                </div>
            </div>
            <?php
    ?>
        </div>
    </div>
</div>

<?php
get_footer();
?>
