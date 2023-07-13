<?php get_header(); ?>

  <?php if ( post_password_required() ): ?>

    <section>
      <?php echo get_the_password_form(); ?>
    </section>

    <?php else: ?>

    <section>
      <?php if ( have_posts() ): ?>
        <?php while ( have_posts() ): the_post(); ?>
          <article>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
          </article>
        <?php endwhile; ?>
      <?php endif; ?>
    </section>

  <?php endif; ?>

<?php get_footer(); ?>