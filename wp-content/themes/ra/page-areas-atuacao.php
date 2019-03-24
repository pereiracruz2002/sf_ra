<?php 
/**
 * Template Name: Atuação Page
 *
 * Description: A custom page template for displaying a atuação page
 *
 * @package WordPress
 * @subpackage SF
 * @since 1.0
 * @version 1.0
 */
get_header();?>
 <?php while(have_posts()): the_post(); ?>
    <?php $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big' ); ?>
<!-- INICIO BANNER -->
  <div class=""><img src="<?php echo $img[0];?>"></img></div>
  <!-- FIM BANNER -->

<div class="linha"></div>
<br><br>
<?php
$my_wp_query = new WP_Query();
$all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));
$servicos_children = get_page_children( $post->ID, $all_wp_pages );
?>
<!-- INICIO CORPO -->
<div class="row">

	<div class="large-12 columns">
		<ul>
			<?php foreach($servicos_children as $children):?>
				<li>
	        		<input type="checkbox" checked>
	        		<i></i>
	        		<h2><?php echo $children->post_title;?></h2>
	        		<p class="txt-atuacao">
						<?php echo $children->post_content;?>
	        		</p>
					<hr>
	        	</li>
			<?php endforeach;?>
	    </ul>
	</div>
</div>
<?php endwhile; ?>
<!-- FIM CORPO -->
<?php get_footer(); ?>