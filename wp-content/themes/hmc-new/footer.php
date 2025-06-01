<footer id="footer" class="footer light-background">

  <div class="container">
    <div class="row gy-3">
      <div class="col-lg-3 col-md-6 d-flex">
        <div class="address">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-transparent.png" alt="Logo"
            class="me-2 navbar-brand">
          <p class="mt-3 small">Elevating Business Horizons, Together</p>
        </div>

      </div>


      <div class="col-lg-3 col-md-6">
        <h4>Quick Links</h4>
        <?php
        wp_nav_menu([
          'theme_location' => 'footer_menu',
          'container' => false,
          'menu_class' => 'footer-links list-unstyled',
          'fallback_cb' => false,
        ]);
        ?>
      </div>

      <div class="col-lg-3 col-md-6">
        <h4>Follow Us</h4>
        <div class="social-links d-flex">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <h5 class="fw-semibold">Newsletter</h5>
        <p class="small">Follow our latest news</p>
        <form>
          <div class="mb-2">
            <input type="email" class="form-control  border newsletter-input" placeholder="E-mail address">
          </div>
          <button class="btn bg-blue w-100" type="submit">Sign me up</button>
        </form>
      </div>

    </div>
  </div>


</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<a href="https://wa.me/8830592774" target="_blank" style="position: fixed; bottom: 20px; right: 20px; z-index: 9999;">
  <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="Chat on WhatsApp"
    style="height: 50px; width: 50px;">
</a>