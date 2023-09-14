<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
   
  <body>
    <?php
        if($_SESSION['level'] == "SUPER"){
        include("koneksi.php");
        $cari=mysqli_query($koneksi, "select * from admin") or die (mysqli_connect_error());
    ?>

<a href="?x=tadmin" class="btn btn-primary">Tambah</a>
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Alamat</th>
      <th scope="col">No.Telp</th>
      <th scope="col">level</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $no= 1 ;
        while($data=mysqli_fetch_array($cari)){
    ?>

    <tr>
      <th scope="row"><?php echo $no; ?></th>
      <td><?php echo $data['nama_admin']; ?></td>
      <td><?php echo $data['jk_admin']; ?></td>
      <td><?php echo $data['alamat']; ?></td>
      <td><?php echo $data['no_telepon']; ?></td>
      <td><?php echo $data['level']; ?></td>
      <td>
        <a href="?x=hadmin&id=<?php echo $data ['id_admin']; ?>" class="btn btn-danger">Hapus</a>
        <a href="?x=eadmin&id=<?php echo $data ['id_admin']; ?>" class="btn btn-warning">Ubah</a>
        </td>
    </tr>
    <?php
    $no++;
        }
    ?>
  </tbody>
  </table>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <?php
        }
        else if($_SESSION['level'] == "Petugas"){
          echo ('Khusus Super');
        }
        
        ?>
  </body>
</html>