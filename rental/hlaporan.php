<?php
include("koneksi.php");
$id = $_GET['id'];
$hapus = mysqli_query($koneksi, "DELETE FROM laporan WHERE id_sewa_l='$id'") or die;
if ($hapus) {
    header("Location:home.php?x=cmobil");
}