<html>
<head>
<link rel="stylesheet" type="text/css" href="car.css">
	<title>Thank you</title>
</head>
<body>
	<h2 align="center">Bill Details</h4>
	<br>
	<?php
		session_start();
		$servername="localhost";
		$username="shivani";
		$password="shivani63";
		$dbname="login";
		$conn=new mysqli($servername, $username, $password, $dbname);
		$sql="SELECT * from cart";
		$result=$conn->query($sql);
		echo '<table class="cart" cellspacing="70px" margin="20px" style="font-size:15px;font-family: Arial, Verdana, sans-serif;">';
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
		echo '<h4 align="center" style="font-size:15px;font-family: Arial, Verdana, sans-serif;">The Bill Amount is '.$grand.' Rupees</h4>';
		if(isset($_SESSION["logged"])){
			if($_SESSION["logged"]=='T'){
				echo '<p style="font-size:15px;font-family: Arial, Verdana, sans-serif;">You are receiving an additional discount of 15%</p>';
				$_SESSION["Total"]=(int)$_SESSION["Total"]*85/100;
			}
		}
		if(isset($_SESSION["Shipping"])){
			if($_SESSION["Shipping"]=="Fast"){
				echo '<p style="font-size:15px;font-family: Arial, Verdana, sans-serif;">An additional charge of Rs 150 is added for fast delivery</p>';
				$_SESSION["Total"]=(int)$_SESSION["Total"]+150;
			}
		}
		echo '<p align="center" style="font-size:15px;font-family: Arial, Verdana, sans-serif;">The final amount is '.$_SESSION["Total"].'</p>';
		if($_SESSION["Shipping"]=="Fast")
			$time="24 hours.";
		else
			$time="3-5 days.";
		echo '<p align="center" style="font-size:15px;font-family: Arial, Verdana, sans-serif;">Your order will arrive within '.$time.' </p>';
	?>
	<h2>Thank you for using bon-appetit.com</h2>
</body>
</html>