<?php get_header(); ?>
    <div class="row">
        <nav class="col-12 col-md-10 mx-auto menuPrincipal"><?php wp_nav_menu(); ?></nav>
    </div>
    <div class="row mb-4 justify-content-center">
        <div class="col-12 col-md-8 mt-4 p-0 pe-2">
            <section class="container_post col-12 p-4">
                <div class="row align-items-center mt-2">
                    <div class="col-6 col-md-3"><div style="margin-left: 1rem; box-shadow: inset 0px 0px 0px 4px white; border: 1px solid black; width: 100%; height: 15rem; margin: 0 auto 0 auto; background-image: url(<?php echo get_the_post_thumbnail_url(get_the_id(),'medium') ?>); background-size: cover; background-position: center top background-repeat:no-repeat"></div></div>
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
        <?php get_template_part('template-parts/navigation/barra_lateral'); ?>
        <div class="categoryPLInterno ocultar">
                <?php query_posts(array('orderby'=>'title','order'=>'DESC'));
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post();
                        ?>
                        <div class="container_category col-12">
                            <div class="titulo_posts">
                            <div class="iconPosts"></div>    <a href="<?php echo get_post_permalink()?>"><h1><?php the_title(); ?></h1></a>
                            </div>
                        </div>
                    <?php }
                    wp_reset_postdata();
                } ?>
        </div>
        <div class="exibePosts apontarAcima"><button onclick="exibePosts()"></button></div>
    </div>

<?php

get_footer();
?>
