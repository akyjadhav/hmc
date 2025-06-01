<footer class="bg-blue py-5">
  <div class="container">
    <div class="row">
      
      <!-- Paris agency -->
      <div class="col-md-3">
        <h5>Paris agency</h5>
        <address>
          Graphéine Paris<br>
          3 rue des Montibœufs<br>
          75020 - Paris France
        </address>
      </div>
      
      <!-- Lyon agency -->
      <div class="col-md-3">
        <h5>Lyon agency</h5>
        <address>
          Graphéine Lyon<br>
          3 rue Abbé Rozier<br>
          69001 - Lyon France
        </address>
      </div>
      
      <!-- Contact -->
      <div class="col-md-3 contact">
        <h5>Contact us</h5>
        <p><a href="#" class="">Request a quotation</a></p>
        <p>Tel: +33 (0)9 72 31 15 95</p>
      </div>
      
      <!-- Follow us -->
      <div class="col-md-3">
        <h5>Legal</h5>
        <?php
          wp_nav_menu([
            'theme_location' => 'footer_menu', // menu location registered in functions.php
            'menu_class' => 'list-unstyled',
            'container' => false,
          ]);
        ?>
        <div class="d-flex gap-2 mt-3 social-icons">
          <a href="#" class="d-inline-block bg-black text-white rounded-circle p-2"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="d-inline-block bg-black text-white rounded-circle p-2"><i class="fab fa-behance"></i></a>
          <a href="#" class="d-inline-block bg-black text-white rounded-circle p-2"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="d-inline-block bg-black text-white rounded-circle p-2"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      
    </div>
  </div>
</footer>