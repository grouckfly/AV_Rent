<?php
    include("koneksi.php");
    $nopolisi = $_POST['TxtNopol'];
    $merk = $_POST['TxtMerk'];
    $tahun = $_POST['TxtTahun'];
    $harga = $_POST['TxtHarga'];
    $seat = $_POST['TxtSeat'];
    $spek = $_POST['TxtSpek'];
    $gambar = $_POST['TxtGambar'];
    $kode = $_POST['kode'];

                 
                 $simpan = mysqli_query($koneksi, "UPDATE mobil SET no_polisi='$nopolisi',
                 merk='$merk',
                 foto_mobil='$gambar',
                 tahun='$tahun',
                 harga='$harga',
                 seat='$seat',
                 spek='$spek'
                 WHERE id_mobil='$kode'");

    if ($simpan){
        header("location:home.php?x=mobil");
    }