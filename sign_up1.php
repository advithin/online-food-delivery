<?php

echo "Welcome";
$servername = "localhost";
$username = $_POST['emailid'];
$password = $_POST['pass'];
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$phone=$_POST['phone'];
$dbname = "login";
$con = mysqli_connect("localhost","shivani","shivani63");
mysqli_select_db($con,$dbname);
//echo $fname;
//echo $lname;
$sql = "INSERT INTO t1 (username,password,phone,fname,lname)
VALUES ('$username', '$password','$phone','$fname','$lname')";

$result = $con->query($sql);
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if ($result === TRUE) {
    echo "New record created successfully";
    header("Location: bon-appetit.html");
  	exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$con->close();
?>
