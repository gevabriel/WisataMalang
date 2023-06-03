<?php
session_start();

$mysqli = mysqli_connect("localhost", "root", "", "wisatamalang");
$error_message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $username = mysqli_real_escape_string($mysqli, $username);
  $password = mysqli_real_escape_string($mysqli, $password);

  try {
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($mysqli, $query);

    if ($result && mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $_SESSION['username'] = $row['username'];
      header("Location: index.php");
      exit();
    } else {
      $error_message = 'Invalid username or password';
    }
  } catch (Exception $e) {
    $_SESSION['error_code'] = mysqli_errno($mysqli);
    header("Location: login.php");
    exit();
  }
  mysqli_close($mysqli);
}

$_SESSION['error_message'] = $error_message;
header("Location: login.php");
exit();
