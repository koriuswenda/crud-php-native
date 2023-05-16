<?php
// koneksi ke database
$servername = 'localhost';
$name = 'root';
$password = '';
$namadatabase = 'crud-php-native';

$con = mysqli_connect($servername, $name, $password, $namadatabase);
$sqli = 'SELECT * FROM plants';
$result = mysqli_query($con, $sqli);

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
        <header class="bg-success">
            <div class="container">
                <h1 class="p-5 fw-bolder text-white">Tanaman Obat</h1>
            </div> 
        </header>


        <!-- Data Tanaman -->

        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class = "display-3" Data Tanaman > </p>
                    </div>

                    <!-- Tombol tambah -->
                <div class="row">
                    <div class="col">
                        <a class="btn btn-success rounded-5" href="add.php">Tambah Data Tanaman</a>
                    </div>
                </div>

                <!-- Daftar Tanaman -->
                <div class="row mt-3 p-3">

                <?php  while ($row = mysqli_fetch_assoc
                ($result))  {
                    ?>
                    <!-- Tanaman -->
                    <div class="col-6">

                        <div class="card shadow" style="width: 18rem;">
                            <img src="https://img.freepik.com/free-vector/flat-people-taking-care-plants-inside_23-2148974782.jpg" class="card-img-top" alt="Gambar Tanaman">
                            <div class="card-body">
                                <h5 class="card-title"><?= $row['name']?> </h5>
                                <p class="card-title">Stock  <?= $row ['stok']?></p>
                                <p class="card-text">Lokasi <?=$row['lokasi']?></p>
                                 <a href="detail.php?id=<?= $row['id']?>" class="btn btn-success">Detail</a>
                                <a href="edit.php?id=<?=$row['id']?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?id=<?=$row['id']?>" class="btn btn-danger">Delete</a>
                        </div>

                    </div>
                </div>
                <?php } ?>
                
                </div>

        </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>



</body>
</html>