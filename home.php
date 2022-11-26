
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>User info tenik</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">


  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

 
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

 
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<main id="main">	
		

		<div id="responsecontainer">
		</div>	
<marquee  scrollamount="2" direction="left" width="100%" height="100" align="center" class="style4">
<div id="responsecontaine">
		</div>
</marquee>
	</body>
	</main>
	
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  
		<script src="jquery-latest.js"></script> 
		<script>
		$(document).ready(function(){
		 $('#responsecontainer').load('suhu.php');
		 $('#responsecontaine').load('waktu.php');
		var refreshId = setInterval(function()
		{
			 $('#responsecontainer').load('suhu.php');
		}, 1000);
		var refreshId = setInterval(function()
		{
			 $('#responsecontaine').load('waktu.php');
		}, 12000);
		});
		</script>
</html>