<?php
include '../helper/connection.php';

$email = $_POST['email'];
$username = $_POST['uname'];
$password = $_POST['pass'];

$query = "INSERT INTO user (id_level, email, password, nama) VALUES (2, '$email', '$password', '$username')";

mysqli_query($con, $query);

header("Location: ../login.php");
?>