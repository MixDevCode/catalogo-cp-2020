<?php
	$id = $_GET['id'];		
	$link = mysqli_connect("localhost", "root", "", "rares");
		if($link === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
	$sql = ("DELETE FROM ltd WHERE ID = '$id'");
	$link->query($sql);
	header("location: ../ltd/");
?>