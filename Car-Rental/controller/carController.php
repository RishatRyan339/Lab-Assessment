<?php
session_start();
require_once('../Model/alldb.php');

if(isset($_GET['Delete']))
{
    $id=$_GET['Delete'];
    $status=delete($id);
    if($status)
    {
    $_SESSION['mes']="Deleted";
    header("location:../View/dashboard.php");
    }
}


?>