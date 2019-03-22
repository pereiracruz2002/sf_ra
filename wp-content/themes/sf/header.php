<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="pt-br" > <![endif]-->
<html class="no-js" <?php language_attributes(); ?> >
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <!-- SEO Ultimate (http://www.aizuconsultoria.com) -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="canonical" href="http://www.sfautomotiva.com.br" />
      <meta name="description" content="Completo Serviço de Manutenção, peças e pneus. Para Veículos Nacionais e Importados, Utilitários e toda linha Diesel, fornecemos serviço completo de manutenção, peças e pneus.
      Com uma equipe experiente e qualificada, e com equipamentos de última geração para proporcionar o que há de melhor e mais moderno aos seus clientes." />
      <meta name="keywords" content="Manutenção em injeção eletrônica, Limpeza de bicos, Freios, Motor, Sistema de Arefecimento,
      Ar condicionado, Câmbio, Todo sistema de suspensão, Todo sistema elétrico, Troca de óleo, Pneus nacionais e importados, Alinhamento, Balanceamento" />
      <meta property="og:type" content="article" />
      <meta property="og:title" content="SF Consultoria Automotiva" />
      <meta property="og:description" content="Completo Serviço de Manutenção, para Veículos Nacionais e Importados,
      Utilitários e toda linha Diesel, fornecemos serviço completo de manutenção, peças e pneus." />
      <meta property="og:url" content="http://www.sfautomotiva.com.br" />
      <meta property="og:site_name" content="SF Consultoria Automotiva" />
      <meta name="twitter:card" content="summary" />
    <!-- /SEO Ultimate -->

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <title>SF Consultoria Automotiva</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/menu.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/cd-top.css"> <!-- Resource style -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <link rel="stylesheet" href="css/ie.css">
    <![endif]-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/menu.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/banner.min.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/menu.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr.js"></script>

  </head>
  <body>

    <div class="row">
      <div class="large-3 columns topo"><i class="fas fa-mobile-alt"></i> +55 16 3368-3957 | 3368-4431</div>
      <div class="large-3 columns topo"><i class="fas fa-envelope"></i> mktevendas@sfautomotiva.com.br</div>
      <div class="large-3 columns topo"><i class="fas fa-map-marker-alt"></i> Rua Carlos Fleischmann 326</div>
      <div class="large-3 columns logo-face linha-vertical"><i class="fab fa-facebook-f"></i></div>
    </div>

  <hr>

  <div class="row">
    <div class="large-4 columns logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="SF Automotiva"></img></div>
    <div class="large-3 columns txt-news">Fique por dentro das novidades!</div>
    <div class="large-3 columns campo-news"><img src="<?php echo get_template_directory_uri(); ?>/img/pic_news.png" alt="SF Automotiva"></img></div>
    <div class="large-2 columns bt-news"><img src="<?php echo get_template_directory_uri(); ?>/img/bt_news.png" alt="SF Automotiva"></img></div>
  </div>

<!-- INICIO MENU -->

<div class="fundo-menu">
  <div class="row">
    <div class="large-12 columns">
      <?php
      wp_nav_menu( array(
        'menu' => 'meu_menu',
        'theme_location' => 'meu_menu',
        'container' => 'div',
        'container_class' => 'classe_do_container',
        'container_id' => 'cssmenu',
        'menu_class' => 'classe_do_menu',
        'echo' => true,
        'menu_id' => 'cssmenu',
        'before' => '',
        'after' =>'',
        'link_before' => '',
        'link_after' => ' ',
        'depth' => 0,
        'walker' => '',
        ) );
        ?>

      <!-- <div id='cssmenu'>
        <ul>
           <li><a href='#'>Home</a></li>
           <li><a href='empresa.php'>Empresa</a></li>
           <li><a href='#'>Nossos serviços</a></li>
           <li><a href='#'>Dicas e novidades</a></li>
           <li><a href='#'>Contato</a></li>
            <li class='busca'><img src="<?php echo get_template_directory_uri(); ?>/img/busca.png" alt="SF Automotiva"></li>
        </ul>
      </div> -->
    </div>
  </div>
</div>
<!-- FIM MENU -->