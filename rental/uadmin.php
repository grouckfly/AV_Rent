<?php
    include("koneksi.php");
    $kode = $_POST['kode'];
    $nama = $_POST['TxtNama'];
    $kelamin = $_POST['Kelamin'];
    $username = $_POST['TxtUsername'];
    $password = $_POST['TxtPassword'];
    $alamat = $_POST['TxtAlamat'];
    $notelp = $_POST['TxtNotelp'];
    $level = $_POST['Level'];
    
    try {
       $a = "update admin set nama_admin='$nama',
                jk_admin='$kelamin', 
                username='$username',
                password='$password',
                alamat='$alamat',
                no_telepon='$notelp', 
                level='$level' 
                where id_admin='$kode'";
                $simpan = mysqli_query($koneksi, $a);
    } catch (mysqli_sql_exception $e) {
        var_dump($e);
    }
    
    
    if ($simpan){
        header("location:home.php?x=admin");
    }