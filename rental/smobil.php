<?php
    include("koneksi.php");
    $nopolisi = $_POST['TxtNopol'];
    $merk = $_POST['TxtMerk'];
    $tahun = $_POST['TxtTahun'];
    $harga = $_POST['TxtHarga'];
    $seat = $_POST['TxtSeat'];
    $spek = $_POST['TxtSpek'];
    $gambar = $_POST['TxtGambar'];
    $simpan = mysqli_query($koneksi, "insert into mobil(no_polisi,merk,tahun,harga,foto_mobil,seat,spek,s_mobil) 
    values ('$nopolisi','$merk','$tahun','$harga','$gambar','$seat','$spek','tersedia')")
    or die;
    
    if ($simpan){
        header("location:home.php?x=mobil");
    }