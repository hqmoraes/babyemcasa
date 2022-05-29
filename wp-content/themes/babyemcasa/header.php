<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo('name') ?></title>
    <?php
        wp_head();
    ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="container">
        <div class="row">
        <div class="col-4">
            <php><?php echo get_bloginfo('name') ?></php>            
        </div>
        <div class="col-4">
            
        </div>
        <div class="col-4">
        
        </div>
        </div>
    </div>
</header>    
