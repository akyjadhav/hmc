<?php /** * Template Name: Residency and Immigration
  * * Description: Page template. * */
get_header();
the_post();

$who_can_apply = get_field("who_can_apply", get_the_ID());
$who_can_apply_description = get_field("who_can_apply_description", get_the_ID());
$who_can_apply_list = get_field("who_can_apply_list", get_the_ID());

$types_of_uae_residence_visas = get_field("types_of_uae_residence_visas", get_the_ID());
$types_visas_title = get_field("types_visas_title", get_the_ID());

$general_document_title = get_field("general_document_title", get_the_ID());
$general_document_description = get_field("general_document_description", get_the_ID());
$general_core_requirements = get_field("general_core_requirements", get_the_ID());

$visa_steps_title = get_field("visa_steps_title", get_the_ID());
$visa_steps_description = get_field("visa_steps_description", get_the_ID());
$advantages = get_field("advantages", get_the_ID());
$help = get_field("help", get_the_ID());

$who_can_apply_list = str_replace('<li>', '<li><i class="bi bi-check-circle me-2 text-primary"></i>', $who_can_apply_list);

$steps_sections = [
  [
    'title' => get_field('step1_title', get_the_ID()),
    'description' => get_field('step1_description', get_the_ID())
  ],
  [
    'title' => get_field('step2_title', get_the_ID()),
    'description' => get_field('step2_description', get_the_ID())
  ],
  [
    'title' => get_field('step3_title', get_the_ID()),
    'description' => get_field('step3_description', get_the_ID())
  ],
  [
    'title' => get_field('step4_title', get_the_ID()),
    'description' => get_field('step4_description', get_the_ID())
  ],
  [
    'title' => get_field('step5_title', get_the_ID()),
    'description' => get_field('step5_description', get_the_ID())
  ],
  [
    'title' => get_field('step6_title', get_the_ID()),
    'description' => get_field('step6_description', get_the_ID())
  ],
  [
    'title' => get_field('step7_title', get_the_ID()),
    'description' => get_field('step7_description', get_the_ID())
  ]
];

$visa_sections = [
  [
    'title' => get_field('golden_visa_title', get_the_ID()),
    'subtitle' => get_field('golden_visa_description', get_the_ID()),
    'description' => get_field('golden_visa_content', get_the_ID()),
    'icon' => '<i class="bi bi-award-fill"></i>'
  ],
  [
    'title' => get_field('students_visa_title', get_the_ID()),
    'subtitle' => get_field('student_visa_description', get_the_ID()),
    'description' => get_field('student_visa_content', get_the_ID()),
    'icon' => '<i class="bi bi-mortarboard-fill"></i>'
  ],
  [
    'title' => get_field('green_visa_title', get_the_ID()),
    'subtitle' => get_field('green_visa_description', get_the_ID()),
    'description' => get_field('green_visa_content', get_the_ID()),
    'icon' => '<i class="bi  bi-tree-fill "></i>'
  ],
  [
    'title' => get_field('retirement_visa_title', get_the_ID()),
    'subtitle' => get_field('retirement_visa_description', get_the_ID()),
    'description' => get_field('retirement_visa_content_copy', get_the_ID()),
    'icon' => '<i class="bi bi-umbrella-fill"></i>'
  ],
  [
    'title' => get_field('employment_visa_title', get_the_ID()),
    'subtitle' => get_field('employment_visa_description', get_the_ID()),
    'description' => get_field('employment_visa_content', get_the_ID()),
    'icon' => '<i class="bi bi-briefcase-fill"></i>'
  ],
  [
    'title' => get_field('investor_visa_title', get_the_ID()),
    'subtitle' => get_field('investor_visa_description', get_the_ID()),
    'description' => get_field('investor_visa_content', get_the_ID()),
    'icon' => '<i class="bi bi-cash-stack"></i>'
  ],
  [
    'title' => get_field('family_visa_title', get_the_ID()),
    'subtitle' => get_field('family_visa_description', get_the_ID()),
    'description' => get_field('family_visa_content', get_the_ID()),
    'icon' => '<i class="bi bi-people-fill"></i>'
  ]
];

// $integrated_legal_support = get_field('integrated_legal_support', get_the_ID());
// $integrated_legal_support_image = get_field(selector: 'integrated_legal_support_image', get_the_ID());
// $integrated_legal_support = str_replace(search: '<li>', '<li><i class="bi bi-check-circle me-2 text-primary"></i>', $integrated_legal_support);
// $why_work_with_us = get_field('why_work_with_us', get_the_ID());
// $why_work_with_us_image = get_field('why_work_with_us_image', get_the_ID());
// $why_work_with_us = str_replace('<strong class="title">', '<strong class="title"><i class="bi bi-check-circle me-2 text-primary"></i>', $why_work_with_us);

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
        <li class="current">Residency and Immigration</li>
      </ol>
    </div>
  </nav>
</div>

