<?php
include 'include/header.php';
?>
<title>Station Satcom | About</title>
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
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6) 60%, #000000 100%), url(assets/images/banner-image/Abou-Us-Home-banner.png) no-repeat;
    mix-blend-mode: screen;
    opacity: 0.8;
    z-index: -1;
    width: 100%;
    background-position: center center;
    background-size: cover;
  }

  .carousel {
    scroll-behavior: smooth;
  }

  .dots-container {
    display: flex;
    justify-content: center;
    gap: 8px;
    margin-top: 135px;
  }

  .dots-container .dot {
    width: 8px;
    height: 8px;
    background-color: rgba(255, 255, 255, 0.4);
    border-radius: 50%;
    transition: all 0.3s ease;
    cursor: pointer;
  }

  .dots-container .dot.active {
    width: 20px;
    background-color: white;
    border-radius: 10px;
  }


  .banner-down p {
    text-align: justify;
  }

  .specialist-section {
    padding: 0rem 1rem 15rem 1rem;
    margin-top: 0px;
    margin-bottom: 60px;
  }

  .custom-overlap-carousel-wrapper {
    padding-bottom: 5rem;
  }
</style>
<!-- end style -->

<!-- banner section -->
<section>
  <div class="container">
    <div class="top-banner">
      <div class="banner-text">
        <h1 class="text-uppercase">Pioneering Satellite<br>
          Connectivity Since 1998</h1>
      </div>
    </div>
  </div>
</section>
</div>
<div class="banner-down mb-5 pb-5">
  <div class="container d-flex" style="justify-content: center;">
    <div class="banner-paragraph">
      <p class="mb-0">For over 25 years, Station Satcom has been at the forefront of satellite communication,
        delivering seamless, secure, and high-performance connectivity across industries. As India’s
        leading satellite communication service provider we specialize in tailored solutions that
        ensure uninterrupted operations in even the most remote and demanding environments.
        From global shipping fleets to offshore energy sites, we empower businesses with advanced
        satellite technology, cybersecurity, and operational intelligence keeping them connected, </p>
      <p class="text-center">secure, and optimized for success.</p>
    </div>
  </div>
</div>

