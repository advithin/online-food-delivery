<?php
	session_start();
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		if(isset($_POST["Payment"])){
			$_SESSION["Payment"]=$_POST["Payment"];
			header("location: checkout2.php");
		}
		else
			echo '<script>alert("Please choose a method of payment")</script>';
	}
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="car.css">
	<title>Cart</title>
	<link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Slab|Pacifico" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Josefin+Slab|Pacifico" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Josefin+Slab|Open+Sans|Pacifico" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Josefin+Slab|Open+Sans|Open+Sans+Condensed:300|Pacifico" rel="stylesheet">
	
</head>

<body>
	<h4 style="font-family: 'Pacifico', cursive;text-align:center;font-size:40px;text-color:white;">Checkout</h4>
	<br>
	<?php
		$servername="localhost";
		$username="shivani";
		$password="shivani63";
		$dbname="login";
		$conn=new mysqli($servername, $username, $password, $dbname);
		$sql="SELECT * from cart";
		$result=$conn->query($sql);
		echo '<table class="cart" cellspacing="70px" margin="20px" style="font-size:20px;font-family: Arial, Verdana, sans-serif;">';
		echo '<tr>';
		echo '<td><strong>Name</strong></td>';
		echo '<td><strong>Type</strong></td>';
	
		echo '<td><strong>Quantity</strong></td>';
		echo '<td><strong>Price</strong></td>';
		echo '<td><strong>Total</strong></td>';
		echo '</tr>';
		$grand=0;
		while($row=$result->fetch_assoc()){
			echo '<tr>';
			echo '<td>'.$row["Name"].'</td>';
			echo '<td>'.$row["Kind"].'</td>';
	
			echo '<td>'.$row["Quantity"].'</td>';
			echo '<td>'.$row["Price"].'</td>';
			$res=(int)$row["Quantity"]*(int)$row["Price"];
			$grand+=$res;
			echo '<td>'.$res.'</td>';
			echo '</tr>';
		}
		echo '</table>';
		echo '<h4 align="center" style="font-size:20px;font-family: Arial, Verdana, sans-serif;">Grand Total is '.$grand.' Rupees</h4>';
		$_SESSION["Total"]=$grand;
	?>
	<br>

	<div class="bill" align="center">
		<p style="font-family: 'Open Sans Condensed', sans-serif;font-size:30px;">Payment Method:</p>
		<form action="checkout.php" method="POST" style="font-family: 'Open Sans Condensed', sans-serif;font-size:30px;">
			<input type="radio" name="Payment" value="Credit Card">Credit Card
			<br>
			<input type="radio" name="Payment" value="Cash on delivery">Cash on Delivery
			<br>
			<input class="but" type="submit" name="Submit" value="Next">
		</form>
	</div>
</body>
</html>
