<?php

session_start();
include '../helper/connection.php';

if (!isset($_SESSION['user'])) {
    header("Location: ../index.php");
}

$booking = $_GET['id_trip'];
$id_user = $_SESSION['user'];
$jumlah = $_GET['jumlah'];

$queryyy = "SELECT * FROM list_order WHERE id_user = $id_user AND id_trip = $booking";
if ($result = mysqli_query($con, $queryyy)) {
    if (mysqli_num_rows($result) > 0) {
        $query = "UPDATE list_order SET jumlah = jumlah + $jumlah WHERE id_user = $id_user AND id_trip = $booking";
        if (mysqli_query($con, $query)) {
            header("Location: ../listorder.php");
        } else {
            header("Location: ../index.php");
        }
    } else {
        $query = "INSERT INTO list_order (id_user, id_trip, jumlah) values ($id_user, $booking, $jumlah)";

        if (mysqli_query($con, $query)) {
            header("Location: ../listorder.php");
        } else {
            header("Location: ../index.php");
        }
    }
}