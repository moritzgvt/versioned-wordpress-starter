<?php

  add_action( 'gdymc_module_options_settings', function ( $module ) {
    $filteredPosttypes = get_post_types( array( 'public' => true ), 'objects' );
    $filteredCategories = get_categories( array( 'hide_empty' => true ) );
    
    $posttypes = [];
    $categories = [];

    foreach( $filteredPosttypes as $posttype ) {
      $posttypes[$posttype->name] = $posttype->label;
    }

    foreach ( $filteredCategories as $category ) {
      $categories[$category->slug] = $category->name;
    }

    if( $module->type == gdymc_module_name( __FILE__ ) ):
      optionInput( 'posttype', array(
        'type' => 'select',
        'label' => __( 'Beitragstyp', 'Theme' ),
        'options' => $posttypes
      ), $module->id );
    endif;

    if( $module->type == gdymc_module_name( __FILE__ ) ):
      optionInput( 'category', array(
        'type' => 'select',
        'label' => __( 'Kategorie', 'Theme' ),
        'options' => $categories
      ), $module->id );
    endif;

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