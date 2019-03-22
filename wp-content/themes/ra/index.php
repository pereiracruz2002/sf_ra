<?php get_header(); ?>

<!-- INICIO BANNER -->
  <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1200px; height: 500px; overflow: hidden; visibility: hidden;">
    <!-- Loading Screen -->
    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
      <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
      <div style="position:absolute;display:block;background:url('banner/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
    </div>

    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1200px; height: 500px; overflow: hidden;">
      
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
                  <a href="#"><img data-u="image" src="banner/banner1.jpg"alt="SF Automotiva"/></a>
                </div>
            <?php
            $i++;
            endwhile;
            // Reset Query
            wp_reset_query();
      ?>

      
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

<div class="linha"></div>
<br>
<!-- INICIO CORPO -->
<div class="row">
  <div class="large-6 columns">
    <h3 class="tit-index"> Escritório ___________ <br>
      <div class="txt-index">Seja bem vindo à R.A. Silva - Advocacia & Consultoria e tenha certeza que lhe prestaremos
      serviços jurídicos com alto padrão de qualidade e excelência.
      Seus profissionais estão focados em todos os assuntos da atualidade em suas áreas de atuação, com
      atendimento personalizado e trabalhos coordenados diretamente por seus profissionais.<br>
      <a href="#"><img src="img/bt-saiba.png"></img></a>
    </div>

  </div>
  <div class="large-6 columns hide-for-small">
  <img src="img/pic-index.png"></img>
  </div>
</div>
<!-- FIM CORPO -->
<br><br>
<!-- INICIO NOTICIAS -->
<div class="row">
  <div class="large-12 columns">
    <h3 class="tit-index"> Publicações ___________ <br>
  </div>
</div>

<div class="fundo-cinza"><br>
<div class="row">
  <?php wp_reset_query();
  $args = array('post_type' => 'post', 'orderby' => 'post_date', 'cat' => 2,
                'order'=> 'DESC',
                'numberposts'     => 3 );
  query_posts( $args );
  while ( have_posts() ) : the_post(); ?>
  <?php $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big' ); ?>

  <div class="large-4 columns line-horizontal">
      <img src="<?php echo $img[0];?>"></img>
        <div class="data-not"><?php the_date() ?></div>
        <div class="tit-not-index"><?php the_title();?></div>
        <div class="txt-not-index"><?php echo abreviaString(get_the_content(),100,'[...]'); ?>
        <div class="leia"><a href="<?php the_permalink();?>">leia mais</a></div><br>
        </div>
<?php endwhile;?>
<?php
    wp_reset_query();
?>



    <!--<div class="large-4 columns line-horizontal">
      <img src="img/pic-noticia1.png"></img>
        <div class="data-not">14/02/2019</div>
        <div class="tit-not-index">Prazo de blindagem em recuperação judicial
      deve ser contado em dias corridos.</div>
        <div class="txt-not-index">Os 180 dias concedidos a empresas em recuperação
        judicial para suspender quaisquer ações e execuções.
        <div class="leia">leia mais</div><br>
        </div>
    </div>

    <div class="large-4 columns line-horizontal">
      <img src="img/pic-noticia1.png"></img>
      <div class="data-not">14/02/2019</div>
      <div class="tit-not-index">Prazo de blindagem em recuperação judicial
      deve ser contado em dias corridos.</div>
      <div class="txt-not-index">Os 180 dias concedidos a empresas em recuperação
      judicial para suspender quaisquer ações e execuções.
      <div class="leia">leia mais</div><br>
      </div>
    </div>

    <div class="large-4 columns"><img src="img/pic-noticia1.png"></img>
      <div class="data-not">14/02/2019</div>
      <div class="tit-not-index">Prazo de blindagem em recuperação judicial
      deve ser contado em dias corridos.</div>
      <div class="txt-not-index">Os 180 dias concedidos a empresas em recuperação
      judicial para suspender quaisquer ações e execuções.<br>
      <div class="leia">leia mais</div><br>
      </div>
    </div>
  </div> -->
</div>

<!-- FIIM NOTICIAS -->
<div class="row">
  <div class="large-12 columns bt-noticias"><img src="img/bt-noticias.png"></img></div>
</div>
<?php get_footer(); ?>

