<?php

$servername = "localhost";
$username = "cynthia";
$password = "ls1948";
$database= "hsregistrations";

//establishing connection with sql database
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn)
{
	die("Connection failed: ".mysqli_connect_error());
}
echo "Connected successfully<br>";

//Sample variables -- to be replaced with actual credentials
$parent_username = "250007";
$parent_password = "2/6/2015";


//SQL queries
$id_sql = "SELECT child_id FROM hs_reg_base WHERE child_id = '$parent_username'";
$birthday_sql = "SELECT child_birthday FROM hs_reg_base WHERE child_birthday = '$parent_password'";

//query results
$id_result = mysqli_query($conn, $id_sql);
$birthday_result = mysqli_query($conn, $birthday_sql);

//checks that there is an unique value for username & password
if ((mysqli_num_rows($id_result) == 1) && (mysqli_num_rows($birthday_result) == 1))
{
	echo "Username: ".$parent_username."<br>";
	echo "Password: ".$parent_password."<br>";
	echo "Correct username & password!<br>";	
}
else
{
	echo "Not in database";
}

mysqli_close($conn);

?>
