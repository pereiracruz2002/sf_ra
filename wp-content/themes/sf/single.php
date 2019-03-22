<?php get_header(); ?>
 <div class="row">
    <div class="large-12 columns">
      <h2 class="tit_interno">___ A SF AUTOMOTIVA</h2>
    </div>
  </div>

<div class="row">

  <div class="large-9 columns txt-empresa line-horizontal">
    <h3 class="tit_interno "><?php echo the_title();?></h3>
    <div class="txt-empresa"><?php the_content(); ?></div>
<br>

</div>

<?php get_sidebar();?>

</div>

<!-- FIM CORPO -->


<br>
<?php get_footer(); ?>