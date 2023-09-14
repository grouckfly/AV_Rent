<?php
if(isset($_GET['x'])){
    switch($_GET['x']){
            case 'keluar':
                include("keluar.php");
                break;
            case 'admin':
                include("admin.php");
                break;
            case 'tadmin':
                include("tadmin.php");
                break;
            case 'sadmin':
                include("sadmin.php");
                break;
            case 'hadmin':
                include("hadmin.php");
                break;
            case 'eadmin':
                include("eadmin.php");
                break;
            case 'uadmin':
                include("uadmin.php");
                break;
            case 'mobil':
                include("mobil.php");
                break;
            case 'tmobil':
                include("tmobil.php");
                break;
            case 'smobil':
                include("smobil.php");
                break;
            case 'hmobil':
                include("hmobil.php");
                break;
            case 'emobil':
                include("emobil.php");
                break;
            case 'umobil':
                include("umobil.php");
                break;
            case 'statusm':
                include("statusm.php");
                break;
            case 'order':
                include("order.php");
                break;
            case 'orderk':
                include("orderk.php");
                break;
            case 'torder':
                include("torder.php");
                break;
            case 'sorder':
                include("sorder.php");
                break;
            case 'sorderk':
                include("sorderk.php");
                break;
            case 'eorder':
                include("eorder.php");
                break;
            case 'detailo':
                include("detailo.php");
                break;
            case 'horder':
                include("horder.php");
                break;
            case 'h_cancelorder':
                include("h_cancelorder.php");
                break;
            case 'horderk':
                include("horderk.php");
                break;
            case 'hlaporan':
                include("hlaporan.php");
                break;
            case 'statuso':
                include("statuso.php");
                break;
            case 'cmobil':
                include("cmobil.php");
                break;
            case 'home':
                include("home.php");
                break;
            case 'infom':
                include("infom.php");
                break;
            case 'orderpelanggan':
                include("orderpelanggan.php");
                break;
            case 'sorderpelanggan':
                include("sorderpelanggan.php");  
                break;
            case 'konfirmasi':
                include("konfirmasi.php");  
                break;
            case 'ckonfirmasi':
                include("ckonfirmasi.php");  
                break;
            case 'tampillaporan':
                include("tampillaporan.php");  
                break;
    }
}
else{
    echo "<h3>UNKNOWN FORM</h3>";
}