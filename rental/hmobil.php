<?php
include("koneksi.php");
$id = $_GET['id'];
$hapus = mysqli_query($koneksi, "delete from mobil where id_mobil='$id'") or die;
if ($hapus) {
    header("Location:home.php?x=mobil");
}