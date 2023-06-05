<?php

$mysqli = mysqli_connect("localhost", "root", "", "wisatamalang");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($mysqli, $username);
    $password = mysqli_real_escape_string($mysqli, $password);

    // Proses upload foto profil
    $targetDirectory = "profile_pictures/"; // Direktori tujuan penyimpanan foto profil
    $targetFile = $targetDirectory . basename($_FILES["profile_picture"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $profilePictureName = basename($_FILES["profile_picture"]["name"]); // Nama file gambar yang diupload

    // Cek apakah file gambar yang diunggah adalah gambar asli atau palsu
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["profile_picture"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Cek apakah file gambar sudah ada di server
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Batasi ukuran file gambar
    if ($_FILES["profile_picture"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Hanya izinkan beberapa jenis format file gambar
    $allowedFormats = array("jpg", "jpeg", "png", "gif");
    if (!in_array($imageFileType, $allowedFormats)) {
        echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
        $uploadOk = 0;
    }

    // Jika semua kondisi terpenuhi, upload file gambar
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $targetFile)) {
            echo "The file " . $profilePictureName . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    try {
        $query = "INSERT INTO user (username, password, profile_picture) VALUES ('$username', '$password', '$profilePictureName')";

        $result = mysqli_query($mysqli, $query);

        if ($result) {
            echo "<script> alert('Registration Successful'); </script>";
            header("Location: login.php");
        }
    } catch (Exception $e) {
        echo mysqli_errno($mysqli);
    }
    mysqli_close($mysqli);
}
?>