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
        $cari=mysqli_query($koneksi, "SELECT * FROM mobil,sewa_selesai where mobil.id_mobil=sewa_selesai.id_mobil_s") or die (mysqli_connect_error());
    ?>
    
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
      <th>Denda</th>
      <th>Total Harga</th>
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
      <td><?php echo $data['nama_sewa_s']; ?></td>
      <td><?php echo $data['ktp_s']; ?></td>
      <td><?php echo $data['alamat_s']; ?></td>
      <td><?php echo $data['tlp_sewa_s']; ?></td>
      <td><?php echo $data['tgl_booking_s']; ?></td>
      <td><?php echo $data['tgl_awal_s']; ?></td>
      <td><?php echo $data['tgl_akhir_s']; ?></td>
      <td><?php echo $data['lama_s']; ?> Hari</td>
      <td>Rp.<?php echo number_format($data['denda']); ?></td>
      <td>Rp.<?php echo number_format($data['harga_s']); ?></td>
      <td>
        <a href="?x=detailo&id=<?php echo $data ['id_sewa_s']; ?>" class="btn btn-primary">Detail</a>
        <a href="?x=horderk&id=<?php echo $data ['id_sewa_s']; ?>&nopol=<?= $data['no_polisi'] ?>" class="btn btn-danger">Selesai</a>
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