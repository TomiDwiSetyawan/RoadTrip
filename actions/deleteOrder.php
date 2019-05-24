<?php
session_start();

include '../helper/connection.php';

$id_order = $_GET['id'];

$query = "DELETE FROM list_order WHERE id_order = $id_order";

if (mysqli_query($con, $query)) {
    header("Location: ../listorder.php");
} else {
    header("Location: ../listorder.php?error=Gagal");
}

