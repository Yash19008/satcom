<?php
include 'include/header.php';
?>
<title>Station Satcom | FAQ</title>
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
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6) 60%, #000000 100%), url(assets/images/banner-image/Contact\ Us_Banner.webp) center center / cover no-repeat;
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

  /**/
  .faq-section {
    background-color: transparent;
    padding: 2rem 1rem;
    display: flex;
    justify-content: center;
  }

  .faq-container {
    width: 100%;
  }

  .faq-section .section-title {
    font-size: 1.5rem;
    font-weight: 400;
    text-transform: uppercase;
    color: white;
    margin-bottom: 1rem;
    text-align: left;
  }

  .faq-section .accordion-item {
    border: none;
    margin-bottom: 10px;
    background-color: transparent;
  }

  .faq-section .accordion-button {
    background-color: #ffffff;
    color: #000000;
    font-weight: 700;
    border-radius: 8px;
    margin-bottom: 0;
    padding: 1rem;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .faq-section .accordion-button.collapsed {
    border-radius: 8px;
  }

  .faq-section .accordion-button::after {
    display: none !important;
    /* Hide default arrow */
  }

  /* Custom icon image right side */
  .faq-section .accordion-button::before {
    content: '';
    background-image: url('assets/images/dropdown-arrow.png');
    /* Replace with your collapsed icon */
    background-size: 20px 20px;
    background-repeat: no-repeat;
    width: 20px;
    height: 20px;
    position: absolute;
    right: 20px;
    transition: transform 0.3s ease;
  }

  .faq-section .accordion-button:not(.collapsed)::before {
    background-image: url('assets/images/dropup-arrow.png');
    /* Replace with your expanded icon */
    transform: rotate(180deg);
  }

  .faq-section .accordion-body {
    background: #f9f9f9;
    color: #333;
    border-radius: 8px 8px 8px 8px;
    padding: 1.25rem 1.5rem;
    font-size: 0.95rem;
    line-height: 1.6;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.05);
  }

  .accordion-button {
    transition: transform 0.3s ease;
  }

  .accordion-button:hover {
    transform: scale(1.02);
    /* Slight grow on hover */
  }

  .accordion-body {
    opacity: 0;
    transform: scale(0.98);
    transition: opacity 0.4s ease, transform 0.4s ease;
  }

  /* This class is added when the accordion is shown */
  .accordion-body.show-effect {
    opacity: 1;
    transform: scale(1);
  }

  .accordion-divider {
    height: 1px;
    width: 0;
    background-color: #444;
    /* grey/black */
    margin: 0 auto 1rem auto;
    opacity: 0;
    transition: width 0.6s ease, opacity 0.6s ease;
    transform-origin: center;
  }

  .accordion-divider.animate {
    width: 90%;
    opacity: 1;
  }

  @media (max-width: 576px) {
    .faq-section {
      flex-direction: column;
      padding: 1.5rem 1rem;
      align-items: flex-start;
    }

    .faq-container {
      padding: 0;
    }

    .faq-section .accordion-button {
      font-size: 0.6rem;
      /* Don't make it too small */
      padding: 0.9rem 2.5rem 0.9rem 1rem;
      /* Added more right padding */
    }

    .faq-section .accordion-body {
      font-size: 0.6rem;
      padding: 1rem 1.2rem;
    }

    .faq-section .section-title {
      font-size: 0.8rem;
    }
  }

  @media screen and (max-width: 550px) {
    .specialist-section {
      padding: 2rem 1rem;
    }

    .footer-heading h2,
    p {
      text-align: center;
    }

    .banner-text {
      padding-left: 0px;

    }

    .banner-text {
      width: 100%;
    }
  }
</style>

<section>
  <div class="container">
    <div class="top-banner">
      <div class="banner-text">
        <h1>Frequently Asked</h1>
        <h1>Questions</h1>
        <p class="text-center">Welcome to our FAQ hub — your go-to resource for quick answers about our satellite connectivity, cybersecurity, IT, crew welfare, and support services. If you don’t find what you’re looking for, contact us directly.</p>
      </div>
    </div>
  </div>
