<?php 
  $showLabels = !optionGet('labels') ? 'none' : '';
  $category = optionGet('category');
?>
  <div class="bewerbung module">
    <div class="flex column sb gap-double modulePadding">
      <div>
        <?php if( contentCheck( '1' ) ): ?>
          <h2><?php contentCreate( '1', 'text' ); ?></h2>
        <?php endif; ?>
      </div>

      <div class="flex row sb gap size-2-1">
        <div>
          <form class="form flex column sb gap">
            
            <div class="flex row sb gap same-size">
              <div class="flex column sb">
                <label 
                  class="<?php echo $showLabels; ?>" 
                  for="name">
                  <?php _e('Vorname', 'Theme'); ?>
                </label>

                <input 
                  type="text" 
                  name="name" 
                  e-focusout="validateFormInput"
                  required
                />
              </div>

              <div class="flex column sb">
                <label 
                  class="<?php echo $showLabels; ?>" 
                  for="lastname">
                  <?php _e('Nachname', 'Theme'); ?>
                </label>

                <input 
                  type="text" 
                  name="lastname" 
                  e-focusout="validateFormInput"
                  required
                />
              </div>
            </div>

            <div class="flex row sb gap same-size">
              <div class="flex column sb">
                <label 
                  class="<?php echo $showLabels; ?>" 
                  for="street">
                  <?php _e('Straße & Hausnummer', 'Theme'); ?>
                </label>

                <input 
                  type="text" 
                  name="street" 
                  e-focusout="validateFormInput"
                  required
                />
              </div>

              <div class="flex column sb">
                <label 
                  class="<?php echo $showLabels; ?>" 
                  for="city">
                  <?php _e('PLZ & Stadt', 'Theme'); ?>
                </label>

                <input 
                  type="text" 
                  name="city" 
                  e-focusout="validateFormInput"
                  required
                />
              </div>
            </div>

            <div class="flex row sb gap same-size">
              <div class="flex column sb">
                <label 
                  class="<?php echo $showLabels; ?>"
                  for="job">
                  <?php _e(ucfirst($category), 'Theme'); ?>
                </label>

                <select 
                  type="select"
                  name="job"
                  e-focusout="validateFormInput" 
                  required
                >

                  <option value="">
                    <?php _e(ucfirst($category) . ' auswählen', 'Theme') ?>
                  </option>

                  <?php 
                    $args = array(
                      'post_type' => $posttype,
                      'posts_per_page' => $count,
                      'category_name' => $category,
                      'orderby' => 'menu_order'
                    );

                    $query = new WP_Query( $args );
                  ?>

                  <?php if ($query->have_posts()): ?>
                    <?php while($query->have_posts()): ?>
                      <?php $query->the_post(); ?>

                      <?php
                        $slug = get_post_field( 'post_name', get_post() );
                        $reference = $_GET[$category];
                      ?>

                      <option 
                        value="<?php echo $slug; ?>" 
                        <?php if ($slug === $reference) echo 'selected'; ?>
                      >
                        <?php the_title(); ?>
                      </option>
                    <?php endwhile; ?>
                  <?php endif; ?>

                </select>
              </div>

              <div class="flex column sb">
                <label 
                  class="<?php echo $showLabels; ?>"
                  for="mail"
                >
                  <?php _e('Mail', 'Theme'); ?>
                </label>
                
                <input 
                  type="email" 
                  name="mail" 
                  e-focusout="validateFormInput"
                  required
                />
              </div>
            </div>

            <div class="flex row sb gap">
              <div class="flex column sb">
                <label 
                  class="<?php echo $showLabels; ?>"
                  for="files">
                  <?php _e('Bewerbungsunterlagen', 'Theme'); ?>
                </label>

                <input
                  type="file" 
                  name="files" 
                  e-change="handleFilePreview"
                  e-focusout="validateFormInput"
                  accept="application/pdf"
                  multiple
                  required
                />

                <div class="filePreview grid col3 gap"></div>
              </div>
            </div>

            <div class="flex row sb gap">
              <div class="flex row-static sb gap" e-click="checkChildCheckbox">
                <input 
                  type="checkbox" 
                  name="privacy" 
                  required
                />

                <label for="privacy">
                  Ich habe die <a href="<?php echo get_privacy_policy_url(); ?>">Datenschutzerklärung</a> zur Kenntnis genommen. Ich stimme zu, dass meine Angaben zur Kontaktaufnahme und für Rückfragen dauerhaft gespeichert werden. Diese Einwilligung kann jederzeit mit Wirkung für die Zukunft widerrufen werden.
                </label>
              </div>

              <input 
                class="cta"
                name="submit"
                e-click="sendForm"
                type="submit"
                value="<?php _e('Senden', 'Theme'); ?>"
              />
            </div>

            <span class="form-overlay form-overlay__success">
              <h3><?php _e('Die Nachricht wurde erfolgreich versendet.', 'Theme'); ?></h3>
              <?php _e('Wir melden uns zeitnah bei Ihnen.', 'Theme'); ?>
            </span>

            <span class="form-overlay form-overlay__failure">
              <h3><?php _e('Es ist ein Fehler aufgetreten.', 'Theme'); ?></h3>
              <?php _e('Bitte kontaktieren Sie uns telefonisch.', 'Theme'); ?>
            </span>
          </form>
        </div>
        
        <div>
          <?php if( contentCheck( '2' ) ): ?>
            <?php contentCreate( '2', 'text' ); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>