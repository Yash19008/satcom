<?php
include 'include/header.php';
?>
<title>Station Satcom | Starlink-for-Crew</title>
<meta name="keywords" content="Starlink for crew, Maritime Wi-Fi for seafarers, Crew internet at sea, Satellite broadband for crew, Seafarer personal connectivity">

<style>
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
            url(assets/images/gsm/thorough-spacecraft-with-fully-extended-solar-panels-travels-through-vastness-cosmos-illuminated-by-faraway-stars-looming-presence-our-planet.jpg) center center / cover no-repeat;
        mix-blend-mode: screen;
        opacity: 0.8;
        z-index: -1;
    }

    .specialist-section-img {
        background: linear-gradient(to bottom, rgb(2 20 73 / 33%) 60%, #00000070 100%), url(assets/images/footers/Page\ Bottom.png);
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
    <a href="#"><span>Crew Engagement</span></a>
    <a href="#"><span>Starlink-for-Crew</span></a>
</section>

<!-- banner section -->
<!-- Globalstar Section -->
<section class="globalstar-section">
    <div class="globalstar-overlay">
        <div class="globalstar-content">
            <h2 class="globalstar-title">Starlink for Crew</h2>
            <p class="globalstar-description">
                Starlink for Crew delivers high-speed, low-latency satellite internet to individual crew members, ensuring seamless connectivity for personal communication, entertainment, and welfare.
            </p>
            <a href="contact-us.php" class="globalstar-button">CONNECT WITH A SPECIALIST</a>
        </div>
    </div>
</section>
</div>
<section class="uc-slider-wrapperr mt-5 pt-5">
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
                            <div class="col-12 col-md-1 col-lg-12 usecase-slide" style="background-image: url('assets/images/crew-engagement/starlink-for-crew/use-cases/Use\ Cases_Starlink\ for\ crew_Commercial\ Shipping.png'); ">
                                <div class="usecase-content">
                                    <div class="usecase-text">
                                        <h3>Commercial Shipping </h3>
                                        <p>Enables crew to stay in touch with family.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item ">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-1 col-lg-12 usecase-slide" style="background-image: url('assets/images/crew-engagement/starlink-for-crew/use-cases/Use\ Cases_Starlink\ for\ crew_Fishing\ Vessels.png'); ">
                                <div class="usecase-content">
                                    <div class="usecase-text">
                                        <h3>Fishing Vessels</h3>
                                        <p>Provides entertainment and mental health support.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-1 col-lg-12 usecase-slide" style="background-image: url('assets/images/crew-engagement/starlink-for-crew/use-cases/Use\ Cases_Starlink\ for\ crew_Yachts\ &\ Cruise\ Ships.png'); ">
                                <div class="usecase-content">
                                    <div class="usecase-text">
                                        <h3>Cruise Lines</h3>
                                        <p>Enhances connectivity for onboard staff.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-1 col-lg-12 usecase-slide" style="background-image: url('assets/images/crew-engagement/starlink-for-crew/use-cases/Use\ Cases_Starlink\ for\ crew_Luxury\ Yachts.png'); ">
                                <div class="usecase-content">
                                    <div class="usecase-text">
                                        <h3>Yachts & Ferries </h3>
                                        <p>Offers Wi-Fi for guest and crew convenience.
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

        <!-- technical sp -->




        <!-- cards -->
        <!--  -->
</section>
<!-- key benefits card section -->
<section class="mt-5 pt-5 container py-5">
    <h2 class="text-start mb-5">KEY FEATURES</h2>
    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 justify-content-center g-4 g-md-5">
        <div class="col text-center">
            <div class="kb-card kb-global-coverage p-4 rounded">
                <div class="icon mb-3">
                    <img src="assets/images/crew-engagement/starlink-for-crew/key-features/Global Coverage.svg" alt="High-gain GSM boosters icon">
                </div>
                <p>Internet access across all <br>major shipping lanes.</p>
            </div>
        </div>


        <div class="col text-center">
            <div class="kb-card kb-voice-data p-4 rounded">
                <div class="icon mb-3">
                    <img src="assets/images/crew-engagement/starlink-for-crew/key-features/High-Speed, Low-Latency Performance.svg" alt="5G-ready technology icon">
                </div>
                <p>Seamless browsing, streaming, <br>and communication.</p>
            </div>
        </div>


        <div class="col text-center">
            <div class="kb-card kb-compact p-4 rounded">
                <div class="icon mb-3">
                    <img src="assets/images/crew-engagement/starlink-for-crew/key-features/Flexible Subscription Plans.svg" alt="Secure network infrastructure icon">
                </div>
                <p>Pay-as-you-go options tailored <br>to crew needs.</p>
            </div>
        </div>


        <div class="col text-center">
            <div class="kb-card kb-sos p-4 rounded">
                <div class="icon mb-3">
                    <img src="assets/images/crew-engagement/starlink-for-crew/key-features/Easy Installation & Management.svg" alt="Crystal-clear voice calls icon">
                </div>
                <p>Hassle-free onboarding <br>and usage.</p>
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
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="benefits-card">
                        <img src="assets/images/crew-engagement/starlink-for-crew/benefits-for-customers/Benefits Of Customer_Starlink for crew_Boosts Crew Morale.png" alt="Uninterrupted communication for crew and passengers" class="benefits-image rounded-4">
                        <div class="benefits-text">
                            Keeps crew connected with loved ones.
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="benefits-card">
                        <img src="assets/images/crew-engagement/starlink-for-crew/benefits-for-customers/Benefits Of Customer_Starlink for crew_Reduces Turnover Rates.png" alt="Cost-effective alternative to satellite-based services" class="benefits-image rounded-4">
                        <div class="benefits-text">
                           Enhances job satisfaction and well-being.
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="benefits-card">
                        <img src="assets/images/crew-engagement/starlink-for-crew/benefits-for-customers/Benefits Of Customer_Starlink for crew_Digital Learning.png" alt="Supports essential applications such as email, messaging, and web Browse" class="benefits-image rounded-4">
                        <div class="benefits-text">
                            Access to online courses and professional development.
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center second-row-benefit mt-4">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="benefits-card">
                        <img src="assets/images/crew-engagement/starlink-for-crew/benefits-for-customers/Benefits Of Customer_Starlink for crew_Cost effective for crew members.png" alt="Enhances crew welfare with personal mobile network access" class="benefits-image rounded-4">
                        <div class="benefits-text">
                           Affordable internet access tailored for seafarers.
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-4 col-sm-6 mb-4">
                    <div class="benefits-card">
                        <img src="assets/images/gsm/benefit/gsm-benefit-5.jpg" alt="Reduces operational costs with efficient bandwidth management" class="benefits-image rounded-4">
                        <div class="benefits-text">
                            Reduces operational costs with efficient bandwidth management
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>

<section class="mt-5 pt-5 container py-5">
            <h2 class="text-start mb-5">TECHNICAL SPECIFICATION</h2>
            <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 justify-content-center g-4 g-md-5">

                <div class="col text-center">
                    <div class="kb-card kb-models p-4 rounded">
                        <div class="icon mb-3">
                            <img src="assets/images/crew-engagement/starlink-for-crew/technical-specifications/Download speeds.svg" alt="Coverage Icon">
                        </div>
                        <p><strong>Download speeds:</strong> <br>40-220 Mbps.</p>
                    </div>
                </div>

                <div class="col text-center">
                    <div class="kb-card kb-power p-4 rounded">
                        <div class="icon mb-3">
                            <img src="assets/images/crew-engagement/starlink-for-crew/technical-specifications/Upload speeds.svg" alt="Frequency bands Icon">
                        </div>
                        <p><strong>Upload speeds:</strong><br>10-25 Mbps.</p>
                    </div>
                </div>

                <div class="col text-center">
                    <div class="kb-card kb-certifications p-4 rounded">
                        <div class="icon mb-3">
                            <img src="assets/images/crew-engagement/starlink-for-crew/technical-specifications/Latency.svg" alt="Hardware Icon">
                        </div>
                        <p><strong>Latency: </strong><br> <99ms.</p>
                    </div>
                </div>

                <div class="col text-center">
                    <div class="kb-card kb-communication p-4 rounded">
                        <div class="icon mb-3">
                            <img src="assets/images/crew-engagement/starlink-for-crew/technical-specifications/Remote network management.svg" alt="Data speeds Icon">
                        </div>
                        <p>Remote network management <br>via web portal.</p>
                    </div>
                </div>
            </div>

        </section>


<!-- Fleet CTA Section -->

<div class="specialist-section-img connectivity">
    <div class="d-flex">
        <section class="specialist-section container">
            <div class="fleet-cta-container text-center">
                <h2 class="fleet-cta-text">
                   Enhance crew connectivity with Starlink. Contact us now
                </h2>
                <a href="contact-us.php" class="fleet-cta-button">Contact us</a>
            </div>

        </section>


    </div>
    <?php
    include 'include/footer.php';
    ?>