<section class="about section bg-light">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 content aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
        <p>Who Can Apply ?</p>
        <h3><?= $who_can_apply ?></h3>
        <p class="fst-italic">
          <?= $who_can_apply_description ?>
          <?= $who_can_apply_list ?>
        </p>
      </div>

      <div class="col-lg-6 about-images aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-4">
          <div class="col-lg-6">
            <img src="<?= get_template_directory_uri() ?>/assets/img/gold-visa.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6">
            <div class="row gy-4">
              <div class="col-lg-12">
                <img src="<?= get_template_directory_uri() ?>/assets/img/work.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-12">
                <img src="<?= get_template_directory_uri() ?>/assets/img/visa3.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-6">
                <img src="<?= get_template_directory_uri() ?>/assets/img/invs1.jpeg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6">
                <img src="<?= get_template_directory_uri() ?>/assets/img/visa4.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="services visalist section ">
  <div class="container section-title" data-aos="fade-up">
    <h2><?= $types_of_uae_residence_visas ?></h2>
  </div>

  <div class="container">

    <div class="row gy-4">
      <?php
      $ind = 1;
      $count = count($visa_sections);

      foreach ($visa_sections as $visa) {

        $visa['description'] = str_replace('<li>', '<li><i class="bi bi-check-circle me-2 text-primary"></i>', $visa['description']);
        $is_last = $ind === $count;
        $is_odd = $count % 2 !== 0;
        $offset_class = ($is_last && $is_odd) ? 'offset-lg-4' : '';
        ?>
        <div class="col-lg-4 col-md-6 <?= $offset_class ?> cursor-pointer" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item  position-relative" data-bs-toggle="modal" data-bs-target="#modalVisa<?= $ind ?>">
            <div class="icon">
              <?= $visa['icon'] ?>
            </div>
            <h3><?= $visa['title'] ?></h3>
            <p> <?= $visa['subtitle'] ?>
            </p>
          </div>
        </div>
        <div class="modal fade visa" id="modalVisa<?= $ind ?>" tabindex="-1" aria-labelledby="modalGoldenLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header text-center ps-5">
                <h5 class="modal-title text-white fw-semibold	"><?= $visa['title'] ?></h5>
                <button type="button" class="btn-close white-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body p-5 pt-3">
                <?= $visa['description'] ?>
              </div>
            </div>
          </div>
        </div>
        <?php $ind++;
      } ?>

    </div>

  </div>

</section>

<section class="about section bg-light">

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-6 content aos-init aos-animate pe-5" data-aos="fade-up" data-aos-delay="100">
        <h3 class="mb-4 fw-bold"><?= $general_document_title ?></h3>
        <?= $general_document_description ?>
        <?php
        $general_core_requirements = str_replace('<li>', '<li><i class="bi bi-check-circle me-2 text-primary"></i>', $general_core_requirements);
        echo $general_core_requirements;
        ?>
      </div>

      <div class="col-lg-6 about-images aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-4">
          <img class="rounded-5" src="<?= get_template_directory_uri() ?>/assets/img/passport1.png">
        </div>

      </div>

    </div>

  </div>
</section>


<section class="services visastep section">
  <div class="container section-title" data-aos="fade-up">
    <h2><?= $visa_steps_title ?></h2>
    <?= $visa_steps_description ?>
  </div>

  <div class="container">
    <div class="timeline">
      <?php $ind = 1;
      foreach ($steps_sections as $step) { ?>
        <div class="timeline-step">
          <div class="circle-number"><?= $ind ?></div>
          <div class="step-card">
            <h5 class="fw-bold"><?= $step['title'] ?></h5>
            <?php
            $step['description'] = str_replace('<li>', '<li><i class="bi bi-check-circle me-2 text-primary"></i>', $step['description']);
            echo $step['description'];
            ?>

          </div>
        </div>
        <?php $ind++;
      } ?>

    </div>
  </div>

</section>

<section class="about section advantages bg-light">

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-6 about-images aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
        <div class="gy-4">
          <img class="rounded-5 w-100" src="<?= get_template_directory_uri() ?>/assets/img/passport.png">
        </div>

      </div>
      <div class="col-lg-6 content aos-init aos-animate pe-5 ps-5" data-aos="fade-up" data-aos-delay="100">
        <h3 class="mb-4 fw-bold">Advantages of Holding a UAE Residence Visa</h3>
        <?php
        $advantages = str_replace('<li>', '<li><i class="bi bi-check-circle me-2 text-primary"></i>', $advantages);
        echo $advantages;
        ?>
      </div>


    </div>

  </div>
</section>

<section class="about section advantages">

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-6 content aos-init aos-animate pe-5 ps-5" data-aos="fade-up" data-aos-delay="100">
        <h3 class="mb-4 fw-bold">How We Can Help</h3>
        <?php
        $help = str_replace('<li>', '<li><i class="bi bi-check-circle me-2 text-primary"></i>', $help);
        echo $advantages;
        ?>
      </div>
      <div class="col-lg-6 about-images aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-4">
          <div class="col-lg-6">
            <img src="<?= get_template_directory_uri() ?>/assets/img/help1.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6">
            <img src="<?= get_template_directory_uri() ?>/assets/img/help2.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6">
            <img src="<?= get_template_directory_uri() ?>/assets/img/help4.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6">
            <img src="<?= get_template_directory_uri() ?>/assets/img/help3.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
</section>

<?php
get_footer();
?>