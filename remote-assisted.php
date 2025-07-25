<?php
include 'include/header.php';
?>
<title>Station Satcom | Remote Assisted Compass Adjustment</title>
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

    .usecase-slide-staioncrew-use1 {
        background-image: url("assets/images/Remote-NavCom/Usecase/1.webp");
    }

    .usecase-slide-staioncrew-use2 {
        background-image: url("assets/images/Remote-NavCom/Usecase/2.webp");
    }

    .usecase-slide-staioncrew-use3 {
        background-image: url("assets/images/Remote-NavCom/Usecase/3.webp");
    }

    .usecase-slide-staioncrew-use4 {
        background-image: url("assets/images/Remote-NavCom/Usecase/4.webp");
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
        /* The image used */
        background-color: #cccccc;
        /* Used if the image is unavailable */
        height: 300px;
        background-position: center;
        /* Center the image */
        background-repeat: no-repeat;
        /* Do not repeat the image */
        background-size: auto;
        /* Resize the background image to cover the entire container */
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
    <a href="#"><span>Operational Technologies</span></a>
    <a href="#"><span>Remote Assisted Compass Adjustment</span></a>
</section>

<!-- banner section -->
<!-- Globalstar Section -->
<section class="globalstar-section">
    <div class="globalstar-overlay">
        <div class="globalstar-content">
            <h2 class="globalstar-title">Remote Assisted Compass Adjustment</h2>
            <p class="globalstar-description">
              Station Satcom’s Remote Assisted Compass Adjustment ensures precise navigation by allowing vessel crews to perform compass calibration with expert remote guidance. This cost-effective solution helps maintain compliance with ISO 25862 standards while minimizing downtime and reducing the need for onboard service visits.
            </p>
            <a href="contact-us.php" class="globalstar-button">CONNECT WITH A SPECIALIST</a>
        </div>
    </div>
</section>
</div>
<section class="uc-slider-wrapperr mt-5 pt-5">
    <div class="container">
        <h2 class="text-start mb-5">USE CASES</h2>
        <div class="container-fluid usecase-slider-container ">
            <div id="usecaseSlider" class="carousel slide usecase-carousel" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-1 col-lg-12 usecase-slide usecase-slide-staioncrew-use1" style="background-image: url('assets/images/operational-product/remote-assisted/use-cases/Use\ Cases_Remote\ Assisted\ Compass\ Adjustment_Commercial\ Shipping.png');">
                                <div class="usecase-content">
                                    <div class="usecase-text">
                                        <h3>Commercial Shipping</h3>
                                        <p>Maintain accurate navigation across global shipping routes.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item ">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-1 col-lg-12 usecase-slide usecase-slide-staioncrew-use2" style="background-image: url('assets/images/operational-product/remote-assisted/use-cases/Use\ Cases_Remote\ Assisted\ Compass\ Adjustment_Fishing\ Vessels.png');">
                                <div class="usecase-content">
                                    <div class="usecase-text">
                                        <h3>Fishing Fleets</h3>
                                        <p>Essential for precise positioning in deep-sea fishing.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-1 col-lg-12 usecase-slide usecase-slide-staioncrew-use3" style="background-image: url('assets/images/operational-product/remote-assisted/use-cases/Use\ Cases_Remote\ Assisted\ Compass\ Adjustment_Offshore\ Energy\ Platforms.png');">
                                <div class="usecase-content">
                                    <div class="usecase-text">
                                        <h3>Offshore Operations</h3>
                                        <p>Reliable heading adjustments for oil & gas rigs and offshore vessels.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-1 col-lg-12 usecase-slide usecase-slide-staioncrew-use4" style="background-image: url('assets/images/operational-product/remote-assisted/use-cases/Use\ Cases_Remote\ Assisted\ Compass\ Adjustment_Government\ &\ Defense.png');">
                                <div class="usecase-content">
                                    <div class="usecase-text">
                                        <h3>Government & Military Vessels</h3>
                                        <p>Ensures precise navigational accuracy for fleet movements.</p>
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
                    <img src="assets/images/operational-product/remote-assisted/key-features/Regulatory Compliance Tools.svg" alt="High-gain GSM boosters icon">
                </div>
                <p>Crew-led adjustment with expert <br>remote support.
                </p>
            </div>
        </div>


        <div class="col text-center">
            <div class="kb-card kb-voice-data p-4 rounded">
                <div class="icon mb-3">
                    <img src="assets/images/operational-product/remote-assisted/key-features/Compliance with ISO 25862.svg" alt="5G-ready technology icon">
                </div>
                <p>Ensures accurate compass deviation<br> measurements.</p>
            </div>
        </div>


        <div class="col text-center">
            <div class="kb-card kb-compact p-4 rounded">
                <div class="icon mb-3">
                    <img src="assets/images/operational-product/remote-assisted/key-features/Detailed Deviation Analysis.svg" alt="Secure network infrastructure icon">
                </div>
                <p>Real-time evaluation of compass <br>readings.
                </p>
            </div>
        </div>


        <div class="col text-center">
            <div class="kb-card kb-sos p-4 rounded">
                <div class="icon mb-3">
                    <img src="assets/images/operational-product/remote-assisted/key-features/Certification Issuance.svg" alt="Crystal-clear voice calls icon">
                </div>
                <p>Official deviation certificate provided <br>post-calibration.
                </p>
            </div>
        </div>
        <!-- <div class="col text-center">
            <div class="kb-card kb-sos p-4 rounded">
                <div class="icon mb-3">
                    <img src="assets/images/gsm/key/gsm-key-5.svg" alt="Crystal-clear voice calls icon">
                </div>
                <p>Ensures adherence to maritime <br>welfare
                    standards.
                </p>
            </div>
        </div> -->

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
                        <img src="assets/images/operational-product/remote-assisted/benefits-of-customer/Benefits Of Customer_Remote Assisted Compass Adjustment_Reduced Downtime.png" alt="Uninterrupted communication for crew and passengers" class="benefits-image rounded-4">
                        <div class="benefits-text">
                           No need for an onboard technician, saving operational time.
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="benefits-card">
                        <img src="assets/images/operational-product/remote-assisted/benefits-of-customer/Benefits Of Customer_Remote Assisted Compass Adjustmen_Cost-Effective Solution.png" alt="Cost-effective alternative to satellite-based services" class="benefits-image rounded-4">
                        <div class="benefits-text">
                           Eliminates travel and service visit expenses.
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="benefits-card">
                        <img src="assets/images/operational-product/remote-assisted/benefits-of-customer/Benefits Of Customer_Remote Assisted Compass Adjustment_Regulatory Compliance.png" alt="Supports essential applications such as email, messaging, and web Browse" class="benefits-image rounded-4">
                        <div class="benefits-text">
                           Meets international maritime safety standards.
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center second-row-benefit mt-4">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="benefits-card">
                        <img src="assets/images/operational-product/remote-assisted/benefits-of-customer/Benefits Of Customer_Remote Assisted Compass Adjustment_Precision Navigation.png" alt="Enhances crew welfare with personal mobile network access" class="benefits-image rounded-4">
                        <div class="benefits-text">
                        Ensures accurate course plotting for optimal voyage safety.
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-4 col-sm-6 mb-4">
                    <div class="benefits-card">
                        <img src="assets/images/gsm/benefit/gsm-benefit-5.jpg" alt="Reduces operational costs with efficient bandwidth management" class="benefits-image rounded-4">
                        <div class="benefits-text">
                            Fresh information can be beamed and played, crew remains upto date

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
                    <img src="assets/images/operational-product/remote-assisted/technical-specifications/ISO 25862 compliance for compass adjustment.svg" alt="Coverage Icon">
                </div>
                <p><strong>ISO 25862 compliance for compass adjustment.</strong></p>
            </div>
        </div>

        <div class="col text-center">
            <div class="kb-card kb-power p-4 rounded">
                <div class="icon mb-3">
                    <img src="assets/images/operational-product/remote-assisted/technical-specifications/Crew-assisted deviation.svg" alt="Frequency bands Icon">
                </div>
                <p><strong>Crew-assisted deviation checks performed over one week.</strong></p>
            </div>
        </div>

        <div class="col text-center">
            <div class="kb-card kb-certifications p-4 rounded">
                <div class="icon mb-3">
                    <img src="assets/images/operational-product/remote-assisted/technical-specifications/Remote analysis and deviation correction.svg" alt="Hardware Icon">
                </div>
                <p><strong>Remote analysis and deviation correction.</strong></p>
            </div>
        </div>
        
        <div class="col text-center">
            <div class="kb-card kb-communication p-4 rounded">
                <div class="icon mb-3">
                    <img src="assets/images/operational-product/remote-assisted/technical-specifications/Deviation certificate issuance.svg" alt="Data speeds Icon">
                </div>
                <p><strong>Deviation certificate issuance for regulatory adherence.</strong></p>
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
                  Optimize your vessel’s navigation with our Remote Assisted Compass Adjustment. Contact us today.
                </h2>
                <a href="contact-us.php" class="fleet-cta-button">Contact us</a>
            </div>

        </section>


    </div>
    <?php
    include 'include/footer.php';
    ?>