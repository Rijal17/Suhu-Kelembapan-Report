<?php
include("koneksi.php"); 
$suhu = mysqli_query($konek,"select * from t_info order by waktu DESC");
$pamer2 = mysqli_fetch_array($suhu);
echo "Waktu ". $pamer2['waktu'] 
?>