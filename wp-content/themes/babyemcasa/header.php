<!DOCTYPE html>
<html lang="pt-BR">
<head>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6299333406589809"
     crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo get_bloginfo('name') ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="py-2">
    <div class="container">
        <div class="row topo">
            <div class="col-4 d-flex align-items-center ps-4 logoMontado">
                <a href="/"><p class="logoTexto"><img src="https://babyemcasa.com/wp-content/uploads/2022/05/baby-svgrepo-com.svg" alt="Baby em casa"></p><p class="textoLogo"><?php echo get_bloginfo('name') ?></p></a>
            </div>
            <div class="col-4">
            </div>
            <div class="col-4 ctMenu">
                <div class="row h-100 align-items-center position-relative">
                        <button onclick="menuOutrosSites()" class="d-flex align-items-center justify-content-end pe-3 menu"><img src="https://babyemcasa.com/wp-content/uploads/2022/06/menu-svgrepo-com-1.svg" alt="Menu"></button>
                </div>

            </div>
        </div>
    </div>
</header>    
<div class="mx-auto col-12 blogTitulo d-flex align-items-center justify-content-center">
                <div class="col-8 d-flex flex-wrap align-items-center text-center tituloParts">
                    <h4 class="col-12 p-0 m-0"><?php echo get_bloginfo('title') ?></h3>
                    <p class="col-12 p-0 m-0"><?php echo get_bloginfo('description') ?></p>
                </div>
</div>
<div class="col-12 outrosSites px-4 pt-3 esconder">
    <h4><div>Temas com</div><div>baby em casa</div></h4>
    <?php 
        $sites = get_sites(); ?>
        <ul class="p-1"> <?php
        foreach ($sites as $site){ ?>
            <li><a href="https://<?php echo $site->domain; ?>"><?php echo $site->domain; ?></a></li>
        <?php
        }
    ?>
    </ul>
</div>


