<?php /** * Template Name: Legal Services Page 
  * * Description: Page template. * */
get_header();
the_post();
$page_title = get_field('page_title', get_the_ID());
$hero_image = get_field('hero_image', get_the_ID());
$tagline = get_field('tagline', get_the_ID());
$intro_paragraph = get_field('intro_paragraph', get_the_ID());
$agreements = get_field('contract_law_&_agreements', get_the_ID());
$agreements = str_replace('<li>', '<li><i class="bi bi-check-circle me-2 text-primary"></i>', $agreements);
$regulatory_advisory = get_field('corporate_&_regulatory_advisory', get_the_ID());
$regulatory_advisory = str_replace('<li>', '<li><i class="bi bi-check-circle me-2 text-primary"></i>', $regulatory_advisory);
$tailored_legal_solutions = get_field('tailored_legal_solutions', get_the_ID());
$integrated_legal_support = get_field('integrated_legal_support', get_the_ID());
$integrated_legal_support_image = get_field('integrated_legal_support_image', get_the_ID());
$integrated_legal_support = str_replace('<li>', '<li><i class="bi bi-check-circle me-2 text-primary"></i>', $integrated_legal_support);
$why_work_with_us = get_field('why_work_with_us', get_the_ID());
$why_work_with_us_image = get_field('why_work_with_us_image', get_the_ID());
$why_work_with_us = str_replace('<strong class="title">', '<strong class="title"><i class="bi bi-check-circle me-2 text-primary"></i>', $why_work_with_us);

$cta_title = get_field('cta_title', get_the_ID());
$cta_description = get_field('cta_description', get_the_ID());
$cta_button = get_field('cta_button', get_the_ID());
$cta_background_image = get_field('cta_background_image', get_the_ID());
?>
<main class="main business-formation-container">

  <!-- Page Title -->
  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1><?= $page_title ?></h1>
            <p class="mb-0"><?= $intro_paragraph ?></p>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Services</a></li>
          <li class="current">Legal Services</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->



  <section class="about section bg-light single-side-padding-bottom">

    <div class="container">
      <h2 class="text-center mb-5 display-5 fw-bold text-dark">Our Legal Advisory Services</h2>
      <div class="row g-4">

        <div class="col-md-6">
          <div class="content aos-init aos-animate card h-100 border-0 shadow-lg rounded-4 p-4 transition hover-lift"
            data-aos="fade-up" data-aos-delay="100">
            <div class="card-body">
              <div class="d-flex align-items-center mb-4">
                <div class="icon-circle bg-blue text-white me-3">
                  <i class="fa-solid fa-file-contract fa-lg"></i>
                </div>
                <h4 class="card-title mb-3 fw-semibold">Contract Law & Commercial Agreements</h4>
              </div>
              <?= $agreements ?>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="content aos-init aos-animate card h-100 border-0 shadow-lg rounded-4 p-4 transition hover-lift"
            data-aos="fade-up" data-aos-delay="100">
            <div class="card-body">
              <div class="d-flex align-items-center mb-4">
                <div class="icon-circle bg-blue text-white me-3">
                  <i class="fa-solid fa-scale-balanced fa-lg"></i>
                </div>
                <h4 class="card-title mb-3 fw-semibold">Corporate & Regulatory Advisory</h4>
              </div>
              <?= $regulatory_advisory ?>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  <section class="py-5 about section text-white position-relative"
    style="background: url('<?= esc_url($hero_image['url']) ?>') center center/cover no-repeat;">
    <div class="bg-overlay overlay-opacity position-absolute top-0 start-0 w-100 h-100"></div>

    <div class="container position-relative z-2">
      <div class="row justify-content-center text-center">
        <div class="col-lg-10 col-xl-8">
          <h2 class="display-5 fw-bold mb-4 text-white">Tailored Legal Solutions</h2>
          <div class="lead mb-0 text-white">
            <?= $tailored_legal_solutions ?>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="about section pb-0 single-side-padding-top">

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-6 content aos-init aos-animate pe-5" data-aos="fade-up" data-aos-delay="100">
          <h3 class="mb-4 fw-bold">Integrated Legal Support</h3>
          <?= $integrated_legal_support ?>
        </div>

        <div class="col-lg-6 about-images aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <div class="row gy-4">
            <img class="rounded-5" src="<?= $integrated_legal_support_image['url'] ?>">
          </div>

        </div>

      </div>

    </div>
  </section>

  <section class="about section single-side-padding-top single-side-padding-bottom">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 about-images aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <div class="row gy-4">
            <img class="rounded-5 " src="<?= $why_work_with_us_image['url'] ?>">
          </div>
        </div>
        <div class="col-lg-6 content aos-init aos-animate ps-5" data-aos="fade-up" data-aos-delay="100">
          <h3 class="mb-4 fw-bold">Why Work With Us?</h3>
          <?= $why_work_with_us ?>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5 text-white position-relative bg-blue single-side-padding-top"
    style="background: url('<?= esc_url($cta_background_image['url']) ?>') center center/cover no-repeat;">
    <div class="bg-overlay overlay-opacity position-absolute top-0 start-0 w-100 h-100"></div>

    <div class="container position-relative z-2">
      <div class="row justify-content-center text-center">
        <div class="col-lg-10 col-xl-8">
          <h2 class="display-5 fw-bold mb-4 text-white">Looking for trusted legal counsel for your business?</h2>
          <div class="lead mb-2 text-white">
            <?= $tailored_legal_solutions ?>
          </div>
          <button class="btn bg-blue" type="button">
            <a class="text-white" href="<?= $cta_button['url'] ?>"><?= $cta_button['title'] ?></a>
          </button>
        </div>
      </div>
    </div>
  </section>

  <?php
  get_footer();
  ?>