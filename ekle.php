<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="box.css">

</head>

<body><?php 
include ('baglan.php');
if($_POST) 
{
$target = nl2br(htmlentities($_POST['target']));
$baslikid = mysqli_real_escape_string($baglan,  nl2br(htmlentities($_POST['baslikid'])));
$degismis = mysqli_real_escape_string($baglan, $target);
$degismis = html_entity_decode($degismis, ENT_QUOTES);
//$baslikid = htmlentities($_POST['title']); //hidden input'un value'sine $_GET['title'] 'ı yazdırabilirsin 
//@$baslikid = $_POST["baslikid"];
if(strlen($degismis) < 3){
echo '<div class="alert-box error"><span>Hata: </span>3 karakterden fazla girin</div>';   
}else{ 
$m = mysqli_query($baglan, "select * from duyurular where duyuru='$degismis' and baslikid='$baslikid'");
$s = mysqli_num_rows($m);
if($s == '0'){
//MySQL'e bağlanıp veritabanı seçtiğinizi farz ediyorum 
$sql = "insert into duyurular (duyuru, aktif, baslikid,time) values ('$degismis', '0', '$baslikid',now())"; 
$upd = "update basliklar SET time = now() WHERE id = '$baslikid' ";

$query = mysqli_query($baglan, $sql); 

if($query){
	$e = mysqli_query($baglan, $upd);
	if($e){
echo '<div class="alert-box success"><span>Tamam: </span>yorum gönderildi</div>';   
	}else{
		echo"update hatasi";
	}
}else{
	
	echo"Hata Oluştu";

}
}else{
	echo 'Onay Beklıyor. Yada daha önce yapılmış bir yorum.'; 
}

}  
} 

?></body></html>