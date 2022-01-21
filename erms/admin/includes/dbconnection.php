<?php

getenv('MYSQL_DBHOST') ? $db_host=getenv('MYSQL_DBHOST') : $db_host="localhost";
getenv('MYSQL_DBPORT') ? $db_port=getenv('MYSQL_DBPORT') : $db_port="3306";
getenv('MYSQL_DBUSER') ? $db_user=getenv('MYSQL_DBUSER') : $db_user="root";
getenv('MYSQL_DBPASS') ? $db_pass=getenv('MYSQL_DBPASS') : $db_pass="";
getenv('MYSQL_DBNAME') ? $db_name=getenv('MYSQL_DBNAME') : $db_name="";

if (strlen( $db_name ) === 0)
{
  $con = new mysqli("$db_host:$db_port", $db_user, $db_pass);
}
else 
{
  $con = new mysqli("$db_host:$db_port", $db_user, $db_pass, $db_name);
}

// Check connection
if ($con->connect_error) 
	die("Connection failed: " . $con->connect_error);
 
if (!($result=mysqli_query($con,'SHOW DATABASES')))
    printf("Error: %s\n", mysqli_error($con));
?>