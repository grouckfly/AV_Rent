<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <?php
    include("koneksi.php");
    $cari = mysqli_query($koneksi, "SELECT * FROM mobil");
    ?>
        <div class="card">
        <h3 class="card-header">Tambah Data Order</h3>
        
        <!--Form Login-->
        <form method="post" action="?x=sorder">
        <div class="mb-3 ">
            <label>No. Polisi</label>
            <select name="nopol" class="form-control" required>
                <option value="">--Pilih--</option>
                <?php
                $sql1 = "SELECT * FROM mobil WHERE s_mobil='tersedia'";
                $result1 = mysqli_query($koneksi,$sql1);
                while ($data = mysqli_fetch_array($result1)){
                ?>
                <option value="<?php echo $data ['id_mobil']; ?>"><?php echo $data['no_polisi']." - ".$data['merk']; ?></option>
                <?php
                }?>
            </select>
            </div>
        <div class="mb-3 ">
            <label>Nomor KTP</label>
            <input type="text" class="form-control" name="TxtKTP" required>
        </div>
        <div class="mb-3 ">
            <label>Nama Peminjam</label>
            <input type="text" class="form-control" name="TxtNamap" required>
        </div>
        <div class="mb-3 ">
            <label>Jenis Kelamin</label>
            <select name="jk" id="" required>
            <option>--Pilih--</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
            </select>
            </div>
        <div class="mb-3">
            <label>Alamat</label>
            <input type="text" class="form-control" name="TxtAlamat" required>
        </div>       
        <div class="mb-3">
            <label>No.Telp</label>
            <input type="text" class="form-control" name="TxtTelp" required>
        </div>
        <div class="mb-3">
            <label>Tanggal Pinjam</label>
            <input type="date" class="form-control" name="TxtMulai" required>
        </div>
        <div class="mb-3">
            <label>Tanggal Selesai</label>
            <input type="date" class="form-control" name="TxtSelesai" required>
        </div>
        <div class="mb-3">
        <label>Tanggal Booking</label>
            <input type="date" class="form-control" name="TxtBooking" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

        </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>