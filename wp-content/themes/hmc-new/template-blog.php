<?php /** * Template Name: Blog 
  * * Description: Page template. * */ ?>
<?php get_header(); ?>

<main class="main">

  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>Blog </h1>
            <p class="mb-0">A daily dose of branding and visual identity</p>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li class="current">Business Formation </li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->

  <section class="py-5 blog-content-card">
    <div class="container">
      <div class="row g-4">
        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $blog = new WP_Query([
          'post_type' => 'post',
          'posts_per_page' => 9,
          'paged' => $paged
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
          <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <!-- Pagination -->
        <div class="pagination-wrapper mt-5">
          <?php
          $big = 999999999;
          $pages = paginate_links([
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $blog->max_num_pages,
            'prev_text' => '&laquo;',
            'next_text' => '&raquo;',
            'type' => 'array',
          ]);

          if (is_array($pages)) {
            echo '<ul class="pagination justify-content-center">';
            foreach ($pages as $page) {
              $active = strpos($page, 'current') !== false ? ' active' : '';
              echo '<li class="page-item' . $active . '">' . str_replace('page-numbers', 'page-link', $page) . '</li>';
            }
            echo '</ul>';
          }
          ?>
        </div>


        <?php wp_reset_postdata(); endif; ?>
    </div>
  </section>


</main>

<?php get_footer(); ?>