<?php
    // Include DB connection file
include '../helper/connection.php';

    // Get the form value
$namaTrip = $_POST["namaTrip"]; //value dari name nya bukan id nya
$detail = $_POST["detail"];
$lokasiTrip = $_POST["lokasiTrip"];
$harga = $_POST["hargaTrip"];

if (isset($_POST["add"])) {
    $code_foto_depan = $_FILES["foto-depan"]["error"];
    $code_foto_galeri = $_FILES["foto-galeri"]["error"];
    if ($code_foto_depan === 0 && $code_foto_galeri === 0) {
        $error = "";
        $nama_folder = "../img";
        $tmp_foto_depan = $_FILES["foto-depan"]["tmp_name"];
        $tmp_foto_galeri = $_FILES["foto-galeri"]["tmp_name"];
        $nama_foto_depan = $_FILES["foto-depan"]["name"];
        $nama_foto_galeri = $_FILES["foto-galeri"]["name"];
        $path_nama_foto_depan = "$nama_folder/$nama_foto_depan";
        $path_nama_foto_galeri = "$nama_folder/$nama_foto_galeri";
        $tipe_file = array("image/jpeg", "image/gif", "image/png", "image/jpg");

        if (file_exists($path_nama_foto_depan) && file_exists($path_nama_foto_galeri)) {
            $error = urldecode("File dengan Nama yang sama sudah tersimpan, coba lagi");
            header("Location: ../index.php?error=$error");
            die();
        }

        if (move_uploaded_file($tmp_foto_depan, $path_nama_foto_depan) && move_uploaded_file($tmp_foto_galeri, $path_nama_foto_galeri)) {
            $querydetail = "INSERT INTO detail_trip (detail, foto_galeri) VALUES ('$detail','$nama_foto_galeri')";
            mysqli_query($con, $querydetail);
            $idDetail = mysqli_insert_id($con); //untuk mendapatkan PK yg di sudah ada/sdh dibuat

            $querytrip = "INSERT INTO list_trip (id_detail, nama_trip, foto, lokasi, harga) VALUES ('$idDetail', '$namaTrip', '$nama_foto_depan', '$lokasiTrip', '$harga')";
            mysqli_query($con, $querytrip);
            header("Location: ../admineditlist.php");
        }

    } else {
        $error = urldecode("Upload Gagal, Tidak Ada File yang Terupload");
        header("Location: ../index.php?error=$error");
        die();
    }
}
    // close mysql connection
mysqli_close($con);

?>