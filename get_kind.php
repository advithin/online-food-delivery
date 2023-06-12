

<?php
	if($_SERVER['REQUEST_METHOD'] == "GET"){
		extract($_GET);
		echo '<link href="https://fonts.googleapis.com/css?family=Marmelad&display=swap" rel="stylesheet">';
		echo '<table cellspacing="30" cellpadding="40">';
		$servername = "localhost";
		$username = "shivani";
		$password = "shivani63";
		$dbname = "login";
		$conn=new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
	    	die("Connection failed: " . $conn->connect_error);
		} 
		//echo "Connected successfully<br>";
		//echo $Kinds;
		$sql="SELECT * from food WHERE Kind='$Kinds'";
		//var_dump($conn);
		$result=mysqli_query($conn,$sql);
		//var_dump($result);
		if($result->num_rows>0){
			$c=0;
			echo '<form action="get_kind.php" method="POST">';
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
				
				echo '<img style="width:300px;height:300px;" class="size" src='.$row["Image"].' alt="Image unavailable">';
				echo '<table >';
				echo '<td>';
				echo '<p>'.$row["Name"].'</p>';
				echo '<p>'.$row["Size"].": Rs. ".$row["Price"].'</p>';
				//echo '</td></tr>';
				//echo '<tr><td>';
				/*if($row["Kind"]===$Kinds){
					echo '<input class="radio" type="radio" name="'.$row["ProductID"].'size" value="S">S ';
					echo '<input class="radio" type="radio" name="'.$row["ProductID"].'size" value="M">M ';
					echo '<input class="radio" type="radio" name="'.$row["ProductID"].'size" value="L">L ';
					echo '<br>';
				} */
				echo '<input type="submit" style="background-color:grey; color: white;height:50px;width:120px;border-radius: 12px;"name="'.$row["ProductID"].'" value="Add to cart" class="but">';
				echo '</td>';
				echo '</table>';
				echo '</div>';
				echo '</td>';
				$c++;		
			}
		}
		echo '</form>';
		echo '</table>';
	}
	else if($_SERVER['REQUEST_METHOD'] == "POST"){
			$servername = "localhost";
			$username = "shivani";
			$password = "shivani63";
			$dbname = "login";
			$conn=new mysqli($servername, $username, $password, $dbname);
			//echo "1\n";
			//echo '<form action="get_kind.php" method="GET">';
			$id=0;
			for($i=1;$i<=100;$i++){
				if(isset($_POST["$i"])){
					//echo "2\n";
					$id=$i;
					break;
				}
				//echo "3\n";
			}
			$sql="SELECT * from food WHERE ProductID=".$id."";
			//echo "4\n";
			$result=$conn->query($sql);
			$row=$result->fetch_assoc();
			//var_dump($row);
			$sql1="SELECT * from cart WHERE ProductID=".$id."";
			$result1=$conn->query($sql1);
			//var_dump($result1);
			//echo '<form action="get_kind.php" method="POST">';
			
			if($result1->num_rows===1){
				$row1=$result1->fetch_assoc();
				//var_dump($row1);
				$sql="DELETE from cart WHERE ProductID=".$id."";
				$result=$conn->query($sql);
				$q=(int)$row1["Quantity"]+1;
				//var_dump($result);
				$sql = "INSERT INTO cart (ProductID, Name, Kind, Image, Price, Quantity)
					VALUES (".$row["ProductID"].",\"".$row["Name"]."\", \"".$row["Kind"]."\", \"".$row["Image"]."\", \"".$row["Price"]."\",".$q.")";
			
				$result=$conn->query($sql);
				if ($result === TRUE) {
	    			echo "<script>alert(\"Item added to cart\")</script>";
	    			//fn_show($Kinds);


				if($row["Kind"]=="dominos"	){
					//echo "<script>alert(\"Dominos1\")</script>";
					header("Location: dominos_rest.php");
				}
				else{
					//echo "<script>alert(\"Mcd1\")</script>";
					header("Location: Mcd_rest.php");	
				}
				}	
				else {
	    			echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
			
			else{
				$q=1;
				$sql = "INSERT INTO cart (ProductID, Name, Kind, Image, Price,Quantity)
					VALUES (".$row["ProductID"].",\"".$row["Name"]."\", \"".$row["Kind"]."\", \"".$row["Image"]."\", \"".$row["Price"]."\",".$q.")";
				$result=$conn->query($sql);
				if ($result === TRUE) {
	    			echo "<script>alert(\"Item added to cart\")</script>";
	    			//fn_show($Kinds);
	    		if($row["Kind"]=="dominos"){
	    			echo "<script>alert(\"Dominos\")</script>";
					header("Location: dominos_rest.php");
				}
				else{
					echo "<script>alert(\"Mcd\")</script>";
					header("Location: Mcd_rest.php");	
				}
				}	
				else {
	    			echo "Error: " . $sql . "<br>" . $conn->error;
				}


			}
			//$ret = file_get_contents($url, FALSE);//false indicates no include path
			//echo $ret;
			
		}

?>


