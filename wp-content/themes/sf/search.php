<?php get_header(); ?>
<div class="row">
  <div class="large-12 columns">
    <h1 class="tit-index">Busca por <?php echo get_search_query(); ?></h1>
  </div>
</div>
<!-- FIM CORPO -->

<!-- INICIO DICAS -->

<div class="row">
   <div class="large-9 columns txt-empresa line-horizontal">
      <?php while(have_posts()): the_post(); ?>
          <?php $banner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big' ); ?>
          <div class="row">
          <div class="large-2 columns">
          <?php
          $data = get_the_date( 'd-M' ); 
          $explode_data = explode('-', $data);

          ?>
          <div class="row">
            <div class="large-12 columns data-dia"><?php echo $explode_data[0];?></div>
            <div class="large-12 columns data-mes"><?php echo $explode_data[1];?></div>  
          </div>
          </div>
          <div class="large-10 columns">
          <h3><a class="tit-dica" href="<?php the_permalink();?>"><?php the_title();?></a></h3>
          <div class="txt_equipe"><?php the_excerpt();?>
          </div>
          </div>
          </div>

<br>
      <?php endwhile;?>
    </div>

  <div class="large-3 columns txt-not-int">
    <?php get_sidebar();?>
  </div>
</div>

<!-- FIM DICAS-->
<br><br>
<br><br>
<?php get_footer(); ?>