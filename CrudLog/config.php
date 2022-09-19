<?php
$hostname = "localhost";
$username = "CrudLog";
$password = "ZalZip18";
$dbname = "cruddata";
$conn = mysqli_connect($hostname,$username,$password,$dbname);
if($conn){
	//echo "Database connection ".mysqli_connect_error();
}
?>