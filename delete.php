<?php
$con = new mysqli("localhost", "root", "", "productdb");

if($con->connect_error){
    die("Error: ".$con->connect_error);
}

$id = $_GET['P_ID'];

$qry = "DELETE FROM products WHERE P_ID=$id";

if($con->query($qry)){
    echo "Deleted Successfully <br>";
}else{
    echo "Not Deleted";
}

echo "<a href='display.php'>Back</a>";

$con->close();
?>