<section class="satcom-benefits-section mt-5 py-5">
  <div class="container text-center">
    <h2 class="satcom-benefits-title text-start mb-5">WHY CHOOSE STATION SATCOM?</h2>
    <div class="row g-4 pt-5 mt-5">
      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="satcom-benefit-card p-4 h-100">
          <div class="satcom-icon mb-3">
            <img src="assets/images/about-us/1.svg" alt="Industry Icon" />
          </div>
          <h5 class="satcom-card-title">Industry-Specific,<br>Customer-Centric Solutions</h5>
          <p class="satcom-card-text">
            We design and deliver connectivity solutions that are built around the unique challenges of maritime, aviation, energy, mining, and enterprise operations.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="satcom-benefit-card p-4 h-100">
          <div class="satcom-icon mb-3">
            <img src="assets/images/about-us/2.svg" alt="Support Icon" />
          </div>
          <h5 class="satcom-card-title">24/7 Global<br>Technical Support</h5>
          <p class="satcom-card-text">
            Connectivity failures are not an option. Our dedicated team operates around the clock to ensure swift issue resolution and proactive maintenance.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="satcom-benefit-card p-4 h-100">
          <div class="satcom-icon mb-3">
            <img src="assets/images/about-us/3.svg" alt="Billing Icon" />
          </div>
          <h5 class="satcom-card-title">Advanced Billing &<br>Network Management</h5>
          <p class="satcom-card-text">
            Gain complete control over your satellite services with real-time traffic tracking, transparent invoicing, and consolidated billing.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mv-blue-overlay-section py-5 my-5">
  <div class="container">
    <div class="row g-4">
      <!-- Mission Card -->
      <div class="col-md-6 col-sm-6 col-12">
        <div class="mv-blue-card position-relative">
          <div class="mv-blue-img-wrapper">
            <img src="assets/images/about-us/MISSION.png" alt="Mission" class="mv-blue-img">
            <div class="mv-blue-img-overlay"></div>
          </div>
          <div class="mv-blue-text-overlay">
            <h3 class="mv-blue-title">Mission</h3>
            <p class="mv-blue-desc">
              To revolutionize satellite communication by integrating cutting-edge technology with
              customer-first solutions, ensuring seamless connectivity for industries worldwide.
            </p>
          </div>
        </div>
      </div>

      <!-- Vision Card -->
      <div class="col-md-6 col-sm-6 col-12">
        <div class="mv-blue-card position-relative">
          <div class="mv-blue-img-wrapper">
            <img src="assets/images/about-us/VISION.png" alt="Vision" class="mv-blue-img">
            <div class="mv-blue-img-overlay"></div>
          </div>
          <div class="mv-blue-text-overlay">
            <h3 class="mv-blue-title">Vision</h3>
            <p class="mv-blue-desc">
              To be the global leader in satellite communication, setting new benchmarks
              in innovation, service reliability, and customer excellence.
              service reliability, and customer excellence.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="lm-section navigating py-5">
  <div class="container">
    <div class="text-start mb-5">
      <h2 class="lm-title">LEADERSHIP & MANAGEMENT</h2>
      <p class="lm-subtitle text-start">
        Executive profiles here, highlighting leadership expertise, industry achievements, and their role in driving the company’s mission and vision.industry achievements, and their role in driving the company’s mission and vision.
      </p>
      </p>
    </div>

    <div class="row g-4">
      <div class="col-md-4 col-sm-6">
        <div class="lm-card">
          <img src="assets/images/about-us/4.png" alt="Leader" class="img-fluid lm-img rounded-4" />
          <p class="lm-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
          </p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="lm-card">
          <img src="assets/images/about-us/4.png" alt="Leader" class="img-fluid lm-img rounded-4" />
          <p class="lm-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
          </p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="lm-card">
          <img src="assets/images/about-us/4.png" alt="Leader" class="img-fluid lm-img rounded-4" />
          <p class="lm-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--  -->
<section class="partner-network-section py-5">
  <div class="container">
    <div class="text-start mb-4">
      <h2 class="partner-network-title">OUR PARTNER NETWORK</h2>
      <p class="partner-network-description">
        Station Satcom partners with leading satellite technology providers to bring you the most advanced and reliable communication solutions
      </p>
    </div>
    <!--  -->
    <div class="row text-center justify-content-between gy-4 about-partner mt-5">
      <!-- Row 1 -->
      <div class="col-2 col-md-2 col-6">
        <img src="assets/images/partner-logo/1.png" alt="Starlink" class="img-fluid partner-logo" />
      </div>
      <div class="col-2 col-md-2 col-6">
        <img src="assets/images/partner-logo/2.png" alt="OneWeb" class="img-fluid partner-logo" />
      </div>
      <div class="col-2 col-md-2 col-6">
        <img src="assets/images/partner-logo/3.png" alt="GlobalStar" class="img-fluid partner-logo" />
      </div>
      <div class="col-2 col-md-2 col-6 last-partner">
        <img src="assets/images/partner-logo/4.png" alt="Orbcomm" class="img-fluid partner-logo" />
      </div>
      <div class="col-2 col-md-2 col-6 last-partner">
        <img src="assets/images/partner-logo/5.png" alt="Iridium" class="img-fluid partner-logo" />
      </div>
      <div class="col-2 col-md-2 col-6">
        <img src="assets/images/partner-logo/6.png" alt="Starlink" class="img-fluid partner-logo" />
      </div>
      <div class="col-2 col-md-2 col-6">
        <img src="assets/images/partner-logo/7.png" alt="OneWeb" class="img-fluid partner-logo" />
      </div>
      <div class="col-2 col-md-2 col-6">
        <img src="assets/images/partner-logo/8.png" alt="GlobalStar" class="img-fluid partner-logo" />
      </div>
      <div class="col-2 col-md-2 col-6 last-partner">
        <img src="assets/images/partner-logo/9.png" alt="Orbcomm" class="img-fluid partner-logo" />
      </div>
      <div class="col-2 col-md-2 col-6 last-partner">
        <img src="assets/images/partner-logo/10.png" alt="Iridium" class="img-fluid partner-logo" />
      </div>
      <div class="col-2 col-md-2 col-6">
        <img src="assets/images/partner-logo/11.png" alt="Starlink" class="img-fluid partner-logo" />
      </div>
      <div class="col-2 col-md-2 col-6">
        <img src="assets/images/partner-logo/12.png" alt="OneWeb" class="img-fluid partner-logo" />
      </div>
      <div class="col-2 col-md-2 col-6">
        <img src="assets/images/partner-logo/13.png" alt="GlobalStar" class="img-fluid partner-logo" />
      </div>
      <div class="col-2 col-md-2 col-6 last-partner">
        <img src="assets/images/partner-logo/14.png" alt="Orbcomm" class="img-fluid partner-logo" />
      </div>
      <div class="col-2 col-md-2 col-6 last-partner">
        <img src="assets/images/partner-logo/15.png" alt="Iridium" class="img-fluid partner-logo" />
      </div>
      <div class="col-2 col-md-2 col-6 last-partner">
        <img src="assets/images/partner-logo/16.png" alt="Iridium" class="img-fluid partner-logo" />
      </div>
      <div class="col-2 col-md-2 col-6 last-partner">
        <img src="assets/images/partner-logo/17.png" alt="Iridium" class="img-fluid partner-logo" />
      </div>
      <div class="col-2 col-md-2 col-6 last-partner">
        <img src="assets/images/partner-logo/18.png" alt="Iridium" class="img-fluid partner-logo" />
      </div>
    </div>
  </div>
