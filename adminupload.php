<?php

/***** Include db connection file *****/
include 'helper/connection.php';
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
        <br><br><br>
            <h2 class="mt-3 text-center">Form Tambah Destination</h2>
            <div class="row mt-5">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <!-- form handling in process/actionAddBarang -->
                    <form action="actions/addTrip.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Nama Trip</label>
                            <div class="col-md-9">
                                <input type="text" name="namaTrip" id="namaTrip" class="form-control" placeholder="nama Trip" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Foto Depan</label>
                            <div class="col-sm-4">
                                <input type="file" name="foto-depan" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Foto Galeri</label>
                            <div class="col-sm-4">
                                <input type="file" name="foto-galeri" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Lokasi</label>
                            <div class="col-md-9">
                                <input type="text" name="lokasiTrip" id="lokasiTrip" class="form-control" placeholder="lokasi Trip" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Harga Trip</label>
                            <div class="col-md-9">
                                <input type="text" name="hargaTrip" id="hargaTrip" class="form-control" placeholder="harga Trip" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Detail Trip</label>
                            <div class="col">
                                <textarea type="text" class="form-control" id="" name="detail" required></textarea>
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
                                <input type="submit" name="add" class="btn btn-success btn-block" value="Tambah"/>
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