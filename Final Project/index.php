<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wellness Spa</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
 
  <header class="hero">
    <div class="hero-content">
      <h1>Your Wellness Journey Starts Here</h1>
      <div class="hero-buttons">
          <nav>
                <a  class="cta-btn" href="booknow.php" id="about-link">Book Now</a>
                <a  class="cta-btn .secondary" href="viewservice.php" id="contact-link">View Service</a>
            </nav>
    </nav>
    </div>
  </header>

  <div class="container">
    <section class="services">
      <h2>Our Popular Services</h2>
      <div class="services-grid" id="services-grid">
      </div>
    </section>

 
    <section class="testimonials">
      <h2>What Our Clients Say</h2>
      <div class="testimonial-slider" id="testimonial-slider">
      </div>
    </section>

    <section class="cta">
      <h2>Take the First Step to Wellness</h2>
      <nav>
                <a  class="cta-btn1" href="create.php" id="create-link">Create an Account</a>
                <a class="cta-btn1 secondary" href="#" id="login-link">Login</a>
                <a class="cta-btn1 .secondary" href="schedule.php" id="schedule-link">Schedule Your First Session</a>
            </nav>

    </section>
  </div>

  <div class="popup-login" id="popup-login">
    <div class="login-form">
      <h2>Login</h2>
      <form action="login.php" method="POST">
        <input type="email" id="email" name="email" placeholder="Email" required><br>
        <input type="password" id="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
      </form>
      <button class="close-btn" id="close-popup">Close</button>
    </div>
  </div>

  <script>
    // Get the login button, popup and close button
    const loginButton = document.getElementById('login-link');
    const popup = document.getElementById('popup-login');
    const closePopupButton = document.getElementById('close-popup');

    // Show the popup when login link is clicked
    loginButton.addEventListener('click', function(event) {
      event.preventDefault();
      popup.style.display = 'flex'; // Show the popup
    });

    // Close the popup when close button is clicked
    closePopupButton.addEventListener('click', function() {
      popup.style.display = 'none'; // Hide the popup
    });

    // Close the popup when clicked outside the form
    window.addEventListener('click', function(event) {
      if (event.target === popup) {
        popup.style.display = 'none'; // Hide the popup if clicked outside
      }
    });
  </script>


  <script src="script.js"></script>
</body>
</html>