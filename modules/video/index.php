	

	
		<?php if( filter_var( optionGet( 'vid_url' ), FILTER_VALIDATE_URL ) === false ): ?>

			<?php optionError( __( 'Geben Sie in den Modul-Einstellungen die Video-URL an', 'Theme' ) ); ?>

		<?php else: ?>

			<div class="module">

				<div class="gdymc_video">
					
					<video <?php if( optionGet( 'vid_poster' ) ): ?>poster="<?php optionShow( 'vid_poster' ); ?>"<?php endif; ?> <?php if( optionGet( 'vid_muted' ) ) echo 'muted'; ?> <?php if( optionGet( 'vid_loop' ) ) echo 'loop'; ?> <?php if( optionGet( 'vid_controls' ) ) echo 'controls'; ?> <?php if( optionGet( 'vid_autoplay' ) ) echo 'autoplay'; ?> 
						style="width: 100%; height: auto; max-height: 900px; object-fit: cover; object-position: bottom;">
						
						<source src="<?php optionShow( 'vid_url' ); ?>" type="video/mp4">
					
					</video>

				</div>

			</div><!-- .module -->

		<?php endif; ?>

