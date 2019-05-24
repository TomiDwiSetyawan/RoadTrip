<?php

/***** Include db connection file *****/
include 'helper/connection.php';
session_start();

// $user = $_SESSION['user'];
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
        <br>
            <h2 class="mt-3 text-center">List Order Customers</h2>
            <br>
            
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
            <br>
            <!-- <div class="row"> -->

            <?

            ?>

                <table id="barang" class="table table-stripped text-center mt-3" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama User</th>
                            <th>Email</th>
                            <th>Jumlah Order</th>
                            <th>Harga</th>
                            <th>Destination</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    // Query command
                    $query = "SELECT * FROM list_order inner join user on list_order.id_user = user.id_user inner join list_trip on list_trip.id_trip = list_order.id_trip";
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
                            $id_order = $row["id_order"];
                            $image = $row["foto"];
                            echo "
                            <tr>
                                <td>" . $index++ . "</td>
                                <td>" . $row["nama"] . "</td>
                                <td>" . $row["email"] . "</td>
                                <td>" . $row["jumlah"] . "</td>
                                <td> Rp. " . $row["harga"] . "</td>
                                <td>" . $row["nama_trip"] . "</td>
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

            
            <!-- <a href="actions/logout.php" class="btn btn-success mt-3">Back</a> -->

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


