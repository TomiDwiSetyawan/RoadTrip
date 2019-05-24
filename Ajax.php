<?php
    $search = $_GET['search'];
    $desti = "";
    $desti = $_GET['des'];
    $query = "SELECT * FROM list_trip WHERE Lokasi = '$desti'";
    $result = mysqli_query($con, $query);
    $query = "";
    if (isset($_GET['search'])) {
        $q = $_GET['search'];
        $query = "SELECT * FROM list_trip Where nama_trip LIKE '%$q%' AND Lokasi = '$desti'  ORDER BY id_trip ASC";
        $result = mysqli_query($con, $query);
    } else {
        $query = "SELECT * FROM list_trip WHERE Lokasi = '$desti'";
        $result = mysqli_query($con, $query);
    }
    if(mysqli_num_rows($result) > 0)
            {
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">
        <div class="media media-custom d-block mb-4">
        <a href="#" class="mb-4 d-block"><img src="img/<?= $row['foto'] ?>" alt="Image placeholder" class="img-fluid"></a>
        <div class="media-body">
            <!-- <span class="meta-post">February 26, 2018</span> -->
            <h2 class="mt-0 mb-3" style="text-align:center"><a href="#"><?= $row['nama_trip'] ?></a></h2>
            <p class="mt-0 mb-3" style="text-align:center">
            <font face="Blenda Script"><?= $row['harga'] ?></font>
            </p>
            <p data-aos="fade-up" data-aos-delay="100" style="text-align:center"> <a href="tripdetail.php?id_trip=<?= $row['id_trip'] ?>" class="btn uppercase btn-primary mr-md-2 mr-0 mb-3 d-sm-inline d-block">Detail</a></p>

        </div>
        </div>
    </div>
<?php
}
}else{
  echo "<h1 class='text-center'>SORRY :(</h1>";
}
?>

