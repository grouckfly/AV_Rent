<?php 
include('koneksi.php');

$id=$_GET['no_polisi'];
$statusm=$_GET['s_mobil'];

if($statusm == '0') {
    $keterangan = "tersedia";
} else {
    $keterangan = "kosong";
}

$q = "UPDATE mobil SET s_mobil='$keterangan' WHERE no_polisi='$id'";

$simpan=mysqli_query($koneksi, $q);

if ($simpan){
    header("location:home.php?x=mobil");
}
?>