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

        // MENCARI LAPORAN BERDASARKAN TANGGAL
        $periode = "";
        $laporan_tawal = "";
        $laporan_takhir = "";
        $tgl_awal = "";
        $tgl_akhir = "";

        if(isset($_POST['tampilkan'])){
          $tgl_awal = isset ($_POST['tanggal_awal']) ? $_POST['tanggal_awal'] : "01-".date('m-Y');
          $tgl_akhir = isset ($_POST['tanggal_akhir']) ? $_POST['tanggal_akhir'] : date('d-m-Y');
          $periode = "SELECT * FROM laporan WHERE tgl_sewa_l BETWEEN '.$tgl_awal' AND '.$tgl_akhir' ";
        }
        else{
          $laporan_tawal = "01-".date('m-Y');
          $laporan_takhir = date('d-m-Y');
          $periode = "SELECT * FROM laporan where tgl_sewa_l BETWEEN '.$tgl_awal' AND '.$tgl_akhir' ";
        }
        

    ?>
    <div class="modal-body">
      <h4>Cari Laporan</h4>
      <div class="card-body">
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="cari" target="_self">
      <div class="row">
        <div class="col-3">
          <label>Tanggal Awal</label>
          <input type="date" name="tanggal_awal" class="form-control" value="">
        </div>
        <div class="col-3">
          <label>Tanggal Akhir</label>
          <input type="date" name="tanggal_akhir" class="form-control" value="">
        </div>
      </div>
      <br>
      <input type="submit" name="tampilkan" class="btn btn-primary" value="Tampilkan">
      <a href="clmobil.php?awal=<?php echo $tgl_awal; ?>&&akhir=<?php echo $tgl_akhir; ?>" class="btn btn-primary" target="_blank">Cetak</a>
      </form>
      </div>
    </div>
    <br>

  <table class="table table-hover">
    <h4>Laporan Periode Tanggal <b><?php echo ($tgl_awal) ?></b> S/D <b><?php echo ($tgl_akhir) ?></b></h4>
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
      <th>Aksi</th>
    </tr>
  </thead>

  <tbody>

    <?php
    $no= 1 ;
    $total = 0;
    $cari=mysqli_query($koneksi, "SELECT * FROM mobil,laporan WHERE mobil.id_mobil=laporan.id_mobil_l && tgl_sewa_l BETWEEN '$tgl_awal' AND '$tgl_akhir'") or die (mysqli_connect_error());
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
      <td>
      <a href="?x=hlaporan&id=<?php echo $data ['id_sewa_l'];?>" class="btn btn-danger">Hapus</a>
      </td>

    </tr>
    <?php
    $total += $data['harga_total_l'];
    $no++;
        }
    ?>
<div class="container text-left">
  <div class="row">
    <div class="col">
    <h5>Total Pendapatan: Rp.<?php echo number_format($total)?></h5>
    </div>
  </div>
</div>
  </tbody>
  </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>