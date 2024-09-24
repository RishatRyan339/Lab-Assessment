<?php 

function getConnection()
{
	$serverName="localhost";
	$userName="root";
	$password="";
	$dbname="car_rental";
	$conn=new mysqli($serverName,$userName,$password,$dbname);
	return $conn;
}

?>