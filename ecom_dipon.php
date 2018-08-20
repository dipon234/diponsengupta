<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php

$name = $price = $category = $quantity = $purchase date = $expiry date = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $price = test_input($_POST["pricel"]);
  $category = test_input($_POST["category"]);
  $quantity = test_input($_POST["quantity"]);
  $purchasedate = test_input($_POST["purchase date"]);
  $expiry date = test_input($_POST["expiry date"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1>E-Commerce</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  Price: <input type="text" name="price">
  <br><br>
  Category:
  <input type="radio" name="category" value="Electronics">Electronics
  <input type="radio" name="category" value="books">Books
  <input type="radio" name="category" value="Clothing">Clothing
  <input type="radio" name="category" value="others">Others
  <br><br>
 Quantity : <input type="number" name="quantity">
 Purchase Date : <input type="date" name="purchase date">
 Expiry Date : <input type="date" name="expiry date">
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $price;
echo "<br>";
echo $category;
echo "<br>";
echo $quantity;
echo "<br>";
echo $purchase date;
echo "<br>";
echo $expiry date;
?>

</body>
</html>