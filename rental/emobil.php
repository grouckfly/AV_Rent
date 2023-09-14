<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

        <div class="card">
        <h3 class="card-header">Ubah Data Mobil</h3>
        <?php
                include("koneksi.php");
                $id=$_GET['id'];
                $cari = mysqli_query($koneksi, "SELECT * FROM mobil WHERE id_mobil='$id'") or die;
                $data = mysqli_fetch_array($cari);
            ?>
        
        <!--Form Login-->
        <form method="post" action="?x=umobil">
        <input type="hidden" name="kode" value="<?php echo $data['id_mobil']; ?>">
        <div class="mb-3 ">
            <label>No. Polisi</label>
            <input type="text" class="form-control" name="TxtNopol"value="<?php echo $data['no_polisi']; ?>">
        </div>
        
        <div class="mb-3 ">
            <label>Merk Mobil</label>
            <input type="text" class="form-control" name="TxtMerk"value="<?php echo $data['merk']; ?>">
        </div>
        
        <div class="mb-3 ">
            <label>Tahun</label>
            <input type="text" class="form-control" name="TxtTahun"value="<?php echo $data['tahun']; ?>">
        </div>

        <div class="mb-3 ">
            <label>Spesifikasi</label>
            <input type="text" class="form-control" name="TxtSpek"value="<?php echo $data['spek']; ?>">
        </div>

        <div class="mb-3 ">
            <label>Seat</label>
            <input type="text" class="form-control" name="TxtSeat"value="<?php echo $data['seat']; ?>">
        </div>
        
        <div class="mb-3">
            <label>Harga</label>
            <input type="text" class="form-control" name="TxtHarga"value="<?php echo $data['harga']; ?>">
        </div>
        
        <div class="mb-3 ">
            <label>Gambar</label>
            <img src="assets/gmobil/<?php echo $data['foto_mobil']; ?>" width="200" height="150">
            <input type="file" class="form-control" name="TxtGambar">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

        </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>