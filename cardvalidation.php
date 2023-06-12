<?php
	session_start();
	echo $_SESSION["Total"];
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$flag=1;
		if(preg_match('/[0-9]{4}/',$_POST["C1"])){
			$_SESSION["C1"]=$_POST["C1"];
		}
		else{
			$flag=0;
		}
		if(preg_match('/[0-9]{4}/',$_POST["C2"])){
			$_SESSION["C2"]=$_POST["C2"];
		}
		else{
			$flag=0;
		}
		if(preg_match('/[0-9]{4}/',$_POST["C3"])){
			$_SESSION["C3"]=$_POST["C3"];
		}
		else{
			$flag=0;
		}
		if(preg_match('/[0-9]{4}/',$_POST["C4"])){
			$_SESSION["C4"]=$_POST["C4"];
		}
		else{
			$flag=0;
		}
		if(preg_match('/[0-9]{3}/',$_POST["CVV"])){
			$_SESSION["CVV"]=$_POST["CVV"];
		}
		else{
			$flag=0;
		}
		if($flag===1){
			header("location: thankyou.php");
		}
		else{
			echo '<script>alert("Incorrect entry.Please try again")</script>';
		}
	}
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="car.css">
	<title>Checkout</title>
</head>

<body>
	<form action="cardvalidation.php" method="POST" align="center">
	Enter your card number : <input type="text" name="C1" size="4" maxlength="4"><input type="text" name="C2" size="4" maxlength="4"><input type="text" name="C3" size="4" maxlength="4"><input type="text" size="4" name="C4" maxlength="4">
		<br>
		<br>
	Enter CVV : <input type="text" name="CVV" size="3" maxlength="3">
		<br>
		<br>
		<input type="submit" class="but" value="Confirm Purchase" style="width:150px;">
	</form>
</body>
</html>