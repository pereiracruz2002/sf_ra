<?php
add_theme_support( 'post-thumbnails' );
if ( function_exists( 'register_nav_menu' ) ) {
register_nav_menu( 'meu_menu', 'Este é meu primeiro menu' );
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

add_action( 'init', 'create_post_type_novidades' );
function create_post_type_novidades() {
    register_post_type( 'novidades',
        array(
            'labels' => array(
                'name' => __( 'Novidades' ),
                'singular_name' => __( 'Novidade' )
            ),
            'public' => true,
            'supports' => array('title','editor','thumbnail')
        )
    );
}


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

?>