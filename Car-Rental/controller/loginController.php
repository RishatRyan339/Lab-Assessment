<?php
require_once('../Model/alldb.php');
session_start();
$id=$_POST['id'];
$pass=$_POST['password'];

if(empty($id || $pass))
{
   $_SESSION['error']="Please fill up the form";
   header("location:../View/login.php");
}
else
{
	$status=auth($id,$pass);
	if(mysqli_num_rows($status)==1)
	{
		header("location:../View/dashboard.php");
		$_SESSION['id']=$id;
	}
	else
	{
		$_SESSION['error']="Invalid User";
		header("location:../View/login.php");
	}
}

if(isset($_GET['logout']))
{
	unset($_SESSION['id']);
	header("location:../View/login.php");

}

?>