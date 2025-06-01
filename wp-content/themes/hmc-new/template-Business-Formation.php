<?php /** * Template Name: Business Formation 
  * * Description: Page template. * */
get_header();
the_post();
$banner = get_field('top_banner', get_the_ID());
$middleBanner = get_field('middle_banner', get_the_ID());
$bottomBg = get_field('bottom_bg', get_the_ID()); ?>
<main class="main business-formation-container">

  <!-- Page Title -->
  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>Business Formation </h1>
            <p class="mb-0">When establishing a business in the UAE, selecting the appropriate jurisdiction—Mainland,
              Free Zone, or Offshore—is a critical decision. Each offers distinct advantages and limitations that can
              significantly impact your operations, market access, taxation, and ownership structure.</p>
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


  <div class="container section">

    <div class="row align-items-center content-block">
      <div class="col-md-6 animate__animated animate__fadeInLeft">
        <h4 class="text-center">Mainland</h4>
        <p class="te-2">  One of the most frequently utilized corporate forms on the UAE mainland is the limited liability company
          (LLC), which can be licensed to perform a wide range of trading, commercial, and industrial activities.
          Following the recent changes to the UAE Commercial Companies Law, LLCs can also be established for certain
          professional activities.
        
          Depending on the type of anticipated business activities, full foreign ownership of the LLC might be
          permissible. The LLC is required to have a registered office space for its operations and is managed by a
          General Manager, who will become a resident of the UAE. While there is no mandatory minimum capital, certain
          business activities require a higher capital.
        </p>
        <p class="te-2">
          Mainland businesses are regulated by the Department of Economic Development (DED) and are subject to the
          provisions of the UAE Commercial Companies Law No. 32 of 2021, as amended.
        </p>
      </div>
      <div class="col-md-6 animate__animated animate__fadeInRight">
        <img src="http://18.196.45.208/test/wp-content/themes/hmc-new/assets/img/bf1.jpeg" alt="Mainland" class="img-fluid shadow-lg p-4 mb-5 bg-white rounded">
      </div>
    </div>

    <div class="row align-items-center content-block flex-md-row-reverse">
      <div class="col-md-6 animate__animated animate__fadeInRight">
        <h4 class="text-center">Free Zone</h4>
        <p class="te-2">
          With over 40 free zones across the UAE that offer solutions for company formation, it may become challenging
          to choose the appropriate free zone for establishing your business.
        </p>
        <p class="te-2">
          Dubai, for instance, has an array of more than 30 free zones, many of which are globally recognized. These
          free zones are equipped with top-notch business facilities and offer flexible setup options such as flexi-desk
          and flexi-office arrangements.
   
          While maintaining complete privacy and having minimal reporting obligations, international investors have the
          opportunity to hold 100% ownership of the share capital and are permitted to repatriate the entirety of the
          company's profits.
        </p>
      </div>
      <div class="col-md-6 animate__animated animate__fadeInLeft">
        <img src="http://18.196.45.208/test/wp-content/themes/hmc-new/assets/img/bf2.jpeg" alt="Free Zone" class="shadow-lg p-4 mb-5 bg-white rounded img-fluid">
      </div>
    </div>

    <div class="row align-items-center content-block">
      <div class="col-md-6 animate__animated animate__fadeInLeft">
        <h4 class="text-center">Offshore</h4>
        <p class="te-2">
          An offshore company is primarily used as a Holding Company, although it can also be used for international
          trading, contracting, consulting services, and protection of assets and intellectual property.
          This structure offers complete tax exemption, allowing you to retain the entirety of your earnings. There is
          no obligation for auditing, and the identities of shareholders and directors are not disclosed in public
          records. However, it is important to meet the annual legal compliance obligations.
        </p>
        <p class="te-2">
          An offshore company is restricted from conducting business within the UAE and does not grant eligibility for a
          UAE residence visa.
        </p>
      </div>
      <div class="col-md-6 animate__animated animate__fadeInRight">
        <img src="http://18.196.45.208/test/wp-content/themes/hmc-new/assets/img/bf3.jpeg" alt="Offshore" class="shadow-lg p-4 mb-5 bg-white rounded img-fluid">
      </div>
    </div>
  </div>

  <?php
  get_footer();
  ?>
