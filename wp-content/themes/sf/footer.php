<!--INICIO RODAPE-->
<hr>
 <div class="row">
    <?php if(is_active_sidebar( 'footer-mobile' )):?>
    <div class="large-3 columns txt-rodape"><i class="fas fa-phone-square fa-2x"></i>
      <br><?php dynamic_sidebar('footer-mobile');?></div>
    <?php endif;?>
    <?php if(is_active_sidebar( 'footer-address' )):?>
    <div class="large-3 columns txt-rodape"><i class="fas fa-map-marker-alt fa-2x"></i><br>
      <?php dynamic_sidebar('footer-address');?></div>
     <?php endif;?>
     <?php if(is_active_sidebar( 'footer-funcionamento' )):?>
    <div class="large-3 columns txt-rodape"><i class="far fa-clock fa-2x"></i><br>
     <?php dynamic_sidebar('footer-funcionamento');?></div>
    <?php endif;?>
    <div class="large-3 columns txt-rodape"><i class="fab fa-facebook-square fa-2x"></i><br>sfmecanicaautomotiva</div>
  </div>

<hr>


<div class="row">
  <div class="large-12 columns txt-rodape">SF Consultoria Automotiva - Todos os direitos reservados.
    <br><img src="<?php echo get_template_directory_uri(); ?>/img/logo_aizu.png" alt="SF Automotiva"></div>

</div>
<br><br>
  <!--FIM RODAPE-->

  <a href="#0" class="cd-top js-cd-top">Top</a>
    <?php wp_footer(); ?>
    <script>jQuery(document).foundation();</script>
    <script> jssor_1_slider_init(); </script>

  </body>
</html>