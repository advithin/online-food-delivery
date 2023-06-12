<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Lato|Open+Sans|Pacifico" rel="stylesheet">-->

<link rel="stylesheet" type="text/css" href="dominos.css">
<title>Welcome to Dominos!</title>
</head>
<body>
<header><img src="log.png" height="400px" width="400px" /> <div class="cap" style="text-align:center;font-size:40px;font-family:cursive;">
-------<b><i>Yummy pizza delivered fast & fresh</i></b>------</div>
<pre><a href="cart.php" target="_blank"><img src="viewcartbut.jpg" alt="Error displaying" align="right" height="100px" width="200px" /></a></pre></header>
<br><br><br><br><br><br><br><br>
<div id="wrapper1"></div>
<div id="wrapper2"></div>

<?php
	$url = "http://127.0.0.1/wt2_project/WT2_Organised/get&set_items/dominos.json";
	$ret = file_get_contents($url, FALSE);//false indicates no include path
	echo $ret;
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