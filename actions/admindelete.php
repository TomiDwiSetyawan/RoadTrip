<?php
session_start();

include '../helper/connection.php';

$id_detail = $_GET['id'];

$query = "DELETE FROM list_trip WHERE id_detail = $id_detail";

if (mysqli_query($con, $query)) {
    header("Location: ../admineditlist.php");
} else {
    header("Location: ../admineditlist.php?error=Gagal");
}

