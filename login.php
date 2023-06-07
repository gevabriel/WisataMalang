<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Page</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="icon" href="imglogin/thumb.png" type="image/png">
  <link rel="stylesheet" href="assetslogin/login.css" />
</head>

<body>
  <section>
    <div class="form-container">
      <h1>Log In</h1>
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
          <input type="username" name="username" id="name" />
        </div>
        <div class="control">
          <label for="pass">Password</label>
          <input type="password" name="password" id="pass" />
        </div>
        <span><input type="checkbox" /> Remember me.</span>
        <div class="control">
          <input type="submit" value="Login" formaction="login_handle.php" />
        </div>
        <div class="link">
          <a href="#">Forgot password?</a>
        </div>
        <div class="link">
          <a href="register.php">Create account</a>
        </div>
      </form>
    </div>
  </section>
</body>

<?php
  include 'footer.php';
?>

</html>