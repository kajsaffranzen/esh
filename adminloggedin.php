<?php	/*session för att kolla att  man bara kan komma åt sidan då man är inloggad*/		
session_start();	
	
	if($_SESSION['inloggad']==false || $_SESSION['user']=="")	{		
		header("Location: admin.php");	}	
		include('include.inc.php');
			db_connect(); 
			?><!DOCTYPE html>
<html lang="utf-8">  
<head>	

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>	
	<link rel="stylesheet" type="text/css" media="screen" href="3CantStyle.css" />	
	<link rel="shortcut icon" href="favicon.ico" />    
	<title>St-george - Inloggad</title>	
	<!--[if IE]> <script src="http:/*html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	 <!--[if lte IE 7]> <script src="js/IE8.js" type="text/javascript"></script><![endif]--> <!--[if lt IE 7]>  
	 <link rel="stylesheet" type="text/css" media="all" href="css/ie6.css"/><![endif]-->  
	</head><body>	

	<h3> Skriv en Nyhet 
	</h3><form action = "" method = "Post" id = "newsform" enctype="multipart/form-data"><ul>	
	<li><input type="text" name= "Headline" value="Headline" /></li>	
	<li><textarea name = "Entry" cols ="50" rows = "10"></textarea></li>	
	<li><label for="file">Lägg till en bild:</label><input type="file" name="file" id="file"></li>	
	<li><input id="publiceraKnapp" type="submit" name="publiceraNyhet" value="Publicera!"/></li> </ul></form><?php		

	if(isset($_POST['publiceraNyhet']))	{		
		date_default_timezone_set('Europe/Stockholm');		
		$Headline = htmlspecialchars(mysql_real_escape_string($_POST['Headline']));		
		$Entry = htmlspecialchars(mysql_real_escape_string(($_POST['Entry'])));		
		$User = $username['User'];		$Date =  date(YmdHis);		
		/*kod för att ladda upp en fil, hämtad från w3schools*/		
		if($_FILES["file"]["name"])		{			
			$allowedExts = array("jpg", "jpeg", "gif", "png");			
			$extension = end(explode(".", $_FILES["file"]["name"]));			
			$picPath = "images/news/".$_FILES["file"]["name"];			
			/*echo $picPath;*/			
			if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg")	|| ($_FILES["file"]["type"] == "image/png")	|| ($_FILES["file"]["type"] == "image/pjpeg"))				&& ($_FILES["file"]["size"] < 2000000)&& in_array($extension, $allowedExts))			  {			  
				if ($_FILES["file"]["error"] > 0)			    {			    
					echo "Return Code: " . $_FILES["file"]["error"] . "<br>";			    }			  	

				else			    {				    				    
					if (file_exists("/news/" . $_FILES["file"]["name"]))				    {				    	
						echo $_FILES["file"]["name"] . " finns redan! ";				    }				   

					 else				    {					    					    
					 	if((strlen($Headline) > 80) || (strlen($Headline) == 0))						{							
					 		echo "<p> Rubriken måste vara mellan 1 och 80 bokstäver! </p>";							
					 	}						

					 	elseif((strlen($Entry) > 1500) || (strlen($Entry) == 0) || ($Entry == "Skriv nåt fint..."))						
					 	{							echo "<p> Inlägget måste vara mellan 1 och 1500 bokstäver! </p>";						
						}						
						else						{											
							mysql_query("INSERT INTO News (Headline, Date, Entry, Url) VALUES ('$Headline', '$Date', '$Entry', '$picPath')");														
							move_uploaded_file($_FILES["file"]["tmp_name"], "images/news/" . $_FILES["file"]["name"]);							
							echo "<p> Nyhetsinlägget sparat med bild! </p>";						    									
						}				    
					}			    
				}			  
			}			
			else			{				
				echo "Filen är felaktig, försök med en annan!";			
			}		
		}		
		else		
			{						
				if((strlen($Headline) > 80) || (strlen($Headline) == 0))			
					{				
						echo "<p> Rubriken måste vara mellan 1 och 80 bokstäver! </p>";				
					}			elseif((strlen($Entry) > 1500) || (strlen($Entry) == 0) || ($Entry == "Skriv nåt fint..."))			
					{				echo "<p> Inlägget måste vara mellan 1 och 1500 bokstäver! </p>";			}			
					else			{								
						mysql_query("INSERT INTO News (Headline, Date, Entry, Url) VALUES ('$Headline', '$Date', '$Entry', 'noPic')");				
						echo "<p> Nyhetsinlägget sparat utan bild! </p>";						
					}		
				}	
			}?></div></div></body></html>