<?php get_header(); ?>

      <div class="row main">

        <?php get_sidebar(); ?>

        <div class="col-md-9 content">

      <?php if ( have_posts() ) : ?>
        <div class="blog-header">
          <h1 class="title"><?php
          if ( is_day() ) :
          printf( __( 'Arhiva Zilnica: %s', 'icstheme' ), get_the_date() );
          elseif ( is_month() ) :
          printf( __( 'Arhiva  Lunara: %s', 'icstheme' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'icstheme' ) ) );
          elseif ( is_year() ) :
          printf( __( 'Arhiva Anuala: %s', 'icstheme' ), get_the_date( _x( 'Y', 'yearly archives date format', 'icstheme' ) ) );
          else :
          _e( 'Arhive', 'icstheme' );
          endif;
          ?>
          </h1><!-- .archive-header -->
          <p class="lead blog-description"></p>
        </div>

      <?php while ( have_posts() ) : the_post(); ?>

      <div id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post' ); ?> >
            <h2 class="title">
              <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink() ?>" rel="bookmark">
                    <?php the_title(); ?>
                  </a>
            </h2>
             <?php
             if ( has_post_thumbnail() ) {?>
          <a class="fimage" title="<?php the_title_attribute(); ?>" href="<?php the_permalink() ?>" rel="bookmark">
            <?php the_post_thumbnail(); ?>
          </a>
                <?php } ?>
        <p class="excerpt">
          <?php the_excerpt();?>
        </p>
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

      </div><!-- /.row main-->

<?php get_footer(); ?>
