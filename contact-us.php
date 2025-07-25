<?php
include 'include/header.php';
?>
<title>Station Satcom | Contact Us</title>
<style>
    .banner-text {
        width: 52%;
    }

    .hero-section {
        position: relative;
        background-color: #000c1a;
        z-index: 1;
        overflow: hidden;
    }

    .hero-section::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6) 60%, #000000 100%), url(assets/images/banner-image/Contact-Us-Banner.png) center center / cover no-repeat;
        mix-blend-mode: screen;
        opacity: 0.8;
        z-index: -1;
    }

    .top-banner h1,
    .platforms-title {
        text-transform: uppercase;
    }

    .top-banner p {
        font-weight: 500;
    }

    .locations-container .location-card {
        position: relative;
        width: 100%;
        height: 450px;
        background-size: cover;
        background-position: center;
        border-radius: 20px;
        overflow: hidden;
        cursor: pointer;
        transition: transform 0.3s ease;
        margin-bottom: 10px;
    }

    .locations-container .overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.25);
        transition: background 0.5s ease;
        z-index: 1;
    }

    .locations-container .card-content {
        position: absolute;
        bottom: 30px;
        left: 20px;
        right: 20px;
        z-index: 2;
        transition: all 0.5s ease;
        text-transform: uppercase;
    }

    .locations-container .card-title {
        font-size: 22px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .contact_info_section {
        text-transform: uppercase;
    }
</style>

<section>
    <div class="container">
        <div class="top-banner">
            <div class="banner-text">
                <h1>Contact Us</h1>
                <p class="text-center">We’re here to help! Whether you have a question, need support, or want to explore how our satellite communication solutions can benefit you, our team is just a call or email away.</p>
            </div>
        </div>
    </div>
</section>
</div>

<div class="locations-container container">
    <h2 class="platforms-title">Office Locations</h2>
    <div class="row">
        <div class="col-lg-4 col-6">
            <div class="location-card" style="background-image: url('assets/images/contact-us/img1.jpeg');">
                <div class="overlay"></div>
                <div class="card-content">
                    <div class="card-title">Mumbai, India</div>
                    <div class="card-desc">Station Satcom Pvt. Ltd.<br>801, Madhava, Bandra Kurla Complex,<br>Mumbai - 400 051, India<br>Tel: +91 22 42017800<br>Email: sales@stationsatcom.com</div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-6">
            <div class="location-card" style="background-image: url('assets/images/contact-us/img2.jpeg');">
                <div class="overlay"></div>
                <div class="card-content">
                    <div class="card-title">Delhi, India</div>
                    <div class="card-desc">Station Satcom Pvt. Ltd.<br>346, Second Floor, Tarun Enclave,<br>Outer Ring Road, Pitampura,<br>Delhi - 110034, India<br>Tel: +91-11-4310 2838<br>Email: sales@stationsatcom.com</div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-6">
            <div class="location-card" style="background-image: url('assets/images/contact-us/img3.jpeg');">
                <div class="overlay"></div>
                <div class="card-content">
                    <div class="card-title">Chennai, India</div>
                    <div class="card-desc">Station Satcom Pvt. Ltd.<br>Palani Enclave, No.6/14, F-2,<br>First Floor, Anna Swamy Street, Pallavaram,<br>Chennai - 600043, India<br>Tel: +91 44-66023226<br>Fax: +91 44-66023290<br>Email: sales@stationsatcom.com</div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-6">
            <div class="location-card" style="background-image: url('assets/images/contact-us/img4.jpeg');">
                <div class="overlay"></div>
                <div class="card-content">
                    <div class="card-title">Singapore</div>
                    <div class="card-desc">Station Satcom Pte. Ltd.<br>47 Jalan Pemimpin, #01-04,<br>HALCYON 2,<br>Singapore - 577200<br>Tel: +65 6715 8937<br>Email: sales@stationsatcom.com</div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-6">
            <div class="location-card" style="background-image: url('assets/images/contact-us/img5.jpeg');">
                <div class="overlay"></div>
                <div class="card-content">
                    <div class="card-title">Netherlands</div>
                    <div class="card-desc">Station Satcom BV<br>Hakgriend 8A, 3371 KA<br>Hardinxveld-Giessendam,<br>Netherlands<br>Tel: +31 10 8906605<br>Support: +31 108080617<br>Email: sales.eu@stationsatcom.com</div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-6">
            <div class="location-card" style="background-image: url('assets/images/contact-us/img6.jpeg');">
                <div class="overlay"></div>
                <div class="card-content">
                    <div class="card-title">Dubai, UAE</div>
                    <div class="card-desc">Station Satcom FZC<br>Warehouse: A2-034, P.O. Box: 46814,<br>SAIF ZONE, SHARJAH, UAE<br>Tel: +971 6 7676474<br>Email: sales.uae@stationsatcom.com</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pt-5 mt-5 container contact_info_section">
    <h2 class="platforms-title">Contact Information</h2>

    <style>
        .contact-columns {
            position: relative;
        }

        .middle-column::before,
        .last-column::before {
            content: "";
            position: absolute;
            top: -15px;
            bottom: 0;
            width: 3px;
            background-color: white;
        }

        .middle-column::before {
            left: -15%;
        }

        .last-column::before {
            left: -15%;
        }
    </style>

<div class="row mt-5 text-white contact-columns">
    <div class="col-md-4">
        <h4>General Inquiries:</h4>
        <p><a href="mailto:sales@stationsatcom.com" class="text-white">sales@stationsatcom.com</a></p>
    </div>
    <div class="col-md-4 middle-column position-relative">
        <h4>Europe:</h4>
        <p><a href="mailto:sales.eu@stationsatcom.com" class="text-white">sales.eu@stationsatcom.com</a></p>
    </div>
    <div class="col-md-4 last-column position-relative">
        <h4>UAE:</h4>
        <p><a href="mailto:sales.uae@stationsatcom.com" class="text-white">sales.uae@stationsatcom.com</a></p>
    </div>
</div>

<div class="row mt-5 pt-5">
    <h2 class="mb-3 platforms-title">global support hotline</h2>
    <p>
        <a href="tel:+912242017800" class="text-white">+91 22 42017800 (India)</a> |
        <a href="tel:+31108080617" class="text-white">+31 108080617 (Europe)</a>
    </p>
</div>

</div>

<!-- View more button -->
<!-- form section -->
<div class="specialist-section-img connectivitym" style="background-image: url('assets/images/footers/Page\ Bottom.png')">
    <div class="d-flex">
        <section class="specialist-section mt-0 container">
            <h2 class="specialist-title mb-3">GET IN TOUCH</h2>
            <p>If you have any questions or need assistance, fill out the form below, and we’ll get back to you promptly.</p>
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