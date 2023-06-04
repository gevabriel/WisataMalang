<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
        // <link rel="stylesheet" href="assetslogin/login.css" />
    </script>
  <title>Register Page</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="icon" href="imglogin/thumb.png" type="image/png">
  <link rel="stylesheet" href="assetslogin/login.css" />
</head>

<body>
  <section>
    <div class="form-container">
      <h1>SIGN UP</h1>
      <form action="" method="POST">
        <?php
        session_start();
        if (isset($_SESSION['error_code'])) {
          $error_code = $_SESSION['error_code'];
          unset($_SESSION['error_code']);
        }
        if (isset($_SESSION['error_message'])) {
          $error_message = $_SESSION['error_message'];
          unset($_SESSION['error_message']);
        }
        ?>
        <?php if (isset($error_code)) : ?>
          <p class="error">
            <?php echo "Error code: " . $error_code; ?>
          </p>
        <?php endif; ?>
        <?php if (isset($error_message)) : ?>
          <p class="error">
            <?php echo $error_message; ?>
          </p>
        <?php endif; ?>
        <div class="control">
          <label for="name">Username</label>
          <input type="username" name="username" id="name" required/>
        </div>
        <div class="control">
          <label for="pass">Password</label>
          <input type="password" name="password" id="pass" required/>
        </div>
        <span><input type="checkbox" required="" /> I Agree To The Terms & Conditions</span>
        <div class="control">
          <input type="submit" value="Register" formaction="register_handler.php" />
        </div>
        <div class="link">
        <p>Already have account?</p>
        </div>
        <div class="link">
        <a href="login.php"> Login Now!</a></p>
        </div>
      </form>
    </div>
  </section>
</body>

<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-lg-4 footer-about wow fadeInUp">
          <img src="imglogin/logo4.png" alt="logo-footer" data-at2x="imglogin/logo4.png" style="width: 60%;">
          <p>
            WisataMalang.com merupakan sebuah website yang menyediakan berbagai informasi dan review mengenai berbagai
            tempat wisata menarik yang terdapat di Malang.
          </p>
        </div>
        <div class="col-md-4 col-lg-4 offset-lg-1 footer-contact wow fadeInDown">
          <h3>Contact</h3>
          <p><i class="fas fa-map-marker-alt"></i>Jl. Veteran, Ketawanggede, Kec. Lowokwaru, <br> Kota Malang, Jawa
            Timur 65145</p>
          <p><i class="fas fa-phone"></i>Phone: (0341) 551611</p>
          <p><i class="fab fa-whatsapp"></i>Whatsapp: +6281312345678</p>
          <p><i class="fab fa-instagram"></i>Instagram: @wisatamalang</p>
          <p><i class="fas fa-envelope"></i>Email: <a href="mailto:hello@domain.com">wisatamalang@tourism.com</a></p>
        </div>
        <div class="col-md-4 col-lg-3 footer-social wow fadeInUp">
          <h3>Follow us</h3>
          <p>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-google-plus-g"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-pinterest"></i></a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md- footer-copyright">
          <p>Copyright &copy; 2022 Wisata Malang. <br>All Rights Reserved.</a></p>
        </div>
        <div class="col-md-7 footer-menu">
          <nav class="navbar navbar-dark navbar-expand-md">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </nav>
        </div>
      </div>
    </div>
  </div>
</footer>

</html>