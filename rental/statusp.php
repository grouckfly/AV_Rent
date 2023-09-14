<?php 
include('koneksi.php');

$id=$_GET['no_polisi'];
$status=$_GET['s_pembayaran'];

if($status == '0') {
    $keterangan = "lunas";

    $stok = "UPDATE mobil SET s_mobil='kosong' WHERE id_mobil='$id'";

    $updateStok = mysqli_query($koneksi, $stok);
} else {
    $keterangan = "pending";

    $stok = "UPDATE mobil SET s_mobil='tersedia' WHERE id_mobil='$id'";

    $updateStok = mysqli_query($koneksi, $stok);
}

$q = "UPDATE sewa SET s_pembayaran='$keterangan' WHERE id_mobil='$id'";

$simpan=mysqli_query($koneksi, $q);

if ($simpan){
    header("location:home.php?x=order");
}
?>