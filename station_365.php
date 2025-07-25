<?php
include 'include/header.php';
?>
<title>Station Satcom | Station 365</title>
<style>
    .hero-section::after {
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6) 60%, #000000 100%),
            /* smooth fade */
            url(assets/images/gsm/thorough-spacecraft-with-fully-extended-solar-panels-travels-through-vastness-cosmos-illuminated-by-faraway-stars-looming-presence-our-planet.jpg) center center / cover no-repeat;
    }

    .specialist-section-img {
        background: linear-gradient(to bottom, rgb(2 20 73 / 33%) 60%, #00000070 100%), url(assets/images/footers/Page\ Bottom.png);
        background-size: auto;
        background-size: cover;
        opacity: 0.8;
    }
</style>

<section class="breadcrumb">
    <a href="index.php"><span>Home</span></a>
    <a href="#"><span>IT & CYBERSECURITY</span></a>
    <a href="#"><span>Station 365</span></a>
</section>

<!-- banner section -->
<!-- Globalstar Section -->
<section class="globalstar-section">
    <div class="globalstar-overlay">
        <div class="globalstar-content">
            <h2 class="globalstar-title">Station 365</h2>
            <p class="globalstar-description">
                Station 365 is an all-in-one IT management solution, providing secure, reliable, and fully managed IT services for maritime operations. It ensures compliance, cybersecurity, and operational efficiency, keeping vessels connected and protected.
            </p>
            <a href="contact-us.php" class="globalstar-button">CONNECT WITH A SPECIALIST</a>
        </div>
    </div>
</section>
</div>
<section>
    <div class="container">
     <h2 class="text-start mb-5">USE CASES</h2>
        <div class="container-fluid usecase-slider-container ">
            <div id="usecaseSlider" class="carousel slide usecase-carousel" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-1 col-lg-12 usecase-slide position-relative" style="background-image: url('assets/images/it_cybersecurity/station_365/use_cases/Use\ Cases_Sation\ 365_Fleet\ IT\ Infrastructure.png');">
                                <div class="usecase-content">
                                    <div class="black-overlay"></div> <!-- Add this overlay div -->
                                    <div class="usecase-text">
                                        <h3>Fleet IT Infrastructure </h3>
                                        <p>Centralized management for vessel networks.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item ">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-1 col-lg-12 usecase-slide position-relative" style="background-image: url('assets/images/it_cybersecurity/station_365/use_cases/Use\ Cases_Sation\ 365_Cybersecurity.png');">
                                <div class="usecase-content">
                                    <div class="black-overlay"></div> <!-- Add this overlay div -->
                                    <div class="usecase-text">
                                        <h3>Cybersecurity for Shipping </h3>
                                        <p>Protecting onboard systems from threats.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-1 col-lg-12 usecase-slide position-relative" style="background-image: url('assets/images/it_cybersecurity/station_365/use_cases/Use\ Cases_Sation\ 365_Remote\ IT\ Monitoring.png');">
                                <div class="usecase-content">
                                    <div class="black-overlay"></div> <!-- Add this overlay div -->
                                    <div class="usecase-text">
                                        <h3>Remote IT Monitoring</h3>
                                        <p>Ensuring system health and compliance.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-1 col-lg-12 usecase-slide position-relative" style="background-image: url('assets/images/it_cybersecurity/station_365/use_cases/Use\ Cases_Sation\ 365_Data\ Management.png');">
                                <div class="usecase-content">
                                    <div class="black-overlay"></div> <!-- Add this overlay div -->
                                    <div class="usecase-text">
                                        <h3>Data Management & Recovery </h3>
                                        <p>Secure access to vital business data.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                </div>
            </div>
        </div>

    </div>
</section>
<!-- key benefits card section -->
<section class="mt-5 pt-5 container py-5">
    <h2 class="text-start mb-5">KEY FEATURES</h2>
    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 justify-content-center g-4 g-md-5">
        <div class="col text-center">
            <div class="kb-card kb-global-coverage p-4 rounded">
                <div class="icon mb-3">
                    <img src="assets/images/it_cybersecurity/station_365/key_features/Managed IT Services.svg" alt="Managed IT Services icon">
                </div>
                <p>24/7 remote monitoring,<br> patching, and<br> system maintenance.</p>
            </div>
        </div>


        <div class="col text-center">
            <div class="kb-card kb-voice-data p-4 rounded">
                <div class="icon mb-3">
                    <img src="assets/images/it_cybersecurity/station_365/key_features/Unmanaged IT Services.svg" alt="Unmanaged IT Services icon">
                </div>
                <p>In-house tools<br> for fleet-wide<br> IT compliance.</p>
            </div>
        </div>


        <div class="col text-center">
            <div class="kb-card kb-compact p-4 rounded">
                <div class="icon mb-3">
                    <img src="assets/images/it_cybersecurity/station_365/key_features/Cybersecurity Protection.svg" alt="Cybersecurity Protection icon">
                </div>
                <p>Endpoint security<br> and proactive<br> threat monitoring</p>
            </div>
        </div>


        <div class="col text-center">
            <div class="kb-card kb-sos p-4 rounded">
                <div class="icon mb-3">
                    <img src="assets/images/it_cybersecurity/station_365/key_features/Data Backup & Recovery.svg" alt="Data Backup & Recovery icon">
                </div>
                <p>Secure storage <br> and disaster<br> recovery solutions.</p>
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
                        <img src="assets/images/it_cybersecurity/station_365/benefits_for_customers/Benefits for Customer_Enhanced Security.png"
                            alt="Protection against cyber threats and malware." class="benefits-image rounded-4">
                        <div class="benefits-text">
                            Protection against cyber threats and malware.
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="benefits-card">
                        <img src="assets/images/it_cybersecurity/station_365/benefits_for_customers/Benefits Of Customer_Regulatory Compliance.png"
                            alt="Meets international maritime IT security standards." class="benefits-image rounded-4">
                        <div class="benefits-text">
                            Meets international maritime IT security standards.
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="benefits-card">
                        <img src="assets/images/it_cybersecurity/station_365/benefits_for_customers/Benefits for Customer_Operational Effeciency.png" alt="Reduces IT downtime and maintenance costs." class="benefits-image rounded-4">
                        <div class="benefits-text">
                            Reduces IT downtime and maintenance costs.
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center second-row-benefit mt-4">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="benefits-card">
                        <img src="assets/images/it_cybersecurity/station_365/benefits_for_customers/Benefits Of Customer_Scalability.png" alt="Customizable solutions for fleets of all sizes." class="benefits-image rounded-4">
                        <div class="benefits-text">
                            Customizable solutions for fleets of all sizes.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="uc-slider-wrapperr">
    <div class="container">
        <section class="mt-5 pt-5 container py-5">
            <h2 class="text-start mb-5">TECHNICAL SPECIFICATION</h2>
            <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 justify-content-center g-4 g-md-5">

                <div class="col text-center">
                    <div class="kb-card kb-models p-4 rounded">
                        <div class="icon mb-3">
                            <img src="assets/images/it_cybersecurity/station_365/technical_specification/Endpoint Detection & Response.svg" alt="Coverage Icon">
                        </div>
                        <p>Endpoint Detection & Response (EDR).</p>
                    </div>
                </div>

                <div class="col text-center">
                    <div class="kb-card kb-power p-4 rounded">
                        <div class="icon mb-3">
                            <img src="assets/images/it_cybersecurity/station_365/technical_specification/Remote Management & Monitoring.svg" alt="Frequency bands Icon">
                        </div>
                        <p>Remote Management & Monitoring (RMM).</p>
                    </div>
                </div>

                <div class="col text-center">
                    <div class="kb-card kb-certifications p-4 rounded">
                        <div class="icon mb-3">
                            <img src="assets/images/it_cybersecurity/station_365/technical_specification/Integrated Antivirus.svg" alt="Hardware Icon">
                        </div>
                        <p>Integrated antivirus</p>
                    </div>
                </div>

                <div class="col text-center">
                    <div class="kb-card kb-communication p-4 rounded">
                        <div class="icon mb-3">
                            <img src="assets/images/it_cybersecurity/station_365/technical_specification/Automated Security.svg" alt="Data speeds Icon">
                        </div>
                        <p>Automated security patching and updates.</p>
                    </div>
                </div>
            </div>
        </section>
</section>

<!-- Fleet CTA Section -->

<div class="specialist-section-img connectivity">
    <div class="d-flex">
        <section class="specialist-section container">
            <div class="fleet-cta-container text-center">
                <h2 class="fleet-cta-text">
                    Ensure 24/7 IT security and management with Station 365. Contact us now.
                </h2>
                <a href="contact-us.php" class="fleet-cta-button">Contact us today.</a>
            </div>

        </section>
    </div>
</div>
<?php
include 'include/footer.php';
?>