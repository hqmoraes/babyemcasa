<div class="row justify-content-center" style="margin-bottom: 1rem;">
    <div class="col-12 col-md-10 d-flex flex-wrap">
        <div class="col-12 col-md-10 pe-2">
            <section class="container_post col-12 p-4">
                <div class="row align-items-center mt-2">
                    <!-- <div class="col-6 col-md-3"><div style="margin-left: 1rem; box-shadow: inset 0px 0px 0px 4px white; border: 1px solid black; width: 100%; height: 15rem; margin: 0 auto 0 auto; background-image: url(<?php echo get_the_post_thumbnail_url(get_the_id(),'medium') ?>); background-size: cover; background-position: center top background-repeat:no-repeat"></div></div> -->
                    <div class="col-12"><img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(get_the_id(),'full') ?>" alt=""></div>
                        <div class="titulo_post col-6 col-md-9">
                            <h1><?php the_title(); ?></h1>
                    </div>
                </div>
                <div class="conteudo_post col-12" style="font-size: 1.5rem"><p><?php the_content();  ?><p></div>
                <div class="branco"></div>
                <div class="infos_post col-12 d-flex align-items-center justify-content-between p-3">
                    <p><?php echo get_the_modified_date(); ?></p> 
                    <a href="<?php echo get_category_link(get_cat_ID(get_the_category()[0]->name))?>"><p><?php echo get_the_category()[0]->name; ?></p></a>
                </div>
            </section>
            <?php comments_template('/comments.php');
            ?>
        </div>
        <div class="col-12 col-md-2">
            <?php get_template_part('template-parts/navigation/barra_lateral'); ?>
        </div>
    </div>
</div>