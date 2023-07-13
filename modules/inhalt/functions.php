<?php

  add_action('gdymc_module_options_settings', function ($module) {
    if( $module->type == gdymc_module_name( __FILE__ ) ):
      optionInput( 'layout', array(
        'type' => 'select',
        'label' => __( 'Layout', 'Theme' ),
        'default' => 'bild_text',
        'options' => array(
          'bild_text' => __( 'Bild | Text', 'Theme' ),
          'text_text' => __( 'Text | Text', 'Theme' ),
          'bild_bild' => __( 'Bild | Bild', 'Theme' ),
          'shift' => __( 'Bild & Text versetzt', 'Theme' ),
        ),
      ), $module->id );

      optionInput( 'switch', array(
        'type' => 'select',
        'label' => __( 'Seiten tauschen?', 'Theme' ),
        'default' => false,
        'options' => array(
          false => __( 'Nein', 'Theme' ),
          true => __( 'Ja', 'Theme' )
        ),
      ), $module->id );

      optionInput( 'align', array(
        'type' => 'select',
        'label' => __( 'Verikale Position', 'Theme' ),
        'default' => 'align-center',
        'options' => array(
          'align-start' => __( 'Top', 'Theme' ),
          'align-center' => __( 'Center', 'Theme' ),
          'align-end' => __( 'Bottom', 'Theme' ),
          'align-stretch' => __( 'Stretch', 'Theme' )
        ),
      ), $module->id );
    endif;
  });

?>