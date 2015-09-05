<?php    	
include('include.inc.php');	
db_connect(); 		

session_start();	
$User = htmlspecialchars(mysql_real_escape_string($_POST['User']));	
$password = htmlspecialchars(mysql_real_escape_string($_POST['password']));	


/* Hit kommer man när man försöker logga in. Här kollar vi så att man har skrivit in både lösenord och användarnamn.	
 Har man det så gör vi en slq_query med dom och kollar om man får något resultat tillbaka.	
  Får vi det så startar vi två session och skickar användaren vidare till loggedin sidan. */		
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