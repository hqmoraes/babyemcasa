<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-12"></div>
        <div class="col-12">
        <?php query_posts(array('orderby'=>'title','order'=>'DESC'));
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            ?>
            <div class="container_posts col-12 d-flex row align-items-center mx-auto">
                <div class="titulo_posts col-12">
                    <a href="<?php echo get_post_permalink()?>"><h1><?php the_title(); ?></h1></a>
                </div>
            </div>
        <?php }
        wp_reset_postdata();
    } ?>
    </div>
</div>


<?php
get_footer();
?>