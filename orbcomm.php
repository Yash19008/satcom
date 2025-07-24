<?php
include 'include/header.php';
?>
<title>Station Satcom | Orbcomm</title>
<meta name="keywords" content="Orbcomm ST Terminal, satellite SCADA monitoring, remote maritime asset tracking, two-way satellite connectivity, OGx IDP marine terminal">

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
      url(assets/images/globalstar/satellite-connectivity-with-earth-background.jpg) center center / cover no-repeat;
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
  background-image: url("assets/images/orbcomm/orbcomm-usecase.jpg"); /* The image used */
  background-color: #cccccc; /* Used if the image is unavailable */
  height: 300px;
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
}



.usecase-content {
  display: flex;
  align-items: end;
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
<section class="breadcrumb">
  <a href="index.php"><span>Home</span></a>
  <a href="#"><span>Connectivity</span></a>
  <a href="#"><span>Orbcomm</span></a>
</section>

<!-- banner section -->
<!-- Globalstar Section -->
<section class="globalstar-section">
  <div class="globalstar-overlay">
    <div class="globalstar-content">
      <h2 class="globalstar-title">ORBCOMM</h2>
      <p class="globalstar-description">
        Orbcomm ST Terminal is a rugged, satellite-based communication solution offering remote visibility and control over critical industrial assets.
        With two-way satellite connectivity and programmable functionality, it's engineered for maritime, logistics, and remote SCADA applications.
      </p>
      <a href="#contact" class="globalstar-button">CONNECT WITH A SPECIALIST</a>
    </div>
  </div>
</section>


</div>
<section class="uc-slider-wrapperr">
    <div class="container">
        <h2 class="text-start mb-5">USE CASES</h2>
        <div class="container-fluid usecase-slider-container ">
  <div id="usecaseSlider" class="carousel slide usecase-carousel" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="row justify-content-center">
          <div class="col-12 col-md-1 col-lg-12 usecase-slide">
            <div class="usecase-content">
              <div class="usecase-text">
                <h3>FISHING & CARGO VESSELS</h3>
                <p>Monitor vessel movement and onboard equipment
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
                <h3>Offshore Platforms </h3>
                <p>Manage pumps, flow meters, and pipelines
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
                <h3>Heavy Equipment </h3>
                <p>Track usage and performance of maritime machinery
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
                <h3>Rail & Transport Fleets </h3>
                <p>Cross-domain usage with maritime and terrestrial mobility
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
                <h3>Satellite Based Tracking over Inmarsat Network</h3>
                <p>Personal, Soldier, Land, Marine and Aviation
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
    </div>
</section>
<!-- key benefits card section -->
<section class="mt-5 pt-5 container py-5">
  <h2 class="text-start mb-5">KEY FEATURES</h2>
  <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 justify-content-center g-4 g-md-5">

  <div class="col text-center">
  <div class="kb-card kb-smallest-tracker p-4 rounded">
    <div class="icon mb-3">
      <img src="assets/images/orbcomm/key/orbcomm-key-1.svg" alt="Satellite Connectivity Icon">
    </div>
    <p>Two-way satellite<br> connectivity for real-time<br> monitoring and control.</p>
  </div>
</div>

<div class="col text-center">
  <div class="kb-card kb-low-cost-tracking p-4 rounded">
    <div class="icon mb-3">
      <img src="assets/images/orbcomm/key/orbcomm-key-2.svg" alt="Programmable Interface Icon">
    </div>
    <p>Fully programmable<br> interface for custom<br> integrations.</p>
  </div>
</div>

<div class="col text-center">
  <div class="kb-card kb-leo-satellite p-4 rounded">
    <div class="icon mb-3">
      <img src="assets/images/orbcomm/key/orbcomm-key-3.svg" alt="Dual Antenna Icon">
    </div>
    <p>Embedded Dual active<br> antennas with low-elevation<br> angle performance.</p>
  </div>
</div>

<div class="col text-center">
  <div class="kb-card kb-multi-mode p-4 rounded">
    <div class="icon mb-3">
      <img src="assets/images/orbcomm/key/orbcomm-key-4.svg" alt="GPS Module Icon">
    </div>
    <p>Integrated 56 Channel<br> GPS module.</p>
  </div>
</div>

<div class="col text-center">
  <div class="kb-card kb-power-options p-4 rounded">
    <div class="icon mb-3">
      <img src="assets/images/orbcomm/key/orbcomm-key-5.svg" alt="Accelerometer Icon">
    </div>
    <p>Built-in accelerometer<br> and extended memory.</p>
  </div>
</div>

<div class="col text-center">
  <div class="kb-card kb-motion-alerts p-4 rounded">
    <div class="icon mb-3">
      <img src="assets/images/orbcomm/key/orbcomm-key-6.svg" alt="OGx IDP Icon">
    </div>
    <p>Operates on OGx(Ka band)<br> and IDP(L band) satellite services.</p>
  </div>
</div>


  </div>
</section>

<!-- cards -->
<section class="lm-section py-5">
  <div class="container">
    <div class="text-start mb-5">
      <h2 class="lm-title">BENEFITS FOR CUSTOMERS</h2>
    </div>

    <div class="container">
      <div class="row">
        <!-- First Row (3 Images) -->
        <div class="col-md-4 col-sm-6 mb-4">
  <div class="benefits-card">
    <img src="assets/images/orbcomm/benefit/orbcomm-benefit-1.jpg" alt="Remote Maritime Visibility" class="benefits-image rounded-4">
    <div class="benefits-text">
      Complete asset visibility in remote<br> maritime and offshore environments
    </div>
  </div>
</div>

<div class="col-md-4 col-sm-6 mb-4">
  <div class="benefits-card">
    <img src="assets/images/orbcomm/benefit/orbcomm-benefit-2.jpg" alt="Custom Integration" class="benefits-image rounded-4">
    <div class="benefits-text">
      Seamless integration into<br> custom applications
    </div>
  </div>
</div>

<div class="col-md-4 col-sm-6 mb-4">
  <div class="benefits-card">
    <img src="assets/images/orbcomm/benefit/orbcomm-benefit-3.jpg" alt="Enhanced Equipment Tracking" class="benefits-image rounded-4">
    <div class="benefits-text">
      Enhanced tracking and control of<br> mobile and fixed equipment
    </div>
  </div>
</div>
</div>

<div class="row justify-content-center second-row-benefit mt-4">
  <!-- Second Row (2 Images) -->
  <div class="col-md-4 col-sm-6 mb-4">
    <div class="benefits-card">
      <img src="assets/images/orbcomm/benefit/orbcomm-benefit-4.jpg" alt="Real-time Diagnostics" class="benefits-image rounded-4">
      <div class="benefits-text">
        Reduced downtime with real-time<br> alerts and diagnostics
      </div>
    </div>
  </div>

  <div class="col-md-4 col-sm-6 mb-4">
    <div class="benefits-card">
      <img src="assets/images/orbcomm/benefit/orbcomm-benefit-5.jpg" alt="Marine Durability" class="benefits-image rounded-4">
      <div class="benefits-text">
        Durable design built for tough<br> marine conditions
      </div>
    </div>
  </div>
</div>

      </div>
    </div>
  </div>
</section>


<section class="uc-slider-wrapperr">
<section class="mt-5 pt-5 container py-5">
  <h2 class="text-start mb-5">TECHNICAL SPECIFICATION</h2>
  <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 justify-content-center g-4 g-md-5">

    <div class="col text-center">
      <div class="kb-card kb-models p-4 rounded">
        <div class="icon mb-3">
          <img src="assets/images/orbcomm/tech/orbcomm-tech-1.svg" alt="Models Icon">
        </div>
        <p><strong>Models:</strong><br>ST 2100, ST 6100, ST 9100</p>
      </div>
    </div>

    <div class="col text-center">
      <div class="kb-card kb-power p-4 rounded">
        <div class="icon mb-3">
          <img src="assets/images/orbcomm/tech/orbcomm-tech-2.svg" alt="Power Icon">
        </div>
        <p><strong>Power:</strong><br> OGx & IDP satellite networks</p>
      </div>
    </div>

    <div class="col text-center">
      <div class="kb-card kb-certifications p-4 rounded">
        <div class="icon mb-3">
          <img src="assets/images/orbcomm/tech/orbcomm-tech-3.svg" alt="Certifications Icon">
        </div>
        <p><strong>Certifications:</strong><br> APIs, sample code, development<br> tools included</p>
      </div>
    </div>

    <div class="col text-center">
      <div class="kb-card kb-communication p-4 rounded">
        <div class="icon mb-3">
          <img src="assets/images/orbcomm/tech/orbcomm-tech-4.svg" alt="Communication Icon">
        </div>
        <p><strong>Communication:</strong><br> Sealed housing, wide <br>operating temp range</p>
      </div>
    </div>

    <div class="col text-center">
      <div class="kb-card kb-lifespan p-4 rounded">
        <div class="icon mb-3">
          <img src="assets/images/orbcomm/tech/orbcomm-tech-5.svg" alt="Lifespan Icon">
        </div>
        <p><strong>Life Span:</strong><br> GPS, GLONASS, <br>BeiDou support</p>
      </div>
    </div>

  </div>
 
</section>

<!-- vsat slider section end -->

<!-- technical sp -->




<!-- cards -->
<!--  -->
</section>

<!-- Fleet CTA Section -->

<div class="specialist-section-img connectivity">
  <div class="d-flex">
    <section class="specialist-section container">
      <div class="fleet-cta-container text-center">
            <h2 class="fleet-cta-text">
            Achieve end-to-end asset control with orbcomm
            </h2>
            <a href="#contact" class="fleet-cta-button">Reach out to discuss your maritime tracking needs </a>
      </div>
    
  </section>


</div>
<?php
include 'include/footer.php';
?>