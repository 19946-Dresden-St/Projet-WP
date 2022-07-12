<?php 

add_action('customize_register','projet_wp_customize_aboutus');
function projet_wp_customize_aboutus($wp_customize) {
    // Ajouter une section
    $wp_customize->add_section( 'projet_wp_customize_aboutus', array(
      'title' => __( 'Personnalisation de la page About us' ),
      'description' => __( 'Personnalisation de la page About us' ),
      'priority' => 2,
    ) );


    $wp_customize->add_setting( 'desc-about-us', array(
        'type' => 'option', // or 'option'
        'transport' => 'refresh', // or postMessage
        'default' => ''
      ) );

  

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
          $wp_customize, // WP_Customize_Manager
          'desc-about-us', // Setting id
          array( // Args, including any custom ones.
            'type' => 'textarea',
            'label' => __( 'Description about us' ),
            'section' => 'projet_wp_customize_aboutus',
          )
        )
      );
      
    
     
}


add_action('customize_register','projet_wp_customize_whorearewe');
function projet_wp_customize_whorearewe($wp_customize) {
    // Ajouter une section
    $wp_customize->add_section( 'projet_wp_customize_whorearewe', array(
      'title' => __( 'Personnalisation de la page whoarewe' ),
      'description' => __( 'Personnalisation de la page whoarewe' ),
      'priority' => 3,
    ) );


    $wp_customize->add_setting( 'desc-whoarewe', array(
        'transport' => 'refresh', // or postMessage
        'default' => ''
      ) );


    $wp_customize->add_control(
        new WP_Customize_Color_Control(
          $wp_customize, // WP_Customize_Manager
          'desc-whoarewe', // Setting id
          array( // Args, including any custom ones.
            'type' => 'textarea',
            'label' => __( 'Description whoarewe' ),
            'section' => 'projet_wp_customize_whorearewe',
          )
        )
      );
     
}