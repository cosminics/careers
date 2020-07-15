<?php
/**
 * Initialize the custom Theme Options.
 *
 * @package OptionTree
 */
add_action( 'init', 'ics_theme_options' );
/**
 * Build the custom settings & update OptionTree.
 *
 * @since 2.0
 */
function ics_theme_options() {

  // OptionTree is not loaded yet, or this is not an admin request.
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() ) {
    return false;
  }
  /**
   * Get a copy of the saved settings array.
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  /**
   * Custom settings array that will eventually be
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array(
    'contextual_help' => array(
      'content' => array(
        array(
          'id'      => 'general_help',
          'title'   => __( 'General', 'icsth' ),
          'content' => '<p>' . __( 'Help content goes here!', 'icsth' ) . '</p>',
        ),
      ),
      'sidebar' => '<p>' . __( 'Sidebar content goes here!', 'icsth' ) . '</p>',
    ),

    'sections'        => array(
      array(
        'id'    => 'general',
        'title' => __( 'General', 'icsth' ),
      ),
      array(
        'id'    => 'footer',
        'title' => __( 'Footer', 'icsth' ),
      ),
    ),

    'settings'        => array(

        array(
          'label'       => 'Upload Logo',
          'id'          => 'logo_full',
          'type'        => 'upload',
          'desc'        => 'Upload your Logo here.',
          'std'         => '',
          'rows'        => '',
          'post_type'   => '',
          'taxonomy'    => '',
          'class'       => '',
          'section'     => 'general'
        ),
        array(
          'label'       => 'Upload Logo on Scroll',
          'id'          => 'logo_top',
          'type'        => 'upload',
          'desc'        => 'Logo displayed on page scroll.',
          'std'         => '',
          'rows'        => '',
          'post_type'   => '',
          'taxonomy'    => '',
          'class'       => '',
          'section'     => 'general'
        ),
        array(
          'label'       => 'Copyrights Text in Footer',
          'id'          => 'copyrights',
          'type'        => 'textarea-simple',
          'desc'        => 'Copyrights Text in Footer',
          'std'         => 'Copyrights text here...',
          'rows'        => '',
          'post_type'   => '',
          'taxonomy'    => '',
          'class'       => '',
          'section'     => 'footer'
          ),

    ),
  );

  // Allow settings to be filtered before saving.
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );

  // Settings are not the same update the DB.
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings );
  }

  // Lets OptionTree know the UI Builder is being overridden.
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
}
