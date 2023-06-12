<?php
session_start();

$servername = "localhost";
$dbname = "login";
$usernames=$_POST['username'];
$passwords=$_POST['pass'];
$con = mysqli_connect("localhost","shivani","shivani63");
mysqli_select_db($con,$dbname);
$sql = "SELECT  username,password FROM t1"; 
$result = $con->query($sql);
$count=0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if( "Name:".$row["username"]."".$row["password"]."<br>"=="Name:".$usernames."".$passwords."<br>")
		{
			
			
			//echo "<div style='color:white;font-size:80px;'>Welcome $username</div>";
			//echo "<center><p style='color:blue;font-size:2em'>Welcome ".$username."</p></center>";
			//include("Flavors101.html");
			header("Location: bon-appetit.html");
			
		}
		else
		{
		die('Incorrect username / password combination!');
			//echo "<script>alert('Please Log In First')</script>";
			//header( "refresh:5; url=loginpage.html" ); 
			break;
		}
}
}







$con->close();
?>

