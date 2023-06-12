<?php
	header("Content-type: text/xml");
	
	$retstr = file_get_contents("http://127.0.0.1/wt2_project/WT2_Organised/Offers2.xml");
	echo $retstr;
	$xml=simplexml_load_string($retstr);
	echo $xml;
?>
