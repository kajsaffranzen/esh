
<!--
	Lens by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
<<<<<<< HEAD
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
		
		echo $Value;
		echo $Counter;
=======
	
	// if($_SESSION['inloggad']==false || $_SESSION['user']=="")	{		
	// 	header("Location: index.html");	}	
	// include('include.inc.php');
	// db_connect(); 
	

	// $query_module = mysql_query("SELECT * FROM Modules WHERE User='Linkoping' ORDER BY Module DESC "); 
						
	// $i=0;
	// while($row = mysql_fetch_array($query_module)) 
	// {
 //          $i++;
	// 	$Module = $row['Module'];
	// 	$Value = $row['Value'];
	// 	$Counter = $row['Counter'];
	// 	echo $Module;
	// 	echo $Value;
	// 	echo $Counter;
>>>>>>> ca6cde15aaf83cf6de9c7c659eef1d4bdbd92a70

	// }
	
?>
<html>
	<head>
		<title>Lens by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="extended.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![enlldif]-->
		
		<script src="js/getData.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-loading-0 is-loading-1 is-loading-2">

		<script>
			getArea();
			getWeather();
		</script>

		<!-- Main -->
			<div id="main">

				<!-- Header -->
					<header id="header">
						<h1>Lens</h1>
						<p>Just another fine responsive site template by <a href="http://html5up.net">HTML5 UP</a></p>
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
							<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
					</header>

				<!-- Thumbnail -->
					<section id="thumbnails">
						<article>
							<a class="thumbnail" href="images/Kartor/fridhem1.png" data-position="left center"><img src="images/Kartor/fridhem1.1.png" alt="" /></a>
						</article>
						<article>
							<a class="thumbnail" href="images/kartor/fridhem1.1.png"></a>
							<div class="infoText">
								<h2>Vivamus convallis libero</h2>
								<p>Sed velit lacus, laoreet at venenatis convallis in lorem tincidunt.</p>
							</div>
						</article>
						<article>
							<a class="thumbnail" href="images/kartor/tradgard1.png" data-position="top center"><img src="images/kartor/tradgard1.png" alt="" /></a>
				
						</article>
						<article>
							<a class="thumbnail" href="images/kartor/tradgard2.png"></a>
							
							<div class="infoText">
								<h2>Vivamus convallis libero</h2>
								<p>Sed velit lacus, laoreet at venenatis convallis in lorem tincidunt.</p>
							</div>
						</article>
						<article>
							<a class="thumbnail" href="images/fulls/05.jpg" data-position="top center"><img src="images/thumbs/05.jpg" alt="" /></a>
							
						</article>
						<article>
							<a class="thumbnail" href="images/fulls/06.jpg"><img src="images/thumbs/06.jpg" alt="" /></a>
							<div class="infoText">
								<h2>Vivamus convallis libero</h2>
								<p>Sed velit lacus, laoreet at venenatis convallis in lorem tincidunt.</p>
							</div>
						</article>
						<article>
							<a class="thumbnail" href="images/fulls/07.jpg"><img src="images/thumbs/07.jpg" alt="" /></a>
							
						</article>
						<article>
							<a class="thumbnail" href="images/fulls/08.jpg"><img src="images/thumbs/08.jpg" alt="" /></a>
							<div class="infoText">
								<h2>Vivamus convallis libero</h2>
								<p>Sed velit lacus, laoreet at venenatis convallis in lorem tincidunt.</p>
							</div>
						</article>
					</section> 

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; Untitled.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>

</html>