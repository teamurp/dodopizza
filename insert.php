<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'dodo');
	$query = mysqli_query($con, "SELECT * FROM products WHERE id={$_GET["id"]}");
	$stroka = $query->fetch_assoc();
	mysqli_query($con, "INSERT INTO basket (title, img, price) VALUES ('{$stroka["name"]}', '{$stroka["img"]}', {$stroka["price"]})");

	header("Location: index.php");
 ?>