<?php
$mysqli = mysqli_connect("localhost", "root", "", "wisatamalang");
$query = "SELECT profile_picture FROM user WHERE username = '{$_SESSION['username']}'";
$result = mysqli_query($mysqli, $query);
$row = mysqli_fetch_assoc($result);
$profilePictureName = $row['profile_picture'];
?>