</section>
</div>
<section>
  <div class="faq-section">
    <div class="faq-container container">
      <h2 class="section-title">Connectivity & Satellite Networks</h2>

      <div class="accordion" id="faqAccordion">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
              WHAT SATELLITE SERVICES DOES STATION SATCOM PROVIDE?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse mt-1" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              <hr class="accordion-divider" />
              Station Satcom provides VSAT, LEO, broadband, and maritime satellite connectivity tailored for vessels.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
              WHAT IS THE DIFFERENCE BETWEEN LEO AND VSAT?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse mt-1" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              <hr class="accordion-divider" />
              LEO satellites orbit lower and offer lower latency, while VSAT uses geostationary satellites for broader coverage.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
              CAN I USE BOTH LEO AND VSAT ON MY VESSEL?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse mt-1" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              <hr class="accordion-divider" />
              Yes, many hybrid systems allow simultaneous use of LEO and VSAT to ensure redundancy and optimized performance.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
              IS STARLINK APPROVED FOR MARITIME USE?
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse  mt-1" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              <hr class="accordion-divider" />
              Yes, Starlink Maritime is available for vessel use and provides high-speed internet in open seas.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="mt-2">
  <div class="faq-section">
    <div class="faq-container container">
      <h2 class="section-title">Cybersecurity & IT Services</h2>

      <div class="accordion" id="faqAccordionCyber">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
              What cybersecurity services are included?
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse mt-1" data-bs-parent="#faqAccordionCyber">
            <div class="accordion-body">
              <hr class="accordion-divider" />
              We offer cybersecurity audits, firewall setup, intrusion detection, and endpoint protection tailored for maritime environments.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
              Do you help with IMO 2021 cyber compliance?
            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse mt-1" data-bs-parent="#faqAccordionCyber">
            <div class="accordion-body">
              <hr class="accordion-divider" />
              Yes, we assist vessel operators in meeting IMO 2021 cybersecurity compliance with assessments, policy documentation, and training.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingSeven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven">
              Do you provide onboard IT support?
            </button>
          </h2>
          <div id="collapseSeven" class="accordion-collapse collapse mt-1" data-bs-parent="#faqAccordionCyber">
            <div class="accordion-body">
              <hr class="accordion-divider" />
              Yes, we provide both remote and onboard IT support for troubleshooting, maintenance, and software updates.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="mt-2">
  <div class="faq-section">
    <div class="faq-container container">
      <h2 class="section-title">Industries & Deployment</h2>

      <div class="accordion" id="faqAccordionIndustries">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingEight">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight">
              What industries do you serve?
            </button>
          </h2>
          <div id="collapseEight" class="accordion-collapse collapse mt-1" data-bs-parent="#faqAccordionIndustries">
            <div class="accordion-body">
              <hr class="accordion-divider" />
              We serve maritime, oil & gas, defense, commercial shipping, and remote infrastructure industries with robust satellite connectivity.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingNine">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine">
              Can you install systems on land and at sea?
            </button>
          </h2>
          <div id="collapseNine" class="accordion-collapse collapse mt-1" data-bs-parent="#faqAccordionIndustries">
            <div class="accordion-body">
              <hr class="accordion-divider" />
              Yes, we install communication and IT systems both onshore and offshore to ensure complete connectivity coverage.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen">
              How fast can you deploy a solution?
            </button>
          </h2>
          <div id="collapseTen" class="accordion-collapse collapse mt-1" data-bs-parent="#faqAccordionIndustries">
            <div class="accordion-body">
              <hr class="accordion-divider" />
              Our deployment time varies by project, but rapid installations can be completed in as little as 24–72 hours for standard systems.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="mt-2">
  <div class="faq-section">
    <div class="faq-container container">
      <h2 class="section-title">Crew Engagement & Welfare</h2>

      <div class="accordion" id="faqAccordionCrew">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingEleven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven">
              What is Station Multiplex?
            </button>
          </h2>
          <div id="collapseEleven" class="accordion-collapse collapse mt-1" data-bs-parent="#faqAccordionCrew">
            <div class="accordion-body">
              <hr class="accordion-divider" />
              Station Multiplex is our onboard entertainment platform, offering movies, shows, news, and content tailored for seafarers.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwelve">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve">
              What kind of wellness support do you provide?
            </button>
          </h2>
          <div id="collapseTwelve" class="accordion-collapse collapse mt-1" data-bs-parent="#faqAccordionCrew">
            <div class="accordion-body">
              <hr class="accordion-divider" />
              We offer wellness content, mental health resources, telemedicine access, and virtual events to boost crew morale and wellbeing.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThirteen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen">
              Can crew get personal internet onboard?
            </button>
          </h2>
          <div id="collapseThirteen" class="accordion-collapse collapse mt-1" data-bs-parent="#faqAccordionCrew">
            <div class="accordion-body">
              <hr class="accordion-divider" />
              Yes, we enable crew members to access affordable and secure personal internet via managed bandwidth allocations.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mt-2">
  <div class="faq-section">
    <div class="faq-container container">
      <h2 class="section-title">Hardware & Devices</h2>

      <div class="accordion" id="faqAccordionHardware">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFourteen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen">
              Do you supply maritime satellite hardware?
            </button>
          </h2>
          <div id="collapseFourteen" class="accordion-collapse collapse mt-1" data-bs-parent="#faqAccordionHardware">
            <div class="accordion-body">
              <hr class="accordion-divider" />
              Yes, we supply and install antennas, modems, routers, and other satellite hardware optimized for maritime use.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFifteen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen">
              Is your solution compatible with my existing systems?
            </button>
          </h2>
          <div id="collapseFifteen" class="accordion-collapse collapse mt-1" data-bs-parent="#faqAccordionHardware">
            <div class="accordion-body">
              <hr class="accordion-divider" />
              Our systems are designed for compatibility with most industry-standard equipment, minimizing disruption to your existing setup.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mt-2">
  <div class="faq-section">
    <div class="faq-container container">
      <h2 class="section-title">Support, SLAs & Billing</h2>

      <div class="accordion" id="faqAccordionSupport">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingSixteen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen">
              What kind of technical support do you offer?
            </button>
          </h2>
          <div id="collapseSixteen" class="accordion-collapse collapse mt-1" data-bs-parent="#faqAccordionSupport">
            <div class="accordion-body">
              <hr class="accordion-divider" />
              We provide 24/7 technical support, including remote diagnostics, onboard assistance, and proactive system monitoring.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingSeventeen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen">
              Do you offer SLAs?
            </button>
          </h2>
          <div id="collapseSeventeen" class="accordion-collapse collapse mt-1" data-bs-parent="#faqAccordionSupport">
            <div class="accordion-body">
              <hr class="accordion-divider" />
              Yes, we provide custom Service Level Agreements with guaranteed uptime, response times, and escalation procedures.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingEighteen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEighteen">
              How is billing handled across fleets?
            </button>
          </h2>
          <div id="collapseEighteen" class="accordion-collapse collapse mt-1" data-bs-parent="#faqAccordionSupport">
            <div class="accordion-body">
              <hr class="accordion-divider" />
              We offer centralized billing with vessel-level breakdowns, flexible invoicing cycles, and customizable reporting formats.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mt-2">
  <div class="faq-section">
    <div class="faq-container container">
      <h2 class="section-title">General & Commercial</h2>

      <div class="accordion" id="faqAccordionGeneral">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingNineteen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNineteen">
              Where are you based?
            </button>
          </h2>
          <div id="collapseNineteen" class="accordion-collapse collapse mt-1" data-bs-parent="#faqAccordionGeneral">
            <div class="accordion-body">
              <hr class="accordion-divider" />
              Station Satcom is headquartered in the UAE, with operations and service coverage across global maritime routes.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwenty">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty">
              Can I customize my satellite package?
            </button>
          </h2>
          <div id="collapseTwenty" class="accordion-collapse collapse mt-1" data-bs-parent="#faqAccordionGeneral">
            <div class="accordion-body">
              <hr class="accordion-divider" />
              Yes, our solutions are fully customizable to match your data needs, budget, and operational requirements.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwentyOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyOne">
              Do you work with partners or integrators?
            </button>
          </h2>
          <div id="collapseTwentyOne" class="accordion-collapse collapse mt-1" data-bs-parent="#faqAccordionGeneral">
            <div class="accordion-body">
              <hr class="accordion-divider" />
              Absolutely. We collaborate with system integrators, resellers, and channel partners for turnkey project delivery and support.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- View more button -->
