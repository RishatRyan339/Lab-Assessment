
<?php

include '../Controller/carController.php'; 

$con = getConnection();
$sql = "SELECT * FROM cars"; 
$res = mysqli_query($con, $sql);

if (!$res) {
    die("Database query failed: " . mysqli_error($con));
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h2>Hello Admin!</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Type</th>
            <th>Model</th>
            <th>Actions</th>
        </tr>
        <?php while ($r = mysqli_fetch_assoc($res)) { ?>
            <tr>
                <td><?php echo ($r['ID']); ?></td>
                <td><?php echo ($r['Name']); ?></td>
                <td><?php echo ($r['Type']); ?></td>
                <td><?php echo ($r['Model']); ?></td>
                <td>
                    <form action="../controller/carController.php" method="POST" style="display:inline;">
                    
                        <input type="submit" value="Edit">
                    </form>
                    <form action="../controller/carController.php" method="POST" style="display:inline;">
                     
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
</center>


</body>
</html>