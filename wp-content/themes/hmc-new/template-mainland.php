<?php
/**
 * Template Name: Mainland
 * Description:  Page template.
 *
 */

get_header();
the_post();
$banner = get_field('top_banner', get_the_ID());
$middleBanner = get_field('middle_banner', get_the_ID());
$bottomBg = get_field('bottom_bg', get_the_ID());
?>
<!-- Hero Section -->



<main class="main"></main>
<div class="page-title" data-aos="fade">
  <div class="heading">
    <div class="container">
      <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-8">
          <h1>Mainland Company Setup in UAE</h1>
          <p class="mb-0">Operate across the UAE and internationally with full ownership freedom and market access.
          </p>
        </div>
      </div>
    </div>
  </div>
  <nav class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="index.html">Home</a></li>
        <li class="current">Mainland</li>
      </ol>
    </div>
  </nav>
</div>

<section id="about" class="about section">

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-6 content aos-init aos-animate features" data-aos="fade-up" data-aos-delay="100">
        <h3>Key Features</h3>

        <p class="">Mainland companies are licensed by the Department of Economic Development (DED) of
          the respective Emirate. They allow businesses to operate anywhere within the UAE and internationally without
          restrictions.</p>

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
          <i class="bi  bi-person-check  flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">100% Foreign Ownership</a></h4>
            <p>As of 2025, foreign investors can own mainland companies in most sectors without a local sponsor.</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-globe2 flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Market Access</a></h4>
            <p>Operate across the UAE and globally. Bid for local government contracts without limitations.</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
          <i class="bi bi-building flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Office Requirement</a></h4>
            <p>Physical office space of at least 200 sq. ft. is mandatory for a mainland company license.</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
          <i class="bi bi-person-vcard flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Visa Eligibility</a></h4>
            <p>Get unlimited visas, usually one visa per 80 sq. ft. of office space.</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
          <i class="bi bi-cash-coin flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Corporate Tax</a></h4>
            <p>Pay only 9% tax on profits above AED 375,000, making it cost-efficient for growth.</p>
          </div>
        </div><!-- End Icon Box -->


      </div>


      <div class="col-lg-6 about-images aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-4">
          <div class="col-lg-6">
            <img src="http://18.196.45.208/test/wp-content/themes/hmc-new/assets/img/about-company-1.jpg" class="img-fluid"
              alt="">
          </div>
          <div class="col-lg-6">
            <div class="row gy-4">
              <div class="col-lg-12">
                <img src="http://18.196.45.208/test/wp-content/themes/hmc-new/assets/img/about-company-2.jpg"
                  class="img-fluid" alt="">
              </div>
              <div class="col-lg-12">
                <img src="http://18.196.45.208/test/wp-content/themes/hmc-new/assets/img/about-company-3.jpg"
                  class="img-fluid" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="row gy-4">
              <div class="col-lg-6">
                <img src="http://18.196.45.208/test/wp-content/themes/hmc-new/assets/img/about-company-2.jpg"
                  class="img-fluid" alt="">
              </div>
              <div class="col-lg-6">
                <img src="http://18.196.45.208/test/wp-content/themes/hmc-new/assets/img/about-company-2.jpg"
                  class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>

  </div>
</section>


<section id="features" class="features section">

  <div class="container">

    <div class="row justify-content-around gy-4">
      <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img
          src="http://18.196.45.208/test/wp-content/themes/hmc-new/assets/img/features-bg.jpg" alt=""></div>

      <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <h3>What We Offer For</h3>
        <p>Discover tailored solutions designed to meet the unique needs of every client.From startups to enterprises,
          explore services crafted with purpose and precision.</p>

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
          <i class="bi  bi-geo-alt-fill  flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Local UAE Market</a></h4>
            <p>Perfect for businesses targeting the domestic UAE audience with physical operations.</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-briefcase-fill flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Government Projects</a></h4>
            <p>Ideal for companies aiming to participate in public sector contracts and tenders.</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
          <i class="bi bi-building flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Physical Presence</a></h4>
            <p>Great for enterprises requiring a significant on-ground workforce and infrastructure.</p>
          </div>
        </div><!-- End Icon Box -->

      </div>
    </div>

  </div>

</section>

<?php
get_footer();
?>