<!-- form section -->
<div class="specialist-section-img connectivity" style="background-image: url('assets/images/footers/contact-footer.png')">
  <div class="d-flex">
    <section class="specialist-section mt-0 container">
      <div class="footer-heading">
        <h2 class="section-title">Still Have a Question?</h2>
        <p>We’re here to help. Connect with a specialist, or use our live chat feature for faster responses.</p>
      </div>
    </section>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const accordions = document.querySelectorAll('.accordion-collapse');

    accordions.forEach(accordion => {
      accordion.addEventListener('shown.bs.collapse', () => {
        const hr = accordion.querySelector('.accordion-divider');
        if (hr) {
          hr.classList.remove('animate');
          void hr.offsetWidth; // force reflow
          hr.classList.add('animate');
        }
      });

      // Optional: Reset animation when collapsed
      accordion.addEventListener('hide.bs.collapse', () => {
        const hr = accordion.querySelector('.accordion-divider');
        if (hr) {
          hr.classList.remove('animate');
        }
      });
    });
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const accordions = document.querySelectorAll('.accordion-collapse');

    accordions.forEach(accordion => {
      accordion.addEventListener('shown.bs.collapse', () => {
        const body = accordion.querySelector('.accordion-body');
        if (body) {
          body.classList.remove('show-effect');
          void body.offsetWidth; // force reflow
          body.classList.add('show-effect');
        }
      });

      accordion.addEventListener('hide.bs.collapse', () => {
        const body = accordion.querySelector('.accordion-body');
        if (body) {
          body.classList.remove('show-effect');
        }
      });
    });
  });
</script>


<?php
include 'include/footer.php';
?>