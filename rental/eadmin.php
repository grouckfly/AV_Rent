<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

        <div class="card">
        <h3 class="card-header">Ubah Data Admin</h3>
        
        <!--Form Login-->
        <form method="post" action="?x=uadmin">
            <?php
                include("koneksi.php");
                $id=$_GET['id'];
                $cari = mysqli_query($koneksi, "SELECT * FROM admin WHERE id_admin='$id'") or die;
                $data = mysqli_fetch_array($cari);
            ?>
            <input type="hidden" name="kode" value="<?php echo $data['id_admin']; ?>">
        <div class="mb-3 ">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control" name="TxtNama" value="<?php echo $data['nama_admin']; ?>">
            </div>
        <div class="mb-3 ">
            <label>Jenis Kelamin</label>
            <select name="Kelamin" class="form-control">
            <option value="<?php echo $data ['jk_admin']; ?> "><?php echo $data ['jk_admin']; ?> </option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            </div>    
        <div class="mb-3 ">
            <label>Alamat</label>
            <input type="text" class="form-control" name="TxtAlamat" value="<?php echo $data['alamat']; ?>">
        </div>
        <div class="mb-3 ">
            <label>No.Telfon</label>
            <input type="text" class="form-control" name="TxtNotelp" value="<?php echo $data['no_telepon']; ?>">
        </div>    
        <div class="mb-3 ">
            <label>Username</label>
            <input type="text" class="form-control" name="TxtUsername" value="<?php echo $data['username']; ?>">
            </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" class="form-control" name="TxtPassword" value="<?php echo $data['password']; ?>">
        </div>
        <div class="mb-3 ">
            <label>Level</label>
            <select name="Level" class="form-control">
            <option value="<?php echo $data ['level']; ?>"><?php echo $data ['level']; ?></option>
                <option value="SUPER">SUPER</option>
                <option value="Petugas">Petugas</option>
            </select>
            </div> 
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

        </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>