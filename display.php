<?php
$conn = new mysqli("localhost", "root", "", "productdb");

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$qry = "SELECT * FROM products";
$result = $conn->query($qry);
?>

<!DOCTYPE html>
<html>
<head>
<title>Display Products</title>
</head>
<body>

<h2>Product List</h2>
<a href="product.html">Add New Product</a><br><br>

<table border="1" cellpadding="10">
<tr>
<th>ID</th>
<th>Name</th>
<th>Brand</th>
<th>Price</th>
<th>Quantity</th>
<th>Action</th>
</tr>

<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$row["P_ID"]."</td>
        <td>".$row["Name"]."</td>
        <td>".$row["brand"]."</td>
        <td>".$row["Price"]."</td>
        <td>".$row["Quantity"]."</td>
        <td>
        <a href='updateForm.php?P_ID=".$row["P_ID"]."'>Edit</a> |
        <a href='delete.php?P_ID=".$row["P_ID"]."'>Delete</a>
        </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No Data Found</td></tr>";
}
$conn->close();
?>

</table>

</body>
</html>