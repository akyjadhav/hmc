<?php
/**
 * Template Name: Free Zone Company
 * Description:  Page template.
 *
 */

get_header();
the_post();
$banner = get_field('top_banner', get_the_ID());
$middleBanner = get_field('middle_banner', get_the_ID());
$bottomBg = get_field('bottom_bg', get_the_ID());


$ownershipImg = get_field('ownership_img', get_the_ID());
$marketAccessImg = get_field('market_access_img', get_the_ID());
$officeRequirementsImg = get_field('office_requirements_img', get_the_ID());
$visaEligibilityImg = get_field('visa_eligibility_img', get_the_ID());
$taxationImg = get_field('taxation_img', get_the_ID());
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
    <h1 class="display-4 fw-bold">Free Zone Company Setup in UAE</h1>
    <p class="lead">Free Zones are designated areas that offer benefits such as tax exemptions, 100% foreign ownership
      and simplified setup processes. Each Free Zone is governed by its own regulatory authority and often caters to
      specific sectors.</p>
  </div>
</section>

<!-- Overview Section -->
<section class="py-5">
  <div class="container">
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

      <div class="col-md-6">
        <div class="features-box text-left">
          <h5 class="box-title">Ownership</h5>
          <p>As of 2025, foreign investors can own mainland companies in most sectors without a local sponsor.</p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="features-box text-center">
          <img class="rounded-circle" src="<?= $ownershipImg['url'] ?>" alt="Image Redrawing">
        </div>
      </div>

      <div class="col-md-6">
        <div class="features-box text-center">
          <img  class="rounded-circle" src="<?= $marketAccessImg['url'] ?>" alt="Image Redrawing">
        </div>
      </div>

      <div class="col-md-6">
        <div class="features-box text-left">
          <h5 class="box-title">Market Access</h5>
          <p>Traditionally, Free Zone companies could only operate within their zone and internationally, and were required to appoint a local distributor or set up a mainland entity to trade in the UAE. However, under recent regulatory changes (in particular, Executive Council Resolution No. 11 of 2025), Free Zone companies can now expand operations into the mainland, subject to obtaining approvals (e.g., a special license from the the Dubai Department of Economy and Tourism (DET)). This creates greater flexibility for Free Zone companies seeking access to the broader UAE market.</p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="features-box text-left">
          <h5 class="box-title">Office Requirements</h5>
          <p>Varies by Free Zone; options include flexi-desks, serviced offices or dedicated spaces.</p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="features-box text-center">
          <img class="rounded-circle" src="<?= $officeRequirementsImg['url'] ?>" alt="Image Redrawing">
        </div>
      </div>

      <div class="col-md-6">
        <div class="features-box text-center">
          <img class="rounded-circle" src="<?= $visaEligibilityImg['url'] ?>" alt="Image Redrawing">
        </div>
      </div>

      <div class="col-md-6">
        <div class="features-box text-left">
          <h5 class="box-title">Visa Eligibility</h5>
          <p>Visa quotas primarily depend on office type and size; with common structures allowing 1–3 visas for flexi-desks and more for serviced or dedicated offices.</p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="features-box text-left">
          <h5 class="box-title">Taxation</h5>
          <p>Many Free Zones offer 0% corporate tax, although this varies depending on the zone and type of activity..</p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="features-box text-center">
          <img class="rounded-circle" src="<?= $taxationImg['url'] ?>" alt="Image Redrawing">
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
            <p class="text-muted">Businesses targeting the local UAE market</p>
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
            <p class="text-muted">Companies seeking to engage in government projects.</p>
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
            <p class="text-muted">Enterprises requiring a significant on-ground presence.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php
get_footer();
?>
