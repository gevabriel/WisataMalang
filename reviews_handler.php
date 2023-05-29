<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "220403", "wisatamalang");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$comment = $_POST['comment'];

if (isset($_POST['post_comment'])) {
    $sql = "INSERT INTO reviews (comment) VALUES ('$comment')";
    echo "<script> alert('Comment Submitted'); </script>";
    header("Location: content.php");
}

if (!mysqli_query($conn, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
