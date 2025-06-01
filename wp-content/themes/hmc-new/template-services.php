<?php /** * Template Name: Services 
  * * Description: Page template. * */
get_header();
the_post();
$banner = get_field('top_banner', get_the_ID());
$middleBanner = get_field('middle_banner', get_the_ID());
$bottomBg = get_field('bottom_bg', get_the_ID()); ?>
<main class="main">

  <!-- Page Title -->
  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>Services</h1>
            <p class="mb-0">Discover a range of tailored solutions designed to meet your unique needs.Our services are crafted to deliver value, efficiency, and results.</p>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li class="current">Services</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->

  <!-- Services Section -->
  <section id="services" class="services section">

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item  position-relative">
            <div class="icon">
              <i class="bi bi-briefcase"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Business Formation</h3>
            </a>
            <p>Establishing your new business in the UAE would require careful consideration of certain factors and conditions <a href="">Read More</a></p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-bank"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Bank Account Opening</h3>
            </a>
            <p>Opening a business bank account in the UAE may be challenging, as it requires going through several strict compliance <a href="">Read More</a></p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-shield-check"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Compliance Services</h3>
            </a>
            <p>Our specialized group of professionals will lead you through the regulatory requirements for businesses in the UAE <a href="">Read More</a></p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-diagram-3"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Corporate Services</h3>
            </a>
            <p>Our corporate services encompass a comprehensive suite of solutions tailored to meet the diverse needs of modern <a href="">Read More</a></p>
            <a href="service-details.html" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-journal-text"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Education and Training</h3>
            </a>
            <p>Our team of experts in the field can design and deliver practical, risk-based compliance training in the UAE <a href="">Read More</a></p>
            <a href="service-details.html" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-person-badge"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Employment Solutions</h3>
            </a>
            <p>We extend our services  beyond business establishment and provide all-encompassing employment solutions customized <a href="">Read More</a></p>
            <a href="service-details.html" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-building"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Government Liaison (PRO) Services</h3>
            </a>
            <p>Our wide range of government liaison services is tailored to aid professionals, entrepreneurs, and small to <a href="">Read More</a></p>
            <a href="service-details.html" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-key"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Intellectual Property Protection</h3>
            </a>
            <p>We provide a complete range of Intellectual Property solutions, aimed at addressing potential violations and <a href="">Read More</a></p>
            <a href="service-details.html" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-file-earmark-text"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Legal Services</h3>
            </a>
            <p>Our team of legal experts will guide you in understanding the nuances of the business laws and regulations in the UAE. <a href="">Read More</a></p>
            <a href="service-details.html" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi  bi-envelope"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Mail Management</h3>
            </a>
            <p>Experience the convenience of our mail management solution, enabling you to utilize our dedicated P.O. Box for your busin <a href="">Read More</a></p>
            <a href="service-details.html" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->
        
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-globe"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Residency and Immigration  </h3>
            </a>
            <p>We are here to assist you in obtaining the essential UAE residence visas for both your employees and family members. Our <a href="">Read More</a></p>
            <a href="service-details.html" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

        
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi  bi-headset"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Virtual Receptionist</h3>
            </a>
            <p>Our virtual receptionist solutions ensure that each time your clients contact your business, they receive a warm and <a href="">Read More</a></p>
            <a href="service-details.html" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>

  </section><!-- /Services Section -->

</main>

<?php
get_footer();
?>
