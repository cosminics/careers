<?php get_header(); ?>

      <div class="row main">

        <?php get_sidebar(); ?> 

        <div class="col-md-9 content">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="blog-post">
             <h1 class="title"> <?php the_title(); ?></h1>
        <?php $showcatimg = get_post_meta($post->ID,'showfimg',true);
            if ( $showcatimg == 'on') {
              //echo "Ascunsa"; 
            } else { ?>
              <?php if ( has_post_thumbnail() ) {?>
              <?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                 echo '<a class="fimage fancybox" href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
                 the_post_thumbnail();
                 echo '</a>';
               ?>

              <?php } ?>
        <?php } ?>
            <div class="entry-content">        
            <?php the_content();?>
            </div>
          </div>
      <?php endwhile; ?>

      <nav>
        <ul class="pager">
          <li><?php previous_posts_link('&laquo; previous page') ?></li>
          <li><?php next_posts_link('next page &raquo;','') ?></li>
        </ul>
      </nav>

       <?php else: ?>     
       <p>Sorry, no posts matched your criteria.</p>      
       <?php endif; ?>
    
        </div><!-- /.content -->

      </div><!-- /.row -->

<?php get_footer(); ?>
