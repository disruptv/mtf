          <footer id="bottombar">
            <div class="wrap">
              <div class="widgets">
                <?php dynamic_sidebar( 'footer-widgets' ); ?>
                <?php
                // wp_nav_menu(array(
                //   'menu' => '',
                //   'container' => 'nav',
                //   'container_id' => 'site-map',
                //   'theme_location' => '',
                // ));
                ?>
              </div>
              <form id="mailchimp">
                <div class="input-group">
                  <input class="input-group-field"
                    type="email"
                    name="email"
                    placeholder="Join our mailing list">
                  <div class="input-group-button">
                    <button type="submit" class="button"><?php esc_html_e('Sign up'); ?></button>
                  </div>
                </div>
                <a class="gdpr" href="/privacy"><?php esc_html_e('How do we use this information?', 'mtf'); ?></a>
                <p>This program is supported, in part, by public funds from the New York City Department of Cultural Affairs in partnership with the City Council.</p>
                <address class="address">
                  <p id="copyright">© <?php echo date('Y'); ?> Musical Theatre Factory. 440 Lafayette St, 4th Fl, NYC 10003.</p>
                </address>
              </form>
            </div>
          </footer>
        </div><!-- .content-inner -->
      </div><!-- #content -->
    </div><!-- #main -->
    <?php wp_footer(); ?>
  </body>
</html>
