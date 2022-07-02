<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="EEsBaB8EZbyoZOXdg8Q_ReQN2JuhjCfiYj9w4bumg2o" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="container-fluid">
        <div class="row topo align-items-center">
            <div class="col-10 mx-auto">
                <div class="row align-items-center">
                    <div class="col-4 logoMontado">
                        <a href="/"><p class="logoTexto"><img src="https://babyemcasa.com/wp-content/uploads/2022/05/baby-svgrepo-com.svg" alt="Baby em casa"></p><p class="textoLogo"><?php echo get_bloginfo('name') ?></p></a>
                    </div>
                    <div class="col-4">
                    </div>
                    <div class="col-4 ctMenu">
                        <div class="row h-100 align-items-center position-relative">
                                <button onclick="menuOutrosSites()" class="d-flex align-items-center justify-content-end pe-3 menu"><img width="35" height="35" src="https://babyemcasa.com/wp-content/uploads/2022/06/menu-svgrepo-com-1.svg" alt="Menu"></button>
                        </div>
                        <div class="col-12 outrosSites px-4 pt-3 esconderMenu">
                            <h4><div>Temas com</div><div>baby em casa</div></h4>
                            <?php wp_nav_menu(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-auto blogTitulo d-flex align-items-center justify-content-center">
                <div class="col-6 tituloParts">
                    <h2 class="p-0">Blog</h2>
                    <p class="p-0"><?php echo get_bloginfo('description') ?></p>
                </div>
            </div>
        </div>
    </div>
</header>
<main class="container">




