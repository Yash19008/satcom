<style>
  .rc-share-container {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 1000;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
  }

  .rc-share-label {
    background-color: #ffffff;
    color: #f1ce64;
    padding: 10px 10px;
    border-radius: 30px;
    font-weight: bold;
    text-transform: uppercase;
    cursor: pointer;
    transition: background-color 0.3s ease;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
  }

  .rc-share-label:hover {
    color: #ffffff;
  }

  .rc-share-icons {
    display: none;
    flex-direction: column;
    gap: 10px;
    margin-top: 10px;
    animation: fadeIn 0.3s ease-in-out;
  }

  .rc-share-container:hover .rc-share-icons {
    display: flex;
  }

  .rc-share-icons a {
    width: 50px;
    height: 50px;
    background-color: #ffffff;
    color: #ffffff;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    transition: background-color 0.3s, color 0.3s;
  }

  /* Hover colors for each icon */
  .rc-share-icons a:nth-child(1):hover {
    color: #fff;
  }

  .rc-share-icons a:nth-child(2):hover {
    color: #fff;
  }

  .rc-share-icons a:nth-child(3):hover {
    color: #fff;
  }

  .rc-share-icons a:nth-child(4):hover {
    color: #fff;
  }

  .rc-share-label img {
    width: 30px;
    height: 30px;
  }

  .rc-share-icons img {
    width: 30px;
    height: 30px;
  }

  /* Optional fadeIn animation */
  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(10px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* Responsive layout for mobile */
  @media (max-width: 768px) {
    .rc-share-container {
      right: 50%;
      transform: translateX(50%);
      align-items: center;
    }

    .rc-share-icons {
      flex-direction: row;
    }

    .rc-share-icons a {
      width: 40px;
      height: 40px;
      font-size: 18px;
    }

    .rc-share-label {
      font-size: 16px;
      padding: 8px 16px;
    }
  }

  .footer-custom {
    background-color: #001f3f;
    /* same dark blue as in image */
  }

  .footer-logo {
    height: 30px;
  }

  .footer-icon {
    width: 24px;
    margin: 0 2px;
  }

  .footer-link {
    color: #ffffff;
    font-size: 14px;
    text-decoration: none;
    margin: 0 4px;
  }

  .footer-center {
    justify-content: center;
  }

  .footer-link:hover {
    text-decoration: underline;
  }

  @media (max-width: 767.98px) {

    .footer-left,
    .footer-center,
    .footer-right {
      justify-content: center !important;
      text-align: center !important;
    }

    .footer-right {
      font-size: 13px;
    }
  }
</style>
<div class="rc-share-container">
  <span class="rc-share-label"><img src="assets/images/share.png"></span>
  <nav class="rc-share-icons">
    <a href="https://x.com/Station_Satcom_" target="_blank" rel="noopener noreferrer">
      <img src="assets/images/twitter-social.png" alt="Twitter">
    </a>
    <a href="https://www.facebook.com/profile.php?id=61577074606628" target="_blank" rel="noopener noreferrer">
      <img src="assets/images/facebook-social.png" alt="Facebook">
    </a>
    <!-- <a href="#" target="_blank" rel="noopener noreferrer">
      <img src="assets/images/whatsapp-social.png" alt="WhatsApp">
    </a> -->
    <a href="https://www.instagram.com/stationsatcom/" target="_blank" rel="noopener noreferrer">
      <img src="assets/images/instagram-float.svg" alt="Instagram">
    </a>
    <a href="https://www.linkedin.com/company/station-satcom/" target="_blank" rel="noopener noreferrer">
      <img src="assets/images/linkedin-float.svg" alt="LinkedIn">
    </a>
  </nav>
</div>


<footer class="footer-custom py-5">
  <div class="container inner-footer-container">
    <div class="row align-items-center text-center text-md-start">

      <!-- Left: Logo + Copyright -->
      <div class="col-md-4 mb-3 mb-md-0 footer-left d-flex flex-column flex-md-row align-items-center gap-2">
        <img src="assets/images/circle-satcom/logo-01.png" alt="Station Satcom Logo" class="footer-logo">
        <p class="mb-0 text-white small">© Copyright 2017. Station Satcom</p>
      </div>

      <!-- Center: Social Icons -->
      <div class="col-md-4 mb-3 mb-md-0 footer-center text-center">
        <a href="#"><img src="assets/images/LinkedIn.svg" class="footer-icon" alt="LinkedIn"></a>
        <a href="#"><img src="assets/images/Instagram.svg" class="footer-icon" alt="Instagram"></a>
        <a href="#"><img src="assets/images/Facebook.svg" class="footer-icon" alt="Facebook"></a>
        <a href="#"><img src="assets/images/Twitter.svg" class="footer-icon" alt="Twitter"></a>
        <a href="#"><img src="assets/images/WhatsApp.svg" class="footer-icon" alt="WhatsApp"></a>
      </div>

      <!-- Right: Page Links -->
      <div class="col-md-4 footer-right text-md-end">
        <a href="#" class="footer-link">Privacy Policy</a> |
        <a href="#" class="footer-link">Terms Of Use</a> |
        <a href="#" class="footer-link">Disclaimer</a> |
        <a href="#" class="footer-link">Resources</a>
      </div>
    </div>
  </div>
</footer>
<script>
  const rcShare = document.querySelector('.rc-share-container');

  setTimeout(() => {
    rcShare.classList.add("rc-share-hover");
  }, 1000);

  setTimeout(() => {
    rcShare.classList.remove("rc-share-hover");
  }, 3000);
</script>
<script src="assets/javascript/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
<!-- Include jQuery if not already -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function() {
    $('.specialist-form').on('submit', function(e) {
      e.preventDefault(); // Prevent default form submission

      // Collect form data manually since some fields are outside of form-group
      const formData = {
        name: $('.specialist-input[placeholder="Name*"]').val(),
        email: $('.specialist-input[placeholder="Email*"]').val(),
        phone: $('.specialist-input[placeholder="Phone"]').val(),
        country: $('.specialist-input[placeholder="Country*"]').val(),
        topic: $('.select-with-circle').val(),
        message: $('.specialist-textarea').val(),
        consent: $('.specialist-checkbox input[type="checkbox"]').is(':checked')
      };

      // Optional: Validation check (in case HTML5 doesn't catch it)
      if (!formData.name || !formData.email || !formData.country || !formData.topic || !formData.message || !formData.consent) {
        alert('Please fill out all required fields.');
        return;
      }

      // Send data to your API
      $.ajax({
        url: 'submit_form_details.php', // Replace with your actual endpoint
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify(formData),
        success: function(response) {
          alert('Form submitted successfully!');
          // Optionally reset the form
          $('.specialist-form')[0].reset();
        },
        error: function(xhr, status, error) {
          alert('An error occurred while submitting the form. Please try again.');
          console.error(error);
        }
      });
    });
  });
</script>

</body>

</html>