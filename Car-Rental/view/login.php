<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>

	<title>Log</title>
</head>
<body>
	<h1>Login page</h1>
    
    <form method="post" action="../Controller/loginController.php">    
    	ID: <input type="text" name="id"><br>
       pass: <input type="password" name="password"><br>
       <?php
       if(isset( $_SESSION['error'])) 
       {
       	echo $_SESSION['error']; 
       	unset($_SESSION['error']);
       }
       ?>
        <button>Login</button>
   </form>

</body>
</html>