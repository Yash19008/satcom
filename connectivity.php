<?php
include 'include/header.php';
?>
<title>Station Satcom | Connectivity</title>
<!-- style -->
<style>
  .hero-section {
    position: relative;
    background-color: #010d1b;
    z-index: 1;
    overflow: hidden;
  }

  .hero-section::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6) 60%, #000000 100%),
      /* smooth fade */
      url(assets/images/banner-image/Connectivity_Hero\ Banner.png) center center / cover no-repeat;
    mix-blend-mode: screen;
    opacity: 0.8;
    z-index: -1;
  }

  .carousel {
    scroll-behavior: smooth;
  }

  .dots-container {
    display: flex;
    justify-content: center;
    gap: 8px;
    margin-top: 50px;
  }

  .dots-container .dot {
    width: 8px;
    height: 8px;
    background-color: rgba(255, 255, 255, 0.4);
    border-radius: 50%;
    transition: all 0.3s ease;
  }

  .dots-container .dot.active {
    width: 20px;
    background-color: white;
    border-radius: 10px;
  }

  .specialist-section-img {
    background: linear-gradient(to bottom, rgb(2 20 73 / 33%) 60%, #00000070 100%), url(assets/images/footers/Page\ Bottom.png);
    background-size: auto;
    background-size: cover;
    opacity: 0.8;
  }

  .banner-text {
    width: 60%;
    margin: 0 auto;
  }

  .kb-card p {
    width: 70%;
    margin: 0 auto;
  }
</style>
<!-- end style -->

<section class="breadcrumb">
  <a href="index.php"><span>Home</span></a>
  <a href="#"><span>Connectivity</span></a>
</section>

<!-- banner section -->
<section class="banner_section">
  <div class="container">
    <div class="top-banner">
      <div class="banner-text">
        <h1 class="text-uppercase">Connectivity</h1>
        <p class="text-center" style="font-weight: 400;">Connectivity is the foundation of digital transformation across remote and mobile industries. From ships and aircraft to offshore rigs, mines, and mission-critical government operations—our advanced connectivity solutions enable seamless communication, real-time data access, and secure operations wherever you are.</p>
        <button class="top-banner-btn mt-3">Connect with a Specialist</button>
      </div>
    </div>

    <h3 class="text-uppercase" style="font-weight: 400;">Partnering with world class leaders</h3>
  </div>
</section>
</div>

<?php include 'include/partner_logo.php'; ?>

<!-- end banner section -->
<!-- key benefits card section -->
<section class="mt-5 pt-5 container py-5">
  <h2 class="text-start mb-5">KEY BENEFITS</h2>
  <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 g-4 g-md-5">

    <div class="col">
      <div class="kb-card kb-broadband p-4 rounded text-center h-100">
        <div class="icon mb-3">
          <img src="assets/images/connectivity-keybenefits/1.svg" alt="Broadband Icon" class="img-fluid">
        </div>
        <p>High-speed broadband across major shipping lanes and remote waters.</p>
      </div>
    </div>

    <div class="col">
      <div class="kb-card kb-low-latency p-4 rounded text-center h-100">
        <div class="icon mb-3">
          <img src="assets/images/connectivity-keybenefits/2.svg" alt="Low Latency Icon" class="img-fluid">
        </div>
        <p>Low-latency solutions for seamless data exchange.</p>
      </div>
    </div>

    <div class="col">
      <div class="kb-card kb-hybrid-tech p-4 rounded text-center h-100">
        <div class="icon mb-3">
          <img src="assets/images/connectivity-keybenefits/4.svg" alt="Hybrid Icon" class="img-fluid">
        </div>
        <p>Hybrid technology ensures optimised connectivity.</p>
      </div>
    </div>

    <div class="col">
      <div class="kb-card kb-gsm p-4 rounded text-center h-100">
        <div class="icon mb-3">
          <img src="assets/images/connectivity-keybenefits/3.svg" alt="GSM Icon" class="img-fluid">
        </div>
        <p>Reliable GSM services extending mobile network access.</p>
      </div>
    </div>

    <div class="col">
      <div class="kb-card kb-satellite p-4 rounded text-center h-100">
        <div class="icon mb-3">
          <img src="assets/images/connectivity-keybenefits/5.svg" alt="Satellite Icon" class="img-fluid">
        </div>
        <p>Satellite-powered asset tracking and control capabilities.</p>
      </div>
    </div>

    <div class="col">
      <div class="kb-card kb-cost-effective p-4 rounded text-center h-100">
        <div class="icon mb-3">
          <img src="assets/images/connectivity-keybenefits/6.svg" alt="Ship Icon" class="img-fluid">
        </div>
        <p>Cost-effective solutions for essential maritime communication.</p>
      </div>
    </div>

  </div>
</section>


<!-- included product card section -->
<section class="container py-5 inc_prod_section">
  <h2 class="text-start mb-5">INCLUDED PRODUCTS & SOLUTIONS</h2>
  <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">

    <!-- Card Template -->
    <div class="col">
      <a href="starlink.php">
        <div class="ips-card ips-card-starlink text-center">
          <div class="ips-card-arrow"></div>
          <div class="ips-overlay">
            <div class="ips-icon ips-img-1">
              <img src="assets/images/included-icon/Starlink_Logo.svg" alt="Starlink" height="50" style="filter: brightness(0) invert(1);">
            </div>
            <div class="ips-desc">
              <p>High-performance broadband for uninterrupted, low-latency global operations.High-performance broadband for uninterrupted, low-latency global operations.</p>
            </div>
          </div>
        </div>
      </a>
    </div>

    <!-- Repeat for other cards -->
    <div class="col">
      <a href="vsat.php">
        <div class="ips-card ips-card-vsat text-center">
          <div class="ips-card-arrow"></div>
          <div class="ips-overlay">
            <div class="ips-icon">
              <!-- <img src="assets/images/included-icon/" alt="Starlink" height="50" style="filter: brightness(0) invert(1);"> -->
              <h4>VSAT</h4>
            </div>
            <div class="ips-desc">
              <p> High-speed broadband with global coverage.</p>
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="col">
      <a href="oneweb.php">
        <div class="ips-card ips-card-oneweb text-center">
          <div class="ips-card-arrow"></div>
          <div class="ips-overlay">
            <div class="ips-icon ips-img-3">
              <img src="assets/images/included-icon/Brdy-OneWeb-white-on-black-block.png" alt="Starlink" height="50" style="filter: brightness(0) invert(1);">
            </div>
            <div class="ips-desc">
              <p> Low-latency connectivity powered by LEO satellites.</p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col">
      <a href="iridium.php">
        <div class="ips-card ips-card-iridium text-center">
          <div class="ips-card-arrow"></div>
          <div class="ips-overlay">
            <div class="ips-icon ips-img-5">
              <img src="assets/images/included-icon/IMG_Logo_Iridium_Black-Gold.png" alt="Starlink" height="50" style="filter: brightness(0) invert(1);">
            </div>
            <div class="ips-desc">
              <p> Global satellite voice and data services.</p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col">
      <a href="globalstar.php">
        <div class="ips-card ips-card-globalstar text-center">
          <div class="ips-card-arrow"></div>
          <div class="ips-overlay">
            <div class="ips-icon ips-img-8">
              <img src="assets/images/included-icon/Globalstar-Logo-NEW.png" alt="Starlink" height="50" style="filter: brightness(0) invert(1);">
            </div>
            <div class="ips-desc">
              <p>Real-time asset tracking with SmartOne devices for rugged environments</p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col">
      <a href="orbcomm.php">
        <div class="ips-card ips-card-orbcomm text-center">
          <div class="ips-card-arrow"></div>
          <div class="ips-overlay">
            <div class="ips-icon">
              <img src="assets/images/included-icon/Orbcomm_logo.svg" alt="Starlink" height="50" style="filter: brightness(0) invert(1);">
            </div>
            <div class="ips-desc">
              <p>Two-way satellite visibility for remote asset monitoring and SCADA control.</p>
            </div>
          </div>
        </div>
      </a>
    </div>

    <!-- Add additional cards similarly -->
    <!-- Example for Iridium -->
    <div class="col">
      <a href="gsm.php">
        <div class="ips-card ips-card-gsm text-center">
          <div class="ips-card-arrow"></div>
          <div class="ips-overlay">
            <div class="ips-icon">
              <!-- <img src="assets/images/Starlink_Logo.svg" alt="Starlink" height="50" style="filter: brightness(0) invert(1);"> -->
              <h4>GSM SERVICE</h4>
            </div>
            <div class="ips-desc">
              <p>Extended mobile network access for offshore communication.</p>
            </div>
          </div>
        </div>
      </a>
    </div>


    <!-- Repeat for other cards -->
    <div class="col">
      <a href="fleetbroad.php">
        <div class="ips-card ips-card-fleetbroad text-center">
          <div class="ips-card-arrow"></div>
          <div class="ips-overlay">
            <div class="ips-icon">
              <h4>FLEAT BROADBAND</h4>
              <!-- <img src="assets/images/included-icon/3d-rendering-biorobots-concept.jpg" alt="Starlink" height="50" style="filter: brightness(0) invert(1);"> -->
            </div>
            <div class="ips-desc">
              <p> Cost-effective broadband ensuring operational efficiency and safety</p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col">
      <a href="fleetbroad.php">
        <div class="ips-card ips-card-fleet text-center">
          <div class="ips-card-arrow"></div>
          <div class="ips-overlay">
            <div class="ips-icon">
              <h4>FLEET XPRESS</h4>
              <!-- <img src="assets/images/included-icon/3d-rendering-biorobots-concept.jpg" alt="Starlink" height="50" style="filter: brightness(0) invert(1);"> -->
            </div>
            <div class="ips-desc">
              <p> Always-on broadband combining Inmarsat’s Global Xpress and FBB.</p>
            </div>
          </div>
        </div>
      </a>
    </div>


    <!-- Add additional cards similarly -->
    <!-- Example for Iridium -->


  </div>
</section>

<!-- station satcom section -->
<div class="mt-5 pt-5 pb-5">
  <div class="container">
    <h2 class="text-start mb-5">WHY CHOOSE STATION SATCOM</h2>
  </div>
  <section class=" text-white d-flex justify-content-center align-items-center h-100">

    <div class="responsive-wrapper">

      <div class="circle-container position-relative">
        <!-- Concentric Circles -->
        <div class="circle circle-1"></div>
        <div class="circle circle-2"></div>
        <div class="circle circle-3"></div>
        <div class="circle circle-4"></div>

        <!-- Center Logo -->
        <img src="assets/images/circle-satcom/logo-07.png" alt="Center Logo" class="center-logo" />

        <!-- Signal + Text Left -->
        <div class="signal signal-left text-start">
          <img src="assets/images/circle-satcom/1.png" alt="Signal" />
          <p>Proven reliability with industry-leading service providers.</p>
        </div>

        <!-- Signal + Text Right -->
        <div class="signal signal-right text-end">
          <p>24/7 technical support for uninterrupted global operations.</p>
          <img src="assets/images/circle-satcom/1.png" alt="Signal" />
        </div>

        <!-- Signal + Text Bottom -->
        <div class="signal signal-bottom text-center">
          <img src="assets/images/circle-satcom/1.png" alt="Signal" />
          <p>Wide range of connectivity options tailored to vessel and asset needs.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="text-white text-center my-5 py-5">
    <h3>Discuss the best connectivity solutions for your fleet or <br> remote operations.</h3>
    <div class="mt-5">
      <a href="contact-us.php" class="cust_button">Contact Us</a>
    </div>
  </section>
</div>

<!-- navigating future section -->
<div class="container py-5 navigating">
  <h2 class="future-title">NAVIGATING THE FUTURE</h2>
  <div class="row g-3">
    <!-- Large card -->
    <div class="col-12 col-lg-6 col-md-6">
      <div class="card-future future-card-main" style="background-image: url('assets/images/aerial-view-cargo-ship-with-cargo-container-sea.jpg');">
        <div class="card-overlay"></div>
        <div class="card-content-future">
          <h5>Starlink in Offshore Energy: A Case Study</h5>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
      </div>
    </div>

    <!-- Small cards -->


    <div class="col-lg-6 col-12 col-md-6">
      <div class="row">
        <div class="col-lg-6 col-6 mb-2">
          <div class="card-future future-card-city" style="background-image: url('assets/images/navigator/1.png');">
            <div class="card-overlay"></div>
            <div class="card-content-future">
              <h5>From VSAT to OneWeb: The Fleetwide Transition</h5>
              <p>Dummy text of the printing and typesetting industry.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-6 mb-2">
          <div class="card-future future-card-city" style="background-image: url('assets/images/navigator/2.png');">
            <div class="card-overlay"></div>
            <div class="card-content-future">
              <h5>How Governments Use Tactical Satcom</h5>
              <p>Dummy text of the printing and typesetting industry.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-6 col-md-6">
          <div class="card-future future-card-city" style="background-image: url('assets/images/navigator/3.png');">
            <div class="card-overlay"></div>
            <div class="card-content-future">
              <h5>Cybersecurity Trends for Maritime IT Managers</h5>
              <p>Dummy text of the printing and typesetting industry.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-6 col-md-6">
          <div class="card-future future-card-city" style="background-image: url('assets/images/navigator/4.png');">
            <div class="card-overlay"></div>
            <div class="card-content-future">
              <h5>The ROI of Crew Connectivity</h5>
              <p>Dummy text of the printing and typesetting industry.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="col-12 mt-3 text-lg-end col-sm-center">
    <button class="btn btn-future-view">View more</button>
  </div>
</div>

<!-- View more button -->


<!-- form section -->
<div class="specialist-section-img connectivity">
  <div class="d-flex">
    <section class="specialist-section container">
      <h2 class="specialist-title">CONNECT WITH A SPECIALIST</h2>
      <form class="specialist-form">
        <div class="specialist-row">
          <input type="text" placeholder="Name*" class="specialist-input" required>
          <input type="email" placeholder="Email*" class="specialist-input" required>
        </div>
        <div class="specialist-row">
          <div class="specialist-col">
            <input type="text" placeholder="Phone" class="specialist-input">
          </div>
          <div class="specialist-col">
            <input type="text" placeholder="Country*" class="specialist-input" required>
          </div>
          <div class="specialist-col specialist-col-last">
            <div class="select-with-circle-wrapper">
              <select class="select-with-circle" required>
                <option value="Topic" disabled selected hidden>Topic</option>
                <option value="general">General Inquiry</option>
                <option value="support">Technical Support</option>
                <option value="sales">Sales</option>
                <option value="partnership">Partnership</option>
                <option value="other">Other</option>
              </select>
            </div>
          </div>
        </div>

        <div>
          <textarea placeholder="Message" class="specialist-textarea" required></textarea>
        </div>
        <div class="form-checkbox">
          <label class="specialist-checkbox">
            <input type="checkbox" required />
          </label>
          <p style="margin: 0;"> Your data is necessary for processing your inquiry and will be used only for this purpose.
            You can find our <a href="#" style="color: #fff; text-decoration: underline;">Privacy Policy</a> here.</p>
        </div>
        <div class="specialist-submit">
          <button type="submit">Submit</button>
        </div>
  </div>
  </form>
  </section>
</div>

<?php
include 'include/footer.php';
?>