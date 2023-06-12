<?php
	session_start();
	//echo $_SESSION["Total"];
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$flag=1;
		if(preg_match('/[a-zA-Z0-9,.]+/',$_POST["Address"])){
			$_SESSION["Address"]=$_POST["Address"];
		}
		else{
			echo '<script>alert("Enter address")</script>';
			$flag=0;
		}
		if(preg_match('/[0-9]{10}/',$_POST["Phno"])){
			$_SESSION["Phno"]=$_POST["Phno"];		
		}
		else{
			echo '<script>alert("Incorrect entry for phone number. Please try again.")</script>';
			$flag=0;
		}
		if(isset($_POST["Shipping"])){
			$_SESSION["Shipping"]=$_POST["Shipping"];
			$_SESSION["Total"]=$_SESSION["Total"]+100;
		}
		else{
			echo '<script>alert("Please choose a shipping option")</script>';
			$flag=0;
		}
		if($flag===1){
			if($_SESSION["Payment"]=="Cash on delivery")
				header("location: thankyou.php");
			else
				header("location: cardvalidation.php");
		}
	}
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="car.css">
	<title>Checkout</title>
</head>

<body class="form1">
	<form action="checkout2.php" method="POST" align="center">
		<p style="margin-bottom:5px;">Enter Your Shipping Address :</p><textarea rows="4" cols="75" name="Address">
		</textarea>
		<br>
		<br>
		Phone Number : <input type="text" name="Phno" maxlength="10">
		<br>
		<br>
		<p>Note that an additional charge of Rs. 150 will be incurred for fast delivery.Please select the option to proceed..</p>
		<!--<input type="radio" name="Shipping" value="Normal"> Normal delivery (3-5 days)
		<br> -->
		<input type="radio" name="Shipping" value="Fast"> Fast delivery (Usually within 2 hours)
		<br>
		<br>
		<input type="submit" class="but">
	</form>
</body>
</html>