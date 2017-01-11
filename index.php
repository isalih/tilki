<!DOCTYPE html>
<html><head>
<meta charset="utf-8" />
<meta http-equiv="Pragma" content="no-cache">
<?php
 function otomatik_url($mesaj) {
	 
$mesaj = preg_replace( "`((http)+(s)?:(//)|(www\.))((\w|\.|\-|_)+)(/)?(\S+)?`i", "<a rel=\"nofollow\" target=_blank href=\"http\\3://\\5\\6\\8\\9\">\\5\\6\\8\\9</a>", $mesaj);

return $mesaj;
}
include ('baglan.php');
$id = (isset($_GET['title'])) ? $_GET['title'] : null;
$query = mysqli_query($baglan, "SELECT * FROM basliklar WHERE id='$id'");
$take=mysqli_fetch_assoc($query);
echo  '<title>'.'tilki.net v1.0 beta - '.$take['baslik'].'</title>'; ?>

   <script type="text/javascript" src="javascript/javascript/jquery-1.9.1.js"></script> 
   
   
   
<script type="text/javascript">

  
function ekle(){
var target = $('#target').val();
var baslikid = $('#baslikid').val();
$.ajax({ 
type:'POST', 
url:'ekle.php', 
data:"target="+encodeURIComponent(target)+"&baslikid="+encodeURIComponent(baslikid), 
success:function(cevap){ 
    
    $("#sonuc").html(cevap);

}

})

request.fail(function(jqXHR, textStatus) {
  alert( "Request failed: " + textStatus );
});

}
</script>

	<script src="javascript/jquery-1.8.1.min.js"></script>
	<script src="javascript/jquery.autogrowtextarea.min.js"></script>
	<script>
		$(document).ready(function() {
			$("#target").autoGrow();
		});
	</script>
     <link rel="stylesheet" href="css/gstyle_buttons.css" type="text/css"  media="screen">
	<style>
	    #content {
			
			width:410px;
			margin:auto;
	
		}
	
body {
				cursor:default; 
			    background: url(back.png) no-repeat; 
				margin:0;
				background-attachment:fixed;
				background-position:center;
			    background-color: #FFCC00;
}
		

			
		p{
			margin:0 auto;
			}
		#target {
			font-family: times "Times New Roman", Times, serif;
			font-size: 15px;
			border:1px solid #F60;
			max-width: 400px;
			min-width: 800px;
			min-height:50px;
			resize:none;
			
		}
	
		#sol { 

        float: left; 
        height: 100%; 
        width: 13%; 
        /*position:absolute;*/
        /*overflow-y:scroll;*/
		font-family:"Times New Roman", Times, serif;
		
		

  }
 
  #sonuc {
	  float:right;
	  
	  } 

	  #baslik{
		  
		  color: #F00;
	    
		
	      font-size: 15px;
		  font-family:"Times New Roman", Times, serif;

		  }

#sag { 
     float:right;
     width: 87%; 
     height: 100%; 
     line-height:10px
     white-space: -moz-pre-wrap !important; 
     word-wrap: break-word; 
     margin-top: 10px; 
     font-family:"Times New Roman", Times, serif;

  
}
		</style>
	<link href="css/pagination.css" rel="stylesheet" type="text/css" />
	<link href="css/A_red.css" rel="stylesheet" type="text/css" />

</head>

 
<body>

<div id="sol">                <img src="twitter.jpg" width="30" height="30"><img src="facebook.jpg" width="30" height="30"><img src="googleplus.jpg" width="30" height="30"><img src="youtube.jpg" width="30" height="30">

<?php include('sol.php'); ?></div> 
<div id="sag">
<?php

    require_once 'baglan.php';
	 include_once ('function.php');

    	$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 10;
    	$startpoint = ($page * $limit) - $limit;	
	if(@$_GET["title"] == ""){
		$select = mysqli_query($baglan, "select * from basliklar order by time DESC limit 1");
		$s = mysqli_fetch_array($select);
		$id = mysqli_real_escape_string($baglan,$s["id"]);
		$idsi = $id;
		   $s = mysqli_query($baglan, "select * from basliklar where id = '$id' limit 1"); 
$g = mysqli_fetch_array($s);
 $baslikadi = $g["baslik"];
		 echo "<h2><a href='index.php?title=".$id."'>".$baslikadi."</a></h2>
		
";
		$statement = "duyurular WHERE baslikid='".$id."' AND aktif = '1'";
        $duyuruBul = mysqli_query($baglan, "SELECT * FROM {$statement} LIMIT {$startpoint} , {$limit}");
        while($duyuruGoster = mysqli_fetch_array($duyuruBul)){
          
		  $as  = str_replace(" "," &nbsp;", $duyuruGoster["duyuru"]);

$as  = otomatik_url($as);
		$ax = str_replace("</br &nbsp;>","</br>", $as);
		$ax = str_replace("<br &nbsp;>","<br>",$ax);
		$ax = str_replace("<br &nbsp;/>","<br>",$ax);
		  echo  '<li>   '.$ax.'  </li> <br><div style="text-align:right; color:red;">'.$duyuruGoster["time"].'</div><br>';
         }
	}else{
    $baslikid = htmlentities($_GET["title"]);
    if(!empty($baslikid)){
   $s = mysqli_query($baglan, "select * from basliklar where id = '$baslikid' limit 1"); 
 $g = mysqli_fetch_array($s);
 $baslikadi = $g["baslik"];
 $idsi = $baslikid;
 
 echo "<div id='baslik'><h2><a href='index.php?title=".$baslikid."'>".$baslikadi."</a>
</h2></div>



 ";
 		$statement = "duyurular WHERE baslikid='".$baslikid."' AND aktif = '1'";

        $duyuruBul = mysqli_query($baglan, "SELECT * FROM {$statement} LIMIT {$startpoint} , {$limit}");
        while($duyuruGoster = mysqli_fetch_array($duyuruBul)){
		$as  = str_replace(" "," &nbsp;", $duyuruGoster["duyuru"]);
		
$as  = otomatik_url ($as);
		$ax = str_replace("</br &nbsp;>","</br>", $as);
		$ax = str_replace("<br &nbsp;>","<br>",$ax);
		$ax = str_replace("<br &nbsp;/>","<br>",$ax);
            echo  '<li>   '.$ax.'  </li> <br><div style="text-align:right; color:red;">'.$duyuruGoster["time"].'</div>
<br>' ;
         }
}
	}
	
		echo pagination($statement,$limit,$page,$idsi);

?>
      <div id="content">
     
        <p>
         
<form action="javascript:ekle();" method="post">
          <p>
            <textarea name="target" rows="4" id="target"  placeholder="Yorum Gönderin"></textarea>
            <input type="hidden" id="baslikid" value="<?=$id;?>" name="baslikid">
            
          </p>
      <button class="action redbtn"><span class="label">Gönderr</span></button>
      
          
</form>   
        <div id="sonuc">

        </div>
</div>



</div> 

</body>

</html>