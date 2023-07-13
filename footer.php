      </main>
      <footer>
        <section>
          <?php wp_nav_menu( array( 'theme_location' => 'foot', 'container' => false ) ); ?>
        </section>

        <section>
          <?php wp_nav_menu( array( 'theme_location' => 'legal', 'container' => false ) ); ?>
        </section>
      </footer>
    </div><!-- Site --> 

    <?php wp_footer(); ?>

  </body>
</html>