</section>
<!-- global Map section -->
<section class="global-network-section">
  <div class="container">
    <div class="global-network-content">
      <h2>Global Warehousing & Network</h2>
      <p>
        With 22 strategically located global warehouses and offices in Singapore and India (Mumbai and Delhi), we ensure timely delivery of equipment and spares, even within 48 hours, including weekends. This extensive network supports our ability to deliver prompt installations and high-quality repair services wherever needed.
      </p>
    </div>
    <div class="global-image mt-5 pt-5">
      <img src="assets/images/about-us/MAP.png" alt="">
    </div>
  </div>
</section>
<!--  -->
<div class="container py-5 mb-5">
  <h2 class="text-uppercase mb-5">What our Clients Say</h2>

  <div class="custom-overlap-carousel-wrapper position-relative">
    <div class="custom-overlap-carousel-track d-flex mt-5">

      <div class="custom-overlap-carousel-card mb-5">
        <div class="custom-overlap-card-content bg-white text-dark py-5 rounded-4 shadow">
          <div class="custom-overlap-quote-icon"><img src="assets/images/about-us/quotes.svg" alt=""></div>
          <p>Outstanding service and support—fast, reliable and always professional. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi optio earum nesciunt architecto
            obcaecati id vel aperiam possimus voluptatibus debitis repellat quos ad aliquam, impedit officiis fuga quisquam fugiat sed.</p>
          <p class="fw-bold mb-0">— Alice Green</p>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="custom-overlap-carousel-card">
        <div class="custom-overlap-card-content bg-white text-dark py-5 rounded-4 shadow">
          <div class="custom-overlap-quote-icon"><img src="assets/images/about-us/quotes.svg" alt=""></div>
          <p>Outstanding service and support—fast, reliable and always professional. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi optio earum nesciunt architecto
            obcaecati id vel aperiam possimus voluptatibus debitis repellat quos ad aliquam, impedit officiis fuga quisquam fugiat sed.</p>
          <p class="fw-bold mb-0">— Alice Green</p>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="custom-overlap-carousel-card">
        <div class="custom-overlap-card-content bg-white text-dark py-5 rounded-4 shadow">
          <div class="custom-overlap-quote-icon"><img src="assets/images/about-us/quotes.svg" alt=""></div>
          <p>Outstanding service and support—fast, reliable and always professional. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi optio earum nesciunt architecto
            obcaecati id vel aperiam possimus voluptatibus debitis repellat quos ad aliquam, impedit officiis fuga quisquam fugiat sed.</p>
          <p class="fw-bold mb-0">— Alice Green</p>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="custom-overlap-carousel-card">
        <div class="custom-overlap-card-content bg-white text-dark py-5 rounded-4 shadow">
          <div class="custom-overlap-quote-icon"><img src="assets/images/about-us/quotes.svg" alt=""></div>
          <p>Outstanding service and support—fast, reliable and always professional. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi optio earum nesciunt architecto
            obcaecati id vel aperiam possimus voluptatibus debitis repellat quos ad aliquam, impedit officiis fuga quisquam fugiat sed.</p>
          <p class="fw-bold mb-0">— Alice Green</p>
        </div>
      </div>
      <!-- Card 5 -->
      <div class="custom-overlap-carousel-card">
        <div class="custom-overlap-card-content bg-white text-dark py-5 rounded-4 shadow">
          <div class="custom-overlap-quote-icon"><img src="assets/images/about-us/quotes.svg" alt=""></div>
          <p>Outstanding service and support—fast, reliable and always professional. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi optio earum nesciunt architecto
            obcaecati id vel aperiam possimus voluptatibus debitis repellat quos ad aliquam, impedit officiis fuga quisquam fugiat sed.</p>
          <p class="fw-bold mb-0">— Alice Green</p>
        </div>
      </div>
    </div>
    <!-- Pagination Dots -->
    <div class="dots-container"></div>
  </div>
