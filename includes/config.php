<?php
	ob_start();//ouput buffering- wait till it has all the parts before sending it to the server.
	session_start();

	$timezone = date_default_timezone_set("Europe/London");

	$con = mysqli_connect("localhost", "root", "", "musicDream");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}


?>