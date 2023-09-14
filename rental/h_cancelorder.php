<?php
include("koneksi.php");
$id = $_GET['id'];
$hapus = mysqli_query($koneksi, "DELETE FROM sewa WHERE id_sewa='$id'") or die;

if ($hapus) {
    header("Location:home.php?x=order");
}