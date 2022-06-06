<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo get_bloginfo('name') ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-4 d-flex align-items-center h-100 ps-4">
                <p class="logoTexto"><img src="https://babyemcasa.com/wp-content/uploads/2022/05/baby-svgrepo-com.svg" alt="Baby em casa"></p><p class="textoLogo"><?php echo get_bloginfo('name') ?></p>
            </div>
            <div class="col-4 h-100">
            </div>
            <div class="col-4 h-100">
            <a class="h-100 dflex align-items-center justify-content-end pe-3 menu" href="/"><img src="https://babyemcasa.com/wp-content/uploads/2022/06/menu-svgrepo-com-1.svg" alt="Menu"></a>
            </div>
        </div>
    </div>
</header>    
<div class="mx-auto col-8 h-100 blogTitulo d-flex align-items-center justify-content-center">
                <div class="col-12 d-flex flex-wrap align-items-center text-center tituloParts">
                    <h4 class="col-12 p-0 m-0"><?php echo get_bloginfo('title') ?></h3>
                    <p class="col-12 p-0 m-0"><?php echo get_bloginfo('description') ?></p>
                </div>
</div>

