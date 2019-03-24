<?php 
/**
 * Template Name: Empresa Page
 *
 * Description: A custom page template for displaying a empresa page
 *
 * @package WordPress
 * @subpackage SF
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>
 <?php while(have_posts()): the_post(); ?>
    <?php $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big' ); ?>
<div>
  <img src="<?php echo $img[0];?>" alt="SF Automotiva"></img>
</div>
 <br><br>
 <div class="row">
    <div class="large-12 columns">
      <h2 class="tit_interno">___ A SF AUTOMOTIVA</h2>
    </div>
  </div>
<div class="row">

  <div class="large-9 columns txt-empresa line-horizontal">
    <div class="txt-empresa">
      <?php echo the_content(); ?>
       <h3 class="tit_interno ">___ Somos empresa de referência e buscando a excelência</h3>
        <?php if(is_active_sidebar( 'txt_sec_empresa' )):?>
           <div class="txt-empresa">
            <?php dynamic_sidebar('txt_sec_empresa');?>
            </div>
        <?php endif; ?>
      <br>
    <?php if(is_active_sidebar( 'txt_sec_empresa' )):?>
    <i class="fas fa-bullseye "></i>
    <span class="txt-valores">Missão</span>
    <div class="line-horizontal-valores valores"><?php dynamic_sidebar('txt_sec_empresa');?></div>

    <br><br>
    <?php endif; ?>
    <?php if(is_active_sidebar( 'txt_visao_empresa' )):?>
    <i class="fas fa-search-location"></i><span class="txt-valores">Visão</span>
    <div class="line-horizontal-valores valores"><?php dynamic_sidebar('txt_visao_empresa');?></div>

    <br><br>
    <?php endif; ?>
    <?php if(is_active_sidebar( 'txt_valores_empresa' )):?>
    <i class="fas fa-heart"></i><span class="txt-valores"> Valores</span>
    <div class="line-horizontal-valores valores">
     <?php dynamic_sidebar('txt_valores_empresa');?>
    </div>
    <?php endif; ?>

    </div>
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