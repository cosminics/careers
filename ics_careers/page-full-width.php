<?php 
/*Template name: Page Full Width */
 get_header(); 
?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="page-content-full section_slider">
  <div class="container">
    <div class="row careers_row">
      <div class="col-md-6 col-sm-12 col-xs-12">
          <img src="<?php bloginfo('template_url'); ?>/images/header-image.png" class="img-responsive" alt="Careers banner image">
      </div>

      <div class="col-md-6 col-sm-12 col-xs-12">
          <h1 class="title"><?php the_title(); ?></h1>
          <?php the_content();?>
      </div>
    </div>
  </div>
</section>

<section class="page-content-full section_about">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <h2>About us</h2>
      </div>
    </div>

    <div class="row section_about_row">
      <div class="col-md-4">
        <div class="livicon-evo" data-options="name: users.svg; size: 240px; style: original; repeat: loop; autoPlay: true;tryToSharpen: true"></div>
        <h3>The team consists of 20 experts</h3>
      </div>
      <div class="col-md-4">
        <div class="livicon-evo" data-options="name: bar-chart.svg; size: 240px; style: original; repeat: loop; autoPlay: true;tryToSharpen: true"></div>
        <h3>We are on the market for 10 years</h3>
      </div>
      <div class="col-md-4">
        <div class="livicon-evo" data-options="name: like.svg; size: 240px; style: original;repeat: loop; autoPlay: true; tryToSharpen: true"></div>
        <h3>We also need you in the team</h3>
      </div>

      <article class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
        <?php //the_content();?>
      </article>
    
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>

<?php get_footer(); ?>
