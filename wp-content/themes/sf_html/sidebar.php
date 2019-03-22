  <!-- INICIO NOTICIAS -->
  <h3 class="tit_interno ">__Dicas e novidades</h3>
  <div class="large-3 columns txt-not-int">
<?php
$args = array('post_type' => 'novidades', 'orderby' => 'post_date',
                'order'=> 'DESC',
                'numberposts'     => 3 );
  query_posts( $args );
  while ( have_posts() ) : the_post();?>
  <i class="far fa-calendar-check"></i> <a href="#"><?php the_date();?><br>
    <strong><?php the_title();?></strong><br>
  <?php echo abreviaString(get_the_content(),200,'[...]'); ?></a>
  <hr>
 <?php endwhile; ?>

 </div>
<!-- FIM NOTICIAS -->