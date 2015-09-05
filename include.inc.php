<?php



//Funktion för att koppla upp sig till databasen



function db_connect() {

   $host     = "red4media.com"; 

    $user     = "redmedia_klaslof"; 

    $password = "eternal22"; 

    $database = "redmedia_klaslofstedt_se"; 

    $link_id = @mysql_connect($host, $user, $password);
    if(!$link_id){
    	die('MySql_error' . mysql_error());
    }
    echo "hej";
    @mysql_select_db($database) or die("Error: There was a problem with the database!");

    return $link_id;

}

?>
