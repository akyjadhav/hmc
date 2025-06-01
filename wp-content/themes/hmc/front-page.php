<?php get_header(); ?>

<?php

$banner = get_field('top_banner', get_the_ID());
?>

<section class="py-5 position-relative top-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <img src="<?= $banner['url'] ?>" class="img-fluid mb-4" alt="Hero Image">
      </div>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <h2 class="mb-4 fw-bold">Our Mission</h2>
      </div>
      <div class="col-md-5">
        <p><strong>At House Martin Consultancy,</strong> our mission is to empower businesses with the knowledge and
          resources they need to succeed in the UAE's competitive market.</p>
      </div>
      <div class="col-md-5">
        <p><strong>We understand</strong> the unique challenges of establishing and growing a business in this region
          and are here to provide tailored solutions that meet your specific goals.</p>
      </div>
    </div>
  </div>
</section>

<section id="about" class="about section">

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-6 content aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
        <p class="who-we-are">Our Mission</p>
        <h3>Unleashing Potential with Creative Strategy</h3>
        <p class="fst-italic">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.
        </p>
      </div>

      <div class="col-lg-6 about-images aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-4">
          <div class="col-lg-6">
            <img src="assets/img/about-company-1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6">
            <div class="row gy-4">
              <div class="col-lg-12">
                <img src="assets/img/about-company-2.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-12">
                <img src="assets/img/about-company-3.jpg" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
</section>


<!-- Blog Section -->
<section class="py-5 blog-content-card bg-light">
  <div class="container">
    <h2 class="mb-3 fw-bold">Blog</h2>
    <p class="mb-4 grey-text">A daily dose of branding and visual identity.</p>
    <div class="row g-4">
      <?php
      $blog = new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => 9
      ]);
      if ($blog->have_posts()):
        while ($blog->have_posts()):
          $blog->the_post(); ?>
          <div class="col-md-4">
            <div class="card h-100">
              <?php if (has_post_thumbnail()): ?>
                <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" alt="<?php the_title(); ?>">
              <?php endif; ?>
              <div class="card-body">
                <small class="text-muted grey-text"><?php echo get_the_date(); ?></small>
                <h5 class="card-title mt-2"><?php the_title(); ?></h5>
                <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
              </div>
            </div>
          </div>
        <?php endwhile;
        wp_reset_postdata();
      endif; ?>
    </div>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <h2 class="mb-4 fw-bold">Our Commitment</h2>
      </div>
      <div class="col-md-5">
        <p><strong>We pride ourselves</strong> on fostering long-term relationships with our clients.</p>
      </div>
      <div class="col-md-5">
        <p><strong>Your success is our success,</strong> and we are dedicated to providing unparalleled service that
          exceeds your expectations.</p>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>