<?php 
  $module_layout = optionGet('layout');
  $module_switch = optionGet('switch');
  $module_align = optionGet('align');
?>

<div class="module modulePadding">
  <div class="flex <?php echo $module_switch ? 'row-reverse' : 'row'; ?> <?php echo $module_align; ?> sb gap-double same-size">
    <?php if ($module_layout === 'text_text'): ?>

      <div class="flex column gap start">
        <?php if( contentCheck( 'headline_1' ) ): ?>
          <h2><?php contentCreate( 'headline_1', 'text' ); ?></h2>
        <?php endif; ?>

        <?php if( contentCheck( 'text_1' ) ): ?>
          <?php contentCreate( 'text_1', 'text' ); ?>
        <?php endif; ?>
      </div>

      <div class="flex column gap start">
        <?php if( contentCheck( 'headline_2' ) ): ?>
          <h2><?php contentCreate( 'headline_2', 'text' ); ?></h2>
        <?php endif; ?>

        <?php if( contentCheck( 'text_2' ) ): ?>
          <?php contentCreate( 'text_2', 'text' ); ?>
        <?php endif; ?>
      </div>

    <?php elseif ($module_layout === 'bild_bild'): ?>

      <div class="small_image">
        <?php contentCreate( 'image_1', 'image', image_size('small') ); ?>
      </div>
      
      <div class="small_image">
        <?php contentCreate( 'image_2', 'image', image_size('small') ); ?>
      </div>

      <?php elseif ($module_layout === 'shift'): ?>

        <div class="flex column gap-double start shift">
          <div class="small_image">
            <?php contentCreate( 'image_1', 'image', image_size('small') ); ?>
          </div>

          <div class="flex column gap start">
            <?php if( contentCheck( 'headline_1' ) ): ?>
              <h2><?php contentCreate( 'headline_1', 'text' ); ?></h2>
            <?php endif; ?>

            <?php if( contentCheck( 'text_1' ) ): ?>
              <?php contentCreate( 'text_1', 'text' ); ?>
            <?php endif; ?>
          </div>
        </div>

        <div class="flex column gap-double start shift">
          <div class="small_image">
            <?php contentCreate( 'image_2', 'image', image_size('small') ); ?>
          </div>

          <div class="flex column gap start">
            <?php if( contentCheck( 'headline_2' ) ): ?>
              <h2><?php contentCreate( 'headline_2', 'text' ); ?></h2>
            <?php endif; ?>

            <?php if( contentCheck( 'text_2' ) ): ?>
              <?php contentCreate( 'text_2', 'text' ); ?>
            <?php endif; ?>
          </div>
        </div>

    <?php else: ?>

      <div class="small_image">
        <?php contentCreate( 'image_1', 'image', image_size('small') ); ?>
      </div>

      <div class="flex column gap start">
        <?php if( contentCheck( 'headline_1' ) ): ?>
          <h2><?php contentCreate( 'headline_1', 'text' ); ?></h2>
        <?php endif; ?>

        <?php if( contentCheck( 'text_1' ) ): ?>
          <?php contentCreate( 'text_1', 'text' ); ?>
        <?php endif; ?>
      </div>

    <?php endif; ?>
  </div>
</div>
