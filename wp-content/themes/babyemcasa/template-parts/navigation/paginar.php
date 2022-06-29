<?php $id_categoria = get_the_category()[0]->name; 
?>

<div class="col-12 col-md-10 display-6 my-4">
    <?php
        the_posts_pagination( array(
        'mid_size'  => 5,
        'prev_text' => __( '-'. $id_categoria, 'textdomain' ),
        'next_text' => __( '+' . $id_categoria, 'textdomain' ),
    ) );?>
</div>
