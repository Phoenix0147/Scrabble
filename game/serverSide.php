<?php
	$con = mysqli_connect("localhost", "root", "", "project");

	$response = 0;

	$horizontal = $_POST["h"];
	$vertical = $_POST["v"];

	if(strlen($vertical) > 1) {
		$command = "call testWord('$vertical')";
		$result = mysqli_query($con, $command);

		$row = mysqli_fetch_assoc($result);
		$response += $row['response'];
	}

	mysqli_next_result($con);

	$response *= 4;

	if(strlen($horizontal) > 1) {
		$command = "call testWord('$horizontal')";
		$result = mysqli_query($con, $command);

		$row = mysqli_fetch_assoc($result);
		$response += $row['response'];
	}

	echo $response;
?>
