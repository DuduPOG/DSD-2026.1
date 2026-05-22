<?php
	$i = 100;
	//$_POST["parametro"] = $i;
	//echo json_encode($_POST);

	while($i > 0){
		$_POST["parametro"] = $i;
		echo json_encode($_POST);
		sleep(1);
		$i--;
	}

	echo "saiu";
?>
