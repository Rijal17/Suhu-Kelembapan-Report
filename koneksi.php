<?php


$servernya="localhost";	//Nama Servernya dimasukkin kesini
$user="root"; 		//Nama user MySQL
$auth_pass="";	//Password MySQL
$dbnya="suhu";		//NamaDB nya



$konek = new mysqli($servernya,$user,$auth_pass,$dbnya);
//mysql_select_db($dbnya);
?>