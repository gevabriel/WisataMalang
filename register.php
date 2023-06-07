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
      <form action="register_handler.php" method="POST" enctype="multipart/form-data">
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
        <?php if (isset($error_code)): ?>
          <p class="error">
            <?php echo "Error code: " . $error_code; ?>
          </p>
        <?php endif; ?>
        <?php if (isset($error_message)): ?>
          <p class="error">
            <?php echo $error_message; ?>
          </p>
        <?php endif; ?>
        <div class="control">
          <label for="name">Username</label>
          <input type="text" name="username" id="name" required />
        </div>
        <div class="control">
          <label for="pass">Password</label>
          <input type="password" name="password" id="pass" required />
        </div>
        <div class="control">
          <label for="profile_picture">Profile Picture</label>
          <input type="file" name="profile_picture" id="profile_picture" accept="image/*" required />
        </div>
        <span><input type="checkbox" required="" /> I Agree To The Terms & Conditions</span>
        <div class="control">
          <input type="submit" value="Register" />
        </div>
        <div class="link">
          <p>Already have an account?</p>
        </div>
        <div class="link">
          <a href="login.php">Login Now!</a>
        </div>
      </form>
    </div>
  </section>
</body>

<?php
  include 'footer.php';
?>

</html>