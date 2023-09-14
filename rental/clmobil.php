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
        
        $awal = $_GET['awal'];
        $akhir = $_GET['akhir'];

        $tgl_awal = isset ($_GET['tanggal_awal']) ? $_GET['tanggal_awal'] : "01-".date('m-Y');
        $tgl_akhir = isset ($_POST['tanggal_akhir']) ? $_GET['tanggal_akhir'] : date('d-m-Y');
        $periode = "SELECT * FROM laporan WHERE tgl_sewa_l BETWEEN '$awal' AND '$akhir' ";

    ?>

  <table class="table table-hover">
  <div class="col-md-10" style="float: none; margin: 0 auto; text-align: center;">
                <br>
                <img src="assets/AV B.jpg" class="logo" height="200" width="200">
                <br>
                <h4>Laporan Periode Tanggal <b><?php echo ($awal) ?></b> S/D <b><?php echo ($akhir) ?></b></h4>
                <br>
            </div>
  
  <thead>
    <tr>
      <th>No.</th>
      <th>No Polisi</th>
      <th>Nama Penyewa</th>
      <th>KTP</th>
      <th>Alamat</th>
      <th>No.Telp</th>
      <th>Lama Sewa</th>
      <th>Tanggal Booking</th>
      <th>Tanggal Mulai Order</th>
      <th>Tanggal Selesai Order</th>
      <th>Denda</th>
      <th>Total Harga</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $no= 1 ;
    $total = 0;
    $cari=mysqli_query($koneksi, "SELECT * FROM mobil,laporan WHERE mobil.id_mobil=laporan.id_mobil_l && tgl_sewa_l BETWEEN '$awal' AND '$akhir'") or die (mysqli_connect_error());
        while($data=mysqli_fetch_array($cari)){
    ?>

    <tr>
      <th scope="row"><?php echo $no; ?></th>
      <td><?php echo $data['no_polisi']. " / " .$data['merk']; ?></td>
      <td><?php echo $data['nama_sewa_l']; ?></td>
      <td><?php echo $data['ktp_l']; ?></td>
      <td><?php echo $data['alamat_l']; ?></td>
      <td><?php echo $data['tlp_sewa_l']; ?></td>
      <td><?php echo $data['lama_l']; ?> Hari</td>
      <td><?php echo $data['tgl_booking_l']; ?></td>
      <td><?php echo $data['tgl_sewa_l']; ?></td>
      <td><?php echo $data['tgl_kembali_l']; ?></td>
      <td>Rp.<?php echo number_format($data['denda_l']); ?></td>
      <td>Rp.<?php echo number_format($data['harga_total_l']); ?></td>

    </tr>
    <?php
    $total += $data['harga_total_l'];
    $no++;
        }
    ?>

<div class="container text-left">
    <div class="col-md-10" style="float: none; margin: 0 auto; text-align: center;">
    <h5 style="color: red;">Total Pendapatan: Rp.<?php echo number_format($total)?></h5>
    </div>
</div>
  </tbody>
  </table>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  
    <script>
		window.print();
	  </script>
  
</body>
</html>