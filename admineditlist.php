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
            <h2 class="mt-3 text-center">Daftar Barang</h2>
            <?php

            /***** Get get error message from actionAddBarang.php ******/
            $message = '';
            if (isset($_GET["error"])) {
                $message = $_GET["error"];
                echo "
                <p style='color:red; font-style:italic'>$message</p>
                ";
            }
            ?>
            <a href="adminupload.php" class="btn btn-success mt-3">Tambah Barang</a>
            <!-- <div class="row"> -->
                <table id="barang" class="table table-stripped text-center mt-3" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Trip</th>
                            <th>Harga Trip</th>
                            <th>Foto Depan</th>
                            <th>Foto Galeri</th>
                            <th>Detail Trip</th>
                            <th>Lokasi</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    // Query command
                    $query = "SELECT * FROM list_trip l inner join detail_trip d ON l.id_detail = d.id_detail";
                    // Do query
                    // $con is db connection
                    // $query is query command
                    $result = mysqli_query($con, $query);

                    // Check row number, if we have data on db ( > 0), show the result data
                    if (mysqli_num_rows($result) > 0) {
                        // Create row index
                        $index = 1;
                        // Do loop through data
                        while ($row = mysqli_fetch_assoc($result)) {
                            // Print result to HTML structure
                            // $row is the iterator
                            // nama_barang, harga_barang, and jml_barang is array key,
                            // They are the coloums names in table tb_barang
                           // store the id
                            $id_detail = $row["id_detail"];
                            $image = $row["foto"];
                            $image1 = $row["foto_galeri"];
                            echo "
                            <tr>
                                <td>" . $index++ . "</td>
                                <td>" . $row["nama_trip"] . "</td>
                                <td>" . $row["harga"] . "</td>
                                <td>" . "<img src='img/" . $image . "' width=\"200\"  height=\"150\" alt=\"gambar\">" . "</td>
                                <td>" . "<img src='img/" . $image1 . "' width=\"200\"  height=\"150\" alt=\"gambar\">" . "</td>
                                <td>" . $row["detail"] . "</td>
                                <td>" . $row["Lokasi"] . "</td>
                                <td>
                                    <a href='adminedit.php?id=$id_detail' class='btn btn-warning'>Update</a>
                                    <a href='actions/admindelete.php?id=$id_detail' class='btn btn-danger'>Delete</a>
                                </td>
                            </tr>
                            ";
                        }
                    }
                    // else{
                    //      echo"
                    //      <tr>
                    //             <td>"ops"</td>
                    //             <td>"ops"</td>
                    //             <td>"ops"</td>
                    //             <td>"ops"</td>
                    //             <td>"ops"</td>
                    //         </tr>
                    // //     ";
                    // }
                    // close mysql connection
                    mysqli_close($con);
                    ?>
                    </tbody>
                </table>
            <!-- </div> -->
        </div>
        <script >
            $(document).ready(function() {
                $('#barang').DataTable({
                    "lengthMenu" : [5,10,15,20],
                    "pageLength" : 5
                });
            } );
        </script>
    </body>
</html>