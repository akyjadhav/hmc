<?php /** * Template Name: About 
  * * Description: Page template. * */
get_header();
the_post();
$banner = get_field('top_banner', get_the_ID());
$middleBanner = get_field('middle_banner', get_the_ID());
$bottomBg = get_field('bottom_bg', get_the_ID()); ?>
<main class="main"></main>
<div class="page-title" data-aos="fade">
  <div class="heading">
    <div class="container">
      <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-8">
          <h1>About</h1>
          <p class="mb-0">Elevating Business Horizons, Together.</p>
        </div>
      </div>
    </div>
  </div>
  <nav class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="index.html">Home</a></li>
        <li class="current">About</li>
      </ol>
    </div>
  </nav>
</div>

<section id="about" class="about section">

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-6 content aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
        <p class="who-we-are">Our Mission</p>
        <h3>Unleashing Potential with Creative Strategy</h3>
        <p class="fst-italic">
          At House Martin Consultancy, our mission is to empower businesses with the knowledge and
          resources they need to succeed in the UAE's competitive market.We understand the unique challenges of
          establishing and growing a business in this region and are here to provide tailored solutions that meet
          your specific goals
        </p>
        <ul>
              <li><i class="bi bi-check-circle"></i> <span>Deliver Client-Centric Solutions</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Foster Long-Term Relationships</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Uphold Integrity and Excellence</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Empower Through Innovation</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Simplify Complex Processes</span></li>
            </ul>
      </div>

      <div class="col-lg-6 about-images aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-4">
          <div class="col-lg-6">
            <img src="http://localhost/hmc/wp-content/themes/hmc-new/assets/img/about-company-1.jpg" class="img-fluid"
              alt="">
          </div>
          <div class="col-lg-6">
            <div class="row gy-4">
              <div class="col-lg-12">
                <img src="http://localhost/hmc/wp-content/themes/hmc-new/assets/img/about-company-2.jpg"
                  class="img-fluid" alt="">
              </div>
              <div class="col-lg-12">
                <img src="http://localhost/hmc/wp-content/themes/hmc-new/assets/img/about-company-3.jpg"
                  class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
</section>

<section id="stats" class="stats section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-3 col-md-6">
        <div class="stats-item d-flex align-items-center w-100 h-100">
          <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Happy Clients</p>
          </div>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item d-flex align-items-center w-100 h-100">
          <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Projects</p>
          </div>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item d-flex align-items-center w-100 h-100">
          <i class="bi bi-headset color-green flex-shrink-0"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item d-flex align-items-center w-100 h-100">
          <i class="bi bi-people color-pink flex-shrink-0"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Hard Workers</p>
          </div>
        </div>
      </div><!-- End Stats Item -->

    </div>

  </div>

</section>

<section id="features" class="features section">

  <div class="container">

    <div class="row justify-content-around gy-4">
      <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img
          src="http://localhost/hmc/wp-content/themes/hmc-new/assets/img/features-bg.jpg" alt=""></div>

      <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <h3>Our Commitment</h3>
        <p>We pride ourselves on fostering long-term relationships with our clients. Your success is our success, and we
          are dedicated to providing unparalleled service that exceeds your expectations.</p>

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-easel flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Passion</a></h4>
            <p>Dedicated to delivering excellence with integrity at every step.</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-patch-check flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Commitment</a></h4>
            <p>Driven by trust, guided by values, committed to you.</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
          <i class="bi bi-brightness-high flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Support</a></h4>
            <p>Empowering your journey with unwavering support and integrity.</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="600">
          <i class="bi bi-brightness-high flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Partners in Progress</a></h4>
            <p>Focused on building lasting relationships through trust and results.</p>
          </div>
        </div><!-- End Icon Box -->

      </div>
    </div>

  </div>

</section>

</main>
<?php
get_footer();
?>