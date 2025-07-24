<?php
include 'include/header.php';
?>
<title>Station Satcom | Station VSAT</title>
<meta name="keywords" content="VSAT maritime, satellite internet for ships, marine VSAT solutions, high-speed ship internet, offshore VSAT">
<style>
body {
    background-size: cover !important;
}
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
      url(assets/images/banner-image/VSAT_\ Banner.webp) center center / cover no-repeat;
    mix-blend-mode: screen;
    opacity: 0.8;
    z-index: -1;
  }

  .specialist-section-img {
    background: linear-gradient(to bottom, rgb(2 20 73 / 33%) 60%, #00000070 100%), url(assets/images/footers/vsat-footer.png);
    background-size: auto;
    background-size: cover;
    opacity: 0.8;
  }

  .banner-text{
      text-align: left;
  }
  .banner-text p{
    font-weight: 300 !important;
  }
  .top-banner{
      align-items: baseline;
  }
  .use-cases{
      padding-left:15px;
  }
  /**/
  .uc-card {
  opacity: 1;
  transform: translateX(0);
  transition: all 0.6s ease-in-out;
  display: flex;
  flex-direction: row;
  border-radius: 20px;
  overflow: hidden;
  min-height: 350px;
  transition: transform 0.6s ease-in-out;
}
.carousel-control-next img{
    filter: none !important;
}
.carousel-control-prev  img{
    filter: none !important;
}
.uc-slider-wrapper {
  position: relative;
  padding: 60px 0;
}
.carousel-inner{
    border-radius: 40px;
}
.uc-carousel {
  position: relative;
  overflow: visible;
}

.uc-left {
  flex: 1;
  padding: 30px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.uc-left h3 {
  font-size: 2rem;
  font-weight: 600;
}

.uc-left p {
  font-size: 1rem;
  margin-top: 10px;
  opacity: 0.9;
}

.uc-right {
  flex: 1;
  background-size: cover;
  background-position: center;
  min-height: 250px;
}

/* Arrows with images */
.uc-carousel .carousel-control-prev,
.uc-carousel .carousel-control-next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  border: none;
  background: transparent;
  width: 50px;
  height: 50px;
  z-index: 10;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0;
}

.uc-carousel .carousel-control-prev {
  left: -70px;
}

.uc-carousel .carousel-control-next {
  right: -70px;
}

/* Hide default icon span if any */
.uc-carousel .carousel-control-prev-icon,
.uc-carousel .carousel-control-next-icon,
.uc-arrow {
  display: none;
}

/* Image styling for arrow */
.uc-carousel .carousel-control-prev img,
.uc-carousel .carousel-control-next img {
  width: 100px;
  height: 100px;
  object-fit: contain;
}

/* Dots below the card */
.uc-carousel .carousel-indicators {
  position: static;
  margin-top: 25px;
}

.uc-carousel .carousel-indicators [data-bs-target] {
  background-color: #fff;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  opacity: 0.4;
  transition: opacity 0.3s;
}

.uc-carousel .carousel-indicators .active {
  opacity: 1;
}

.carousel-inner {
  display: flex;
  gap: 20px;
}

.carousel-item .uc-card {
  margin: 0 15px;
  animation: slideIn 0.6s ease-in-out forwards;
}

@keyframes slideIn {
  0% {
    opacity: 0;
    transform: translateX(100px);
  }

  100% {
    opacity: 1;
    transform: translateX(0);
  }
}

@keyframes slideOut {
  0% {
    opacity: 1;
    transform: translateX(0);
  }

  100% {
    opacity: 0;
    transform: translateX(-100px);
  }
}


/*vsat slider*/
/* vsat slider styling */

.usecase-slider-container {
  padding: 30px 15px;
}

.usecase-slide {
  position: relative;
  border-radius: 20px;
  overflow: hidden;
  background-image: url("assets/images/vsat/cargo.png"); /* The image used */
  background-color: #cccccc; /* Used if the image is unavailable */
  height: 300px;
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
}



.usecase-content {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  color: white;
  padding: 20px;
  height: 100%;
}

.usecase-text {
  flex: 1 1 50%;
  padding: 20px;
}

.usecase-text h3 {
  font-size: 1.8rem;
  font-weight: 500;
}

.usecase-text p {
  margin-top: 10px;
  font-size: 1rem;
}

.usecase-image {
  flex: 1 1 50%;
  max-height: 300px;
  object-fit: cover;
  border-radius: 0 0 20px 0;
}



.custom-dots {
  bottom: -50px;
}

.custom-dots [data-bs-target] {
  background-color: rgba(255, 255, 255, 0.5);
  border: none;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  margin: 0 4px;
  transition: all 0.3s ease;
}

.custom-dots .active {
  background-color: white;
  width: 20px;
  height: 8px;
  border-radius: 20px;
}

/* Responsive */
@media (max-width: 768px) {
  .usecase-content {
    flex-direction: column;
    text-align: center;
  }

  .usecase-text,
  .usecase-image {
    flex: 1 1 100%;
  }
}
 .custom-arrow {
  top: 50%;
  transform: translateY(-50%);
  background: transparent;
  border: none;
  z-index: 10;
  width: 60px;
  height: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
}

.carousel-control-prev {
  left: -85px;
}
.carousel-control-next {
  right: -85px;
}

.arrow-container {
  position: relative;
  width: 60px;
  height: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.arrow-circle {
  background: linear-gradient(135deg, #e83e8c, #fd7e14);
  width: 40px;
  height: 40px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.arrow-icon {
  width: 0;
  height: 0;
  border: solid #033059;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 8px;
}

.arrow-left .arrow-icon {
  transform: rotate(135deg);
}

.arrow-right .arrow-icon {
  transform: rotate(-45deg);
}


.arrow-line {
  position: absolute;
  background-color: #033059;
  height: 3px;
  width: 56px;
}

.arrow-left .arrow-line {
  
  margin-right: -36px;
}

.arrow-right .arrow-line {
  left: -20px;
  margin-left: 5px;
}

/* vsat slider styling end */
/**/
.carousel-item.active {
  animation: slideIn 0.6s ease forwards;
}
 .benefits-card {
      text-align: center;
      color: white;
      border-radius: 10px;
      overflow: hidden;
      margin-bottom: 20px;
    }

    .benefits-image {
      width: 100%;
      height: 250px;
      object-fit: cover;
        border-radius: 30px;
    }

    .benefits-text {
      padding: 10px 15px;
      font-size: 16px;
    }
    .second-row-benefit{
        gap:100px;
    }
/* Responsive Styles */
@media (max-width: 768px) {
  .uc-card {
    flex-direction: column;
  }

  .uc-left {
    text-align: center;
    padding: 20px;
  }

  .uc-carousel .carousel-control-prev {
    left: -40px;
  }

  .uc-carousel .carousel-control-next {
    right: -40px;
  }
  .carousel-control-prev {
 display: none;
}
.carousel-control-next {
  display: none;
}

}

</style>
<!-- banner section vsat -->

<section class="breadcrumb">
  <a href="index.php"><span>Home</span></a>
  <a href="#"><span>Connectivity</span></a>
  <a href="#"><span>VSAT</span></a>
</section>

<!-- banner section -->
<section>
  <div class="container">
    <div class="top-banner">
      <div class="banner-text">
        <h1 class="text-uppercase">VSAT</h1>
        <p class="text-justifyr" style="font-weight: 400;">Ku band VSAT (Very Small Aperture Terminal) provides <br>high-speed, reliable satellite connectivity for maritime<br> operations. Designed to support data-intensive<br> applications, it ensures seamless global communication, <br>enhancing operational efficiency, safety, and crew welfare..</p>
      </div>
    </div> 
</div>
</section>
</div>
<section class="uc-slider-wrapperr">
  <div class="container">
  <h2 class="text-start mb-5">USE CASES</h2>

  <!--  <div id="ucCarousel" class="carousel slide uc-carousel" data-bs-ride="carousel">-->
  <!--    <div class="carousel-inner">-->
        <!-- Slide 1 -->
  <!--      <div class="carousel-item active" style="background-image: url('assets/images/vsat/cargo.png');">-->
  <!--        <div class="uc-card">-->
  <!--          <div class="uc-left">-->
  <!--            <h3>Commercial Shipping</h3>-->
  <!--            <p>Real-time data exchange for fleet<br> management and operational efficiency</p>-->
  <!--          </div>-->
  <!--          <div class="uc-right" ></div>-->
  <!--        </div>-->
  <!--      </div>-->

        <!-- Slide 2 -->
  <!--      <div class="carousel-item" style="background-image: url('assets/images/vsat/cargo.png');">-->
  <!--        <div class="uc-card">-->
  <!--          <div class="uc-left">-->
  <!--            <h3>Smart Logistics</h3>-->
  <!--            <p>Enhanced route planning and live tracking for smarter logistics operations</p>-->
  <!--          </div>-->
  <!--          <div class="uc-right" ></div>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </div>-->

      <!-- Arrows -->
              <!-- Left Arrow -->
  <!--      <button class="carousel-control-prev" type="button" data-bs-target="#ucCarousel" data-bs-slide="prev">-->
  <!--        <img src="assets/images/vsat/arrow.svg" alt="Prev" class="uc-arrow-img" />-->
  <!--      </button>-->
        
        <!-- Right Arrow -->
  <!--      <button class="carousel-control-next" type="button" data-bs-target="#ucCarousel" data-bs-slide="next">-->
  <!--        <img src="assets/images/vsat/arrowcopy.svg" alt="Next" class="uc-arrow-img" />-->
  <!--      </button>-->


      <!-- Dots -->
  <!--    <div class="carousel-indicators">-->
  <!--      <button type="button" data-bs-target="#ucCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>-->
  <!--      <button type="button" data-bs-target="#ucCarousel" data-bs-slide-to="1"></button>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div>-->
  <!-- vsat slider section start -->

<div class="container-fluid usecase-slider-container ">
  <div id="usecaseSlider" class="carousel slide usecase-carousel" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="row justify-content-center">
          <div class="col-12 col-md-1 col-lg-12 usecase-slide">
            <div class="usecase-content">
              <div class="usecase-text">
                <h3>Commercial Shipping </h3>
                <p>Real-time data exchange for fleet management and operational efficiency</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Slide 2 -->
      <div class="carousel-item ">
        <div class="row justify-content-center">
          <div class="col-12 col-md-1 col-lg-12 usecase-slide">
            <div class="usecase-content">
              <div class="usecase-text">
                <h3>Offshore & Energy </h3>
                <p>Reliable connectivity for offshore platforms and energy sites</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item ">
        <div class="row justify-content-center">
          <div class="col-12 col-md-1 col-lg-12 usecase-slide">
            <div class="usecase-content">
              <div class="usecase-text">
                <h3>Fishing & Yachting </h3>
                <p>Seamless voice and data access for fishing vessels and luxury yachts</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item ">
        <div class="row justify-content-center">
          <div class="col-12 col-md-1 col-lg-12 usecase-slide">
            <div class="usecase-content">
              <div class="usecase-text">
                <h3>Government & Defense </h3>
                <p>Secure communication for naval and government maritime operations</p>
              </div>
            </div>
          </div>
        </div>
      </div>
     <div class="carousel-item ">
        <div class="row justify-content-center">
          <div class="col-12 col-md-1 col-lg-12 usecase-slide">
            <div class="usecase-content">
              <div class="usecase-text">
                <h3>Commercial Shipping</h3>
                <p>Real-time data exchange for fleet<br> management and operational efficiency</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Add 3 more slides here similarly -->
    </div>

    <!-- Custom Arrows -->
    <button class="carousel-control-prev custom-arrow" type="button" data-bs-target="#usecaseSlider" data-bs-slide="prev">
      <div class="arrow-container arrow-left">
        <div class="arrow-line"></div>
        <div class="arrow-circle">
          <i class="arrow-icon"></i>
        </div>
      </div>
    </button>

    <button class="carousel-control-next custom-arrow" type="button" data-bs-target="#usecaseSlider" data-bs-slide="next">
      <div class="arrow-container arrow-right">
        <div class="arrow-circle">
          <i class="arrow-icon"></i>
        </div>
        <div class="arrow-line"></div>
      </div>
    </button>

    <!-- Dots -->
    <div class="carousel-indicators custom-dots">
      <button type="button" data-bs-target="#usecaseSlider" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#usecaseSlider" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#usecaseSlider" data-bs-slide-to="2"></button>
      <button type="button" data-bs-target="#usecaseSlider" data-bs-slide-to="3"></button>
      <button type="button" data-bs-target="#usecaseSlider" data-bs-slide-to="4"></button>
    </div>
  </div>
</div>


<!-- vsat slider section end -->
</section>

<!-- key benefits card section -->
<section class="mt-5 pt-5 container py-5">
  <h2 class="text-start mb-5">KEY FEATURES</h2>
  <div class="row  g-5 text-center">

    <div class="col-12 col-md-6 col-lg-4">
      <div class="kb-card kb-broadband p-4 rounded">
        <div class="icon mb-3">
          <img src="assets/images/vsat/key/vsat-key1.png" alt="Broadband Icon">
        </div>
        <p>Secure network with<br> advanced encryption and <br>cybersecurity</p>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4">
      <div class="kb-card kb-low-latency p-4 rounded">
        <div class="icon mb-3">
          <img src="assets/images/vsat/key/vsat-key2.png" alt="Low Latency Icon">
        </div>
        <p>Low-latency connectivity <br>for real-time<br> communication</p>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4">
      <div class="kb-card kb-hybrid-tech p-4 rounded">
        <div class="icon mb-3">
          <img src="assets/images/vsat/key/vsat-key3.png" alt="Hybrid Icon">
        </div>
        <p>Scalable bandwidth<br> solutions tailored<br>to operational needs</p>
      </div>
    </div>
    <div class="row g-4 justify-content-center mt-3">
      <div class="col-12 col-md-6 col-lg-4">
        <div class="kb-card kb-satellite p-4 rounded">
          <div class="icon mb-3">
            <img src="assets/images/vsat/key/vsat-key4.png" alt="Satellite Icon">
          </div>
          <p>High-speed broadband<br> with global coverage.</p>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="kb-card kb-cost-effective p-4 rounded">
          <div class="icon mb-3">
            <img src="assets/images/vsat/key/vsat-key5.png" alt="Ship Icon">
          </div>
          <p>24/7 monitoring and<br> technical support</p>
        </div>
      </div>
    </div>

  </div>
</section>
<!---->
<section class="lm-section py-5">
  <div class="container">
    <div class="text-start mb-5">
      <h2 class="lm-title">BENEFITS FOR CUSTOMERS</h2>
    </div>

    <div class="container py-5">
  <div class="row">
    <!-- First Row (3 Images) -->
    <div class="col-md-4 col-sm-6 mb-4">
      <div class="benefits-card">
        <img src="assets/images/vsat/benefits/1.png" alt="Global Communication" class="benefits-image">
        <div class="benefits-text">Ensures uninterrupted global communication for fleets</div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 mb-4">
      <div class="benefits-card">
        <img src="assets/images/vsat/benefits/2.png" alt="Remote Operations" class="benefits-image">
        <div class="benefits-text">Supports remote operations, video conferencing, and data transfers</div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 mb-4">
      <div class="benefits-card">
        <img src="assets/images/vsat/benefits/3.png" alt="Crew Welfare" class="benefits-image">
        <div class="benefits-text">Enhances crew welfare with access to online entertainment and calls</div>
      </div>
    </div>
  </div>

  <div class="row justify-content-center second-row-benefit mt-5 ">
    <!-- Second Row (2 Images Centered) -->
    <div class="col-md-4 col-sm-6 mb-4">
      <div class="benefits-card">
        <img src="assets/images/vsat/benefits/4.png" alt="Cost Reduction" class="benefits-image">
        <div class="benefits-text">Reduces operational costs with efficient data usage</div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 mb-4">
      <div class="benefits-card">
        <img src="assets/images/vsat/benefits/5.png" alt="Compliance Standards" class="benefits-image">
        <div class="benefits-text">Meets compliance standards for maritime safety and connectivity</div>
      </div>
    </div>
  </div>
</div>
  </div>
</section>
<!---->
<section class="mt-3 pt-3 container py-5 inc_prod_section">
  <h2 class="text-start mb-5">Technical Specifications</h2>
  <div class="row  g-5 text-center">

    <div class="col-12 col-md-6 col-lg-3">
      <div class="kb-card kb-broadband p-4 rounded">
        <div class="icon mb-3">
          <img src="assets/images/vsat/key/vsat-key6.png" alt="Broadband Icon">
        </div>
        <h6>Bandwidth speeds:</h6>
        <p>Up to 10 Mbps <br>(download), 3 Mbps<br> (upload)</p>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-3">
      <div class="kb-card kb-low-latency p-4 rounded">
        <div class="icon mb-3">
          <img src="assets/images/vsat/key/vsat-key7.png" alt="Low Latency Icon">
        </div>
        <h6>Coverage:</h6>
        <p>Global, with<br> optimized <br>network</p>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-3">
      <div class="kb-card kb-hybrid-tech p-4 rounded">
        <div class="icon mb-3">
          <img src="assets/images/vsat/key/vsat-key8.png" alt="Hybrid Icon">
        </div>
         <h6>Network security:</h6>
        <p>AES encryption<br> and VPN support</p>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
      <div class="kb-card kb-hybrid-tech p-4 rounded">
        <div class="icon mb-3">
          <img src="assets/images/vsat/key/vsat-key-9.png" alt="Hybrid Icon">
        </div>
         <h6>Equipment:</h6>
        <p>Compact VSAT<br> antennas ranging<br> from 60cm to 2.4m</p>
      </div>
    </div>
  </div>
</section>
<!---->
<!---->
    <section class="text-white text-center mt-5 mb-5 pb-5">
        <h3>Enhance your vessel’s connectivity with <br>high-performance VSAT solutions.</h3>
        <div class="mt-5">
            <a href="contact-us.php" class="cust_button">Contact Us</a>
        </div>
    </section>
<!---->
<!---->
<!-- navigating future section -->
<!---->
<div class="container py-5 navigating">
  <h2 class="future-title">LATEST NEWS IN VSAT</h2>
  <div class="row g-3">
    <!-- Large card -->
    <div class="col-12 col-lg-6 col-md-6">
      <div class="card-future future-card-main" style="background-image: url('assets/images/aerial-view-cargo-ship-with-cargo-container-sea.jpg');">
        <div class="card-overlay"></div>
        <div class="card-content-future">
          <h5>Lorem Ipsum is simply</h5>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
      </div>
    </div>
<!---->
    <!-- Small cards -->
    <div class="col-lg-6 col-12 col-md-6">
      <div class="row">
        <div class="col-lg-6 col-6 mb-2">
          <div class="card-future future-card-city" style="background-image: url('assets/images/navigator/1.png');">
            <div class="card-overlay"></div>
            <div class="card-content-future">
              <h5>Lorem Ipsum</h5>
              <p>Dummy text of the printing and typesetting industry.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-6 mb-2">
          <div class="card-future future-card-city" style="background-image: url('assets/images/navigator/2.png');">
            <div class="card-overlay"></div>
            <div class="card-content-future">
              <h5>Lorem Ipsum</h5>
              <p>Dummy text of the printing and typesetting industry.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-6 col-md-6">
          <div class="card-future future-card-city" style="background-image: url('assets/images/navigator/3.png');">
            <div class="card-overlay"></div>
            <div class="card-content-future">
              <h5>Lorem Ipsum</h5>
              <p>Dummy text of the printing and typesetting industry.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-6 col-md-6">
          <div class="card-future future-card-city" style="background-image: url('assets/images/navigator/4.png');">
            <div class="card-overlay"></div>
            <div class="card-content-future">
              <h5>Lorem Ipsum</h5>
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


<script>
  document.addEventListener("DOMContentLoaded", function() {
    const track = document.querySelector(".uc-carousel-track");
    const slides = Array.from(document.querySelectorAll(".uc-slide"));
    const prevBtn = document.querySelector(".uc-prev");
    const nextBtn = document.querySelector(".uc-next");
    const dotsContainer = document.querySelector(".uc-dots");

    let current = 0;

    // Create dots
    slides.forEach((_, i) => {
      const dot = document.createElement("button");
      if (i === 0) dot.classList.add("active");
      dot.addEventListener("click", () => goToSlide(i));
      dotsContainer.appendChild(dot);
    });

    const updateSlides = () => {
      slides.forEach((slide, index) => {
        slide.classList.remove("active");
        dotsContainer.children[index].classList.remove("active");
      });
      slides[current].classList.add("active");
      dotsContainer.children[current].classList.add("active");
    };

    const goToSlide = (i) => {
      current = i;
      updateSlides();
    };

    nextBtn.addEventListener("click", () => {
      current = (current + 1) % slides.length;
      updateSlides();
    });

    prevBtn.addEventListener("click", () => {
      current = (current - 1 + slides.length) % slides.length;
      updateSlides();
    });
  });
</script>

<?php
include 'include/footer.php';
?>