<?php
$conn = new mysqli("localhost", "root", "", "productdb");

$id = $_POST['P_ID'];
$Name = $_POST['Name'];
$brand = $_POST['brand'];
$Price = $_POST['Price'];
$Quantity = $_POST['Quantity'];

$qry = "UPDATE products SET 
Name='$Name',
brand='$brand',
Price='$Price',
Quantity='$Quantity'
WHERE P_ID=$id";

if($conn->query($qry)){
    echo "Updated Successfully <br>";
}else{
    echo "Error";
}

echo "<a href='display.php'>Back</a>";

$conn->close();
?>