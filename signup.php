<?php include 'head.php';?>

<div id="signup">

  <div class="darken"></div>

  <div class="wrap">
    <div id="slider">
      <div class="slide">
        <div class="slide-content">
        </div>
      </div>
    </div>
  </div>

  <div class="login-container">
    <div class="login-content">
      <div class="logo-container">
        <img src="assets/img/logo_epico.png" alt="Epico Logo">
      </div>
      <h3>SIGN UP</h3>
      <div class="input-container">
        <div class="firstname-input">
          <input type="text" name="firstname" placeholder="firstname">
          <br>
        </div>
        <div class="lastname-input">
          <input type="text" name="lastname" placeholder="lastname">
          <br>
        </div>
        <div class="email-input">
          <input type="text" name="email" placeholder="username@example.com">
          <br>
        </div>
        <div class="password-input">
          <input type="password" name="password" placeholder="password">
          <br>
        </div>
        <h4>I am a looking for:</h4>
        <form action="">
          <div class="job-type-container">
            <div class="job-type">
              <input class="job-type-input" type="radio" name="job-type" value="freelance">
              <p>Freelance job</p>
            </div>
            <div class="job-type">
              <input class="job-type-input" type="radio" name="job-type" value="freelance">
              <p>Permanent job</p>
            </div>
            <div class="job-type">
              <input class="job-type-input" type="radio" name="job-type" value="freelance">
              <p>Both</p>
            </div>

          </div>

        </form>
      </div>
      <div class="signup-btn">Sign up</div>
      <div class="or-login">or log in with</div>
      <div class="linkedin-btn">
        <span class="fa fa-linkedin"></span> Login with Linkedin</div>
      <a href="login.php">
        <p class="already">Already have an account?</p>
      </a>
    </div>
  </div>


</div>