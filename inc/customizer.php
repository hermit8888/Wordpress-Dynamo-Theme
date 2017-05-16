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
?>
