<?php /** * Template Name: Virtual Receptionist
  * * Description: Page template. * */
get_header();
the_post();

$title = get_field("title", get_the_ID());
$included_title = get_field("included_title", get_the_ID());
$included_description = get_field("included_description", get_the_ID());
$included_description = str_replace('<li>', '<li><i class="bi bi-check-circle me-2 text-primary"></i>', $included_description);
$why_choose_title = get_field("why_choose_title", get_the_ID());
$why_choose_description = get_field("why_choose_description", get_the_ID());
$why_choose_description = str_replace('<li>', '<li><i class="bi bi-check-circle me-2 text-primary"></i>', $why_choose_description);
$it_time_title = get_field("it_time_title", get_the_ID());
$it_time_description = get_field("it_time_description", get_the_ID());
$it_time_description = str_replace('<li>', '<li><i class="bi bi-check-circle me-2 text-primary"></i>', $it_time_description);
$help = get_field("help", get_the_ID());
?>
<div class="page-title" data-aos="fade">
  <div class="heading">
    <div class="container">
      <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-8">
          <h1><?= the_title() ?></h1>
          <p class="mb-0"><?= get_the_content() ?></p>
        </div>
      </div>
    </div>
  </div>
  <nav class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="index.html">Services</a></li>
        <li class="current">Virtual Receptionist Services in the UAE</li>
      </ol>
    </div>
  </nav>
</div>

<section class="about section">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 content aos-init aos-animate pe-5" data-aos="fade-up" data-aos-delay="100">
        <p><?= $included_title ?></p>
        <h3><?= the_title() ?></h3>
        <p class="fst-italic">
          <?= $included_description ?>
        </p>
      </div>

      <div class="col-lg-6 about-images aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="row gy-4">
              <div class="col-lg-12">
                <img src="<?= get_template_directory_uri() ?>/assets/img/res1.png" class="img-fluid" alt="">
              </div>
              <div class="col-lg-12">
                <img src="<?= get_template_directory_uri() ?>/assets/img/res2.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <img src="<?= get_template_directory_uri() ?>/assets/img/res3.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="about section">

  <div class="container">

    <div class="row gy-4">
      <div class="col-lg-6 about-images aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-4">
          <div class="col-lg-12">
            <img src="<?= get_template_directory_uri() ?>/assets/img/res4.png" class="img-fluid" alt="">
          </div>
        </div>

      </div>
      <div class="col-lg-6 content aos-init aos-animate ps-5" data-aos="fade-up" data-aos-delay="100">
        <h3><?= $why_choose_title ?></h3>
        <p class="fst-italic">
          <?= $why_choose_description ?>

        </p>
      </div>
    </div>

  </div>
</section>




<section class="about section advantages bg-light">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 content aos-init aos-animate pe-5 ps-5" data-aos="fade-up" data-aos-delay="100">
        <h3 class="mb-4 fw-bold"><?= $it_time_title ?></h3>
        <?= $it_time_description ?>
      </div>
      <div class="col-lg-6 about-images aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
        <div class="gy-4">
          <img class="rounded-5 w-100" src="<?= get_template_directory_uri() ?>/assets/img/res5.png">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5 text-white position-relative bg-blue single-side-padding-top"
  style="background: url('<?= get_template_directory_uri() ?>/assets/img/checks.png') center center/cover no-repeat;">
  <div class="bg-overlay overlay-opacity position-absolute top-0 start-0 w-100 h-100"></div>

  <div class="container position-relative z-2">
    <div class="row justify-content-center text-center">
      <div class="col-lg-10 col-xl-8">
        <h2 class="display-5 fw-bold mb-4 text-white">How Can We Help?</h2>
        <div class="lead mb-2 text-white">
          <?= $help ?>
        </div>
        <button class="btn bg-blue" type="button">
          <a class="text-white" href="#">Lets Connect</a>
        </button>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>