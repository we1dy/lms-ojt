<style>
  /* Login form styles */
  .login-card {
    background: white;
    border-radius: 0.75rem;
    padding: 2rem;
    box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    max-width: 40rem !important;
    width: 100%;
    position: relative;
    overflow: hidden;
  }

  .login-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 6px;
    background: linear-gradient(90deg, #dc2626, #ef4444);
  }

  .login-title {
    text-align: center;
    font-size: 1.75rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
    color: #1f2937;
  }

  .login-subtitle {
    text-align: center;
    color: #6b7280;
    margin-bottom: 2rem;
    font-size: 0.95rem;
  }

  .form-group {
    margin-bottom: 0.7rem;
    position: relative;
  }

  .form-label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 500;
    color: #374151;
    font-size: 0.95rem;
  }

  .form-control {
    width: 100%;
    padding: 0.5rem 0.5rem;
    border: 1px solid #d1d5db;
    border-radius: 0.5rem;
    font-size: 1rem;
    transition: all 0.3s ease;
    box-sizing: border-box;
    background-color: #f9fafb;
  }

  .form-control:focus {
    border-color: #dc2626;
    outline: none;
    box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.1);
    background-color: #fff;
  }

  .form-control::placeholder {
    color: #9ca3af;
  }

  .btn-signin {
    width: 100%;
    background: linear-gradient(90deg, #dc2626, #b91c1c);
    color: white;
    border: none;
    border-radius: 0.5rem;
    padding: 0.85rem;
    font-size: 1rem;
    font-weight: 500;
    cursor: pointer;
    margin-top: 1rem;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    box-shadow: 0 4px 6px -1px rgba(220, 38, 38, 0.2), 0 2px 4px -1px rgba(220, 38, 38, 0.1);
  }

  .btn-signin:hover {
    background: linear-gradient(90deg, #b91c1c, #991b1b);
    transform: translateY(-2px);
    box-shadow: 0 6px 10px -2px rgba(220, 38, 38, 0.25), 0 4px 6px -2px rgba(220, 38, 38, 0.15);
  }

  .btn-signin:active {
    transform: translateY(0);
  }

  .btn-signin i {
    font-size: 1.1rem;
  }

  .forgot-password {
    text-align: center;
    margin-top: 1.25rem;
  }

  .forgot-password a {
    color: #dc2626;
    text-decoration: none;
    font-size: 0.9rem;
    transition: color 0.3s ease;
    position: relative;
  }

  .forgot-password a:hover {
    color: #b91c1c;
  }

  .forgot-password a::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 1px;
    bottom: -2px;
    left: 0;
    background-color: #dc2626;
    transform: scaleX(0);
    transform-origin: bottom right;
    transition: transform 0.3s ease;
  }

  .forgot-password a:hover::after {
    transform: scaleX(1);
    transform-origin: bottom left;
  }

  /* New user card styles */
  .new-user-card {
    background: white;
    border-radius: 0.75rem;
    padding: 1.75rem;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    max-width: 50rem;
    width: 100%;
    margin-top: 1.5rem;
    text-align: center;
  }

  .new-user-title {
    text-align: center;
    color: #4b5563;
    margin-bottom: 1.25rem;
    font-weight: 500;
    font-size: 1rem;
  }

  .btn-container {
    display: flex;
    gap: 1rem;
  }

  .btn-role {
    flex: 1;
    background-color: #f3f4f6;
    color: #1f2937;
    border: 1px solid #e5e7eb;
    border-radius: 0.5rem;
    padding: 0.75rem;
    font-size: 0.95rem;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .btn-role:hover {
    background-color: #dc2626;
    color: white;
    border-color: #dc2626;
    transform: translateY(-2px);
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  }

  /* Form animation */
  @keyframes slideIn {
    from {
      opacity: 0;
      transform: translateY(10px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .form-signin {
    animation: slideIn 0.5s ease-out;
  }

  /* Responsive adjustments */
  @media (max-width: 480px) {

    .login-card,
    .new-user-card {
      padding: 1.5rem;
    }

    .login-title {
      font-size: 1.5rem;
    }

    .btn-container {
      flex-direction: column;
    }
  }
</style>

<form id="login_form1" class="form-signin login-card" method="post">
  <h3 class="login-title">Sign In</h3>
  <p class="login-subtitle">Access your PBCOM account</p>

  <div class="form-group">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
  </div>

  <div class="form-group">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
  </div>

  <button data-placement="right" title="Click Here to Sign In" id="signin" name="login" class="btn-signin" type="submit">
    <i class="icon-signin icon-large"></i> Sign in
  </button>

  <div class="forgot-password">
    <a href="#">Forgot password?</a>
  </div>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#signin').tooltip('show');
      $('#signin').tooltip('hide');
    });
  </script>
</form>

<script>
  jQuery(document).ready(function() {
    jQuery("#login_form1").submit(function(e) {
      e.preventDefault();
      var formData = jQuery(this).serialize();
      $.ajax({
        type: "POST",
        url: "login.php",
        data: formData,
        success: function(html) {
          if (html == 'true') {
            $.jGrowl("Loading File Please Wait......", {
              sticky: true
            });
            $.jGrowl("Welcome to CHMSC Learning Management System", {
              header: 'Access Granted'
            });
            var delay = 1000;
            setTimeout(function() {
              window.location = 'dasboard_teacher.php'
            }, delay);
          } else if (html == 'true_student') {
            $.jGrowl("Welcome to CHMSC Learning Management System", {
              header: 'Access Granted'
            });
            var delay = 1000;
            setTimeout(function() {
              window.location = 'student_notification.php'
            }, delay);
          } else {
            $.jGrowl("Please Check your username and Password", {
              header: 'Login Failed'
            });
          }
        }
      });
      return false;
    });
  });
</script>

<div id="button_form" class="new-user-card">
  <p class="new-user-title">New to PBCOM LMS?</p>

  <div class="btn-container">
    <button data-placement="top" title="Sign In as Student" id="signin_student"
      onclick="window.location='signup_student.php'" id="btn_student" name="login" class="btn-role"
      type="submit">I'm an Employee</button>

    <button data-placement="top" title="Sign In as Teacher" id="signin_teacher"
      onclick="window.location='signup_teacher.php'" name="login" class="btn-role"
      type="submit">I'm an Admin</button>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#signin_student').tooltip('show');
    $('#signin_student').tooltip('hide');
  });
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#signin_teacher').tooltip('show');
    $('#signin_teacher').tooltip('hide');
  });
</script>