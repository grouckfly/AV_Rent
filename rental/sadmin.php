<?php
    include("koneksi.php");
    $nama = $_POST['TxtNama'];
    $kelamin = $_POST['Kelamin'];
    $username = $_POST['TxtUsername'];
    $password = $_POST['TxtPassword'];
    $alamat = $_POST['TxtAlamat'];
    $notelp = $_POST['TxtNotelp'];
    $level = $_POST['Level'];
    $simpan = mysqli_query($koneksi, "insert into admin(nama_admin,jk_admin,username,password,alamat,no_telepon,level) 
    values ('$nama','$kelamin','$username','$password','$alamat','$notelp','$level')")
    or die;
    
    if ($simpan){
        header("location:home.php?x=admin");
    }