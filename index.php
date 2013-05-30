<?php
	$url = "";
	foreach($_GET as $key => $value) {
		if($key=="url"){
			$url = $value;
		}
	}

	$response = stripslashes(file_get_contents($url));

	echo $response;
?>

<p>ADNPages</p>
