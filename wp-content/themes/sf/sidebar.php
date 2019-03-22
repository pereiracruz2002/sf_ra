<?php $obj_id = get_queried_object_id();
$current_url = get_permalink( $obj_id );

$url_explode = explode("/", $current_url);
var_dump($url_explode);
$url = end($url_explode);
echo $url;
if($url !='contato'){
?>

<?php wp_reset_query();
  $args = array('post_type' => 'post', 'orderby' => 'post_date', 'cat' => 3,
                'order'=> 'DESC',
                'numberposts'     => 3 );
  query_posts( $args );
  while ( have_posts() ) : the_post(); 
  $data_post = get_the_date( 'd-m-Y' );

?>
 <i class="far fa-calendar-check"></i> <a href="<?php the_permalink();?>"><?php echo  $data_post; ?>
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
