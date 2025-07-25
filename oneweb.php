<?php
include 'include/header.php';
?>
<title>Station Satcom | OneWeb</title>
<meta name="keywords" content="OneWeb maritime, LEO satellite internet, low-latency ship broadband, global marine connectivity, satellite internet for ships">

<style>
    .hero-section::after {
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6) 60%, #000000 100%),
            /* smooth fade */
            url(assets/images/oneweb/spacecraft-launch-into-space.jpg) center center / cover no-repeat;
    }

    .specialist-section-img {
        background: linear-gradient(to bottom, rgb(2 20 73 / 33%) 60%, #00000070 100%), url(assets/images/footers/vsat-footer.png);
        background-size: auto;
        background-size: cover;
        opacity: 0.8;
    }
</style>
<section class="breadcrumb">
    <a href="index.php"><span>Home</span></a>
    <a href="#"><span>Connectivity</span></a>
    <a href="#"><span>OneWeb</span></a>
</section>

<!-- banner section -->
<section class="fleetbroadband-section container">
    <div class="fleetbroadband-overlay">
        <div class="fleetbroadband-content">
            <h1 class="fleetbroadband-title">ONEWEB</h1>
            <p class="fleetbroadband-description">
                OneWeb delivers low-latency, high-speed broadband powered<br> by a Low Earth Orbit (LEO) satellite constellation. It ensures <br>seamless global coverage for maritime operations, enabling <br>enhanced communication, navigation, and data exchange.</p>
            <a href="#contact" class="fleetbroadband-button mt-4">CONNECT WITH A SPECIALIST</a>
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
                            <div class="col-12 col-md-1 col-lg-12 usecase-slide" style="background-image: url('./assets/images/connectivity/OneWeb/Use Cases/Use\ Cases_OneWeb_MErchant\ Fleets.png');">
                                <div class="usecase-content">
                                    <div class="usecase-text">
                                        <h3>Merchant Fleets</h3>
                                        <p>Ensuring reliable and continuous<br>communication for commercial shipping
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item ">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-1 col-lg-12 usecase-slide" style="background-image: url('./assets/images/connectivity/OneWeb/Use Cases/Use\ Cases_OneWeb_Offshore\ Energy\ Platforms.png');">
                                <div class="usecase-content">
                                    <div class="usecase-text">
                                        <h3>Offshore & Energy </h3>
                                        <p>Supporting remote drilling sites and offshore operations
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-1 col-lg-12 usecase-slide" style="background-image: url('./assets/images/connectivity/OneWeb/Use Cases/Use\ Cases_OneWeb_Luxury\ Yachts.png');">
                                <div class="usecase-content">
                                    <div class="usecase-text">
                                        <h3>Yachting & Leisure </h3>
                                        <p>High-speed internet for luxury yachts and private vessels
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-1 col-lg-12 usecase-slide" style="background-image: url('./assets/images/connectivity/OneWeb/Use Cases/Use\ Cases_OneWeb_Aviation.png');">
                                <div class="usecase-content">
                                    <div class="usecase-text">
                                        <h3>Aviation & Enterprise </h3>
                                        <p>Seamless satellite connectivity for airborne and enterprise
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
                    <img src="assets/images/oneweb/key/oneweb-key-1.svg" alt="Low-latency broadband Icon">
                </div>
                <p>Low-latency broadband<br> powered by LEO satellites</p>
            </div>
        </div>

        <div class="col text-center">
            <div class="kb-card kb-voice-data p-4 rounded">
                <div class="icon mb-3">
                    <img src="assets/images/oneweb/key/oneweb-key-2.svg" alt="High-speed connectivity Icon">
                </div>
                <p>High-speed connectivity<br> optimized for maritime<br> operations</p>
            </div>
        </div>

        <div class="col text-center">
            <div class="kb-card kb-compact p-4 rounded">
                <div class="icon mb-3">
                    <img src="assets/images/oneweb/key/oneweb-key-3.svg" alt="Global coverage Icon">
                </div>
                <p>Global coverage including<br> remote and polar regions</p>
            </div>
        </div>

        <div class="col text-center">
            <div class="kb-card kb-sos p-4 rounded">
                <div class="icon mb-3">
                    <img src="assets/images/oneweb/key/oneweb-key-4.svg" alt="Secure and scalable network Icon">
                </div>
                <p>Secure and scalable<br> network infrastructure</p>
            </div>
        </div>

        <div class="col text-center">
            <div class="kb-card kb-bandwidth p-4 rounded">
                <div class="icon mb-3">
                    <img src="assets/images/oneweb/key/oneweb-key-5.svg" alt="Reliable performance Icon">
                </div>
                <p>Reliable performance in<br> challenging weather conditions</p>
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
                        <img src="assets/images/connectivity/OneWeb/Benefits of Customer/Benefits Of Customer_OneWeb_Realtime data.png" alt="Real-time data transfer for optimized fleet management" class="benefits-image rounded-4">
                        <div class="benefits-text">
                            Real-time data transfer for optimized fleet management
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="benefits-card">
                        <img src="assets/images/connectivity/OneWeb/Benefits of Customer/Benefits Of Customer_OneWeb_High-speed internet.png" alt="High-speed Internet for crew communication and welfare" class="benefits-image rounded-4">
                        <div class="benefits-text">
                            High-speed Internet for crew communication and welfare
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="benefits-card">
                        <img src="assets/images/connectivity/OneWeb/Benefits of Customer/Benefits Of Customer_OneWeb_Operational Efficiency.png" alt="Improved operational efficiency with cloud-based applications" class="benefits-image rounded-4">
                        <div class="benefits-text">
                            Improved operational efficiency with cloud-based applications
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center second-row-benefit mt-4">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="benefits-card">
                        <img src="assets/images/connectivity/OneWeb/Benefits of Customer/Benefits Of Customer_OneWeb_Secure and encrypted.png" alt="Secure and encrypted network for sensitive maritime data" class="benefits-image rounded-4">
                        <div class="benefits-text">
                            Secure and encrypted network for sensitive maritime data
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="benefits-card">
                        <img src="assets/images/connectivity/OneWeb/Benefits of Customer/Benefits Of Customer_OneWeb_Cost-effective connectivity.png" alt="Cost-effective connectivity with flexible data plans" class="benefits-image rounded-4">
                        <div class="benefits-text">
                            Cost-effective connectivity with flexible data plans
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
        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 justify-content-center g-4 g-md-5">

            <div class="col text-center">
                <div class="kb-card kb-global-coverage p-4 rounded">
                    <div class="icon mb-3">
                        <img src="assets/images/oneweb/tech/oneweb-tech-1.svg" alt="Speeds Icon">
                    </div>
                    <p><strong>Speeds:</strong><br> Up to 195 Mbps (download),<br> 32 Mbps (upload)</p>
                </div>
            </div>

            <div class="col text-center">
                <div class="kb-card kb-voice-data p-4 rounded">
                    <div class="icon mb-3">
                        <img src="assets/images/oneweb/tech/oneweb-tech-2.svg" alt="Latency Icon">
                    </div>
                    <p><strong>Latency:</strong><br>
                        <100ms< /p>
                </div>
            </div>

            <div class="col text-center">
                <div class="kb-card kb-compact p-4 rounded">
                    <div class="icon mb-3">
                        <img src="assets/images/oneweb/tech/oneweb-tech-3.svg" alt="Coverage Icon">
                    </div>
                    <p><strong>Coverage:</strong><br> Global, including<br> polar regions</p>
                </div>
            </div>

            <div class="col text-center">
                <div class="kb-card kb-sos p-4 rounded">
                    <div class="icon mb-3">
                        <img src="assets/images/oneweb/tech/oneweb-tech-4.svg" alt="Hardware Icon">
                    </div>
                    <p><strong>Hardware:</strong><br> Compact user<br> terminals with easy</p>
                </div>
            </div>
        </div>
    </section>

    <!-- vsat slider section end -->

    <!-- technical sp -->
    <section class="lm-section py-5">
        <div class="container">
            <div class="text-start mb-5">
                <h2 class="lm-title">MODELS OFFERED</h2>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="ips-card text-center card-365">
                            <div class="ips-card-arrow"></div>
                            <div class="ips-overlay">
                                <div class="ips-icon ips-img-1">OW Maritime Dual Parabolic Antenna</div>
                                <div class="ips-desc">
                                    <p>Managed & unmanaged IT services for proactive system monitoring.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="ips-card text-center card-securex">
                            <div class="ips-card-arrow"></div>
                            <div class="ips-overlay">
                                <div class="ips-icon ips-img-1">OW11FM Enterprise Flat Panel for Maritime</div>
                                <div class="ips-desc">
                                    <p>Comprehensive cyber protection with real-time threat detection.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="ips-card text-center card-tab">
                            <div class="ips-card-arrow"></div>
                            <div class="ips-overlay">
                                <div class="ips-icon ips-img-1">Kymeta Peregrine u8</div>
                                <div class="ips-desc">
                                    <p>Mobile device management ensuring secure onboard operations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center second-row-benefit mt-4">
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="ips-card text-center card-kiosk">
                            <div class="ips-card-arrow"></div>
                            <div class="ips-overlay">
                                <div class="ips-icon ips-img-1">OW10HM Compact Flat Panel for Maritime</div>
                                <div class="ips-desc">
                                    <p>Centralized digital display for communication and compliance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="ips-card text-center card-kiosk2">
                            <div class="ips-card-arrow"></div>
                            <div class="ips-overlay">
                                <div class="ips-icon ips-img-1">Intellian CNX Portfolio</div>
                                <div class="ips-desc">
                                    <p>Centralized digital display for communication and compliance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>
    <div class="specialist-section-img connectivity">
        <div class="d-flex">
            <section class="specialist-section container">
                <div class="fleet-cta-container text-center">
                    <h2 class="fleet-cta-text">
                        Upgrade your fleet with OneWeb's <br>cutting-edge sattellite connectivity
                    </h2>
                    <a href="#contact" class="fleet-cta-button">Get in touch today.</a>
                </div>

            </section>


        </div>



    </div>
</section>

<?php
include 'include/footer.php';
?>