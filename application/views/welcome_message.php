<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php echo base_url()?>assets/backend/images/logo-mini.png" />
  <title>GajiQ</title>
  <style>
    /* Global styles */
    html, body {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: Arial, sans-serif;
    }

    /* Navbar styles */
    nav {
      background-color: #fff;
      padding: 1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 999;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    nav a {
      color: #333;
      text-decoration: none;
      font-size: 1.2rem;
      margin-right: 1rem;
      padding: 8px 15px;
      position: relative;
      transition: color 0.3s ease, background-color 0.3s ease;
      border-radius: 4px;
      font-weight: bold;
    }

    nav a::before {
      content: '';
      position: absolute;
      left: 0;
      bottom: 0;
      height: 3px;
      width: 0;
      background-color: #007bff;
      transition: width 0.3s ease;
      border-radius: 2px;
    }

    nav a:hover::before {
      width: 100%;
    }

    nav a:hover {
      color: #007bff;
      background-color: rgba(0, 123, 255, 0.1);
    }

    nav .btn {
      background-color: #007bff;
      color: white;
      padding: 8px 15px;
      border-radius: 4px;
      border: none;
      font-size: 1.2rem;
      transition: background-color 0.3s ease;
    }

    nav .btn:hover {
      background-color: #0056b3;
    }

    /* Full-screen sections */
    .full-screen {
      background-image: url('assets/backend/images/bg.png');
      background-size: cover;
      background-position: center;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      padding: 2rem;
      box-sizing: border-box;
      text-align: center;
      color: white;
    }

    .full-screen h1 {
      font-size: 4rem;
      margin-bottom: 1.5rem;
      text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
      letter-spacing: 2px;
    }

    .full-screen p {
      font-size: 1.4rem;
      line-height: 1.8;
      max-width: 800px;
      margin-bottom: 2.5rem;
      text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
    }

    .full-screen .btn {
      display: inline-block;
      background-color: #007bff;
      color: white;
      text-decoration: none;
      padding: 1rem 2.5rem;
      border-radius: 5px;
      font-size: 1.4rem;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .full-screen .btn:hover {
      background-color: #0056b3;
      transform: scale(1.05);
      box-shadow: 0px 4px 15px rgba(0, 91, 187, 0.5);
    }

    @media (max-width: 768px) {
      .full-screen h1 {
        font-size: 3rem;
      }

      .full-screen p {
        font-size: 1.2rem;
      }

      .full-screen .btn {
        font-size: 1.2rem;
        padding: 0.8rem 2rem;
      }
    }

    .contact {
      background-color: #f4f4f4;
      padding: 80px 20px;
      text-align: center;
    }

    .contact h2 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
    }

    .contact form {
      max-width: 500px;
      margin: 0 auto;
    }

    .contact input,
    .contact textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 1rem;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .contact button {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      font-size: 1.2rem;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .contact button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav>
    <a class="navbar-brand brand-logo me-5" href="index.html">
      <img src="<?php echo base_url()?>assets/backend/images/logo.png" class="me-2" alt="logo" style="width: 130px; height: auto;" />
    </a>
    <div>
      <a href="#home">Home</a>
      <a href="#contact">Contact</a>
      <a href="login" class="btn btn-primary btn-icon-text ajax-link">Login</a>
    </div>
  </nav>

  <!-- Home section -->
  <section class="full-screen" id="home">
    <h1>Welcome to GajiQ</h1>
    <p>GajiQ adalah sebuah sistem informasi penggajian yang dikembangkan untuk membantu perusahaan dan organisasi dalam mengelola proses penggajian karyawan secara efektif dan efisien. Sistem ini dirancang untuk memberikan solusi komprehensif bagi pengelolaan gaji, tunjangan, potongan, dan berbagai aspek penggajian lainnya.</p>
    <a href="login" class="btn">Explore Now</a>
  </section>

  <!-- Contact section -->
  <section class="contact" id="contact"> <!-- Tambahkan ID 'contact' -->
    <h2>Contact Us</h2>
    <form>
      <input type="text" placeholder="Name" required>
      <input type="email" placeholder="Email" required>
      <textarea placeholder="Message" rows="5" required></textarea>
      <button type="submit">Send</button>
    </form>
  </section>

<!-- Footer -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="footer-logo">
          <a href="index.html">
            <img src="<?php echo base_url()?>assets/backend/images/logo.png" alt="GajiQ" style="max-width: 200px;">
          </a>
        </div>
      <div class="col-md-4">
        <h4 class="footer-heading">Ikuti Kami</h4>
        <div class="social-icons">
          <a href="https://www.instagram.com/attiyadf36_" target="_blank">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/instagram-new.png" alt="Instagram" style="width: 30px; height: auto;">
          </a>
          <a href="https://www.linkedin.com/in/akun_anda" target="_blank">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/linkedin.png" alt="LinkedIn" style="width: 30px; height: auto;">
          </a>
          <a href="https://github.com/AttiyaDiantiFadli" target="_blank">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/github.png" alt="GitHub" style="width: 30px; height: auto;">
          </a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="footer-copyright">&copy; 2024. Premium . <a href="https://www.instagram.com/attiyadf36_" target="_blank">Attiya template</a> from attiyadf36_. All rights reserved.</p>
        <p class="footer-copyright">Hand-crafted & made with <i class="ti-heart text-danger"></i</p>

      </div>
    </div>
  </div>
</footer>

<style>
  .footer {
    background-color: #333;
    color: #fff;
    padding: 60px 0;
    justify-content: center;
    text-align: center;
  }

  .footer-logo {
    margin-bottom: 20px;
  }

  .footer-description {
    font-size: 14px;
    line-height: 1.6;
  }

  .footer-heading {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 20px;
  }

  .footer-links {
    list-style-type: none;
    padding: 0;
  }

  .footer-links a {
    color: #fff;
    text-decoration: none;
    transition: color 0.3s;
  }

  .footer-links a:hover {
    color: #ddd;
  }

  .social-icons {
    display: flex;
    justify-content: center;
  }

  .social-icons a {
    display: inline-block;
    margin-right: 15px;
    transition: transform 0.3s;
  }

  .social-icons a:hover {
    transform: scale(1.2);
  }

  .footer-copyright {
    font-size: 14px;
    text-align: center;
    margin-top: 40px;
  }

  @media (max-width: 767px) {
    .footer-description {
      margin-bottom: 30px;
    }

    .footer-heading {
      margin-top: 30px;
    }
  }
</style>

  <script>
    // Smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  </script>
</body>
</html>
