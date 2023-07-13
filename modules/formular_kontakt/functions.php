<?php

  add_action( 'gdymc_module_options_settings', function ( $module ) {
    if( $module->type == gdymc_module_name( __FILE__ ) ):
      optionInput( 'labels', array(
        'type' => 'select',
        'default' => true,
        'label' => __( 'Labels anzeigen', 'Theme' ),
        'options' => array(
          true => __( 'Ja', 'Theme' ),
          false => __( 'Nein', 'Theme' ),
        ),
      ), $module->id );
    endif;
  });

?>