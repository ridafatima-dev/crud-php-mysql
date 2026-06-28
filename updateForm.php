<?php
$con = new mysqli("localhost", "root", "", "productdb");

$id = $_GET['P_ID'];

$qry = "SELECT * FROM products WHERE P_ID=$id";
$res = $con->query($qry);
$row = $res->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<body>

<h2>Update Product</h2>

<form action="update.php" method="post">

<input type="hidden" name="P_ID" value="<?php echo $row['P_ID']; ?>">

Name:
<input type="text" name="Name" value="<?php echo $row['Name']; ?>"><br><br>

Brand:
<input type="text" name="brand" value="<?php echo $row['brand']; ?>"><br><br>

Price:
<input type="number" name="Price" value="<?php echo $row['Price']; ?>"><br><br>

Quantity:
<input type="number" name="Quantity" value="<?php echo $row['Quantity']; ?>"><br><br>

<input type="submit" value="Update">

</form>

</body>
</html>