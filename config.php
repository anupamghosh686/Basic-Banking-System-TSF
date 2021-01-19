<?php

	$conn = mysqli_connect('localhost','Anupam','0207','banknotes_and_bonds');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>