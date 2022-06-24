<div class="container">
    <div class="row">
        <div class="col-12">
            <?php the_widget( 'WP_Widget_Archives', 'dropdown=1' ); 
            the_widget( 'WP_Widget_Calendar');
            the_widget( 'WP_Widget_Categories', 'dropdown=1&count=1' ); ?>
            <h2>Pesquisar no blog</h2>
            <?php the_widget( 'WP_Widget_Search'); ?> 
        </div>
    </div>
</div>