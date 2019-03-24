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
<!-- INICIO BANNER -->
  <div class=""><img src="<?php echo $img[0];?>"></img></div>
  <!-- FIM BANNER -->

<div class="linha"></div>
<div class="fundo-cinza">
  <div class="row">
    <div class="large-5 columns"><br>
       <?php if(is_active_sidebar( 'video-escritorio' )):?>
      <div class="video"><?php dynamic_sidebar('video-escritorio');?></div>
      <?php endif; ?>
    </div>

    <div class="large-7 columns">
      <div class="txt-somos"> <?php echo the_content(); ?></div>
    </div>
     <?php if(is_active_sidebar( 'txt_sec_empresa' )):?>
        <div class="txt-somos">
        <?php dynamic_sidebar('txt_sec_empresa');?>
        </div>
    <?php endif; ?>
</div>
<?php endwhile; ?>
  <div class="row">
    <?php if(is_active_sidebar( 'txt_missao_empresa' )):?>
      <div class="large-4 columns fa-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-missao.png"></img><br>
        <div class="tit-valores"><strong>Missão</strong></div>
        <div class="txt-valores"><?php dynamic_sidebar('txt_missao_empresa');?></div>
      </div>
    <?php endif;?>
    <?php if(is_active_sidebar( 'txt_visao_empresa' )):?>
    <div class="large-4 column fa-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-visao.png"></img><br>
      <div class="tit-valores"><strong>Visão</strong></div>
      <div class="txt-valores"><?php dynamic_sidebar('txt_visao_empresa');?></div>
    </div>
    <?php endif;?>
    <?php if(is_active_sidebar( 'txt_valores_empresa' )):?>
    <div class="large-4 columns fa-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-valor.png"></img><br>
      <div class="tit-valores"><strong>Valores</strong></div>
      <div class="txt-valores"><?php dynamic_sidebar('txt_valores_empresa');?></div>
    </div>
    <?php endif;?>
</div>
<!-- FIM CORPO -->





<br>

<?php get_footer(); ?>