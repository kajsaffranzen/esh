
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
		<link rel="stylesheet" href="https://www.google.com/fonts#ChoosePlace:select/Collection:Josefin+Slab" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![enlldif]-->
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
				<script src="js/getData.js"></script>
		<script src="js/calculateData.js"></script>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-loading-0 is-loading-1 is-loading-2">

	<script>
	var green1= "green";
				var yellow1 = "yellow";
				var red1 = "red";
	</script>

		<!-- Main -->
			<div id="main">

				<!-- Header -->
					<header id="header">
						<h1 class="user">Linköpings Kommun</h1>
					</header>

				<!-- Thumbnail -->
						<section id="thumbnails">
						<!-- VÄXTEN -->
						<article>
							<a class="thumbnail" href="images/new/vaxt1.png" data-position="left center"><img src="images/new/vaxt1.png" alt="" /></a>
						</article>
						<article>
							<a  id="hidden" class="thumbnail" href="images/new/vaxt2.png"><img id="hidden1" src="images/new/vaxt2.png" alt="" /></a>
							
								<img id="sensorSize1" class="sensorType" src="images/kartor/green.png" onClick="sensorResult(color);">

							<div class ="infoText">
								<h2 type="text" id="dryDays" >Du har en sensor på detta området.</h2>
								<h2 type="text" id="rainDays">För mer information, klicka på en sensor.</h2>
							</div>
						</article>

						<!-- Fridhems parken -->
						<article>
							<a class="thumbnail" href="images/new/frid1.png" data-position="left center"><img src="images/new/frid1.png" alt="" /></a>
						</article>
						<article>
							<a  id="hidden" class="thumbnail" href="images/new/frid2.png"><img id="hidden1" src="images/new/frid2.png" alt="" /></a>
							
								<div class="sensorType">
									<img src="images/kartor/greenHEY.png" onClick="sensorResult(green1);">
								</div>
								<div class="sensorType2">
									<img src="images/kartor/gulHEY.png" onClick="sensorResult(yellow1);">
								</div>
								<div class="sensorType3">
									<img src="images/kartor/red1.png" onClick="sensorResult(red1);">
								</div>
								
								<!-- <img class="sensorType3" src="images/kartor/red.png" onClick="sensorResult(red1);"> -->

							<div class ="infoText">
								<h2 type="text" id="dryDays" >Du har tre sensor på detta området.</h2>
								<h2 type="text" id="rainDays">För mer information, klicka på en sensor.</h2>
							</div>
						</article>
						
						<!-- Tradgårdsföreningen -->
						<article>
							<a class="thumbnail" href="images/new/berg1.png" data-position="top center"><img src="images/new/berg1.png" alt="" /></a>
						</article>
						<article>
							<a id="hidden" class="thumbnail" href="images/new/berg2.png"><img src="images/new/berg2.png" alt="" /></a>
							<div class ="infoText">
								<h2 type="text" id="dryDays1" >Du har två sensor på detta området.</h2>
								<h2 type="text" id="rainDays1">För mer information, klicka på en sensor.</h2>
							</div>
						</article>

						<article>
							<a class="thumbnail" href="images/new/orta1.png" data-position="top center"><img src="images/new/orta1.png" alt="" /></a>
							
						</article>
						<article>
							<a id="hidden" class="thumbnail" href="images/new/orta2.png"><img src="images/new/orta2.png" alt="" /></a>
							<div class ="infoText">
								<h2 type="text" id="dryDays1" >Du har en sensor på detta området.</h2>
								<h2 type="text" id="rainDays1">För mer information, klicka på en sensor.</h2>
							</div>
						</article>

						<article>
							<a class="thumbnail" href="images/new/valla1.png" data-position="top center"><img src="images/new/valla1.png" alt="" /></a>
						</article>
						<article>
							<a id="hidden" class="thumbnail" href="images/new/valla2.png"><img src="images/new/valla2.png" alt="" /></a>
							<div class ="infoText">
								<h2 type="text" id="dryDays1" >Du har två sensor på detta området.</h2>
								<h2 type="text" id="rainDays1">För mer information, klicka på en sensor.</h2>
							</div>
						</article>
						<article>
							<a class="thumbnail" href="images/new/ulrika1.png" data-position="top center"><img src="images/new/ulrika1.png" alt="" /></a>
							
						</article>
						<article>
							<a id="hidden" class="thumbnail" href="images/new/ulrika2.png"><img src="images/new/ulrika2.png" alt="" /></a>
							<div class ="infoText">
								<h2 type="text" id="dryDays1" >Du har tre sensor på detta området.</h2>
								<h2 type="text" id="rainDays1">För mer information, klicka på en sensor.</h2>
							</div>
						</article>
						<article>

						<article>
							<a class="thumbnail" href="images/new/trad1.png" data-position="top center"><img src="images/new/trad1.png" alt="" /></a>
							
						</article>
						<article>
							<a id="hidden" class="thumbnail" href="images/new/trad2.png"><img src="images/new/trad2.png" alt="" /></a>
							<div class ="infoText">
								<h2 type="text" id="dryDays1" >Du har en sensor på detta området.</h2>
								<h2 type="text" id="rainDays1">För mer information, klicka på en sensor.</h2>
							</div>
						</article>
						<article>
						
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; Untitled.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>

			</div>

			<script>

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