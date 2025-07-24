<?php
include 'include/header.php';
?>
<title>Station Satcom | Crew Engagement</title>
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
        background: linear-gradient(to bottom, rgb(0 0 0 / 57%) 60%, #000000f5 100%),
            /* smooth fade */
            url(assets/images/banner-image/Crew\ Engagement_Hero\ Banner.png) center center / cover no-repeat;
        mix-blend-mode: screen;
        opacity: 0.8;
        z-index: -1;
        background-size: 120%;
        background-position: 0% 75%;
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
        background: linear-gradient(rgb(0 31 69 / 35%), rgb(0 0 0 / 22%)), url(assets/images/footers/Page\ Bottom.png);
        background-size: auto;
        background-size: cover;
        opacity: 0.8;
    }

    .banner-text h1 {
        text-transform: uppercase;
    }
</style>
<!-- end style -->
<section class="breadcrumb">
    <a href="index.php"><span>Home</span></a>
    <a href="#"><span>Crew Engagement</span></a>
</section>
<!-- banner section -->
<section class="banner_section">
    <div class="container">
        <div class="top-banner">
            <div class="banner-text">
                <h1>Crew Engagement</h1>
                <p class="text-center">Ensuring crew welfare is essential for productivity and retention. Our solutions <br> enhance communication, entertainment, and well-being onboard.</p>
                <button class="top-banner-btn mt-3">Connect with a Specialist</button>
            </div>
        </div>

        <h3 class="text-uppercase" style="font-weight: 400;">Partnering with world class leaders</h3>
    </div>
</section>
</div>
<!-- end banner section -->
<!-- slider-wrapper -->

<?php include 'include/partner_logo.php'; ?>

<!-- End Slider -->
<!-- key benefits card section -->
<section class="my-5 container py-5">
    <h2 class="text-start mb-5">KEY BENEFITS</h2>
    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 g-4 g-md-5 justify-content-center">
        <div class="col text-center">
            <div class="kb-card kb-broadband p-4 rounded">
                <div class="icon mb-3">
                    <img src="assets/images/connectivity-keybenefits/1.svg" alt="Broadband Icon">
                </div>
                <p>Secure communication <br>improving crew morale.</p>
            </div>
        </div>

        <div class="col text-center">
            <div class="kb-card kb-low-latency p-4 rounded">
                <div class="icon mb-3">
                    <img src="assets/images/it-keybenefits/2.svg" alt="Low Latency Icon">
                </div>
                <p>Access to welfare and <br>entertainment services.</p>
            </div>
        </div>

        <div class="col text-center">
            <div class="kb-card kb-hybrid-tech p-4 rounded">
                <div class="icon mb-3">
                    <img src="assets/images/it-keybenefits/3.svg" alt="Hybrid Icon">
                </div>
                <p>Increased retention<br> through enhanced <br> onboard experience.</p>
            </div>
        </div>
        <div class="col text-center">
            <div class="kb-card kb-satellite p-4 rounded">
                <div class="icon mb-3">
                    <img src="assets/images/it-keybenefits/4.svg" alt="Satellite Icon">
                </div>
                <p>Seamless integration with<br> maritime operations.</p>
            </div>
        </div>

        <div class="col text-center">
            <div class="kb-card kb-cost-effective p-4 rounded">
                <div class="icon mb-3">
                    <img src="assets/images/it-keybenefits/5.svg" alt="Ship Icon">
                </div>
                <p>Regulatory compliance ensuring <br> better working conditions.</p>
            </div>
        </div>
    </div>
</section>


<!-- INCLUDED PRODUCTS & SOLUTIONS card section -->
<div class="container py-5 inc_prod_section">
    <h2 class="text-start mb-5">INCLUDED PRODUCTS & SOLUTIONS</h2>
    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        <!-- Station 365 -->
        <div class="col">
            <a href="station-connect.php">
                <div class="ips-card text-center" style="background-image: url('assets/images/crew-engagement/Crew\ Engagement_Station\ Connect\ &\ Engage.png');">
                    <div class="ips-card-arrow"></div>
                    <div class="ips-overlay">
                        <div class="ips-icon ips-img-1 text-uppercase" style="font-weight: 500;">Station Connects</div>
                        <div class="ips-desc">
                            <p>Secure ship-shore communication and crew intranet.</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Station SecureX -->
        <div class="col">
            <a href="station-multiplex.php">
                <div class="ips-card text-center" style="background-image: url('assets/images/crew-engagement/Crew\ Engagement_Station\ Multiplex.png');">
                    <div class="ips-card-arrow"></div>
                    <div class="ips-overlay">
                        <div class="ips-icon ips-img-1 text-uppercase" style="font-weight: 500;">Station <br> Multiplex</div>
                        <div class="ips-desc">
                            <p>IPTV solution delivering live TV channels and entertainment.</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Station Tab -->
        <div class="col">
            <a href="station-care.php">
                <div class="ips-card text-center" style="background-image: url('assets/images/crew-engagement/Crew\ Engagement_Station\ Care.png');">
                    <div class="ips-card-arrow"></div>
                    <div class="ips-overlay">
                        <div class="ips-icon ips-img-1 text-uppercase" style="font-weight: 500;">Station <br>Care – 24/7</div>
                        <div class="ips-desc">
                            <p>24/7 telehealth services and mental health support.</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Station Kiosk -->
        <div class="col">
            <a href="starlink-crew.php">
                <div class="ips-card text-center" style="background-image: url('assets/images/crew-engagement/Crew\ Engagement_Starlink\ for\ Crew.png');">
                    <div class="ips-card-arrow"></div>
                    <div class="ips-overlay">
                        <div class="ips-icon ips-img-1 text-uppercase" style="font-weight: 500;">Starlink <br> for Crew</div>
                        <div class="ips-desc">
                            <p>High-speed, personal internet access enhancing morale.</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="Station-kiosk.php">
                <div class="ips-card text-center" style="background-image: url('assets/images/crew-engagement/Crew\ Engagement_Station\ Kiosk.jpg.png');">
                    <div class="ips-card-arrow"></div>
                    <div class="ips-overlay">
                        <div class="ips-icon ips-img-1 text-uppercase" style="font-weight: 500;">Station KIOSK</div>
                        <div class="ips-desc">
                            <p>Digital noticeboard providing essential information</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<!-- station satcom section -->
<div class="py-5 my-5">
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
                <div class="signal signal-left text-center">
                    <img src="assets/images/circle-satcom/1.png" alt="Signal" />
                    <p>Industry-leading connectivity ensuring seamless access.</p>
                </div>

                <!-- Signal + Text Right -->
                <div class="signal signal-right text-end">
                    <p>Dedicated solutions improving seafarer welfare.</p>
                    <img src="assets/images/circle-satcom/1.png" alt="Signal" />
                </div>

                <!-- Signal + Text Bottom -->
                <div class="signal signal-bottom text-center">
                    <img src="assets/images/circle-satcom/1.png" alt="Signal" />
                    <p>24/7 support to enhance crew experience.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="text-white text-center mt-5 pb-5">
        <h3>Improve your crew’s experience with our engagement solutions.</h3>
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
                    <input type="text" placeholder="Phone" class="specialist-input">
                    <input type="text" placeholder="Country*" class="specialist-input" required>

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
            </form>
        </section>
    </div>
</div>


<?php
include 'include/footer.php';
?>