</div>


<!-- form section -->
<div class="specialist-section-img connectivitym">
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
  </div>
  </form>
  </section>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const track = document.querySelector('.custom-overlap-carousel-track');
    const cards = document.querySelectorAll('.custom-overlap-carousel-card');
    const dotsContainer = document.querySelector(".dots-container");

    let index = 0;
    let visibleCards = getVisibleCards();
    let totalCards = cards.length;
    let dots = [];

    function getVisibleCards() {
      if (window.innerWidth < 768) return 1;
      if (window.innerWidth < 992) return 2;
      return 3;
    }

    function createDots() {
      dotsContainer.innerHTML = "";
      dots = [];

      const dotCount = Math.max(totalCards - visibleCards + 1, 1);
      for (let i = 0; i < dotCount; i++) {
        const dot = document.createElement("span");
        dot.classList.add("dot");
        if (i === 0) dot.classList.add("active");
        dot.setAttribute("data-index", i);
        dotsContainer.appendChild(dot);
        dots.push(dot);

        dot.addEventListener("click", function() {
          index = parseInt(this.getAttribute("data-index"));
          updateCarousel();
        });
      }
    }

    function updateCarousel() {
      const offset = index * (100 / visibleCards);
      track.style.transform = `translateX(-${offset}%)`;

      // Remove and add active class
      cards.forEach(card => card.classList.remove('active'));

      const centerIndex = index + Math.floor(visibleCards / 2);
      if (cards[centerIndex]) {
        cards[centerIndex].classList.add('active');
      }

      // Update dots
      dots.forEach(dot => dot.classList.remove("active"));
      if (dots[index]) dots[index].classList.add("active");
    }

    function autoScroll() {
      index++;
      const maxIndex = Math.max(totalCards - visibleCards, 0);
      if (index > maxIndex) {
        index = 0;
      }
      updateCarousel();
    }

    // Handle resize
    function handleResize() {
      const newVisibleCards = getVisibleCards();
      if (newVisibleCards !== visibleCards) {
        visibleCards = newVisibleCards;
        index = 0;
        createDots();
        updateCarousel();
      }
    }

    // Initial setup
    visibleCards = getVisibleCards();
    createDots();
    updateCarousel();
    const interval = setInterval(autoScroll, 4000);
    window.addEventListener("resize", handleResize);
  });
</script>


<?php
include 'include/footer.php';
?>