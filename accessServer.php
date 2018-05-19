//connecting to database

<?php
$serverName = "serverName//sqlexpress";
$connectionInfo = array( "Database"=>"dbName". "UID"=>"username","PWD"=>"password"); //information to be replaced with the actual username and password for server
$conn = sqlsrv_connect($serverName, $connectionInfo);

if ($conn){
	echo "Connection established.<br />";
	}else{
	echo "Connection could not be established.<br />";
	die( print_r( sqlsrv_errors(), true));
	}
?>