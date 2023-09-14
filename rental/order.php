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
        $cari=mysqli_query($koneksi, "SELECT * FROM mobil,sewa WHERE mobil.id_mobil=sewa.id_mobil") or die (mysqli_connect_error());
    ?>
  <a href="?x=torder" class="btn btn-primary">Tambah Order</a>
  <table class="table table-hover">
  <thead>
    <tr>
      <th>No.</th>
      <th>No Polisi</th>
      <th>Nama Penyewa</th>
      <th>KTP</th>
      <th>Alamat</th>
      <th>No.Telp</th>
      <th>Tanggal Booking</th>
      <th>Tanggal Mulai Order</th>
      <th>Tanggal Selesai Order</th>
      <th>Lama Sewa</th>
      <th>Harga</th>
      <th>Booking Status</th>
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
      <td><?php echo $data['no_polisi']. " / " .$data['merk']; ?></td>
      <td><?php echo $data['nama_sewa']; ?></td>
      <td><?php echo $data['ktp']; ?></td>
      <td><?php echo $data['alamat']; ?></td>
      <td><?php echo $data['tlp_sewa']; ?></td>
      <td><?php echo $data['tgl_booking']; ?></td>
      <td><?php echo $data['tgl_sewa']; ?></td>
      <td><?php echo $data['tgl_kembali']; ?></td>
      <td><?php echo $data['lama']; ?> Hari</td>
      <td>Rp.<?php echo number_format($data['harga_total']); ?></td>
      <td>
      <?php 
        if($data['s_pembayaran']=='pending'){
          echo '<p><a href="statusp.php?no_polisi='.$data['id_mobil'].'&s_pembayaran=0" class="btn btn-danger">Belum Lunas</a></p>';
        } else{
          echo '<p><a href="statusp.php?no_polisi='.$data['id_mobil'].'&s_pembayaran=1" class="btn btn-success">Lunas</a></p>';
        }
      ?>
      </td>
      <td>
      <a href="?x=horder&id=<?php echo $data ['id_sewa']; ?>" class="btn btn-primary">Submit</a>
      <a href="?x=h_cancelorder&id=<?php echo $data ['id_sewa']; ?>" class="btn btn-warning">Hapus</a>
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