<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - TechHub</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="style.css" />
    <style>
      /* Login page specific styles */
      .login-container {
        max-width: 500px;
        margin: 60px auto;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 5px 30px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        position: relative;
        overflow: hidden;
      }

      .login-container::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 6px;
        background: linear-gradient(90deg, #4a6cf7, #3a5bd9);
      }

      .login-header {
        text-align: center;
        margin-bottom: 30px;
      }

      .login-header h1 {
        font-size: 32px;
        color: #333;
        margin-bottom: 12px;
      }

      .brand-highlight {
        font-weight: 700;
        color: #1a237e;
      }

      .brand-highlight span {
        color: #4a6cf7;
      }

      .login-header p {
        color: #666;
        font-size: 16px;
      }

      .login-tabs {
        display: flex;
        border-bottom: 1px solid #e1e1e1;
        margin-bottom: 30px;
      }

      .login-tab {
        flex: 1;
        padding: 15px 0;
        text-align: center;
        font-weight: 600;
        color: #666;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
      }

      .login-tab.active {
        color: #4a6cf7;
        border-bottom: 2px solid #4a6cf7;
      }

      .login-tab:hover:not(.active) {
        color: #3a5bd9;
        background-color: #f9faff;
      }

      .login-form-container .form-group {
        margin-bottom: 22px;
      }

      .login-form-container label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
        color: #444;
        font-size: 15px;
      }

      .login-form-container .input-with-icon {
        position: relative;
      }

      .login-form-container .input-with-icon i {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #999;
      }

      .login-form-container input[type="email"],
      .login-form-container input[type="password"],
      .login-form-container input[type="text"] {
        width: 100%;
        padding: 14px 15px 14px 45px;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-size: 15px;
        transition: all 0.3s;
      }

      .login-form-container input:focus {
        border-color: #4a6cf7;
        outline: none;
        box-shadow: 0 0 0 3px rgba(74, 108, 247, 0.15);
      }

      .password-toggle {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        color: #999;
        cursor: pointer;
        font-size: 16px;
      }

      .password-toggle:hover {
        color: #4a6cf7;
      }

      .password-strength {
        margin-top: 8px;
      }

      .strength-bar {
        height: 4px;
        background-color: #e1e1e1;
        border-radius: 2px;
        overflow: hidden;
        margin-bottom: 5px;
      }

      .strength-indicator {
        height: 100%;
        background-color: #f44336;
        transition: width 0.3s, background-color 0.3s;
      }

      .strength-text {
        font-size: 12px;
        color: #999;
      }

      .remember-forgot {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
      }

      .remember-me {
        display: flex;
        align-items: center;
      }

      .remember-me input {
        margin-right: 8px;
        accent-color: #4a6cf7;
        width: 16px;
        height: 16px;
      }

      .forgot-password {
        color: #4a6cf7;
        text-decoration: none;
        font-size: 14px;
      }

      .forgot-password:hover {
        text-decoration: underline;
      }

      .terms-check {
        display: flex;
        align-items: flex-start;
        margin-bottom: 25px;
      }

      .terms-check input {
        margin-right: 10px;
        margin-top: 3px;
        accent-color: #4a6cf7;
      }

      .terms-check label {
        font-size: 14px;
        color: #666;
        line-height: 1.4;
      }

      .terms-check a {
        color: #4a6cf7;
        text-decoration: none;
      }

      .terms-check a:hover {
        text-decoration: underline;
      }

      .login-button {
        width: 100%;
        padding: 16px;
        background-color: #4a6cf7;
        color: white;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
      }

      .login-button i {
        transition: transform 0.3s;
      }

      .login-button:hover {
        background-color: #3a5bd9;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(74, 108, 247, 0.25);
      }

      .login-button:hover i {
        transform: translateX(4px);
      }

      .register-button {
        background-color: #28a745;
      }

      .register-button:hover {
        background-color: #218838;
        box-shadow: 0 4px 12px rgba(40, 167, 69, 0.25);
      }

      .social-login {
        margin-top: 30px;
        text-align: center;
      }

      .social-login-text {
        display: flex;
        align-items: center;
        margin-bottom: 25px;
      }

      .social-login-text::before,
      .social-login-text::after {
        content: "";
        flex: 1;
        border-bottom: 1px solid #e1e1e1;
      }

      .social-login-text span {
        padding: 0 15px;
        color: #666;
        font-size: 14px;
      }

      .social-buttons {
        display: flex;
        justify-content: center;
        gap: 20px;
      }

      .social-button {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 56px;
        height: 56px;
        border-radius: 50%;
        border: none;
        color: #fff;
        font-size: 22px;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      }

      .google {
        background-color: #db4437;
      }

      .facebook {
        background-color: #4267b2;
      }

      .apple {
        background-color: #000;
      }

      .social-button:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
      }

      .form-tab {
        display: none;
      }

      .form-tab.active {
        display: block;
      }

      @media (max-width: 768px) {
        .login-container {
          margin: 40px 20px;
          padding: 25px 20px;
        }

        .login-header h1 {
          font-size: 28px;
        }
      }
    </style>
  </head>
  <body>
    <!-- Navigation Bar -->
    <?php include "header.html"; ?>

    <!-- Main Content - Login Form -->
    <main>
      <div class="login-container">
        <div class="login-header">
          <h1>
            Welcome to <span class="brand-highlight">Tech<span>Hub</span></span>
          </h1>
          <p>Your journey to premium tech experiences starts here</p>
        </div>

        <div class="login-tabs">
          <div class="login-tab active" id="login-tab">
            <i class="fas fa-sign-in-alt"></i> Login
          </div>
          <div class="login-tab" id="register-tab">
            <i class="fas fa-user-plus"></i> Create Account
          </div>
        </div>

        <div class="login-form-container">
          <!-- Login Form -->
          <form id="login-form" class="form-tab active" action="login.php" method="POST">
            <div class="form-group">
              <label for="login-email">Email Address</label>
              <div class="input-with-icon">
                <i class="fas fa-envelope"></i>
                <input type="email" id="login-email" name="email" placeholder="Enter your email" required/>
              </div>
            </div>
            <div class="form-group">
              <label for="login-password">Password</label>
              <div class="input-with-icon">
                <i class="fas fa-lock"></i>
                <input type="password" id="login-password" name="password" placeholder="Enter your password" required/>
              </div>
            </div>
            <div class="remember-forgot">
              <div class="remember-me">
                <input type="checkbox" id="remember" name="remember"/>
                <label for="remember" style="margin-bottom: 5px; margin-top: 5px">Remember me</label>
              </div>
              <a href="#" class="forgot-password">Forgot password?</a>
            </div>
            <button type="submit" class="login-button">
              Login <i class="fas fa-arrow-right"></i>
            </button>
          </form>
          <!-- Register Form -->
          <form id="register-form" class="form-tab" action="register.php" method="POST">
            <div class="form-group">
              <label for="register-name">Full Name</label>
              <div class="input-with-icon">
                <i class="fas fa-user"></i>
                <input type="text" id="register-name" name="fullname" placeholder="Enter your full name" required/>
              </div>
            </div>
            <div class="form-group">
              <label for="register-email">Email Address</label>
              <div class="input-with-icon">
                <i class="fas fa-envelope"></i>
                <input type="email" id="register-email" name="email" placeholder="Enter your email" required/>
              </div>
            </div>
            <div class="form-group">
              <label for="register-password">Password</label>
              <div class="input-with-icon">
                <i class="fas fa-lock"></i>
                <input type="password" id="register-password" name="password" placeholder="Create a password" required/>
              </div>
              <div class="password-strength">
                <div class="strength-bar">
                  <div class="strength-indicator" style="width: 0%"></div>
                </div>
                <span class="strength-text">Password strength</span>
              </div>
            </div>
            <div class="form-group">
              <label for="register-confirm-password">Confirm Password</label>
              <div class="input-with-icon">
                <i class="fas fa-lock"></i>
                <input type="password" id="register-confirm-password" name="confirm_password" placeholder="Confirm your password" required/>
              </div>
            </div>

            <div class="terms-check">
              <input type="checkbox" id="terms" name="terms" required />
              <label for="terms">I agree to the <a href="#">Terms of Service</a> and <a href="">Privacy Policy</a></label>
            </div>
            <button type="submit" class="login-button register-button">Create Account <i class="fas fa-arrow-right"></i></button>
          </form>
          <!-- Social Login Section -->
          <div class="social-login">
            <div class="social-login-text"><span>Or continue with</span></div>
            <div class="social-buttons">
              <button type="button" class="social-button google"><i class="fab fa-google"></i></button>
              <button type="button" class="social-button facebook"><i class="fab fa-facebook-f"></i></button>
              <button type="button" class="social-button apple"><i class="fab fa-apple"></i></button>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Footer Section -->
    <?php include "footer.html"; ?>

    <!-- Back to top button -->
    <button id="back-to-top" class="back-to-top">
      <i class="fas fa-arrow-up"></i>
    </button>

    <script>
      // Script for tab switching only - no form prevention
      document.addEventListener("DOMContentLoaded", function () {
        const loginTab = document.getElementById("login-tab");
        const registerTab = document.getElementById("register-tab");
        const loginForm = document.getElementById("login-form");
        const registerForm = document.getElementById("register-form");

        // Password toggle functionality
        const passwordToggles = document.querySelectorAll(".password-toggle");
        passwordToggles.forEach((toggle) => {
          toggle.addEventListener("click", function () {
            const input = this.parentElement.querySelector("input");
            const icon = this.querySelector("i");

            if (input.type === "password") {
              input.type = "text";
              icon.classList.remove("fa-eye");
              icon.classList.add("fa-eye-slash");
            } else {
              input.type = "password";
              icon.classList.remove("fa-eye-slash");
              icon.classList.add("fa-eye");
            }
          });
        });

        // Password strength meter
        const passwordInput = document.getElementById("register-password");
        const strengthIndicator = document.querySelector(".strength-indicator");
        const strengthText = document.querySelector(".strength-text");

        passwordInput.addEventListener("input", function () {
          const password = this.value;
          let strength = 0;
          let status = "";

          if (password.length >= 8) strength += 1;
          if (password.match(/[a-z]/)) strength += 1;
          if (password.match(/[A-Z]/)) strength += 1;
          if (password.match(/[0-9]/)) strength += 1;
          if (password.match(/[^a-zA-Z0-9]/)) strength += 1;

          switch (strength) {
            case 0:
              strengthIndicator.style.width = "0%";
              strengthIndicator.style.backgroundColor = "#f44336";
              status = "Password strength";
              break;
            case 1:
              strengthIndicator.style.width = "20%";
              strengthIndicator.style.backgroundColor = "#f44336";
              status = "Very weak";
              break;
            case 2:
              strengthIndicator.style.width = "40%";
              strengthIndicator.style.backgroundColor = "#ff9800";
              status = "Weak";
              break;
            case 3:
              strengthIndicator.style.width = "60%";
              strengthIndicator.style.backgroundColor = "#ffeb3b";
              status = "Medium";
              break;
            case 4:
              strengthIndicator.style.width = "80%";
              strengthIndicator.style.backgroundColor = "#8bc34a";
              status = "Strong";
              break;
            case 5:
              strengthIndicator.style.width = "100%";
              strengthIndicator.style.backgroundColor = "#4caf50";
              status = "Very strong";
              break;
          }

          strengthText.textContent = status;
        });

        // Check URL hash for tab selection
        function checkHashAndSetTab() {
          if (window.location.hash === "#register") {
            registerTab.classList.add("active");
            loginTab.classList.remove("active");
            registerForm.classList.add("active");
            loginForm.classList.remove("active");
          } else {
            // Default to login tab
            loginTab.classList.add("active");
            registerTab.classList.remove("active");
            loginForm.classList.add("active");
            registerForm.classList.remove("active");
          }
        }

        // Check hash on page load
        checkHashAndSetTab();

        // Listen for hash changes
        window.addEventListener("hashchange", checkHashAndSetTab);

        loginTab.addEventListener("click", function () {
          window.location.hash = "login";
          loginTab.classList.add("active");
          registerTab.classList.remove("active");
          loginForm.classList.add("active");
          registerForm.classList.remove("active");
        });

        registerTab.addEventListener("click", function () {
          window.location.hash = "register";
          registerTab.classList.add("active");
          loginTab.classList.remove("active");
          registerForm.classList.add("active");
          loginForm.classList.remove("active");
        });
      });

      // Display errors or success messages from URL parameters
      document.addEventListener("DOMContentLoaded", function () {
        const urlParams = new URLSearchParams(window.location.search);

        // Check for registration messages
        if (urlParams.get("registration") === "success") {
          alert("Registration successful! You can now log in.");
        } else if (urlParams.get("registration") === "failed") {
          // Get the specific error messages from session storage if available
          let errorMessage =
            "Registration failed. Please check the form and try again.";

          // Fetch errors from PHP session through an AJAX call
          fetch("get_errors.php")
            .then((response) => response.json())
            .then((data) => {
              if (data && data.errors && data.errors.length > 0) {
                errorMessage =
                  "Registration failed:\n- " + data.errors.join("\n- ");
              }
              alert(errorMessage);
            })
            .catch(() => {
              alert(errorMessage);
            });
        }

        // Check for login messages
        if (urlParams.get("login") === "failed") {
          alert("Login failed. Please check your email and password.");
        }

        // Check for logout message
        if (urlParams.get("logout") === "success") {
          alert("You have been successfully logged out.");
        }
      });
    </script>
    <script src="script.js"></script>
  </body>
</html>
