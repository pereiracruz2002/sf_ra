<?php 
/**
 * Functions and definitions
 *
 * @package WordPress
 * @subpackage SF
 * @since 1.0
 * @version 1.0
 */


/**
 * Removing WP Version for security reaons
 */
remove_action('wp_head','wp_generator');




add_theme_support( 'post-thumbnails' );

add_image_size( 'news', 302, 191, true );

add_theme_support( 'title-tag' );

if ( function_exists( 'register_nav_menu' ) ) {
	register_nav_menu( 'meu_menu', 'Este é meu primeiro menu' );
}

/**
 * Enqueue scripts and styles.
 */
function sf_load_scripts(){
	// Load our main stylesheet.
	wp_enqueue_style( 'sf-style', get_stylesheet_uri() );	
	// Custom and other stylesheet/script files
	wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/foundation.css', array(), null, 'all');
	wp_enqueue_style( 'menu', get_template_directory_uri() . '/css/menu.css', array(), null, 'all');
	wp_enqueue_style( 'top', get_template_directory_uri() . '/css/style-top.css', array(), null, 'all');
	wp_enqueue_style( 'banner', get_template_directory_uri() . '/css/banner.min.css', array(), null, 'all');
	wp_enqueue_style( 'accordion', get_template_directory_uri() . '/css/accordion-element.css', array(), null, 'all');

	wp_enqueue_script( 'jquery', get_template_directory_uri(). '/js/vendor/jquery.js', array('jquery'), null, false); 
	wp_enqueue_script( 'menu', get_template_directory_uri(). '/js/menu.js', array('jquery'), null, false);  
	wp_enqueue_script( 'modernizr', get_template_directory_uri(). '/js/vendor/modernizr.js', array('jquery'), null, false);
	wp_enqueue_script( 'main', get_template_directory_uri(). '/js/main.js', array(), null, false); 
	wp_enqueue_script( 'foundation', get_template_directory_uri(). '/js/foundation.min.js', array(), null, false);
	wp_enqueue_script( 'banner', get_template_directory_uri(). '/js/banner.min.js', array(), null, false); 
}
add_action( 'wp_enqueue_scripts', 'sf_load_scripts' );

add_action( 'widgets_init', 'parea_sidebars' );

