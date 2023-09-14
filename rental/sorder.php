<?php
include "koneksi.php";
$polisi = $_POST['nopol'];
$nama = $_POST['TxtNamap'];
$jenkel = $_POST['jk'];
$ktp = $_POST['TxtKTP'];
$alamat = $_POST['TxtAlamat'];
$tlp = $_POST['TxtTelp'];
$booking = new DateTime($_POST['TxtBooking']);
$mulai = new DateTime($_POST['TxtMulai']);
$selesai = new DateTime($_POST['TxtSelesai']);
$selisih = $selesai->diff($mulai);
$x = $selisih->d;
$cari = mysqli_query($koneksi, "SELECT * FROM mobil WHERE id_mobil='$polisi'");
$data = mysqli_fetch_array($cari);
$harga = $x * $data['harga'];


$simpan = mysqli_query($koneksi, "INSERT INTO sewa(id_mobil, nama_sewa, ktp, jk_sewa, alamat, tlp_sewa, tgl_booking,
                        tgl_sewa, tgl_kembali, lama, harga_total, s_pembayaran) 
                        VALUES ($polisi,'$nama','$ktp','$jenkel','$alamat','$tlp','$_POST[TxtBooking]'
                        ,'$_POST[TxtMulai]','$_POST[TxtSelesai]',$x,$harga,'pending')") or die;
                        
if ($simpan) {
    header("Location:home.php?x=order");
    echo "<script>alert('Data Telah Tersimpan')</script>";
}                        
?>