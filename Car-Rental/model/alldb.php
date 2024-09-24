<?php
require_once('db.php');
function auth($id,$pass)
{
	$con=getConnection();
	$sql="select * from admin where ID='$id' and password='$pass'";
	$res=mysqli_query($con,$sql);
	return $res;
}


function getAllCars()
{
	$con=getConnection();
	$sql="select * from cars";
	$res=mysqli_query($con,$sql);
	$cars = [];
    if($result) {
        while($row= mysqli_fetch_assoc($result)){
            $cars[] =$row; 
        }
    }
    mysqli_close($con);
    return $cars;
}


function edit($id, $name, $type, $model)
{
    $con=getConnection();
    $sql = "UPDATE cars SET Name='$name', Type='$type', Model='$model', Year='$year' WHERE ID='$id'";
    
   
	$res=mysqli_query($con,$sql);
	return $res ;

  
}


function delete($id)
{
	$con=getConnection();
	$sql="Delete from cars where ID='$id'";
	$res=mysqli_query($con,$sql);
	return $res ;
}




?>