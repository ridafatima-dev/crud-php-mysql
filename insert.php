<?php
$con = new mysqli('localhost', 'root', '', 'productdb');

if($con->connect_error){
    die("Connection Error: ".$con->connect_error);
}

$Name = $_POST['Name'];
$brand = $_POST['brand'];
$Price = $_POST['Price'];
$Quantity = $_POST['Quantity'];

$qry = "INSERT INTO products(Name, brand, Price, Quantity)
VALUES ('$Name', '$brand', '$Price', '$Quantity')";

$res = $con->query($qry);

if($res){
    echo "Data Inserted Successfully <br>";
    echo "<a href='display.php'>View Data</a>";
}else{
    echo "Not Inserted";
}

$con->close();
?>