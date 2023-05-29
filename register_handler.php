<?php

$mysqli = mysqli_connect("localhost", "root", "220403", "wisatamalang");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($mysqli, $username);
    $password = mysqli_real_escape_string($mysqli, $password);

    try {
        $query = "INSERT INTO user (username, password)
              VALUES ('$username', '$password')";

        $result = mysqli_query($mysqli, $query);

        if ($result) {
            echo "<script> alert('Registration Succesfull'); </script>";
            header("Location: login.php");
        }
    } catch (Exception $e) {
        echo mysqli_errno($mysqli);
    }
    mysqli_close($mysqli);
}