function parea_sidebars(){
	register_sidebar(
		array(
			'name'			=> __( 'Header Mobile' , 'parea' ),
			'id'			=> 'header-mobile',
			'description'	=> __( 'Inclua informaçoes de telefone' , 'parea' ),
			'before_widget'	=> '',
			'after_widget'	=> '',
			'before_title'	=> '',
			'after_title'	=> '',			
		)
	);
	register_sidebar(
		array(
			'name'			=> __( 'Header Email' , 'parea' ),
			'id'			=> 'header-email',
			'description'	=> __( 'Inclua informaçoes de email' , 'parea' ),
			'before_widget'	=> '',
			'after_widget'	=> '',
			'before_title'	=> '',
			'after_title'	=> '',			
		)
	);
	register_sidebar(
		array(
			'name'			=> __( 'Header Adress' , 'parea' ),
			'id'			=> 'header-address',
			'description'	=> __( 'Inclua informaçoes de endereco' , 'parea' ),
			'before_widget'	=> '',
			'after_widget'	=> '',
			'before_title'	=> '',
			'after_title'	=> '',			
		)
	);

	register_sidebar(
		array(
			'name'			=> __( 'Conteudo Escritorio' , 'parea' ),
			'id'			=> 'content-home',
			'description'	=> __( 'Inclua texto que aparece na home na parte de escritorio' , 'parea' ),
			'before_widget'	=> '',
			'after_widget'	=> '',
			'before_title'	=> '',
			'after_title'	=> '',			
		)
	);

	

	register_sidebar(
		array(
			'name'			=> __( 'Imagem Home Meio' , 'parea' ),
			'id'			=> 'img-home-meio',
			'description'	=> __( 'Inclua a imagem que aparece na home depois de novidades' , 'parea' ),
			'before_widget'	=> '',
			'after_widget'	=> '',
			'before_title'	=> '',
			'after_title'	=> '',			
		)
	);

	register_sidebar(
		array(
			'name'			=> __( 'Imagem Escritorio' , 'parea' ),
			'id'			=> 'img-home',
			'description'	=> __( 'Inclua a imagem que aparece na home na parte de escritorio' , 'parea' ),
			'before_widget'	=> '',
			'after_widget'	=> '',
			'before_title'	=> '',
			'after_title'	=> '',			
		)
	);

	register_sidebar(
		array(
			'name'			=> __( 'Video Escritorio' , 'parea' ),
			'id'			=> 'video-escritorio',
			'description'	=> __( 'Inclua o video que aparece na parte de escritorio' , 'parea' ),
			'before_widget'	=> '',
			'after_widget'	=> '',
			'before_title'	=> '',
			'after_title'	=> '',			
		)
	);

	register_sidebar(
		array(
			'name'			=> __( 'Texto Secundario de Empresa' , 'parea' ),
			'id'			=> 'txt_sec_empresa',
			'description'	=> __( 'Inclua o texto da pagina de Empresa' , 'parea' ),
			'before_widget'	=> '',
			'after_widget'	=> '',
			'before_title'	=> '',
			'after_title'	=> '',			
		)
	);

	register_sidebar(
		array(
			'name'			=> __( 'Texto do Bloco Missao de Empresa' , 'parea' ),
			'id'			=> 'txt_missao_empresa',
			'description'	=> __( 'Inclua o texto da pagina de Empresa' , 'parea' ),
			'before_widget'	=> '',
			'after_widget'	=> '',
			'before_title'	=> '',
			'after_title'	=> '',			
		)
	);

	register_sidebar(
		array(
			'name'			=> __( 'Texto do Bloco Visao de Empresa' , 'parea' ),
			'id'			=> 'txt_visao_empresa',
			'description'	=> __( 'Inclua o texto da pagina de Empresa' , 'parea' ),
			'before_widget'	=> '',
			'after_widget'	=> '',
			'before_title'	=> '',
			'after_title'	=> '',			
		)
	);

	register_sidebar(
		array(
			'name'			=> __( 'Texto do Bloco Valores de Empresa' , 'parea' ),
			'id'			=> 'txt_valores_empresa',
			'description'	=> __( 'Inclua o texto da pagina de Empresa' , 'parea' ),
			'before_widget'	=> '',
			'after_widget'	=> '',
			'before_title'	=> '',
			'after_title'	=> '',			
		)
	);

		register_sidebar(
		array(
			'name'			=> __( 'Footer Mobile' , 'parea' ),
			'id'			=> 'footer-mobile',
			'description'	=> __( 'Inclua informaçoes de telefone do rodape' , 'parea' ),
			'before_widget'	=> '',
			'after_widget'	=> '',
			'before_title'	=> '',
			'after_title'	=> '',			
		)
	);
	register_sidebar(
		array(
			'name'			=> __( 'Footer Email' , 'parea' ),
			'id'			=> 'footer-email',
			'description'	=> __( 'Inclua informaçoes de email do rodape' , 'parea' ),
			'before_widget'	=> '',
			'after_widget'	=> '',
			'before_title'	=> '',
			'after_title'	=> '',			
		)
	);
	register_sidebar(
		array(
			'name'			=> __( 'Footer Adress' , 'parea' ),
			'id'			=> 'footer-address',
			'description'	=> __( 'Inclua informaçoes de endereco do rodape' , 'parea' ),
			'before_widget'	=> '',
			'after_widget'	=> '',
			'before_title'	=> '',
			'after_title'	=> '',			
		)
	);

	register_sidebar(
		array(
			'name'			=> __( 'Sidebar Auxiliar' , 'parea' ),
			'id'			=> 'sidebar-aux',
			'description'	=> __( 'Inclua informaçoes na lateral do contato e categoria' , 'parea' ),
			'before_widget' => '<div>',
		    'after_widget' => '</div>',
		    'before_title' => '<h3>',
		     'after_title' => '</h3>',			
		)
	);

	register_sidebar(
		array(
			'name'			=> __( 'Sidebar' , 'parea' ),
			'id'			=> 'sidebar',
			'description'	=> __( 'Inclua informaçoes na lateral do blog' , 'parea' ),
			'before_widget' => '<div class="sidebar-bloco">',
		    'after_widget' => '</div>',
		    'before_title' => '<h2 class="entry-title">',
		     'after_title' => '</h2>',			
		)
	);								
}

add_action( 'init', 'create_post_type_banners' );
function create_post_type_banners() {
    register_post_type( 'banners',
        array(
            'labels' => array(
                'name' => __( 'Banners' ),
                'singular_name' => __( 'Banner' )
            ),
            'public' => true,
            'supports' => array('title','editor','thumbnail')
        )
    );
}

add_filter('show_admin_bar', '__return_false');

function abreviaString($texto, $limite=100, $tres_p = '...'){
  $totalCaracteres = 0;
  $vetorPalavras = explode(" ",$texto);
  if(strlen($texto) <= $limite){
    $tres_p = "";
    $novoTexto = $texto;
  }else{
    $novoTexto = "";
    for($i = 0; $i <count($vetorPalavras); $i++){
      $totalCaracteres += strlen(" ".$vetorPalavras[$i]);
      if($totalCaracteres <= $limite)
        $novoTexto .= ' ' . $vetorPalavras[$i];
    }
  }
  return $novoTexto . $tres_p;
}