<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

        <div class="card">
        <h3 class="card-header">Detail Order</h3>
        <?php
                include("koneksi.php");
                $id=$_GET['id'];
                $cari = mysqli_query($koneksi, "SELECT * FROM mobil,sewa_selesai WHERE mobil.id_mobil=sewa_selesai.id_mobil_s && id_sewa_s='$id'") or die;
                $data = mysqli_fetch_array($cari);

                  $tgl1 = new DateTime($data['tgl_akhir_s']);
                  $tgl2 = date_create('now');
                  $selisih = $tgl2->diff($tgl1);
                
            ?>

      <form method="post">
      <div class="mb-3 ">
        <h5>No. Polisi</h5>
        <input type="text" value="<?php echo $data['no_polisi']. " / " .$data['merk']; ?>" class="form-control" readonly>
        </div>
        
        <div class="mb-3 ">
        <h5>Nama Penyewa</h5>
        <input type="text" value="<?php echo $data['nama_sewa_s']; ?>" class="form-control" readonly>
        </div>
        
        <div class="mb-3 ">
        <h5>KTP</h5>
        <input type="text" value="<?php echo $data['ktp_s']; ?>" class="form-control" readonly>
        </div>

        <div class="mb-3 ">
        <h5>Jenis Kelamin</h5>
        <input type="text" value="<?php echo $data['jk_s']; ?>" class="form-control" readonly>
        </div>

        <div class="mb-3 ">
        <h5>Alamat</h5>
        <input type="text" value="<?php echo $data['alamat_s']; ?>" class="form-control" readonly>
        </div>
        
        <div class="mb-3">
        <h5>No. Telp</h5>
        <input type="text" value="<?php echo $data['tlp_sewa_s']; ?>" class="form-control" readonly>
        </div>

        <div class="mb-3">
        <h5>Tanggal Booking</h5>
        <input type="text" value="<?php echo $data['tgl_booking_s']; ?>" class="form-control" readonly>
        </div>

        <div class="mb-3">
        <h5>Tanggal Mulai</h5>
        <input type="text" value="<?php echo $data['tgl_awal_s']; ?>" class="form-control" readonly>
        </div>

        <div class="mb-3">
        <h5>Tanggal Selesai</h5>
        <input type="text" value="<?php echo $data['tgl_akhir_s']; ?>" class="form-control" readonly>
        </div>

        <div class="mb-3">
        <h5>Lama Sewa</h5>
        <input type="text" value="<?php echo $data['lama_s']; ?> Hari" class="form-control" readonly>
        </div>

        <div class="mb-3">
        <h5>Terlambat</h5>
        <input type="text" value="<?php echo $selisih->d ?> Hari" class="form-control" readonly>
        <p style="color: red;">Tanggal Sekarang <?php echo date('Y-m-d') ?></p>
        </div>
        
        <div class="mb-3">
        <h5>Denda</h5>
        <input type="text" value="Rp.<?php echo number_format($data['denda']); ?>" class="form-control" readonly>
        <select name="denda">
                        <?php
                            for($x=0;$x<=10;$x++){
                        ?>
                        <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                    <p style="color: red;">Pilih Nominal Berdasarkan Hari Keterlambatan + Kerusakan</p>
        </div>

        <div class="mb-3">
        <h5>Total Harga</h5>
        <input type="text" value="Rp.<?php echo number_format($data['harga_s']); ?>" class="form-control"  readonly>
        </div>

        <a href="home.php?x=orderk" class="btn btn-primary">Kembali</a>
        <button type="submit" name="hitung" class="btn btn-primary">Simpan</button>
        <button type="submit" name="reset" class="btn btn-warning">Reset Denda</button>
      </form>
        
        </div>
        <?php 
         if(isset($_POST['hitung'])){
          $qty    =$_POST['denda'];
          $denda    = 50000 * $qty;
          $dade = ($data['denda']) + $denda;
          $total = ($data['harga_s']) + $denda;
          $simpan = mysqli_query($koneksi, "UPDATE sewa_selesai SET denda=$dade, harga_s=$total WHERE id_sewa_s='$id'");

      }else if(isset($_POST['reset'])){
        $denda_reset = ($data['denda']) - ($data['denda']);
        $total_reset = ($data['harga_s']) - ($data['denda']);
        mysqli_query($koneksi, "UPDATE sewa_selesai SET harga_s=$total_reset, denda=$denda_reset WHERE id_sewa_s='$id'");
      }
        ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>