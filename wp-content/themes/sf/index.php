<?php get_header(); ?>

<!-- INICIO BANNER -->
  <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
    <!-- Loading Screen -->
    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
      <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
      <div style="position:absolute;display:block;background:url('<?php echo get_template_directory_uri(); ?>/banner/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
    </div>

    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
        
      <?php
        global $wp_query;
        $args2 = array( 'post_type' => 'banners','orderby' => 'post_date',
                          'order'=> 'DESC',
                          'numberposts'     => 8 );
        query_posts( $args2 );
        $i = 0;
         while ( have_posts() ) : the_post();
         $banner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big' ); ?>
                  
                  <div data-p="225.00" style="display: none;">
                    <a href="#"><img data-u="image" src="<?php echo $banner[0];?>" alt="SF Automotiva"/></a>
                  </div>
            <?php
            $i++;
            endwhile;
            // Reset Query
            wp_reset_query();
      ?>


      <!-- <div data-p="225.00" style="display: none;">
        <a href="#"><img data-u="image" src="<?php echo get_template_directory_uri(); ?>/banner/banner1.jpg"alt="SF Automotiva"/></a>
      </div>

      <div data-p="225.00" style="display: none;">
        <a href="#"><img data-u="image" src="<?php echo get_template_directory_uri(); ?>/banner/banner2.jpg" alt="SF Automotiva"/></a>
      </div>


      <div data-p="225.00" style="display: none;">
        <a href="#"><img data-u="image" src="<?php echo get_template_directory_uri(); ?>/banner/banner3.jpg" alt="SF Automotiva"/></a>
      </div> -->

      <div data-u="caption" data-t="5" style="position: absolute; top: 120px; left: 650px; width: 470px; height: 220px;">
        <div style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px; overflow: hidden;"></div>
      </div>
    </div>
    <!-- Bullet Navigator -->
    <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
      <!-- bullet navigator item prototype -->
      <div data-u="prototype" style="width:16px;height:16px;"></div>
    </div>
    <!-- Arrow Navigator -->
    <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
    <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
  </div>
  <!-- FIM BANNER -->
  <br><br>

  <!--INICIO CORPO -->
  <div class="row">
    <div class="large-6 columns"><img src="<?php echo get_template_directory_uri(); ?>/img/foto-empresa.png" alt="SF Automotiva"></img></div>
    <div class="large-6 columns">
      <h1 class="tit-index">Nossa estrutura</h1>
      <div class="text-empresa-index">SF Consultoria Automotiva esta há mais de 40 anos prestando serviços para São Carlos e região,
        atualmente conta com um espaço físico de mais de 1000m² divididos em três galpões para melhor atender seus
        clientes.
        A cada dia estamos sempre nos aprimorando e oferecendo o que tem de melhor no mercado para proporcionar mais
        tranqüilidade e comodidade a todos. Sempre seguindo tendências e novas tecnologias, a SF mantem-se atualizada
        e sempre investindo em mão-de-obra capacitada.
      </div>
    </div>
  </div>

<div class="row">
  <div class="large-12 columns">
    <h1 class="tit-index">Dicas e novidades</h1>
  </div>
</div>
<!-- FIM CORPO -->

<!-- INICIO DICAS -->

<div class="row">
  <?php wp_reset_query();
  $args = array('post_type' => 'novidades', 'orderby' => 'post_date',
                'order'=> 'DESC',
                'numberposts'     => 3 );
  query_posts( $args );
  while ( have_posts() ) : the_post(); ?>
  <?php $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big' ); ?>
  
  <div class="large-4 columns pic-dica1">
    <img src="<?php echo $img[0];?>" alt="SF Automotiva"></img>
    <div class="box-cinza">
      <div class="data-dica"><?php the_date() ?></div>
      <h4 class="tit-dica"> <?php the_title();?></h4>
      <div class="txt-dica"><?php echo abreviaString(get_the_content(),200,'[...]'); ?></div>
        <div class="btn-dica"><a href="<?php the_permalink();?>">leia mais</a></div>
    </div>
  </div>
<?php endwhile;?>
<?php
    wp_reset_query();
?>

  <!-- <div class="large-4 columns pic-dica1"><img src="img/pic_dica1.png" alt="SF Automotiva"></img>
    <div class="box-cinza">
      <div class="data-dica">16.09.19</div>
      <h4 class="tit-dica"> Pequeno, mas de grande importância.</h4>
      <div class="txt-dica">As palhetas do limpador também merecem atenção estética, pois,
        se estiverem ressecadas ou danificadas, podem causar avarias em seu para-brisa,
        além de trepidação e ruídos desconfortáveis durante o trajeto.</div>
        <div class="btn-dica">leia mais</div>
    </div>
  </div>

  <div class="large-4 columns pic-dica1">
    <img src="img/pic_dica1.png" alt="SF Automotiva"></img>
    <div class="box-cinza">
      <div class="data-dica">16.09.19</div>
      <h4 class="tit-dica"> Pequeno, mas de grande importância.</h4>
      <div class="txt-dica">As palhetas do limpador também merecem atenção estética, pois,
        se estiverem ressecadas ou danificadas, podem causar avarias em seu para-brisa,
        além de trepidação e ruídos desconfortáveis durante o trajeto.</div>
        <div class="btn-dica">leia mais</div>
    </div>
  </div>

  <div class="large-4 columns pic-dica1"><img src="img/pic_dica1.png" alt="SF Automotiva"></img>
    <div class="box-cinza">
      <div class="data-dica">16.09.19</div>
      <h4 class="tit-dica"> Pequeno, mas de grande importância.</h4>
      <div class="txt-dica">As palhetas do limpador também merecem atenção estética, pois,
        se estiverem ressecadas ou danificadas, podem causar avarias em seu para-brisa,
        além de trepidação e ruídos desconfortáveis durante o trajeto.</div>
        <div class="btn-dica">leia mais</div>
    </div>
  </div> -->
</div>
<!-- FIM DICAS-->
<br><br>
<div class="row">
  <div class="bt"><img src="<?php echo get_template_directory_uri(); ?>/img/bt-mais.png" alt="SF Automotiva"></div>
</div>
<br><br>

  <img src="<?php echo get_template_directory_uri(); ?>/img/banner_meio.png"></img>
<?php get_footer(); ?>

