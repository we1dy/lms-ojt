<?php include('header.php'); ?>
<style>
  /* Base styles */
  :root {
    --primary: #dc2626;
    --primary-dark: #b91c1c;
    --primary-light: #fecaca;
    --text-dark: #1f2937;
    --text-medium: #4b5563;
    --text-light: #6b7280;
    --bg-light: #f9fafb;
    --bg-white: #ffffff;
    --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.1);
    --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    --radius-sm: 0.375rem;
    --radius-md: 0.5rem;
    --radius-lg: 0.75rem;
  }

  body {
    background-col```php
<?php include('header.php'); ?>
<style>
  /* Base styles */
  :root {
    --primary: #dc2626;
    --primary-dark: #b91c1c;
    --primary-light: #fecaca;
    --text-dark: #1f2937;
    --text-medium: #4b5563;
    --text-light: #6b7280;
    --bg-light: #f9fafb;
    --bg-white: #ffffff;
    --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.1);
    --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    --radius-sm: 0.375rem;
    --radius-md: 0.5rem;
    --radius-lg: 0.75rem;
  }

  body {
    background-color: var(--bg-light);
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    margin: 0;
    padding: 0;
    color: var(--text-dark);
    line-height: 1.6;
  }

  body#login {
    position: relative;
    min-height: 100vh;
    background-image: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
  }

  body#login::before {
    content: "";
    background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23dcdcdc' fill-opacity='0.25' fill-rule='evenodd'/%3E%3C/svg%3E");
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
  }

  .login {}

  .container {
    padding: 3rem 2rem;
    max-width: 1200px;
    margin: 0 auto;
  }

  /* Logo and header styles */
  .logo-container {
    display: flex;
    align-items: center;
    gap: 1.25rem;
    margin-bottom: 2rem;
    animation: fadeInDown 0.8s ease-out;
  }

  .logo {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
    color: white;
    font-weight: bold;
    padding: 0.75rem;
    border-radius: var(--radius-md);
    width: 4rem;
    height: 4rem;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: var(--shadow-md);
    font-size: 1.2rem;
    letter-spacing: 0.5px;
  }

  h1 {
    font-size: 2.25rem;
    font-weight: 700;
    color: var(--text-dark);
    margin: 0;
    line-height: 1.2;
    letter-spacing: -0.5px;
  }

  .description {
    color: var(--text-medium);
    margin-bottom: 2.5rem;
    max-width: 600px;
    font-size: 1.1rem;
    line-height: 1.6;
    animation: fadeIn 1s ease-out;
  }

  /* Security section styles */
  .security-sections {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
    animation: fadeIn 1.2s ease-out;
  }

  .security-section {
    background-color: var(--bg-white);
    padding: 1.5rem;
    border-radius: var(--radius-md);
    box-shadow: var(--shadow-sm);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-left: 4px solid var(--primary);
  }

  .security-section:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-md);
  }

  .security-title {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 0.75rem;
    color: var(--text-dark);
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }

  .security-title::before {
    content: "";
    display: inline-block;
    width: 1.5rem;
    height: 1.5rem;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%23dc2626'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9 12l2 2 4-4mor: var(--bg-light);
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    margin: 0;
    padding: 0;
    color: var(--text-dark);
    line-height: 1.6;
  }

  body#login {
    position: relative;
    min-height: 100vh;
    background-image: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
  }

  body#login::before {
    content: "";
    background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23dcdcdc' fill-opacity='0.25' fill-rule='evenodd'/%3E%3C/svg%3E");
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
  }

  .login {}

  .container {
    padding: 3rem 2rem;
    max-width: 1200px;
    margin: 0 auto;
  }

  /* Logo and header styles */
  .logo-container {
    display: flex;
    align-items: center;
    gap: 1.25rem;
    margin-bottom: 2rem;
    animation: fadeInDown 0.8s ease-out;
  }

  .logo {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
    color: white;
    font-weight: bold;
    padding: 0.75rem;
    border-radius: var(--radius-md);
    width: 4rem;
    height: 4rem;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: var(--shadow-md);
    font-size: 1.2rem;
    letter-spacing: 0.5px;
  }

  h1 {
    font-size: 2.25rem;
    font-weight: 700;
    color: var(--text-dark);
    margin: 0;
    line-height: 1.2;
    letter-spacing: -0.5px;
  }

  .description {
    color: var(--text-medium);
    margin-bottom: 2.5rem;
    max-width: 600px;
    font-size: 1.1rem;
    line-height: 1.6;
    animation: fadeIn 1s ease-out;
  }

  /* Security section styles */
  .security-sections {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
    animation: fadeIn 1.2s ease-out;
  }

  .security-section {
    background-color: var(--bg-white);
    padding: 1.5rem;
    border-radius: var(--radius-md);
    box-shadow: var(--shadow-sm);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-left: 4px solid var(--primary);
  }

  .security-section:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-md);
  }

  .security-title {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 0.75rem;
    color: var(--text-dark);
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }

  .security-title::before {
    content: "";
    display: inline-block;
    width: 1.5rem;
    height: 1.5rem;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%23dc2626'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'/%3E%3C/svg%3E");
    background-size: contain;
    background-repeat: no-repeat;
  }

  .security-text {
    color: var(--text-light);
    margin: 0;
    line-height: 1.6;
  }

  /* Login card styles */
  .login-wrapper {
    position: relative;
    z-index: 1;
    animation: fadeInUp 0.8s ease-out;
  }

  /* Footer styles */
  .index-footer {
    margin-top: 3rem;
    padding-top: 1.5rem;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
    text-align: center;
    color: var(--text-light);
    font-size: 0.875rem;
  }

  /* Responsive styles */
  @media (min-width: 768px) {
    .row-fluid {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      gap: 3rem;
    }

    .span6 {
      flex: 1;
    }

    .span12 {
      width: 100%;
    }
  }

  @media (max-width: 767px) {
    .container {
      padding: 2rem 1.5rem;
    }

    .row-fluid {
      display: block;
    }

    .span6 {
      width: 100%;
      margin-bottom: 2.5rem;
    }

    .pull-right {
      margin-top: 0;
    }

    h1 {
      font-size: 1.75rem;
    }

    .logo {
      width: 3.5rem;
      height: 3.5rem;
    }
  }

  /* Animations */
  @keyframes fadeIn {
    from {
      opacity: 0;
    }

    to {
      opacity: 1;
    }
  }

  @keyframes fadeInDown {
    from {
      opacity: 0;
      transform: translateY(-20px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(20px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
</style>

<body id="login">
  <div class="container" style="position: relative">
    <div class="row-fluid">
      <div class="span5">
        <div class="title_index">
          <div class="logo-container">
            <div class="logo">PBCOM</div>
            <h1>Welcome to PBCOM Learning</h1>
          </div>

          <p class="description">
            The PBCOM Learning Portal is a self-paced, interactive platform offering
            online courses to support the bank's basic training and competency
            development needs.
          </p>

          <div class="security-sections">
            <div class="security-section">
              <h2 class="security-title">Bank-grade Security</h2>
              <p class="security-text">Your financial data is protected with advanced encryption and security protocols.</p>
            </div>

            <div class="security-section">
              <h2 class="security-title">Fraud Protection</h2>
              <p class="security-text">24/7 monitoring systems to detect and prevent unauthorized activities.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="span4 login">
        <div class="login-wrapper"><?php include('login_form.php'); ?></div>
      </div>
    </div>

    <div class="row-fluid">
      <div class="span12">
        <div class="index-footer"><?php include('link.php'); ?></div>
      </div>
    </div>
    <?php include('footer.php'); ?>
  </div>
  <?php include('script.php'); ?>
</body>

</html>