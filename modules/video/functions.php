<?php


		
	
		
	add_action( 'gdymc_module_options_settings', function ( $module ) {
		
		if( $module->type == gdymc_module_name( __FILE__ ) ):
		
			optionInput( 'vid_url', array(
			
				'type' => 'text',
				'default' => '',
				'placeholder' => __( './video.mp4', 'Theme' ),
				'label' => __( 'Video-URL', 'Theme' ),
			
			), $moduleID );


			optionInput( 'vid_poster', array(
			
				'type' => 'text',
				'default' => '',
				'placeholder' => __( './poster.jpg', 'Theme' ),
				'label' => __( 'Video-Vorschau', 'Theme' ),
			
			), $moduleID );


			optionInput( 'vid_controls', array(
			
				'type' => 'select',
				'default' => '1',
				'options' => array(
					'1' => __( 'Ja', 'Theme' ),
					'0' => __( 'Nein', 'Theme' ),
				),
				'label' => __( 'Steuerelemente anzeigen', 'Theme' ),
			
			), $moduleID );	


			optionInput( 'vid_autoplay', array(
			
				'type' => 'select',
				'default' => '0',
				'options' => array(
					'1' => __( 'Ja', 'Theme' ),
					'0' => __( 'Nein', 'Theme' ),
				),
				'label' => __( 'Automatisch abspielen', 'Theme' ),
			
			), $moduleID );	


			optionInput( 'vid_loop', array(
			
				'type' => 'select',
				'default' => '0',
				'options' => array(
					'1' => __( 'Ja', 'Theme' ),
					'0' => __( 'Nein', 'Theme' ),
				),
				'label' => __( 'Schleifenwiedergabe', 'Theme' ),
			
			), $moduleID );	


			optionInput( 'vid_muted', array(
			
				'type' => 'select',
				'default' => '0',
				'options' => array(
					'1' => __( 'Ja', 'Theme' ),
					'0' => __( 'Nein', 'Theme' ),
				),
				'label' => __( 'Audio deaktivieren', 'Theme' ),
			
			), $moduleID );	
		
		endif;
		
	}, 10, 2 );

	
	
?>