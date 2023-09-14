<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AV Rent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="shortcut icon" type="image/png" href="assets/AV B.jpg">
    
  </head>
  <body>
  <?php
    include("koneksi.php");
    $id = $_GET['id']; 
    $cari = mysqli_query($koneksi, "select * from mobil WHERE id_mobil=$id");
    ?>

    <div class="container" style="margin-top: 65px;" >
    <div class="col-md-7" style="float: none; margin: 0 auto;">
      <div class="form-area">
      <h1>Form Pemesanan</h1>

      <form method="post" action="sorderpelanggan.php">
      <?php
                foreach($cari as $data) {

            ?>
            <input type="hidden" name="id_mobil" id="id_mobil" value="<?= $data['id_mobil'] ?>" readonly>
            <input type="hidden" name="harga" id="harga" value="<?= $data['harga'] ?>" readonly>
            <div class="mb-3 ">
                <label>No. Polisi</label>
                <input type="text" class="form-control" name="nopolc" value="<?= $data['no_polisi']. ' - ' .$data['merk'] ?>" readonly>
            </div>
            <?php } ?>
        <div class="mb-3">
            <label>Harga</label>
            <input type="text" class="form-control" value="Rp.<?php echo number_format($data['harga']); ?> / Hari" readonly>
        </div>
        <div class="mb-3 ">
            <label>Nomor KTP</label>
            <input type="text" class="form-control" name="TxtKTPc" required>
            </div>
        <div class="mb-3 ">
            <label>Nama Peminjam</label>
            <input type="text" class="form-control" name="TxtNamapc" required>
        </div>
        <div class="mb-3 ">
            <label>Jenis Kelamin</label>
            <select name="jkc" id="">
            <option>--Pilih--</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
            </select>
            </div>
        <div class="mb-3">
            <label>Alamat</label>
            <input type="text" class="form-control" name="TxtAlamatc" required>
        </div>       
        <div class="mb-3">
            <label>No.Telp</label>
            <input type="text" class="form-control" name="TxtTelpc" required>
        </div>
        <div class="mb-3">
            <label>Tanggal Pinjam</label>
            <input type="date" class="form-control" name="TxtMulaic" required>
        </div>
        <div class="mb-3">
            <label>Tanggal Selesai</label>
            <input type="date" class="form-control" name="TxtSelesaic" required>
        </div>
        <div class="mb-3">
            <label>Tanggal Booking</label>
            <input type="date" class="form-control" name="TxtBookingc" required>
        </div>
        <br>
        <a class="btn btn-primary" href="index.php">Kembali</a>
           <input type="submit" value="Order" class="btn btn-warning">
           
        </form>
        
                </div>
        
      </div>
      <br>
      <div class="col-md-12" style="float: none; margin: 0 auto; text-align: center;">
      <h4><strong>Note:</strong> Jika Melewati Batas Pengembalian Atau Terjadi Kerusakan Maka Akan Di Denda Sebesar <span class="text-danger">Rp 50.000</span> Per Hari Atau Setiap Kerusakan.</h4>
                <br><br>
        </div>
    </div>
  </body>
</html>
