<?php

session_start();

if (isset($_POST['submit'])) {
    include '../helper/connection.php';

    $username = $_POST['uname'];
    $password = $_POST['pass'];

    $query = "SELECT * FROM user WHERE nama = '$username' AND password = '$password'";

    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $row['id_user'];
        if ($row['id_level'] == 1) {
            header("Location: ../adminhome.php");
        } else {
            header("Location: ../index.php");
        }
    } else {
        header("Location: ../index.php");
    }

}

?>