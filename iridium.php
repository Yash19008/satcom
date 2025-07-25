<?php
include 'include/header.php';
?>
<meta name="keywords" content="Iridium satellite communication, Global vessel connectivity, Maritime satellite network, L-band broadband, Iridium Certus for ships">
<title>Station Satcom | Starlink</title>
<style>
    /**/

    .hero-section {
        position: relative;
        background-color: #010d1b;
        z-index: 0;
        overflow: hidden;
    }

    .hero-section::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6) 60%, #000000 100%),
            /* smooth fade */
            url(assets/images/iridium/astronauts-flying-spaceship-explore-galactic-planets-generated-by-ai.jpg) center center / cover no-repeat;
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

    .carousel-control-next img {
        filter: none !important;
    }

    .carousel-control-prev img {
        filter: none !important;
    }

    .uc-slider-wrapper {
        position: relative;
        padding: 60px 0;
    }

    .carousel-inner {
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
        background-image: url("assets/images/vsat/cargo.png");
        /* The image used */
        background-color: #cccccc;
        /* Used if the image is unavailable */
        height: 300px;
        background-position: center;
        /* Center the image */
        background-repeat: no-repeat;
        /* Do not repeat the image */
        background-size: cover;
        /* Resize the background image to cover the entire container */
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

    .second-row-benefit {
        gap: 100px;
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
    <a href="#"><span>Starlink</span></a>
</section>

<!-- banner section -->
<!-- Globalstar Section -->
<section class="globalstar-section">
    <div class="globalstar-overlay">
        <div class="globalstar-content">
            <h2 class="globalstar-title">IRIDIUM</h2>
            <p class="globalstar-description">
             Iridium delivers truly global satellite connectivity, ensuring seamless communication anywhere on Earth, including polar regions. With the Iridium Certus network, vessels benefit from secure, reliable voice and data services, ideal for maritime operations, emergency communication, and remote fleet management.
            </p>
            <a href="contact-us.php" class="globalstar-button">CONNECT WITH A SPECIALIST</a>
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
                                        <h3>Commercial Shipping</h3>
                                        <p>Secure vessel tracking and crew communication
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
                                        <h3>Offshore & Energy</h3>
                                        <p>SCritical voice and data services in isolated areas.
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
                                        <h3>Expedition Yachting</h3>
                                        <p>Reliable communication in remote waters.
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
                                        <h3>Fishing & Research Vessels</h3>
                                        <p>Real-time weather updates and emergency alerts.
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
                                        <p>Secure vessel tracking and crew communication.
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
            <div class="kb-card kb-global-coverage p-4 rounded">
                <div class="icon mb-3">
                    <img src="assets/images/fleetbroad/keyfeature/keyfet1.svg" alt="LEO Satellite Constellation icon">
                </div>
                <p>LEO Satellite Constellation,<br> truly global coverage,<br> including polar regions.</p>
            </div>
        </div>


        <div class="col text-center">
            <div class="kb-card kb-voice-data p-4 rounded">
                <div class="icon mb-3">
                    <img src="assets/images/iridium/key/iridium-key-2.svg" alt="High-speed, reliable L-band connectivity icon">
                </div>
                <p>High-speed, reliable<br> L-band connectivity with<br> low-latency performance.</p>
            </div>
        </div>


        <div class="col text-center">
            <div class="kb-card kb-compact p-4 rounded">
                <div class="icon mb-3">
                    <img src="assets/images/iridium/key/iridium-key-3.svg" alt="Secure and encrypted communication icon">
                </div>
                <p>Secure and encrypted<br> communication for critical<br> operations.</p>
            </div>
        </div>


        <div class="col text-center">
            <div class="kb-card kb-sos p-4 rounded">
                <div class="icon mb-3">
                    <img src="assets/images/iridium/key/iridium-key-4.svg" alt="Weather-resistant, rugged terminals icon">
                </div>
                <p>Weather-resistant, rugged<br> terminals for maritime<br> environments.</p>
            </div>
        </div>


        <div class="col text-center">
            <div class="kb-card kb-bandwidth p-4 rounded">
                <div class="icon mb-3">
                    <img src="assets/images/iridium/key/iridium-key-5.svg" alt="Supports voice, high speed data, IoT, and tracking applications icon">
                </div>
                <p>Supports voice, high speed<br> data, IoT, and tracking<br> applications.</p>
            </div>
        </div>

    </div>
</section>
<div class="platforms-container container">
  <h2 class="platforms-title">BENEFITS FOR CUSTOMERS</h2>
  <div class="row">
    <div class="col-lg-3 col-6">

      <div class="platform-card connectivity">
        <div class="overlay"></div>
        <div class="platforms-arrow-btn"></div>
        <div class="card-content">
          <div class="card-title">Reliable <br>Connectivity:</div>
          <!-- <div class="card-desc">From Starlink and VSAT to Iridium and GSM, our connectivity solutions provide seamless, always-on communication across land, sea, and air.</div>
          <div class="card-desc card-desc-bottom">Explore: Starlink | VSAT | OneWeb | NexusWave | GSM | Iridium | FBB</div> -->
          <div class="card-desc card-desc-bottom">Uninterrupted data access in sea</div>
          <div class="card-footer-2">Stay connected even in the most remote waters.</div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-6">

      <div class="platform-card cybersecurity">
        <div class="overlay"></div>
        <div class="platforms-arrow-btn"></div>
        <div class="card-content">
          <div class="card-title">Flexible Bandwidth Options:</div>
          <div class="card-desc">Secure your fleet’s data, networks, and onboard IT infrastructure with advanced cybersecurity and management tools.</div>
          <div class="card-desc card-desc-bottom">Explore: Station 365 | Station R.O.C.K | Station SecureX | Station Tab (KIV) | Station Kiosk | IT Service & Attendance</div>
          <div class="card-footer-2">Choose from low to high-speed plans.</div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-6">

      <div class="platform-card crew-engagement">
        <div class="overlay"></div>
        <div class="platforms-arrow-btn"></div>
        <div class="card-content">
          <div class="card-title">Enhanced Safety & Security:</div>
          <div class="card-desc">Improve crew morale, retention, and connectivity with advanced entertainment, welfare, and communication solutions.</div>
          <div class="card-desc card-desc-bottom">Explore: Station Connect & Engage | Station Multiplex | Station Care | Starlink for Crew</div>
          <div class="card-footer-2">GMDSS compliance for emergency calls.</div>
        </div>
      </div>

    </div>
    <div class="col-lg-3 col-6">

      <div class="platform-card operational-tech">
        <div class="overlay"></div>
        <div class="platforms-arrow-btn"></div>
        <div class="card-content">
          <div class="card-title">Operational <br>Efficiency:</div>
          <div class="card-desc">Advanced tracking, navigation, and security solutions for fleet operations, safety compliance, and real-time monitoring.</div>
          <div class="card-desc card-desc-bottom">Explore: Station Watch CCTV | Navigation Equipment | Radio & VDR APT | Remote Compass Adjustment | Remote NavCom Service | Vessel Tracking | Voyage Safety | AIS Tracking | LRIT</div>
          <div class="card-footer-2">Supports fleet management and real-time monitoring.</div>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- cards -->

<section class="uc-slider-wrapperr">   
<section class="mt-5 pt-5 container py-5">
            <h2 class="text-start mb-5">TECHNICAL SPECIFICATION</h2>
            <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 justify-content-center g-4 g-md-5">

                <div class="col text-center">
                    <div class="kb-card kb-models p-4 rounded">
                        <div class="icon mb-3">
                            <img src="assets/images/iridium/tech/iridium-tech-1.svg" alt="Speeds Icon">
                        </div>
                        <p><strong>Speeds:</strong><br> Up to 704 Kbps with<br> Iridium Certus.</p>
                    </div>
                </div>

                <div class="col text-center">
                    <div class="kb-card kb-power p-4 rounded">
                        <div class="icon mb-3">
                            <img src="assets/images/iridium/tech/iridium-tech-2.svg" alt="Voice Icon">
                        </div>
                        <p><strong>Voice:</strong><br> Crystal-clear,<br> low-latency calling</p>
                    </div>
                </div>

                <div class="col text-center">
                    <div class="kb-card kb-certifications p-4 rounded">
                        <div class="icon mb-3">
                            <img src="assets/images/iridium/tech/iridium-tech-3.svg" alt="Coverage Icon">
                        </div>
                        <p><strong>Coverage:</strong><br> 66 cross-linked<br> LEO satellites.</p>
                    </div>
                </div>

                <div class="col text-center">
                    <div class="kb-card kb-communication p-4 rounded">
                        <div class="icon mb-3">
                            <img src="assets/images/iridium/tech/iridium-tech-4.svg" alt="Hardware Icon">
                        </div>
                        <p><strong>Hardware:</strong><br> Iridium Certus<br> terminals and<br> handsets.</p>
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
                    Upgrade to iridium for reliable global satellite communication.
                </h2>
                <a href="contact-us.php" class="fleet-cta-button">Get in touch today.</a>
            </div>

        </section>


    </div>
    <?php
    include 'include/footer.php';
    ?>