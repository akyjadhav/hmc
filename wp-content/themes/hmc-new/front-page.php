<?php get_header(); ?>

<?php

$banner = get_field('top_banner', get_the_ID());
echo get_the_content();
?>
<main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active">
        <img src="http://localhost/hmc/wp-content/themes/hmc-new/assets/img/hero-carousel/hero-carousel-1.jpg" alt="">
        <div class="carousel-container">
          <div>
            <p>Elevating Business Horizons, Together</p>
            <h2>Business Horizons</h2>
            <a href="property-single.html" class="btn-get-started">sale | $ 356.000</a>
          </div>
        </div>
      </div><!-- End Carousel Item -->

     

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators"></ol>

    </div>

  </section><!-- /Hero Section -->




  <!-- Services Section -->
  <section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Our Services</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item  position-relative">
            <div class="icon">
              <i class="bi bi-award"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Expertise</h3>
            </a>
            <p> Our team of seasoned professionals brings extensive knowledge of local laws, regulations, and industry
              practices, ensuring your business setup process is smooth and compliant.
            </p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-tools"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Customized Solutions</h3>
            </a>
            <p>We believe every business is unique. Our services are tailored to your needs, from choosing the right
              business structure to obtaining licenses and permits.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-globe"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Multilingual Support</h3>
            </a>
            <p>We proudly offer our services in English, Arabic and Russian, ensuring clear communication and
              understanding throughout the process.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-shield-check"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Reliability</h3>
            </a>
            <p> Count on us for transparent, reliable, and time-efficient services. We handle the complexities, so you
              can focus on your business.</p>
            <a href="service-details.html" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-arrow-repeat"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3> End-to-End Assistance</h3>
            </a>
            <p>From initial consultation to post-setup support, we're with you every step of the way, offering
              comprehensive assistance.</p>
            <a href="service-details.html" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-file-earmark-text"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3> Ethics and Integrity</h3>
            </a>
            <p>We uphold the highest standards of ethics and integrity in all our interactions. Your business's
              confidentiality and sensitive information are always treated with the utmost respect.</p>
            <a href="service-details.html" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>

  </section><!-- /Services Section -->

  <!-- Agents Section -->
  <section id="agents" class="agents section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Team Members</h2>
      <p>Meet the passionate professionals behind our success</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-5">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <div class="pic"><img src="http://localhost/hmc/wp-content/themes/hmc-new/assets/img/team/team-1.jpg"
                class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="member">
            <div class="pic"><img src="http://localhost/hmc/wp-content/themes/hmc-new/assets/img/team/team-2.jpg"
                class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Sarah Jhonson</h4>
              <span>Rent Manager</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="member">
            <div class="pic"><img src="http://localhost/hmc/wp-content/themes/hmc-new/assets/img/team/team-3.jpg"
                class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>William Anderson</h4>
              <span>Sale manager<br></span>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div><!-- End Team Member -->

      </div>

    </div>

  </section><!-- /Agents Section -->

  <!-- Testimonials Section -->
  <section id="testimonials" class="testimonials section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Testimonials</h2>
      <p>Hear what our clients have to say about their experience.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 1,
              "spaceBetween": 40
            },
            "1200": {
              "slidesPerView": 3,
              "spaceBetween": 1
            }
          }
        }
      </script>
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                  class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium
                quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              </p>
              <div class="profile mt-auto">
                <img src="http://localhost/hmc/wp-content/themes/hmc-new/assets/img/testimonials/testimonials-1.jpg"
                  class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                  class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              </p>
              <div class="profile mt-auto">
                <img src="http://localhost/hmc/wp-content/themes/hmc-new/assets/img/testimonials/testimonials-2.jpg"
                  class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                  class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor
                labore quem eram duis noster aute amet eram fore quis sint minim.
              </p>
              <div class="profile mt-auto">
                <img src="http://localhost/hmc/wp-content/themes/hmc-new/assets/img/testimonials/testimonials-3.jpg"
                  class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                  class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim
                dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              </p>
              <div class="profile mt-auto">
                <img src="http://localhost/hmc/wp-content/themes/hmc-new/assets/img/testimonials/testimonials-4.jpg"
                  class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                  class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa
                labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              </p>
              <div class="profile mt-auto">
                <img src="http://localhost/hmc/wp-content/themes/hmc-new/assets/img/testimonials/testimonials-5.jpg"
                  class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section><!-- /Testimonials Section -->

  <section class="py-5 blog-content-card">
  <div class="container">
    <h2 class="mb-3 fw-bold text-center">Blog</h2>
    <p class="mb-4 grey-text text-center">A daily dose of branding and visual identity</p>
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

</main>
<?php wp_footer(); ?>

<?php get_footer(); ?>
