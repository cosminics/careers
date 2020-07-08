<?php 
 get_header(); 
?>
<section class="page-content">
  <div class="container">
    <div class="row">    
      <?php get_sidebar(); ?>

      <div class="col-md-9">

        <?php while ( have_posts() ) : the_post(); ?>
            <article class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
      
             <h1 class="title"><?php the_title(); ?></h1>

              <?php if ( has_post_thumbnail() ) { 
                the_post_thumbnail('large');
              } ?>

              <?php the_content();?>
            </article>

        <?php endwhile; ?>
    
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
