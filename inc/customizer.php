<?php
  function dynamo_customizer_register($wp_customize) {

    // Settings section
    $wp_customize->add_section('settings', array(
      'title'          =>    __('Theme Settings', 'dynamo'),
      'description'    =>    sprintf( __('Options for Dynamo theme', 'dynamo')),
      'priority'       =>    130,
    ));

    // Preset Settings
    $wp_customize->add_setting('preset', array(
      'default'    =>    _x('dark', 'dynamo'),
      'type'       =>    'theme_mod'
    ));

    $wp_customize->add_control('preset', array(
      'type'    =>    'select',
      'label'   =>    __('preset', 'dynamo'),
      'section'  =>    'settings',
      'choices'  =>    array(
        'dark'   =>    'Dark',
        'light'  =>    'Light'
      ),
      'priority'  =>    1,
    ));

    // Color Setting
    $wp_customize->add_setting('color', array(
      'default'    =>    _x('#f9992b', 'dynamo'),
      'type'       =>    'theme_mod'
    ));
    // Color Control
    $wp_customize->add_control( new wp_customize_Color_Control( $wp_customize, 'color', array(
      'label'    =>    __( 'Theme Color', 'dynamo'),
      'section'  =>    'settings',
      'priority'  =>    2,
    )));
}
    add_action('customize_register', 'dynamo_customizer_register');

    // Showcase Section
 //    $wp_customize->add_section('showcase', array(
 //      'title'       => __('Showcase', 'clean_theme'),
 //      'description' => sprintf( __('Options for showcase area', 'dynamo')),
 //      'priority'    => 130,
 //    ));
 //
 //    // Image Setting
 //    $wp_customize->add_setting('showcase_image', array(
 //      'default'     =>   get_bloginfo('template_directory' . '/img/showcase.jpg'),
 //      'type'        =>   'theme_mod'
 //    ));
 //
 //    // Image Control
 //      $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'showcase_image', array(
 //        'label'    =>    __('Background Image', 'dynamo'),
 //        'section'  =>    'showcase',
 //        'settings' =>    'showcase_image',
 //        'priority' =>    1,
 //      )));
 //
 //    // Height Setting
 //    $wp_customize->add_setting( 'showcase_height', array(
 //      'default'    =>    _x(700, 'dynamo'),
 //      'type'       =>    'theme_mod'
 //    ));
 //
 //    // Height Control
 //    $wp_customize->add_control( 'showcase_height', array(
 //      'label'      =>    __('Showcase Height', 'dynamo'),
 //      'section'    =>    'showcase',
 //      'priority'   =>    2,
 //    ));
 //
 //
 //    // Heading Setting
 //    $wp_customize->add_setting('showcase_heading', array(
 //      'default'     =>  _x('Dynamo', 'dynamo'),
 //      'type'        =>  'theme_mod'
 //    ));
 //
 //    // Heading Control
 //    $wp_customize->add_control('showcase_heading', array(
 //      'label'     =>   __('Heading', 'dynamo'),
 //      'section'   =>  'showcase',
 //      'priority'  =>  3,
 //    ));
 //
 //    // Text Setting
 //    $wp_customize->add_setting('showcase_heading', array(
 //      'default'     =>  _x('Custom WordPress Theme by You', 'dynamo'),
 //      'type'        =>  'theme_mod'
 //    ));
 //
 //    // Text Control
 //    $wp_customize->add_control('showcase_text', array(
 //      'label'     =>   __('Text', 'dynamo'),
 //      'section'   =>  'showcase',
 //      'priority'  =>  4,
 //    ));
 //
 //    // Social Section
 //    $wp_customize->add_section('social', array(
 //      'title'         => __('social', 'dynamo'),
 //      'description'   =>   sprintf( __('Social media urls', 'clean_theme')),
 //      'priority'      =>   140,
 //    ));
 //
 //    // Facebook URL Setting
 //    $wp_customize->add_setting('facebook_url', array(
 //      'default'        =>   _x('http://www.facebook.com', 'dynamo'),
 //      'type'           =>   'theme_mod'
 //    ));
 //
 //    $wp_customize->add_control('facebook_url', array(
 //      'label'           =>   __('Facebook URL', 'dynamo'),
 //      'section'         =>   'social',
 //      'priority'        =>   1,
 //    ));
 //
 //    // Twitter URL Setting
 //    $wp_customize->add_setting('twitter_url', array(
 //      'default'        =>   _x('http://www.twitter.com', 'dynamo'),
 //      'type'           =>   'theme_mod'
 //    ));
 //
 //    $wp_customize->add_control('twitter_url', array(
 //      'label'           =>   __('Twitter URL', 'dynamo'),
 //      'section'         =>   'social',
 //      'priority'        =>   1,
 //    ));
 //
 //    // LinkedIn URL Setting
 //    $wp_customize->add_setting('linkedin_url', array(
 //      'default'        =>   _x('http://www.linkedin.com', 'dynamo'),
 //      'type'           =>   'theme_mod'
 //    ));
 //
 //    $wp_customize->add_control('linkedin_url', array(
 //      'label'           =>   __('LinkedIn URL', 'dynamo'),
 //      'section'         =>   'social',
 //      'priority'        =>   1,
 //    ));
 //
 //    // Bottom Banner Section
 //    $wp_customize->add_section('banner', array(
 //      'title'           =>    __('Bottom Banner', 'dynamo'),
 //      'description'     =>    sprintf( __('Options for bottom banner area', 'dynamo')),
 //      'priority'        =>    160,
 //    ));
 //
 //    // Image Setting
 //    $wp_customize->add_setting('banner_image', array(
 //      'default'          =>   get_bloginfo('template_directory') . '/img/banner.jpg',
 //      'type'             =>   'theme_mod'
 //    ));
 //
 //    // Image Control
 //    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'banner_image', array(
 //      'label'             =>   __('Background Image', 'dynamo'),
 //      'section'           =>   'banner',
 //      'settings'          =>   'banner_image',
 //      'priority'          =>   1,
 //    )));
 //
 //    // Heading Setting
 //    $wp_customize->add_setting( 'banner_heading', array(
 //      'default'            =>   _x('Follow Us On Social Media', 'dynamo'),
 //      'type'               =>   'theme_mod'
 //    ));
 //
 //    // Heading Control
 //    $wp_customize->add_control('banner_heading', array(
 //      'label'              =>   __('Heading', 'dynamo'),
 //      'section'            =>   'banner',
 //      'priority'           =>   3,
 //    ));
 //
 //    // Misc Options section
 //    $wp_customize->add_section('misc', array(
 //      'title'               =>   __('Misc Options', 'dynamo'),
 //      'description'         =>   sprintf( __('Misc Options for theme', 'dynamo')),
 //      'priority'            =>   150,
 //    ));
 //
 //    $wp_customize->add_setting('animation', array(
 //      'default'              =>   '1'
 //    ));
 //
 //    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'aninimation', array(
 //      'label'                 =>   __('Enable Animation', 'dynamo'),
 //      'section'               =>   'misc',
 //      'settings'              =>   'animation',
 //      'type'                  =>   'checkbox',
 //    )));
 //  }
 //
 //  add_action('customize_register', 'dynamo_customizer_register');
?>
