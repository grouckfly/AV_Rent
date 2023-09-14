<?php
include("koneksi.php");
$id = $_GET['id'];
$hapus = mysqli_query($koneksi, "delete from admin where id_admin='$id'") or die;
if ($hapus) {
    header("Location:home.php?x=admin");
}