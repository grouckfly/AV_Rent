<?php
include("koneksi.php");
$id = $_GET['id'];
$nopol = $_GET['nopol'];
$submit = mysqli_query($koneksi, "INSERT INTO laporan (id_mobil_l, nama_sewa_l, ktp_l, jk_l, alamat_l, tlp_sewa_l, tgl_booking_l, tgl_sewa_l, tgl_kembali_l, lama_l, denda_l, harga_total_l) 
        SELECT id_mobil_s, nama_sewa_s, ktp_s, jk_s, alamat_s, tlp_sewa_s, tgl_booking_s, tgl_awal_s, tgl_akhir_s, lama_s, denda, harga_s FROM sewa_selesai WHERE id_sewa_s='$id'") or die;

if ($submit) {
    $update = mysqli_query($koneksi, "UPDATE mobil SET s_mobil = 'tersedia' WHERE no_polisi = '$nopol'");

    if($update) {
        mysqli_query($koneksi, "DELETE FROM sewa_selesai WHERE id_sewa_s='$id'") or die;
        header("Location:home.php?x=orderk");
    } else {
        echo 'gagal';
    }
} else {
    echo 'Gagal';
}