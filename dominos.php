<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Lato|Open+Sans|Pacifico" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="dominos.css">
<title>Welcome to Dominos!</title>
</head>
<body>
<header><img src="log.png" height="400px" width="400px" /> <div class="cap" style="text-align:center;font-size:40px;font-family:cursive;">
-------<b><i>Yummy pizza delivered fast & fresh</i></b>------</div>
<pre><a href="cart.php" target="_blank"><img src="viewcartbut.jpg" alt="Error displaying" align="right" height="100px" width="200px" /></a></pre></header>
<br><br><br><br><br><br><br><br>

<!--<table>
    <tr>
        <td>
            <img src="deluxeveg.png" />
            <p style="color:white;"><br>
			<b>Deluxe Veggie</b><br><br>
		<i>Onion,Capsicum,Grilled Mushroom,Golden Corn,Paneer</i><br>
		Rs.440.00<br>
	     </p>
        </td>
       
		<td>
            <img src="cheesepepperoni.png" />
            <p style="color:white;"><br>
			<b>Cheese & Pepperoni</b><br><br>
		<i>Cheese | Pepperoni(100% Pork Pepperoni)</i><br>
		Rs.525.00<br>
	     </p>
        </td>
        
		
		<td>
            <img src="margherita.png" />
            <p style="color:white;"><br>
			<b>Margherita</b><br><br>
		<i>Cheesy Classic</i><br>
		Rs.195.00 <br>
	     </p>
        </td>
        
	</tr>
	<tr>
		
		<td><br><br>
            <img src="Peri-PeriChicken.jpg" />
            <p style="color:white;"><br>
			<b>Peri-Peri Chicken</b><br><br>
		<i>Peri-Peri Chicken| Red Paprika</i><br>
		Rs.365.00<br>
	     </p>
        </td>
		<td><br><br>
            <img src="mexgreen.png" />
            <p style="color:white;"><br>
			<b>Mexican Green Wave</b><br><br>
		<i>Onion|Crisp Capsicum|Fresh Tomato|Jalapeno sprinkled with exotic Mexican herbs</i><br>
		Rs.385.00<br>
	     </p>
        </td>
		 </td>
	
		<tr> 
		<td><br><br>
            <img src="chick.jpg" />
            <p style="color:white;"><br>
			<b>Chicken Dominator</b><br><br>
		<i>Double Pepper Barbeque Chicken|Peri Peri Chicken|Chicken tikka|Grilled Chicken Rashers</i><br>
		Rs.555.00<br>
	     </p>
        </td>
		<td><br><br>
            <img src="Stuffed_garlic_Bread.png" />
            <p style="color:white;"><br>
			<b>Stuffed Garlic Breadsticks</b><br><br>
		 <i>Rs.139</i> <br>
	     </p>
        </td>
		
			<td><br><br>
            <img src="par.jpg" />
            <p style="color:white;"><br>
			<b>Chicken Parcel</b><br><br>
		 <i>Rs.39</i> <br>
	     </p>
        </td>
		</tr>
		
</table> -->


