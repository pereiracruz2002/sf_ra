<?php get_header(); ?>
 <?php while(have_posts()): the_post(); ?>
    <?php $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big' ); ?>
<div class="linha"></div>
<br><br>

<!-- INICIO CORPO -->
<div class="row">
  <div class="small-12 medium-12 large-6 columns">
     <?php echo the_content(); ?>
  </div>
</div>
<?php endwhile; ?>
<!-- FIM CORPO -->
<?php get_footer(); ?>