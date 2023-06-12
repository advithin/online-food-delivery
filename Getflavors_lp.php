<?php
	extract($_GET);
	header("Content-type: text/xml");
	if($time){	
		$last=$time;	
	}
	else{
		$last=null;
	}

	while(true){
		clearstatcache();
		$new=filemtime("Offers2.xml");
		if($new>$last){
			$retstr = file_get_contents("http://127.0.0.1/wt2_project/WT2_Organised/Offers2.xml");
			echo $retstr;
			$xml=simplexml_load_string($retstr).";".$new;
			echo $xml;
			break;
		}
		else{
			echo "<script>alert('Hi');</script>";
			sleep(5);
			continue;

		}
		
		
	}

?>