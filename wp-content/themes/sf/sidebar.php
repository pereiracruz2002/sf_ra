<?php $obj_id = get_queried_object_id();
$current_url = get_permalink( $obj_id );

$url_explode = explode("/", $current_url);
$url = end($url_explode);


if($current_url !='http://www.aizuconsultoria.com.br/sf_wordpress/contato/'){
?>

<?php wp_reset_query();
  $args = array('post_type' => 'post', 'orderby' => 'post_date', 'cat' => 3,
                'order'=> 'DESC',
                'numberposts'     => 3 );
  query_posts( $args );
  while ( have_posts() ) : the_post(); 
  $data_post = get_the_date( 'd-m-Y' );

?>
 <i class="far fa-calendar-check"></i> <a href="<?php the_permalink();?>"><?php echo  $data_post; ?><br />
    <strong><?php the_title();?></strong>
  <?php echo abreviaString(get_the_content(),150,'[...]'); ?></a>
  <hr>
<?php endwhile;?>
<?php wp_reset_query();?>



<?php 
}else{
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header-sidebar') ) : 
 
endif; 
}
?>
