<?php
add_theme_support( 'post-thumbnails' );
add_action('customize_register','projet_wp_customize_aboutus');
function projet_wp_customize_aboutus($wp_customize) {
    // Ajouter une section
    $wp_customize->add_section( 'projet_wp_customize_aboutus', array(
      'title' => __( 'Personnalisation du template aboutus' ),
      'description' => __( 'Personnalisation du template aboutus' ),
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


    $wp_customize->add_setting( 'desc-bannerleft');

    $wp_customize->add_control(
      new WP_Customize_Cropped_Image_Control(
        $wp_customize, // WP_Customize_Manager
        'desc-bannerleft', // Setting id
        array( // Args, including any custom ones.
          'label' => __( 'Lien image bannière gauche' ),
          'section' => 'projet_wp_customize_aboutus',
        )
      )
    );

    $wp_customize->add_setting( 'desc-whoarewe', array(
      'type' => 'option',
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
          'section' => 'projet_wp_customize_aboutus',
        )
      )
    );

    $wp_customize->add_setting( 'desc-ourvision', array(
      'type' => 'option',
      'transport' => 'refresh', // or postMessage
      'default' => ''
    ) );


  $wp_customize->add_control(
      new WP_Customize_Color_Control(
        $wp_customize, // WP_Customize_Manager
        'desc-ourvision', // Setting id
        array( // Args, including any custom ones.
          'type' => 'textarea',
          'label' => __( 'Description our vision' ),
          'section' => 'projet_wp_customize_aboutus',
        )
      )
    );

    $wp_customize->add_setting( 'desc-ourmission', array(
      'type' => 'option',
      'transport' => 'refresh', // or postMessage
      'default' => ''
    ) );


  $wp_customize->add_control(
      new WP_Customize_Color_Control(
        $wp_customize, // WP_Customize_Manager
        'desc-ourmission', // Setting id
        array( // Args, including any custom ones.
          'type' => 'textarea',
          'label' => __( 'Description our mission' ),
          'section' => 'projet_wp_customize_aboutus',
        )
      )
    );


    $wp_customize->add_setting( 'desc-photo1');

    $wp_customize->add_control(
      new WP_Customize_Cropped_Image_Control(
        $wp_customize, // WP_Customize_Manager
        'desc-photo1', // Setting id
        array( // Args, including any custom ones.
          'label' => __( 'Team Photo1' ),
          'section' => 'projet_wp_customize_aboutus',
        )
      )
    );

    $wp_customize->add_setting( 'desc-role1', array(
      'type' => 'option',
      'transport' => 'refresh', // or postMessage
      'default' => ''
    ) );


    $wp_customize->add_control(
      new WP_Customize_Color_Control(
        $wp_customize, // WP_Customize_Manager
        'desc-role1', // Setting id
        array( // Args, including any custom ones.
          'type' => 'text',
          'label' => __( 'Role 1' ),
          'section' => 'projet_wp_customize_aboutus',
        )
      )
    );

    $wp_customize->add_setting( 'desc-tel1', array(
      'type' => 'option',
      'transport' => 'refresh', // or postMessage
      'default' => ''
    ) );


    $wp_customize->add_control(
      new WP_Customize_Color_Control(
        $wp_customize, // WP_Customize_Manager
        'desc-tel1', // Setting id
        array( // Args, including any custom ones.
          'type' => 'text',
          'label' => __( 'Tel 1' ),
          'section' => 'projet_wp_customize_aboutus',
        )
      )
    );

    $wp_customize->add_setting( 'desc-mail1', array(
      'type' => 'option',
      'transport' => 'refresh', // or postMessage
      'default' => ''
    ) );


    $wp_customize->add_control(
      new WP_Customize_Color_Control(
        $wp_customize, // WP_Customize_Manager
        'desc-mail1', // Setting id
        array( // Args, including any custom ones.
          'type' => 'text',
          'label' => __( 'Mail 1' ),
          'section' => 'projet_wp_customize_aboutus',
        )
      )
    );

    



    $wp_customize->add_setting( 'desc-photo2');

    $wp_customize->add_control(
      new WP_Customize_Cropped_Image_Control(
        $wp_customize, // WP_Customize_Manager
        'desc-photo2', // Setting id
        array( // Args, including any custom ones.
          'label' => __( 'Team Photo2' ),
          'section' => 'projet_wp_customize_aboutus',
        )
      )
    );

    $wp_customize->add_setting( 'desc-role2', array(
      'type' => 'option',
      'transport' => 'refresh', // or postMessage
      'default' => ''
    ) );


    $wp_customize->add_control(
      new WP_Customize_Color_Control(
        $wp_customize, // WP_Customize_Manager
        'desc-role2', // Setting id
        array( // Args, including any custom ones.
          'type' => 'text',
          'label' => __( 'Role 2' ),
          'section' => 'projet_wp_customize_aboutus',
        )
      )
    );

    $wp_customize->add_setting( 'desc-tel2', array(
      'type' => 'option',
      'transport' => 'refresh', // or postMessage
      'default' => ''
    ) );


    $wp_customize->add_control(
      new WP_Customize_Color_Control(
        $wp_customize, // WP_Customize_Manager
        'desc-tel2', // Setting id
        array( // Args, including any custom ones.
          'type' => 'text',
          'label' => __( 'Tel 2' ),
          'section' => 'projet_wp_customize_aboutus',
        )
      )
    );

    $wp_customize->add_setting( 'desc-mail2', array(
      'type' => 'option',
      'transport' => 'refresh', // or postMessage
      'default' => ''
    ) );


    $wp_customize->add_control(
      new WP_Customize_Color_Control(
        $wp_customize, // WP_Customize_Manager
        'desc-mail2', // Setting id
        array( // Args, including any custom ones.
          'type' => 'text',
          'label' => __( 'Mail 2' ),
          'section' => 'projet_wp_customize_aboutus',
        )
      )
    );



    $wp_customize->add_setting( 'desc-photo3');

    $wp_customize->add_control(
      new WP_Customize_Cropped_Image_Control(
        $wp_customize, // WP_Customize_Manager
        'desc-photo3', // Setting id
        array( // Args, including any custom ones.
          'label' => __( 'Team Photo3' ),
          'section' => 'projet_wp_customize_aboutus',
        )
      )
    );

    $wp_customize->add_setting( 'desc-role3', array(
      'type' => 'option',
      'transport' => 'refresh', // or postMessage
      'default' => ''
    ) );


    $wp_customize->add_control(
      new WP_Customize_Color_Control(
        $wp_customize, // WP_Customize_Manager
        'desc-role3', // Setting id
        array( // Args, including any custom ones.
          'type' => 'text',
          'label' => __( 'Role 3' ),
          'section' => 'projet_wp_customize_aboutus',
        )
      )
    );

    $wp_customize->add_setting( 'desc-tel3', array(
      'type' => 'option',
      'transport' => 'refresh', // or postMessage
      'default' => ''
    ) );


    $wp_customize->add_control(
      new WP_Customize_Color_Control(
        $wp_customize, // WP_Customize_Manager
        'desc-tel3', // Setting id
        array( // Args, including any custom ones.
          'type' => 'text',
          'label' => __( 'Tel 3' ),
          'section' => 'projet_wp_customize_aboutus',
        )
      )
    );

    $wp_customize->add_setting( 'desc-mail3', array(
      'type' => 'option',
      'transport' => 'refresh', // or postMessage
      'default' => ''
    ) );


    $wp_customize->add_control(
      new WP_Customize_Color_Control(
        $wp_customize, // WP_Customize_Manager
        'desc-mail3', // Setting id
        array( // Args, including any custom ones.
          'type' => 'text',
          'label' => __( 'Mail 3' ),
          'section' => 'projet_wp_customize_aboutus',
        )
      )
    );




    $wp_customize->add_setting( 'desc-photo4');

    $wp_customize->add_control(
      new WP_Customize_Cropped_Image_Control(
        $wp_customize, // WP_Customize_Manager
        'desc-photo4', // Setting id
        array( // Args, including any custom ones.
          'label' => __( 'Team Photo4' ),
          'section' => 'projet_wp_customize_aboutus',
        )
      )
    );

    $wp_customize->add_setting( 'desc-role4', array(
      'type' => 'option',
      'transport' => 'refresh', // or postMessage
      'default' => ''
    ) );


    $wp_customize->add_control(
      new WP_Customize_Color_Control(
        $wp_customize, // WP_Customize_Manager
        'desc-role4', // Setting id
        array( // Args, including any custom ones.
          'type' => 'text',
          'label' => __( 'Role 4' ),
          'section' => 'projet_wp_customize_aboutus',
        )
      )
    );

    $wp_customize->add_setting( 'desc-tel4', array(
      'type' => 'option',
      'transport' => 'refresh', // or postMessage
      'default' => ''
    ) );


    $wp_customize->add_control(
      new WP_Customize_Color_Control(
        $wp_customize, // WP_Customize_Manager
        'desc-tel4', // Setting id
        array( // Args, including any custom ones.
          'type' => 'text',
          'label' => __( 'Tel 4' ),
          'section' => 'projet_wp_customize_aboutus',
        )
      )
    );

    $wp_customize->add_setting( 'desc-mail4', array(
      'type' => 'option',
      'transport' => 'refresh', // or postMessage
      'default' => ''
    ) );


    $wp_customize->add_control(
      new WP_Customize_Color_Control(
        $wp_customize, // WP_Customize_Manager
        'desc-mail4', // Setting id
        array( // Args, including any custom ones.
          'type' => 'text',
          'label' => __( 'Mail 4' ),
          'section' => 'projet_wp_customize_aboutus',
        )
      )
    );
     
}



add_action('customize_register','projet_wp_customize_ourservices');
function projet_wp_customize_ourservices($wp_customize) {
  // Ajouter une section
  $wp_customize->add_section( 'projet_wp_customize_ourservices', array(
    'title' => __( 'Personnalisation du template service' ),
    'description' => __( 'Personnalisation du template service' ),
    'priority' => 2,
  ) );


  $wp_customize->add_setting( 'svc-photo1');

    $wp_customize->add_control(
      new WP_Customize_Cropped_Image_Control(
        $wp_customize, // WP_Customize_Manager
        'svc-photo1', // Setting id
        array( // Args, including any custom ones.
          'label' => __( 'Photo1' ),
          'section' => 'projet_wp_customize_ourservices',
        )
      )
    );

    $wp_customize->add_setting( 'svc-photo2');

    $wp_customize->add_control(
      new WP_Customize_Cropped_Image_Control(
        $wp_customize, // WP_Customize_Manager
        'svc-photo2', // Setting id
        array( // Args, including any custom ones.
          'label' => __( 'Photo2' ),
          'section' => 'projet_wp_customize_ourservices',
        )
      )
    );

    $wp_customize->add_setting( 'svc-photo3');

    $wp_customize->add_control(
      new WP_Customize_Cropped_Image_Control(
        $wp_customize, // WP_Customize_Manager
        'svc-photo3', // Setting id
        array( // Args, including any custom ones.
          'label' => __( 'Photo3' ),
          'section' => 'projet_wp_customize_ourservices',
        )
      )
    );


  $wp_customize->add_setting( 'svc-corp', array(
    'type' => 'option', // or 'option'
    'transport' => 'refresh', // or postMessage
    'default' => ''
  ) );



  $wp_customize->add_control(
    new WP_Customize_Color_Control(
      $wp_customize, // WP_Customize_Manager
      'svc-corp', // Setting id
      array( // Args, including any custom ones.
        'type' => 'textarea',
        'label' => __( 'Bloc Corp. Parties' ),
        'section' => 'projet_wp_customize_ourservices',
      )
    )
  );


  $wp_customize->add_setting( 'svc-photo4');

    $wp_customize->add_control(
      new WP_Customize_Cropped_Image_Control(
        $wp_customize, // WP_Customize_Manager
        'svc-photo4', // Setting id
        array( // Args, including any custom ones.
          'label' => __( 'Photo4' ),
          'section' => 'projet_wp_customize_ourservices',
        )
      )
    );
}



add_action('customize_register','projet_wp_customize_partners');
function projet_wp_customize_partners($wp_customize) {
  // Ajouter une section
  $wp_customize->add_section( 'projet_wp_customize_partners', array(
    'title' => __( 'Personnalisation du template partner' ),
    'description' => __( 'Personnalisation du template partner' ),
    'priority' => 2,
  ) );

  $wp_customize->add_setting( 'part-photo1');

    $wp_customize->add_control(
      new WP_Customize_Cropped_Image_Control(
        $wp_customize, // WP_Customize_Manager
        'part-photo1', // Setting id
        array( // Args, including any custom ones.
          'label' => __( 'Photo1' ),
          'section' => 'projet_wp_customize_partners',
        )
      )
    );


    $wp_customize->add_setting( 'part-photo2');

    $wp_customize->add_control(
      new WP_Customize_Cropped_Image_Control(
        $wp_customize, // WP_Customize_Manager
        'part-photo2', // Setting id
        array( // Args, including any custom ones.
          'label' => __( 'Photo2' ),
          'section' => 'projet_wp_customize_partners',
        )
      )
    );


    $wp_customize->add_setting( 'part-photo3');

    $wp_customize->add_control(
      new WP_Customize_Cropped_Image_Control(
        $wp_customize, // WP_Customize_Manager
        'part-photo3', // Setting id
        array( // Args, including any custom ones.
          'label' => __( 'Photo3' ),
          'section' => 'projet_wp_customize_partners',
        )
      )
    );



    $wp_customize->add_setting( 'part-photo4');

    $wp_customize->add_control(
      new WP_Customize_Cropped_Image_Control(
        $wp_customize, // WP_Customize_Manager
        'part-photo4', // Setting id
        array( // Args, including any custom ones.
          'label' => __( 'Photo4' ),
          'section' => 'projet_wp_customize_partners',
        )
      )
    );



    $wp_customize->add_setting( 'part-photo5');

    $wp_customize->add_control(
      new WP_Customize_Cropped_Image_Control(
        $wp_customize, // WP_Customize_Manager
        'part-photo5', // Setting id
        array( // Args, including any custom ones.
          'label' => __( 'Photo5' ),
          'section' => 'projet_wp_customize_partners',
        )
      )
    );



    $wp_customize->add_setting( 'part-photo6');

    $wp_customize->add_control(
      new WP_Customize_Cropped_Image_Control(
        $wp_customize, // WP_Customize_Manager
        'part-photo6', // Setting id
        array( // Args, including any custom ones.
          'label' => __( 'Photo6' ),
          'section' => 'projet_wp_customize_partners',
        )
      )
    );

}