<?php 
/*Template name: Page Full Width */
 get_header(); 
?>
<?php while ( have_posts() ) : the_post(); ?>

<section class="page-content-full section_slider">
  <div class="container">
    <div class="row careers_row">
      
      <div class="col-md-6 col-sm-12 col-xs-12">
        <?php 
          if ( $slider_banner = get_post_meta($post->ID, 'slider_banner', true) ) {
            echo '<img class="img-responsive" src="'.$slider_banner.'" alt="Careers banner image">';
          }
        ?>
      </div>

      <div class="col-md-6 col-sm-12 col-xs-12">
          <h1 class="title"><?php the_title(); ?></h1>
          <div class="careers_slider">
            <?php if ( $slider_items = get_post_meta($post->ID, 'slider_items', true) ) {
              foreach( $slider_items as $slider_item ) {
                echo '<div class="test_item">';
                  echo '<p><em>'.$slider_item['slider_text'].'</em><p>';
                  echo '<p><strong>'.$slider_item['title'].'</strong> - ';
                  echo $slider_item['slider_job'];
                echo '</p></div>';
                }
              }
            ?>
          </div>
      </div>

    </div>
  </div>
</section>

<section class="page-content-full section_about">
  <div class="container">
    
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <?php 
            if ( $about_title = get_post_meta($post->ID, 'about_title', true) ) {
              echo '<h2>'.$about_title.'</h2>';
            }
         ?>
      </div>
    </div>

    <div class="row section_about_row">

      <div class="col-md-4">
        <?php 
            if ( $icon_data01 = get_post_meta($post->ID, 'icon_data01', true) ) {
              echo $icon_data01;
            }
            if ( $icon_text01 = get_post_meta($post->ID, 'icon_text01', true) ) {
              echo '<h3>'.$icon_text01.'</h3>';
            }
         ?>
      </div>

      <div class="col-md-4">
        <?php 
            if ( $icon_data02 = get_post_meta($post->ID, 'icon_data02', true) ) {
              echo $icon_data02;
            }
            if ( $icon_text02 = get_post_meta($post->ID, 'icon_text02', true) ) {
              echo '<h3>'.$icon_text02.'</h3>';
            }
         ?>
      </div>

      <div class="col-md-4">
        <?php 
            if ( $icon_data03 = get_post_meta($post->ID, 'icon_data03', true) ) {
              echo $icon_data03;
            }
            if ( $icon_text03 = get_post_meta($post->ID, 'icon_text03', true) ) {
              echo '<h3>'.$icon_text03.'</h3>';
            }
         ?>
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