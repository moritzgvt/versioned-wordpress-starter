<?php 
  $showLabels = !optionGet('labels') ? 'none' : '';
?>
  <div class="contact module">
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
                  <?php _e('Name', 'Theme'); ?>
                </label>

                <input 
                  type="text" 
                  name="name" 
                  e-focusout="validateFormInput"
                  placeholder="<?php _e('Name', 'Theme'); ?>"
                  required
                />
              </div>

              <div class="flex column sb">
                <label 
                  class="<?php echo $showLabels; ?>"
                  for="mail">
                  <?php _e('Mail', 'Theme'); ?>
                </label>
                
                <input 
                  type="email" 
                  name="mail" 
                  e-focusout="validateFormInput"
                  placeholder="<?php _e('Mail', 'Theme'); ?>"
                  required
                />
              </div>
            </div>

            <div class="flex column sb">
              <label 
                class="<?php echo $showLabels; ?>"
                for="message">
                <?php _e('Nachricht', 'Theme'); ?>
              </label>

              <textarea 
                name="message"
                rows="6"
                placeholder="<?php _e('Nachricht', 'Theme'); ?>"
                e-focusout="validateFormInput"
                required
              ></textarea>
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