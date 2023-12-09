<?php

$servername = "localhost";
$username ="fgarcia8";
$password ="fgarcia8";
$dbname = "fgarcia8";
	
$mysqli = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($mysqli -> connect_error) {
    die ("Failed to connect to MySQL: " . $mysqli -> connect_error);
 
}else{
	echo "Connection established";
}
?>