<?php get_header(); ?>
 <?php while(have_posts()): the_post(); ?>
    <?php $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big' ); ?>

<div>
  <img src="<?php echo $img[0];?>" alt="SF Automotiva"></img>
</div>
 <br><br>
 <div class="row">
    <div class="large-12 columns">
      <h2 class="tit_interno">___<?php the_title();?></h2>
    </div>
  </div>
<div class="row">

  <div class="large-9 columns txt-empresa line-horizontal">
    <div class="txt-empresa"><?php echo the_content(); ?></div>
    <br>
  </div>
  <?php endwhile; ?>
<h3 class="tit_interno ">__Dicas e novidades</h3>
<div class="large-3 columns txt-not-int">
    <?php get_sidebar();?>
  </div>

</div>

<!-- FIM CORPO -->


<br>
<?php get_footer(); ?>