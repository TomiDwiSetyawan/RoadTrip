<?php

/***** Include db connection file *****/
include 'helper/connection.php';

/***** QUERY TO GET SPECIFIC ITEM *****/
$id_detail = $_GET['id']; // get id_barang from url

$query = "SELECT * FROM list_trip l inner join detail_trip d ON l.id_detail = d.id_detail WHERE d.id_detail = $id_detail";
$result = mysqli_query($con, $query);

$item = ''; // query result holder variable
if (mysqli_num_rows($result) == 1) {
    $item = mysqli_fetch_assoc($result);

} else {
    echo "Trip tidak ditemukan";
}
?>
<html>
    <!-- Include header.php that contain header informations -->
    <?php include 'actions/header.php' ?>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <li class="nav-link"><a href="adminhome.php">Home</a></li>
                        <li class="nav-link"><a href="adminlist.php">Order User</a></li>
                        <li class="nav-link"><a href="adminupload.php">Upload</a></li>
                        <li class="nav-link"><a href="admineditlist.php">List Trip</a></li>
                        <li class="nav-link"><a href="actions/logout.php">Logout</a></li>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
        <br><br>
            <h2 class="mt-3 text-center">Form Tambah Destination</h2>
            <div class="row mt-5">
                <div class="col-md-2"></div>
                <div class="col-md-8">

                    <!-- We add value form query result to inputs -->

                    <form action="actions/editTrip.php" method="POST">
                        
                        <!-- 
                            We still need id_barang to inform update query command
                            User doesn't need to know the id_barang, so make it hidden
                        -->
                        <input type="hidden" name="id_trip" value="<?php echo $item["id_trip"] ?>">
                        <input type="hidden" name="idDetail" value="<?php echo $item["id_detail"] ?>">
                        
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Nama Trip</label>
                            <div class="col-md-9">
                                <input type="text" name="namaTrip" id="namaTrip" class="form-control" placeholder="nama Trip" required value="<?= $item['nama_trip'] ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Harga Trip</label>
                            <div class="col-md-9">
                                <input type="text" name="hargaTrip" id="hargaTrip" class="form-control" placeholder="harga Trip" required value="<?= $item['harga'] ?>">
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label class="col-md-3 col-form-label">Foto Depan</label>
                            <div class="col-sm-4">
                            <?php
                            $id = $_GET["id"];
                            $query = "SELECT * FROM list_trip l inner join detail_trip d ON l.id_detail = d.id_detail WHERE l.id_detail = '$id'";
                            $result = mysqli_query($con, $query);
                            $row = mysqli_fetch_assoc($result);
                            $id_detail = $row["id_detail"];
                            $image = $row["foto"];
                            ?>
                            <td><img src="img/<?php echo $image; ?>" width="200"  height="150" alt="gambar"></td>
                                <input type="file" name="foto-depan" required >
                            </div>
                        </div> -->

                        <?php
                            // $id = $_GET["id"];
                            // $query1 = "SELECT * FROM list_trip l inner join detail_trip d ON l.id_detail = d.id_detail WHERE l.id_detail = '$id'";
                            // $result1 = mysqli_query($con, $query1);
                            // $row1 = mysqli_fetch_assoc($result1);
                            // $id_detail = $row1["id_detail"];
                            // $image = $row1["foto_galeri"];
                        ?>

                        <!-- <div class="form-group row">
                            <label class="col-md-3 col-form-label">Foto Galeri</label>
                            <div class="col-sm-4">
                            <td><img src="img/<?php echo $image; ?>" width="200"  height="150" alt="gambar"></td>
                                <input type="file" name="foto-galeri" required>
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Detail Trip</label>
                            <div class="col">
                                <textarea type="text" class="form-control" id="" name="detail" required><?= $item['detail'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Lokasi Trip</label>
                            <div class="col-md-9">
                                <input type="text" name="lokasiTrip" id="lokasiTrip" class="form-control" placeholder="lokasi Trip" required value="<?= $item['Lokasi'] ?>">
                            </div>
                        </div>
                        <div class="form-group row mt-5">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <!-- Back to home -->
                                <a name="backBtn" id="backBtn" class="btn btn-dark btn-block" href="admineditlist.php" role="button">Kembali</a>
                            </div>

                            <div class="col-md-4">
                                <!-- Input button to submit form. Please check href attribute -->
                                <input type="submit" name="add" class="btn btn-success btn-block" value="UPDATE"/>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    <script>
        // clear form input
        function clearForm() {
            $('#namaBarang').val('');
            $('#hargaBarang').val('');
            $('#jumlah').val('');
        }
    </script>
    <body>
</html>