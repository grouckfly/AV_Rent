<?php
include("koneksi.php");
$id = $_GET['id'];
$hapus = mysqli_query($koneksi, "INSERT INTO sewa_selesai (id_mobil_s, nama_sewa_s, ktp_s, jk_s, alamat_s, tlp_sewa_s, tgl_booking_s, tgl_awal_s, tgl_akhir_s, lama_s, harga_s) 
        SELECT id_mobil, nama_sewa, ktp, jk_sewa, alamat, tlp_sewa, tgl_booking, tgl_sewa, tgl_kembali, lama, harga_total FROM sewa WHERE id_sewa='$id'") or die;

if ($hapus) {
    mysqli_query($koneksi, "DELETE FROM sewa WHERE id_sewa='$id'") or die;
    header("Location:home.php?x=order");
}