<?php get_header(); ?>
 <div class=""><img src="http://localhost.sf.com.br/wp-content/uploads/2019/03/topo-empresa-1.png"></img></div>
 <br><br>
 
<div class="row">
  <div class="large-8 columns">
<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'small' ); ?>
      <?php 
      $data = get_the_date( 'd-M-Y' ); 
      $explode_data = explode('-', $data);
      ?>
      <div class="row">
        <div class="large-12 columns">
          <div class="row blog">
            <div class="large-6 columns">
              <div class="post-image">
                <img src="<?php echo $img[0];?>">
              </div>
            </div>
            <div class="large-6 columns">
              <header class="entry-header">
                <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                <div class="entry-meta post-details">
                  Publicado em <?php echo $explode_data[0]?> de <?php echo $explode_data[1]?> de <?php echo $explode_data[2]?> por
                </div>
              </header>
              <div class="entry-content entry-excerpt clearfix">
                <p><?php echo abreviaString(get_the_content(),120,'[...]'); ?></p>
                <a class="more-link" href="<?php the_permalink();?>">Continue Lendo</a>
              </div>
            </div>
            <footer class="large-12 columns entry-footer post-details">
              <div class="entry-categories"> <svg class="icon icon-category" aria-hidden="true" role="img"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://localhost.sf.com.br/wp-content/themes/donovan/assets/icons/genericons-neue.svg#category"></use> </svg><a href="http://localhost.sf.com.br/index.php/category/dicas-e-novidades/" rel="category tag">Dicas e Novidades</a>, <a href="http://localhost.sf.com.br/index.php/category/publicacoes/" rel="category tag">Publicações</a></div>
                <div class="entry-comments">
                  <svg class="icon icon-mail" aria-hidden="true" role="img"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://localhost.sf.com.br/wp-content/themes/donovan/assets/icons/genericons-neue.svg#mail"></use> </svg><a href="http://localhost.sf.com.br/index.php/2019/03/23/pequeno-mas-de-grande-importancia/#respond">Leave a comment</a>
                </div>
            </footer>
          </div>
        </div>
      </div>
  <?php endwhile;
else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
</div>

  <div class="large-4 columns txt-not-int">
    <?php get_sidebar();?>
  </div>
</div>

<?php get_footer(); ?>