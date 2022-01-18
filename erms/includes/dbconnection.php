<?php
$db_host = "localhost"
$db_port = "3306"
$db_user = "root"
$db_password = "supersecret"
$db_name = "ermsdb"

$con = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if(mysqli_connect_errno()){
  echo "Connection Fail".mysqli_connect_error();
}

?>
