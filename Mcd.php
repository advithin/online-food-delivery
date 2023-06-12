<!DOCTYPE html>
<html>
<head>
<title>Mc Donalds</title>
<style>
/*a:link,a:visited
{
color:white;
padding: 15px 25px;
text-align:center;
text-decoration:none;
display:inline-block;
background-color:black;

}
a:hover,a:active
{
background-color:	#FFFAF0;
color:blue;
} */
header{background-color:red;opacity:0.7;color:white;font-size:50px;font-family:cursive;margin:0%;height="200px";}
 footer{ text-align:center;color:black;font-style:italic;}
div.transbox {
  margin: 10px;
  background-color:#FFE4E1;
  border: 1px solid black;
   
}

div.transbox p {
  margin:2%;
  color:black;
  font-size:15px;
  }
footer{ text-align:center;color:black;font-style:italic;}
div.trans2 {
  margin: 10px;
  background-color:	#FFF0F5;
  border: 1px solid black;
  opacity: 0.9;
  font-size:40px;
  filter: alpha(opacity=60); 
  font-family: 'Kaushan Script', cursive;
}
#navcontainer ul
{
margin: 0;
padding: 2%;
list-style-type: none;
font-size:25px;
font-style:normal;
font-family: Arial, Helvetica, sans-serif;
text-align:center;
}


#navcontainer ul li { display: inline; }
footer{
    padding-top: 5px;
    margin-bottom: -20px;
    background: #fff;
    padding-bottom: 1px;
	
}
div.social ul li{
margin:5%;
font-size:17px;
display:inline;
}
ul.list{font-size:20px;font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;}
ul.x{background-color:white;}
header{background-color:white;}

* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

table {
    width: 100%;
    table-layout: fixed;
	margin: 0px; border: 3px inset #DC143C;
   
}

body{
   background-color:	#FFFAF0;
  }
  
</style>
</head>
<body>
<header><img src="mcd_head.jpg" /><pre>                                                                                                                                                                                                                                                            <a href="cart.php" target="_blank"><img src="viewcartbut.jpg" alt="Error displaying" height="100px" width="200px" /></a></pre></header>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="mcd3.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="mcd1.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="mcd2.jpg" style="width:100%">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<!--
<p style="font-size:30px;"><b>BURGERS</b></p>

<table cellspacing="30" cellpadding="40">
    <tr>
        <td>
            <img src="chic_maha.png" style="width:300px;height:300px;" />
		<p><i>Chicken Maharaja Mac</i></br></br>
	    Rs.201</p>
        </td>
		<td>
            <img src="American_super.png" style="width:300px;height:300px;" />
		<p><i>American Cheese Supreme- Veg</i><br><br>
	    Rs.99</p>
        </td>
		<td>
            <img src="Big_chic_maha.png" style="width:300px;height:300px;" />
		<p><i>Big chicken Maha spicy wrap</i><br><br>
	    Rs.182</p>
        </td>
	</tr>
	    <tr>
        <td>
            <img src="Big-Crunch-Chicken-Classic-Burger_0.jpg" style="width:300px;height:300px;" />
		<p><i>Big Crunch Chicken Classic Burger</i></br></br>
	    Rs.304</p>
        </td>
		<td>
            <img src="filet_o_fish.png" style="width:300px;height:300px;" />
		<p><i>Filet-O-Fish-Burger</i><br><br>
	    Rs.129</p>
        </td>
		<td>
            <img src="mc_spicy_chick.png" style="width:300px;height:300px;" />
		<p><i>McSpicy Chicken Burger</i><br><br>
	    Rs.147</p>
        </td>
	</tr>
</table>
<p style="font-size:30px;"><b>BEVERAGES</b></p>
<table cellspacing="30" cellpadding="40">
    <tr>
        <td>
            <img src="a_m_s.png" style="width:300px;height:300px;" />
		<p><i>American Mud Pie</i></br></br>
	    Rs.139</p>
        </td>
		<td>
            <img src="d_s_f.png" style="width:300px;height:300px;" />
		<p><i>Double Chocolate Frappe</i><br><br>
	    Rs.211</p>
        </td>
		<td>
            <img src="m_b_s.png" style="width:300px;height:300px;" />
		<p><i>Mixed Berry Smoothie</i><br><br>
	    Rs.182</p>
        </td>
	</tr>
	    <tr>
        <td>
            <img src="i_m_s.png" style="width:300px;height:300px;" />
		<p><i>Italian Mocha Shake</i></br></br>
	    Rs.139</p>
        </td>
		<td>
            <img src="m_s.png" style="width:300px;height:300px;" />
		<p><i>Mango Smoothie</i><br><br>
	    Rs.129</p>
        </td>
		<td>
            <img src="s_o_w.png" style="width:300px;height:300px;" />
		<p><i>Strawberry Oreo Whirl</i><br><br>
	    Rs.229</p>
        </td>
	</tr>
	<tr>
        <td>
            <img src="m_c_c.png" style="width:300px;height:300px;" />
		<p><i>McCafe-caramel-coffee Frappe</i></br></br>
	    Rs.201</p>
        </td>
		<td>
            <img src="m_m_f.png" style="width:300px;height:300px;" />
		<p><i>McCafe-Mochha-Frappe</i><br><br>
	    Rs.201</p>
        </td>
		<td>
            <img src="mc_class.png" style="width:300px;height:300px;" />
		<p><i>McCafe classic Coffee</i><br><br>
	    Rs.165</p>
        </td>
	</tr>
</table> 
-->
<script>

var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}

</script>
</body>

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
				$sql = "INSERT INTO Cart (ProductID, Name, Kind, Image, Price, Quantity)
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
				$sql = "INSERT INTO Cart (ProductID, Name, Kind, Image, Price,Quantity)
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
	$username = "root";
	$password = "";
	$dbname = "wtproject";
	$conn=new mysqli($servername, $username, $password, $dbname);
	//if ($conn->connect_error) {
    //	die("Connection failed: " . $conn->connect_error);
	//} 
	//echo "Connected successfully<br>";
	$sql="SELECT * from food WHERE Kind='McD'";
	//var_dump($conn);
	$result=mysqli_query($conn,$sql);
	//var_dump($result);
	if($result->num_rows>0){
		$c=0;
		echo '<form action="Mcd.php" method="POST">';
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
			echo '<img class="size" src="images/'.$row["Image"].'" alt="Image unavailable">';
			echo '<table cellspacing="10px">';
			echo '<tr><td>';
			echo '<p>'.$row["Name"].'</p>';
			echo '<p>'.$row["Kind"].": Rs. ".$row["Price"].'</p>';
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
	function buy(){
		printf("hi");
	}
?>


<footer>
<div class="box">
<div class="social">
</br></br></br>
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
</html>