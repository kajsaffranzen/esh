
<!--
	Lens by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php

	session_start();	
	if($_SESSION['inloggad']==false || $_SESSION['user']=="")	{		
		header("Location: index.html");	}	
	include('include.inc.php');
	db_connect(); 
	

	$query_module = mysql_query("SELECT * FROM Modules WHERE User='Linkoping'"); 
						
	$i=0;
	while($row = mysql_fetch_array($query_module)) 
	{
          $i++;
		
		$Value = $row['Value'];
		$Counter = $row['Counter'];
		$Current = $row['Current'];
		
		


	 }
	
?>
<html>
	<head>
		<title>H2infO</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="extended.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![enlldif]-->
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
				<script src="js/getData.js"></script>
		<script src="js/calculateData.js"></script>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-loading-0 is-loading-1 is-loading-2">

		

		<!-- Main -->
			<div id="main">

				<!-- Header -->
					<header id="header">
						<h1 class="user">Linköpings Kommun</h1>
						<p>Just another fine responsive site template by <a href="http://html5up.net">HTML5 UP</a></p>
						<!-- <ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
							<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul> -->
					</header>

				<!-- Thumbnail -->
						<section id="thumbnails">
						<!-- VÄXTEN -->
						<article>
							<a class="thumbnail" href="images/kartor/vaxt1.png" data-position="left center"><img src="images/kartor/vaxt1.png" alt="" /></a>
						</article>
						<article>
							<a  id="hidden" class="thumbnail" href="images/kartor/vaxt2.png"><img id="hidden1" src="images/kartor/vaxt2.png" alt="" /></a>
							
								<img id="sensorSize1" class="sensorType" src="images/kartor/green.png" onClick="sensorResult(color);">
								<!-- <img id="sensorSize" class="sensorType2" src="images/kartor/gul.png" onClick="sensorResult(color);"> -->
								<!-- <img id="sensorSize" class="sensorType3" src="images/kartor/red.png" onClick="sensorResult(color);"> -->

							<div class ="infoText">
								<h2 type="text" id="dryDays" ></h2>
								<h2 type="text" id="rainDays"></h2>
							</div>
						</article>

						<!-- Fridhems parken -->
						<article>
							<a class="thumbnail" href="images/kartor/ulrika1.png" data-position="left center"><img src="images/kartor/ulrika1.png" alt="" /></a>
						</article>
						<article>
							<a  id="hidden" class="thumbnail" href="images/kartor/ulrika2.png"><img id="hidden1" src="images/kartor/ulrika2.png" alt="" /></a>
							
								<div class="sensorType">
									<img  src="images/kartor/green.png" onClick="sensorResult(green1);">
								</div>
								<div class="sensorType2">
									<img src="images/kartor/gul.png" onClick="sensorResult(1yellow1);">
								</div>
								
								<!-- <img class="sensorType3" src="images/kartor/red.png" onClick="sensorResult(red1);"> -->

							<div class ="infoText">
								<h2 type="text" id="dryDays">Du har tre sensorer på detta område.</h2>
								<h2 type="text" id="rainDays">Dagense väer är</h2>
							</div>
						</article>
						
						<!-- Tradgårdsföreningen -->
						<article>
							<a class="thumbnail" href="images/kartor/tradgard1.png" data-position="top center"><img src="images/kartor/tradgard1.png" alt="" /></a>
						</article>
						<article>
							<a id="hidden" class="thumbnail" href="images/kartor/tradgard2.png"><img src="images/kartor/tradgard2.png" alt="" /></a>
							<div class ="infoText">
								<h2 type="text" id="dryDays" ></h2>
								<h2 type="text" id="rainDays"></h2>
							</div>
						</article>
						<article>
							<a class="thumbnail" href="images/kartor/test1.png" data-position="top center"><img src="images/kartor/test1.png" alt="" /></a>
							
							<h2>Nullam vitae nunc vulputate</h2>
							<p>In pellentesque cursus velit id posuere. Donec vehicula nulla.</p>
						</article>
						<article>
							<a class="thumbnail" href="images/kartor/test2.png"><img src="images/kartor/test2.png" alt="" /></a>
							<h2>Phasellus magna faucibus</h2>
							<p>Nulla dignissim libero maximus tellus varius dictum ut posuere magna.</p>
						</article>
						
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; Untitled.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>

			</div>

			<script>
			//getArea();
			// getWeather();
				var color = calculateColor(<?php echo $Current?>, <?php echo $Counter?>, <?php echo $Value ?>);
				
				console.log(color);

				var green1= "green";
				var yellow1 = "yellow";
				var red1 = "red";
			

			</script>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
	

	</body>

</html>