<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'dodo');
	mysqli_query($con, "TRUNCATE basket");
	header("Location: index.php");
 ?>