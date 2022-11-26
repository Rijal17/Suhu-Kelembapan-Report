<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>adem/panas</title>
<style type="text/css">
<!--
.style2 {font-size: 18px; font-weight: bold; }
.style4 {
	font-size: 36px;
	font-weight: bold;
}
.style5 {
	font-size: 24px;
	font-weight: bold;
}
-->

</style>
</head>
<?php
include("koneksi.php"); 
$suhu = mysqli_query($konek,"select * from t_info order by waktu DESC");
$pamer2 = mysqli_fetch_array($suhu);


?>

<body>

<section id="hero" class="align-items-center">

    <div class="container">	
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
          <h1>DATALOGGER SUHU DAN KELEMBABAN INFO TENIK</h1> 
             Arduino DHT 22		  
        </div>
      </div>
     

      <div class="row icon-boxes">
	  <div class="col-lg-3">
	  </div>
        <div class="col-lg-3 " >
          <div   <?php if ($pamer2['suhu']>=27){ ?>class="icon-box bg-danger text-white"<?php } else { ?> class="icon-box bg-success text-white" <?php } ?>>           
            <h4 class="title">SUHU &nbsp;&nbsp;</h4>			 
            <h3 class="text-white"><?php echo $pamer2['suhu']?> C</h3>
          </div>
        </div>

        <div class="col-lg-3 ">
          <div  <?php if ($pamer2['kelembaban']>=60){ ?> class="icon-box bg-danger text-white" <?php } else { ?> class="icon-box bg-success text-white"<?php  } ?>>
           
            <h4 class="title">Kelembaban</h4>
            <h3 class="text-white"><?php echo $pamer2['kelembaban']?> %</h3>
          </div>
        </div>
       <div class="col-lg-3">
	  </div>
       
      </div>
    </div>
  </section><!-- End Hero -->

 

</body>
</html>
