<style>
    .aaaaaaa {
	color: #F00;
	text-transform: capitalize; 

  

}
 
li{
	list-style: none;	
}

#wrapper{
	margin: 0px auto;
	text-align: left;
	width: 960px;
}

#paging_container1{
	height: 320px;	
}

#paging_container2{
	height: 356px;	
}

#paging_container3{
	height: 190px;
}

#paging_container4{
	height: 307px;	
	
}

#paging_container8 .no_more{
    background-color: white;
    color: gray;
    cursor: ult;
}

.ellipse{
	float: left;
}

.container{
	width: 220px;

	margin: 10px 5px 5px;
	padding: 0px;

}

.page_navigation , .alt_page_navigation{
	padding-bottom: 10px;
}

.page_navigation a, .alt_page_navigation a{
	padding:3px 5px;
	margin:2px;
	color:white;
	text-decoration:none;
	float: left;
	font-family: Tahoma;
	font-size: 12px;
	background-color:#DB5C04;
}
.active_page{
	background-color:white !important;
	color:black !important;
}	

.content, .alt_content{
	color: black;
}

.content li, .alt_content li, .content > p{
	padding: 5px
}
</style>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.pajinate.js"></script>
        <script type="text/javascript">
			
			$(document).ready(function(){
				$('#paging_container1').pajinate({
					items_per_page : 30,
					
				});
			});	
			
		
		</script>
   

        	<div id="paging_container1" class="container">
			
				<div class="page_navigation"></div>
				<ul class="content">
                
<?php
include('baglan.php');
$sorgu = mysqli_query($baglan, "select * from basliklar  where aktif = '1' order by time DESC ");

while($isim = mysqli_fetch_assoc($sorgu))

{
echo'<li><a href="index.php?title='.$isim['id'].'"><span class="aaaaaaa">'.$isim['baslik'].'</span></a></li>';
}
?>

				

</ul>	<div class="page_navigation"></div>
			</div>