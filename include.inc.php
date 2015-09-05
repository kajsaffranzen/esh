<?php



//Funktion för att koppla upp sig till databasen



function db_connect() {

    $host     = "klaslofstedt.se.mysql"; 

    $user     = "klaslofstedt_se"; 

    $password = "AJCMpp23"; 

    $database = "klaslofstedt_se"; 

    $link_id = @mysql_connect($host, $user, $password) or die("Error: Could not contact the database server!");

    @mysql_select_db($database) or die("Error: There was a problem with the database!");

    return $link_id;

}

?>
