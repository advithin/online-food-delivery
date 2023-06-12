<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Slab|Pacifico" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Josefin+Slab|Pacifico" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Josefin+Slab|Open+Sans|Pacifico" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Josefin+Slab|Open+Sans|Open+Sans+Condensed:300|Pacifico" rel="stylesheet">
	
	<title>Cart</title>

<link rel="stylesheet" type="text/css" href="car.css">	
</head>

<body>
	<h4 style="font-family: 'Pacifico', cursive;text-align:center;font-size:40px;">Shopping Cart</h4>
	<br>
</body>
</html>



<?php
	$servername="localhost";
	$username="shivani";
	$password="shivani63";
	$dbname="login";
	$conn=new mysqli($servername, $username, $password, $dbname);
	$sql="SELECT * from cart";
	$result=$conn->query($sql);
	echo '<table class="cart" cellspacing="70px" margin="20px" style="font-size:25px;font-family: Arial, Verdana, sans-serif;">';
	echo '<tr>';
	echo '<td><strong>Name</strong></td>';
	echo '<td><strong>Type</strong></td>';
	echo '<td><strong>Product</strong></td>';

	echo '<td><strong>Quantity</strong></td>';
	echo '<td><strong>Price</strong></td>';
	echo '</tr>';
	while($row=$result->fetch_assoc()){
		echo '<tr>';
		echo '<td>'.$row["Name"].'</td>';
		echo '<td>'.$row["Kind"].'</td>';
		echo '<td><img class="imgcart" src='.$row["Image"].' alt="Image unavailable"></td>';
		
		echo '<td>'.$row["Quantity"].'</td>';
		echo '<td>'.$row["Price"].'</td>';
		echo '</tr>';
	}
	echo '</table>';
	echo '<a href="checkout.php">Proceed to Checkout</a>';
?>