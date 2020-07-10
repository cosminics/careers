<?php
/**
 * Initialize the custom Meta Boxes. 
 */

add_action( 'admin_init', 'ics_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */
function ics_meta_boxes() {
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
  $ics_meta_box = array(
    'id'          => 'ics_meta_box',
    'title'       => __( 'Slider section fields', 'icsth' ),
    'desc'        => '',
    'pages'       => array( 'page' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => 'Slider banner',
        'id'          => 'slider_banner',
        'type'        => 'upload',
        'desc'        => ''
      ),
      array(
          'label'       => 'Slider items',
          'id'          => 'slider_items',
          'type'        => 'list-item',
          'desc'        => '',
          'field_min_max_step'        => '0,3,1',
          'settings'    => array(
          array(
                'label'       => 'Author text',
                'id'          => 'slider_text',
                'type'        => 'textarea',
                'desc'        => '',
            ),
         array(
                'label'       => 'Author job',
                'id'          => 'slider_job',
                'type'        => 'text',
                'desc'        => '',
            )
        )
      ),
    )
  );

  $ics_meta_box_about = array(
    'id'          => 'ics_meta_box_about',
    'title'       => __( 'About us section fields', 'icsth' ),
    'desc'        => '',
    'pages'       => array( 'page' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label' => __( 'About us title', 'icsth' ),
        'id'    => 'about_title',
        'type'  => 'text',
        'desc'  => __( 'This is a demo Text field.', 'icsth' ),
      ),
//**********
      array(
        'label'       => __( 'Icon 1', 'icsth' ),
        'id'          => 'icon_tab01',
        'type'        => 'tab'
      ),
      array(
        'label' => __( 'Icon1 Data', 'icsth' ),
        'id'    => 'icon_data01',
        'type'  => 'textarea-simple',
        'desc'  => __( 'This is a demo Text field.', 'icsth' ),
      ),
      array(
        'label' => __( 'Icon1 text', 'icsth' ),
        'id'    => 'icon_text01',
        'type'  => 'textarea-simple',
        'desc'  => __( 'This is a demo Text field.', 'icsth' ),
      ),
//**********
      array(
        'label'       => __( 'Icon 2', 'icsth' ),
        'id'          => 'icon_tab02',
        'type'        => 'tab'
      ),
      array(
        'label' => __( 'Icon2 Data', 'icsth' ),
        'id'    => 'icon_data02',
        'type'  => 'textarea-simple',
        'desc'  => __( 'This is a demo Text field.', 'icsth' ),
      ),
      array(
        'label' => __( 'Icon2 text', 'icsth' ),
        'id'    => 'icon_text02',
        'type'  => 'textarea-simple',
        'desc'  => __( 'This is a demo Text field.', 'icsth' ),
      ),
//**********
      array(
        'label'       => __( 'Icon 3', 'icsth' ),
        'id'          => 'icon_tab03',
        'type'        => 'tab'
      ),
      array(
        'label' => __( 'Icon3 Data', 'icsth' ),
        'id'    => 'icon_data03',
        'type'  => 'textarea-simple',
        'desc'  => __( 'This is a demo Text field.', 'icsth' ),
      ),
      array(
        'label' => __( 'Icon3 text', 'icsth' ),
        'id'    => 'icon_text03',
        'type'  => 'textarea-simple',
        'desc'  => __( 'This is a demo Text field.', 'icsth' ),
      ),

    )
  );

  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
if ( function_exists( 'ot_register_meta_box' ) )

$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'];
$template_file = get_post_meta($post_id, '_wp_page_template', TRUE);

  if ($template_file == 'page-full-width.php') {
      ot_register_meta_box( $ics_meta_box );
      ot_register_meta_box( $ics_meta_box_about );
  }
  // if ( function_exists( 'ot_register_meta_box' ) )
    // ot_register_meta_box( $ics_meta_box );
}
