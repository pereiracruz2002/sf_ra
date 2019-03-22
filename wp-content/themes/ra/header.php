<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="pt-br" > <![endif]-->
<html class="no-js" <?php language_attributes(); ?> >
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
   
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <title>R.A. Silva - Advocacia & Consultoria</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.css" />


    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
     <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    
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

<!-- INICIO MENU -->


<div class="fundo-menu">
    <div class="row">
      <div class="large-12 columns topo-menu">
      <i class="fas fa-mobile-alt"></i>  (11) 3794-2016 | 97787-6106 /
      <i class="far fa-envelope"></i>  juridico@rasilva-advogados.com.br
    </div>
    </div>
</div>

<div class="brand">
  <a href="index.php"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></img></a>
</div>

<div class="themis hide-for-small"><a href="https://suporte.aurum.com.br/hc/pt-br" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logocliente.png"></img></a></div>

<section class="navigation">
  <div class="nav-container">
    <nav>
      <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
     <!--  <ul class="nav-list">
        <li>
          <a class="active">Home</a>
        </li>

        <li>
          <a href="escritorio.php">Escritório</a>
        </li>
        <li>
          <a href="servicos.php">Serviços</a>
        </li>
        <li>
          <a href="area-atuacao.php">Áreas de Atuação</a>
        </li>
        <li>
          <a href="advogados.php">Advogados</a>
        </li>
        <li>
          <a href="new.php">Publicações</a>
        </li>
        <li>
          <a href="fale-conosco.php">Fale Conosco</a>
        </li>
      </ul> -->
      <?php
      wp_nav_menu( array(
        'menu' => 'meu_menu',
        'theme_location' => 'meu_menu',
        'container' => '',
        'container_class' => 'classe_do_container',
        'container_id' => '',
        'menu_class' => 'nav-list',
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
    </nav>
  </div>
</section>
<!-- FIM MENU -->