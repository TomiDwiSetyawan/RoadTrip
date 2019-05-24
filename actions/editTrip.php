<?php 
include '../helper/connection.php';

$id = $_POST["idDetail"];
$id1 = $_POST["id_trip"];
$namaTrip = $_POST["namaTrip"];
$harga = $_POST["hargaTrip"];
$detail = $_POST["detail"];
$lokasiTrip = $_POST["lokasiTrip"];

$query1 = "UPDATE detail_trip SET detail ='$detail'  where id_detail = $id";
echo $query1;

$query2 = "UPDATE list_trip SET nama_trip='$namaTrip', harga='$harga', Lokasi='$lokasiTrip' WHERE id_trip='$id1'";
// die($query2);

if (mysqli_query($con, $query1)) {
    if (mysqli_query($con, $query2)) {
        header("Location:../admineditlist.php");
    }
} else {
    header("Location:../adminedit.php?error = $error");
    // adminedit.php?id=$id_detail
}

mysqli_close($con);
?>