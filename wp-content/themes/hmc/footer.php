<footer class="pt-5">
  <div class="footer-top">
    <div class="container">
      <div class="row text-white">
        <!-- Logo and Tagline -->
        <div class="col-md-3 mb-4">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/white-logo.png" alt="Logo" style="width: 120px;">
          <p class="mt-3 small">Recrutement & accompagnement<br>axé sur les talents</p>
        </div>

        <!-- Footer Navigation Menu 1 -->
        <div class="col-md-2 mb-4">
          <h5 class="fw-semibold">Quick Links</h5>
          <?php
          wp_nav_menu([
            'theme_location' => 'footer_menu',
            'menu_class' => 'list-unstyled',
            'container' => false,
            'fallback_cb' => false,
            'depth' => 1, // no submenus
            'link_before' => '<span class="text-decoration-none d-block small">',
            'link_after' => '</span>',
          ]);
          ?>
        </div>

        <!-- You can duplicate this for a second or third menu if needed -->

        <!-- Contact Info -->
        <div class="col-md-3 mb-4">
          <h5 class="fw-semibold">Find us</h5>
          <address class="small">
            34 Avenue des Champs Elysées<br>
            75008 Paris<br>
            01 85 09 63 41
          </address>
        </div>

        <!-- Newsletter -->
        <div class="col-md-4 mb-4">
          <h5 class="fw-semibold">Newsletter</h5>
          <p class="small">Follow our latest news</p>
          <form>
            <div class="mb-2">
              <input type="email" class="form-control bg-transparent border border-white text-white newsletter-input"
                placeholder="E-mail address">
            </div>
            <button class="btn btn-light w-100" type="submit">Sign me up</button>
          </form>
        </div>
      </div>
    </div>

  </div>
  <!-- Footer Bottom -->
  <div class="d-flex pb-3 bg-dark text-white flex-column footer-bottom flex-md-row justify-content-between align-items-center pt-3 mt-4 small">
    <span>&copy; <?php echo date('Y'); ?> HMC Group. All rights reserved | Realized by <a href="#"
        class="text-white">HMC</a></span>
    <a href="#" class="text-white decor-none">Legal Information & Privacy Policy</a>
  </div>
</footer>