<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$servername = "localhost";
		$username = "shivani";
		$password = "shivani63";
		$dbname = "login";
		$conn=new mysqli($servername, $username, $password, $dbname);
		$id=0;
		for($i=1;$i<=100;$i++){
			if(isset($_POST["$i"])){
				$id=$i;
				break;
			}
		}
		$sql="SELECT * from food WHERE ProductID=".$id."";
		$result=$conn->query($sql);
		$row=$result->fetch_assoc();
		//var_dump($row);
		$sql1="SELECT * from cart WHERE ProductID=".$id."";
		$result1=$conn->query($sql1);
		//var_dump($result1);
		if($result1->num_rows===1){
			$row1=$result1->fetch_assoc();
			//var_dump($row1);
			$sql="DELETE from cart WHERE ProductID=".$id."";
			$result=$conn->query($sql);
			$q=(int)$row1["Quantity"]+1;
			//var_dump($result);
		/*	if(isset($_POST[$row["ProductID"]."size"])){
			$sql = "INSERT INTO Cart (ProductID, Name, Kind, Image, Price, Size, Quantity)
				VALUES (".$row["ProductID"].",\"".$row["Name"]."\", \"".$row["Kind"]."\", \"".$row["Image"]."\", \"".$row["Price"]."\", \"".$row1["Size"]." ".$_POST[$row["ProductID"]."size"]."\",".$q.")";
			}
			else{*/
				$sql = "INSERT INTO cart (ProductID, Name, Kind, Image, Price, Quantity)
					VALUES (".$row["ProductID"].",\"".$row["Name"]."\", \"".$row["Kind"]."\", \"".$row["Image"]."\", \"".$row["Price"]."\",".$q.")";
			
			$result=$conn->query($sql);
			if ($result === TRUE) {
    			echo "<script>alert(\"Item added to cart\")</script>";
			}	
			else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
		else{
			$q=1;
		/*	if(isset($_POST[$row["ProductID"]."size"])){
			$sql = "INSERT INTO Cart (ProductID, Name, Kind, Image, Price, Size, Quantity)
				VALUES (".$row["ProductID"].",\"".$row["Name"]."\", \"".$row["Kind"]."\", \"".$row["Image"]."\", \"".$row["Price"]."\", \"".$_POST[$row["ProductID"]."size"]."\",".$q.")";
			}
			else{*/
				$sql = "INSERT INTO cart (ProductID, Name, Kind, Image, Price,Quantity)
					VALUES (".$row["ProductID"].",\"".$row["Name"]."\", \"".$row["Kind"]."\", \"".$row["Image"]."\", \"".$row["Price"]."\",".$q.")";
			
			$result=$conn->query($sql);
			if ($result === TRUE) {
    			echo "<script>alert(\"Item added to cart\")</script>";
			}	
			else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
	}
?>
		
		
		
		

<?php
	echo '<table>';
	$servername = "localhost";
	$username = "shivani";
	$password = "shivani63";
	$dbname = "login";
	$conn=new mysqli($servername, $username, $password, $dbname);
	//if ($conn->connect_error) {
    //	die("Connection failed: " . $conn->connect_error);
	//} 
	//echo "Connected successfully<br>";
	$sql="SELECT * from food WHERE Kind='Dominos'";
	//var_dump($conn);
	$result=mysqli_query($conn,$sql);
	//var_dump($result);
	if($result->num_rows>0){
		$c=0;
		echo '<form action="dominos.php" method="POST">';
		while($row=$result->fetch_assoc()){
			if($c%2===0){
				if($c!==0)
					echo '</tr>';
				echo '<tr>';
			}
			if($c%4===0 || ($c-3)%4===0)
				echo '<td class="colour">';
			else
				echo '<td>';
			echo '<div>';
			echo '<img class="size" src='.$row["Image"].' alt="Image unavailable">';
			echo '<table cellspacing="10px">';
			echo '<tr><td>';
			echo '<p>'.$row["Name"].'</p>';
			echo '<p>'.$row["Size"].": Rs. ".$row["Price"].'</p>';
			echo '</td></tr>';
			echo '<tr><td>';
		/*	if($row["Kind"]==="dominos"){
				echo '<input class="radio" type="radio" name="'.$row["ProductID"].'size" value="S">S ';
				echo '<input class="radio" type="radio" name="'.$row["ProductID"].'size" value="M">M ';
				echo '<input class="radio" type="radio" name="'.$row["ProductID"].'size" value="L">L ';
				echo '<br>';
			} */
			echo '<input type="submit" name="'.$row["ProductID"].'" value="Add to Cart" class="but">';
			echo '</td></tr>';
			echo '</table>';
			echo '</div>';
			echo '</td>';
			$c++;
		}
	}
	echo '</form>';
	echo '</table>';
?>



<footer>
<div class="box">
<div class="social">
<ul>
<li><a href="AboutUs.html" target="_blank" style="text-decoration:none;color:black;background-color:white">About Us</a></li>
<li><a href="T&C.html" target="_blank" style="text-decoration:none;color:black;background-color:white">Terms and Conditions</a></li>
<li><a href="Refunds&Cancellation.html" target="_blank" style="text-decoration:none;color:black;background-color:white">Refunds and Cancellation Policy</a></li>
<li><a href="Career.html" target="_blank" style="text-decoration:none;color:black;background-color:white">Careers</a></li>


</ul>
</div>
</div>
<div class="fancy">
<!--Connect with us,links-->
© 2017, Name
</div>
</footer>

</body>
</html>