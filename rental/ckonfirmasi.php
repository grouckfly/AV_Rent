<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="shortcut icon" type="image/png" href="assets/AV B.jpg">
</head>
<body>
<?php 
      include("koneksi.php");
    ?>
<div class="container">
        <div class="box">
            <div class="col-md-10" style="float: none; margin: 0 auto; text-align: center;">
                <br>
                <img src="assets/AV B.jpg" class="logo" height="300" width="300">
                <br>
                <h2 style="color: red;">Data Pemesanan</h2>
                <br>
            </div>
            <div class="col-md-10" style="float: none; margin: 0 auto; ">
            <ul class="list-group">
                <?php
                    $query = "SELECT nama_sewa, no_polisi, merk,  ktp, jk_sewa, tlp_sewa,tgl_booking, tgl_sewa, tgl_kembali, harga_total FROM `sewa` INNER JOIN mobil ON sewa.id_mobil = mobil.id_mobil ORDER BY `sewa`.`id_sewa` DESC LIMIT 1";

                    $sql = mysqli_query($koneksi, $query);

                    foreach($sql as $data) :
                ?>
                <li class="list-group-item disabled" aria-disabled="true"><h5>Mobil : <?php echo $data['no_polisi']." - ".$data['merk']; ?></h5></li>
                <li class="list-group-item disabled" aria-disabled="true"><h5>Tanggal Booking : <?php echo $data['tgl_booking']; ?></h5></li>
                <li class="list-group-item disabled" aria-disabled="true"><h5>Tanggal Peminjaman : <?php echo $data['tgl_sewa']; ?></h5></li>
                <li class="list-group-item disabled" aria-disabled="true"><h5>Tanggal Pengembalian : <?php echo $data['tgl_kembali']; ?></h5></li>
                <li class="list-group-item disabled" aria-disabled="true"><h5>Nama : <?php echo $data['nama_sewa']; ?></h5></li>
                <li class="list-group-item disabled" aria-disabled="true"><h5>No.KTP : <?php echo $data['ktp']; ?></h5></li>
                <li class="list-group-item disabled" aria-disabled="true"><h5>Kelamin : <?php echo $data['jk_sewa']; ?></h5></li>
                <li class="list-group-item disabled" aria-disabled="true"><h5>No.Telp : <?php echo $data['tlp_sewa']; ?></h5></li>
                <li class="list-group-item disabled" aria-disabled="true"><h4>Total Harga : Rp.<?php echo number_format($data['harga_total']); ?></h4></li>
                <?php endforeach; ?>
            </ul>
            </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-12">
            <p class="text-center font-weight-bold">AV Rent &copy;<?php echo date ('Y') ?></p>
          </div>
        </div>
    </div>
    <script>
		window.print();
	  </script>
</body>
</html>