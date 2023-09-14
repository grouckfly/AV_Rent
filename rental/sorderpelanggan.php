<?php
include "koneksi.php";

$id = $_POST['id_mobil'];
$namac = $_POST['TxtNamapc'];
$jenkelc = $_POST['jkc'];
$ktpc = $_POST['TxtKTPc'];
$alamatc = $_POST['TxtAlamatc'];
$tlpc = $_POST['TxtTelpc'];
$bookingc = new DateTime($_POST['TxtBookingc']);
$mulaic = new DateTime($_POST['TxtMulaic']);
$selesaic = new DateTime($_POST['TxtSelesaic']);
$selisihc = $selesaic->diff($mulaic);
$x = $selisihc->d;
$harga = $x * $_POST['harga'];

$sql = "INSERT INTO sewa(id_mobil, nama_sewa, ktp, jk_sewa, alamat, tlp_sewa, tgl_booking, tgl_sewa, tgl_kembali, lama, harga_total, s_pembayaran) 
        VALUES ($id, '$namac','$ktpc','$jenkelc','$alamatc','$tlpc','$_POST[TxtBookingc]','$_POST[TxtMulaic]','$_POST[TxtSelesaic]','$x','$harga','pending')";

$simpan = mysqli_query($koneksi, $sql) or die;

if ($simpan) {
    header("Location:konfirmasi.php");
}                        
?>