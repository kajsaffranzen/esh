<?php

	//session för att kolla att  man bara kan komma åt sidan då man är inloggad

	session_start();
	
	if($_SESSION['inloggad']==true && $_SESSION['user']!="")
	{
		header("Location: index.php");
	}
?>


<!DOCTYPE html>
<html lang="utf-8">

  <head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>

  </head>
<body>



	<h2> Logga in! </h2>




<form action="userverification.php" method="post" >
	<p>
	<label> Användarnamn <input type="text" name="User" value="" /> </label> 
	<label> Lösenord <input type="password" name="password" value="" /> </label>
	<input type="submit" name="submit" value="Logga in!"/> 
	</p>
</form>


<?php

	// Här skriver vi ut felmedelanden som kan uppstå vid inloggning. 

	if($_SESSION['inloggad']=="nosuchuser")
	{
			echo "<p> Fel användarnamn eller lösenord! </p>";
	}
	
	if($_SESSION['inloggad']=="fillAllFields")
	{
			echo "<p> Skriv i både användarnamn och lösenord! </p>";
	}
?>

</body>
</html>