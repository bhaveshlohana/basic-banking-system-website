<?php 
	$conn=mysqli_connect("localhost", "bhavesh", "test123", "bank");
	if(!$conn) {
		echo "Connection Error: " . mysqli_connect_error();
	}
?>