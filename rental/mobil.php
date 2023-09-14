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
        $cari=mysqli_query($koneksi, "select * from mobil") or die (mysqli_connect_error());
    ?>
  <a href="?x=tmobil" class="btn btn-primary">Tambah Mobil</a>
  <table class="table table-hover">
  <thead>
    <tr>
      <th>No.</th>
      <th>No Polisi</th>
      <th>Merk</th>
      <th>Tahun</th>
      <th>Spesifikasi</th>
      <th>Seat</th>
      <th>Harga/Hari</th>
      <th>Gambar</th>
      <th>Status</th>
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
      <td><?php echo $data['no_polisi']; ?></td>
      <td><?php echo $data['merk']; ?></td>
      <td><?php echo $data['tahun']; ?></td>
      <td><?php echo $data['spek']; ?></td>
      <td><?php echo $data['seat']; ?></td>
      <td>Rp.<?php echo number_format($data['harga']); ?></td>
      <td>
        <img src="assets/gmobil/<?php echo $data['foto_mobil']; ?>" width="240" height="150">
      </td>
      <td>
      <?php 
        if($data['s_mobil']=='kosong'){
          echo '<p><a href="statusm.php?no_polisi='.$data['no_polisi'].'&s_mobil=0" class="btn btn-danger">Kosong</a></p>';
        } else{
          echo '<p><a href="statusm.php?no_polisi='.$data['no_polisi'].'&s_mobil=1" class="btn btn-success">Tersedia</a></p>';
        }
      ?>
      </td>
      <td>
        <a href="?x=emobil&id=<?php echo $data ['id_mobil']; ?>" class="btn btn-warning">Ubah</a>
        <a href="?x=hmobil&id=<?php echo $data ['id_mobil']; ?>" class="btn btn-danger">Hapus</a>
        </td>
    </tr>
    <?php
    $no++;
        }
    ?>
  </tbody>
  </table>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>