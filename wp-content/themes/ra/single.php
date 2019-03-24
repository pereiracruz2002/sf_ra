<?php get_header(); ?>
 <div class="row">
    <div class="large-12 columns">
      <h2 class="tit_interno">Publicações</h2>
    </div>
  </div>

<div class="row">

  <div class="large-9 columns txt-empresa line-horizontal">
  	<?php while(have_posts()): the_post(); ?>
  	<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big' ); ?>
    <h3 class="tit_interno "><?php echo the_title();?></h3>
    <div class="txt-empresa"> <img style="float:left;margin-right:10px;" src="<?php echo $img[0];?>" alt="<?php echo the_title();?>"></img> <?php echo the_content(); ?></div>
	<?php endwhile; ?>
<br>

</div>

<div class="large-3 columns txt-not-int">
    <?php get_sidebar();?>
  </div>

</div>

<!-- FIM CORPO -->


<br>
<?php get_footer(); ?>