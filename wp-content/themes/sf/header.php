<?php 

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package WordPress
 * @subpackage SF
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	 <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <link rel="stylesheet" href="css/ie.css">
    <![endif]-->
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
	<div class="row">
		<div class="large-3 columns logo-face linha-vertical"><i class="fab fa-facebook-f"></i></div>

		<?php if(is_active_sidebar( 'header-address' )): ?> 
			<div class="large-3 columns topo"><i class="fas fa-map-marker-alt"></i>
				<?php dynamic_sidebar('header-address');?>
			</div>
		<?php endif; ?>

		<?php if(is_active_sidebar( 'header-email' )): ?> 
			<div class="large-3 columns topo"><i class="fas fa-envelope"></i>
				<?php dynamic_sidebar('header-email');?>
			</div>
		<?php endif; ?>

	    <?php if(is_active_sidebar( 'header-mobile' )):?>
	    	<div class="large-3 columns topo"><i class="fas fa-mobile-alt"></i>
				<?php dynamic_sidebar('header-mobile');?>
			</div>
		<?php endif; ?>
	</div>
  	<hr>

	<div class="row">
		<div class="large-4 columns logo"><a href="<?php site_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="SF Automotiva"></img></a></div>
		<div class="large-3 columns txt-news">Fique por dentro das novidades!</div>
		<div class="large-5 columns campo-news">
	  	<!--<img src="<?php echo get_template_directory_uri(); ?>/img/pic_news.png" alt="SF Automotiva"></img>-->
	  	<?php echo nlsm_newsletter_form();?>
		</div>
	<!--<div class="large-2 columns bt-news"><img src="<?php echo get_template_directory_uri(); ?>/img/bt_news.png" alt="SF Automotiva"></img></div>-->
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
	
    		</div>
   <!--  <div class="large-3 columns">
         <?php get_search_form(); ?>

    </div> -->
  	</div>
  	<div style="display:none;" id="div-search" class="row">
		<div class="large-12 columns">
			<?php get_search_form(); ?>
		</div>
  	</div>
</div>
<!-- FIM MENU -->
