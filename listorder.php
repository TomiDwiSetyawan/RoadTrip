<?php

/***** Include db connection file *****/
include 'helper/connection.php';
session_start();

$user = $_SESSION['user'];
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
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
        <br>
            <h2 class="mt-3 text-center">List Order Trip</h2>
            
            <?php

            /***** Get get error message from actionAddBarang.php ******/
            $message = '';
            if (isset($_GET["error"])) {
                $jml = $_GET['jmlh'];
                $id_trip = $_GET['id_trip'];
                $select = mysqli_query($con, "SELECT * FROM list_trip WHERE id_trip = $id_trip");
                $jmlAwal = mysqli_fetch_array($select)['jml'];
                $hasil = $jmlAwal + $jml;
                $result = mysqli_query($con, "UPDATE list_trip SET jml = $hasil Where id_trip = $id");
                if($result){
                    if($_GET["action"] == "delete"){
                        $id_item = $_GET['idItem'];
                        $delete = mysqli_query($con, "DELETE FROM cart WHERE item_nomor = $id_item");
                        if($delete){
                            header("Location: cart.php");
                        }
                    }
                }
                $message = $_GET["error"];
                echo "
                <p style='color:red; font-style:italic'>$message</p>
                ";
            }
            ?>
            <a href="destinasi.php" class="btn btn-success mt-3">Add Another Booking</a>
            <br>
            <!-- <div class="row"> -->

            <?

            ?>

                <table id="barang" class="table table-stripped text-center mt-3" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Destination</th>
                            <th>Booking</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    // Query command
                    $query = "SELECT * FROM list_order inner join user on list_order.id_user = user.id_user inner join list_trip on list_trip.id_trip = list_order.id_trip WHERE list_order.id_user = $user";
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
                            $asw = ($row["jumlah"] * $row["harga"]);
                            $query2 = "UPDATE list_order SET harga = $asw Where id_order = $id_order";
                            $result2 = mysqli_query($con, $query2);
                            echo "
                            <tr>
                                <td>" . $index++ . "</td>
                                <td>" . $row["nama_trip"] . "</td>
                                <td>" . $row["jumlah"] . "</td>
                                
                                <td>Rp. " . number_format($asw) . "</td> 
                                <td>
                                    <a href='actions/deleteOrder.php?id=$id_order' class='btn btn-danger'>Delete</a>
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

            
            <a href="sukses.php" class="btn btn-success mt-3">Order</a>

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


