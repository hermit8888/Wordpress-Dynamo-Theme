<?php
  // Theme Support
  function dynamo_theme_support() {
    // Featured Image Support
    add_theme_support('post-thumbnails');
    // add_image_size('post-thumb', 716, 449);

    // Nav Menu
    register_nav_menus( array(
      'primary'      =>      __('Primary Menu')
    ));
  }
  add_action('after_setup_theme', 'dynamo_theme_support');

  // Widget Locations
  function dynamo_init_widgets($id) {
    register_sidebar(array(
      'name'     =>    'Sidebar',
      'id'       =>    'sidebar',
      'before_widget'   =>    '<div class="sidebar-widget">',
      'after_widget'    =>    '</div>',
      'before_title'    =>    '<h3>',
      'after_title'     =>    '</h3>'
    ));
  }

  add_action('widgets_init', 'dynamo_init_widgets');

  // Add Customizer Fumctionality
  require get_template_directory() . '/inc/customizer.php';
?>
