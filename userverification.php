<?php    	
include('include.inc.php');	
db_connect(); 		

session_start();	
$User = htmlspecialchars(mysql_real_escape_string($_POST['User']));	
$password = htmlspecialchars(mysql_real_escape_string($_POST['password']));	


/* Hit kommer man n�r man f�rs�ker logga in. H�r kollar vi s� att man har skrivit in b�de l�senord och anv�ndarnamn.	
 Har man det s� g�r vi en slq_query med dom och kollar om man f�r n�got resultat tillbaka.	
  F�r vi det s� startar vi tv� session och skickar anv�ndaren vidare till loggedin sidan. */		
  if(!empty($password) && !empty($User))	{		
  	$result=mysql_query("SELECT * FROM Users WHERE User='$User' AND Password='$password'");	

  		
  		if(mysql_num_rows($result)==1)		{		    
  			$_SESSION['inloggad']=true;			
  			$_SESSION['user']="$User";            
  					            

  			header("Location: index.php");			    
  					
  		}		
  		else		{			
  			$_SESSION['inloggad']="nosuchuser";			


  			//header("Location: login.php");		
  		}	
  	}	
  	else	
  	{			
  		$_SESSION['inloggad']="fillAllFields";		
      
  		header("Location: login.php");	
    }?>