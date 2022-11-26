<?php
	include("koneksi.php");
	$temp	= $_GET["temperature"];
	$hum	= $_GET["humidity"];	
	
	$query	= "INSERT INTO t_info (suhu, kelembaban, waktu) VALUES ('$temp','$hum',now())"; 
	
   	mysqli_query($konek,$query); 

?>
 