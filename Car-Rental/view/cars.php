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
    <title>Cars</title>
</head>
<body>
    <h1></h1>
    <center>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Type</th>
            <th>Model</th>

        </tr>
        <?php while ($r = mysqli_fetch_assoc($res)) { ?>
            <tr>
                <td><?php echo htmlspecialchars($r['ID']); ?></td>
                <td><?php echo htmlspecialchars($r['Name']); ?></td>
                <td><?php echo htmlspecialchars($r['Type']); ?></td>
                <td><?php echo htmlspecialchars($r['Model']); ?></td>
             
            </tr>
        <?php } ?>
    </table>
</center>
  

    <form action="../Controller/carController.php" method="POST">
        
    </form>
</body>
</html>
