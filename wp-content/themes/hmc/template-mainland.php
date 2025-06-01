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
<section class="py-5 position-relative top-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <img src="<?= $banner['url'] ?>" class="img-fluid mb-4" alt="Hero Image">
            </div>
        </div>
    </div>
</section>
<section class="hero text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">Mainland Company Setup in UAE</h1>
        <p class="lead">Operate across the UAE and internationally with full ownership freedom and market access.</p>
    </div>
</section>

<!-- Overview Section -->
<section class="py-5">
    <div class="container">
        <p class="text-center mb-4">Mainland companies are licensed by the Department of Economic Development (DED) of
            the respective Emirate. They allow businesses to operate anywhere within the UAE and internationally without
            restrictions.</p>

        <section class="py-5 position-relative top-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <img src="<?= $middleBanner['url'] ?>" class="img-fluid mb-4" alt="Hero Image">
                    </div>
                </div>
            </div>
        </section>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="icon-box text-center">
                    <i class="bi bi-person-check"></i>
                    <h5 class="box-title">100% Foreign Ownership</h5>
                    <p>As of 2025, foreign investors can own mainland companies in most sectors without a local sponsor.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-box text-center">
                    <i class="bi bi-globe2"></i>
                    <h5 class="box-title">Market Access</h5>
                    <p>Operate across the UAE and globally. Bid for local government contracts without limitations.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-box text-center">
                    <i class="bi bi-building"></i>
                    <h5 class="box-title">Office Requirement</h5>
                    <p>Physical office space of at least 200 sq. ft. is mandatory for a mainland company license.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-box text-center">
                    <i class="bi bi-person-vcard"></i>
                    <h5 class="box-title">Visa Eligibility</h5>
                    <p>Get unlimited visas, usually one visa per 80 sq. ft. of office space.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-box text-center">
                    <i class="bi bi-cash-coin"></i>
                    <h5 class="box-title">Corporate Tax</h5>
                    <p>Pay only 9% tax on profits above AED 375,000, making it cost-efficient for growth.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 banner-bg" style="background-image:url(<?= $bottomBg['url'] ?>);">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">Ideal For</h2>
    <div class="row text-center g-4">
      
      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="card shadow-sm border-0 h-100">
          <div class="card-body">
            <div class="icon-circle text-white mb-3 mx-auto">
              <i class="bi bi-geo-alt-fill fs-3"></i>
            </div>
            <h5 class="box-title">Local UAE Market</h5>
            <p class="text-muted">Perfect for businesses targeting the domestic UAE audience with physical operations.</p>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="card shadow-sm border-0 h-100">
          <div class="card-body">
            <div class="icon-circle text-white mb-3 mx-auto">
              <i class="bi bi-briefcase-fill fs-3"></i>
            </div>
            <h5 class="box-title">Government Projects</h5>
            <p class="text-muted">Ideal for companies aiming to participate in public sector contracts and tenders.</p>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="card shadow-sm border-0 h-100">
          <div class="card-body">
            <div class="icon-circle text-white mb-3 mx-auto">
              <i class="bi bi-building fs-3"></i>
            </div>
            <h5 class="box-title">Physical Presence</h5>
            <p class="text-muted">Great for enterprises requiring a significant on-ground workforce and infrastructure.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php
get_footer();
?>