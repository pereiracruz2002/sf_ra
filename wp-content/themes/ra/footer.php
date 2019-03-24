<!-- INICIO RODAPE -->
<div class="fundo-rodape">
  <div class="row">
    <?php if(is_active_sidebar( 'footer-address' )):?>
      <div class="large-4 columns">
        <div class="tit-rodape">Endereço</div><hr>
          <div class="txt-rodape">
            <i class="fas fa-map-marker-alt"></i> <?php dynamic_sidebar('footer-address');?><br><br>
        </div>
      </div>
    <?php endif;?>

    <div class="large-4 columns">
      <div class="tit-rodape">+ Info</div><hr>
        <div class="txt-rodape">
          <?php if(is_active_sidebar( 'footer-email' )):?>
          <i class="far fa-envelope"></i> <?php dynamic_sidebar('footer-email');?><br>
          <?php endif;?>
          <?php if(is_active_sidebar( 'footer-mobile' )):?>
            <i class="fas fa-mobile-alt"></i> <?php dynamic_sidebar('footer-mobile');?>
          <?php endif;?>
      </div>
    </div>

    <div class="large-4 columns">
      <div class="tit-rodape">Newsletter</div><hr>
        <div class="txt-rodape">Receba novidades por e-mail.<br>cadastrar<br></div>
        <div class="midias">
          <i class="fab fa-facebook-square fa-2x"></i> |
          <i class="fab fa-instagram fa-2x"></i> |
          <i class="fab fa-twitter-square fa-2x"></i> |
          <i class="fab fa-linkedin fa-2x"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- FIM RODAPE -->

<div class="row">
  <div class="large-12 columns copy">
    R. A. SILVA ADVOCACIA & CONSULTORIA - Todos os direitos reservados<br>
    Desenvolvido por Aizu Consultoria Digital
  </div>
</div>


  <?php wp_footer(); ?>
  <script>$(document).foundation();</script>
  <script> jssor_1_slider_init(); </script>

  <!-- cd top-->
  <a href="#0" class="cd-top">Top</a>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="js/main.js"></script> <!-- Gem jQuery -->
  </body>
</html>