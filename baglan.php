<?php

 error_reporting(E_ALL);    

// Sunucu Bilgileri
$host  = 'localhost';    
$kadi  = 'admin_kullaniciadi';             
$sifre  = 'sifre';                  
$vt  = 'admin_ad';               
$baglan = mysqli_connect($host,$kadi,$sifre); 
if(!$baglan) die("Mysql Ýle Baðlantý Kurulamýyor"); 
$db = mysqli_select_db($baglan, $vt) or die (mysqli_error());
mysqli_set_charset($baglan, 'utf8');