<div class="module modulePadding">
  <div class="flex column start gap">
    <?php if( contentCheck( 1 ) ): ?>
      <h1><?php contentCreate( 1, 'text' ); ?></h1>
    <?php endif; ?>

    <?php if( contentCheck( 2 ) ): ?>
      <div><?php contentCreate( 2, 'text' ); ?></div>
    <?php endif; ?>
  </div>
</div>
