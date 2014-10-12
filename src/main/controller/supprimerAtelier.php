<?php
	//Database connection
	$id_conn = mysqli_connect('localhost', 'root', '','cnrs')or die('impossible de se connecter');

	//Select database
	mysqli_select_db($id_conn,'cnrs')or die("connection a la base impossible");

	//get by title
	$title=$_GET['titre'];
	$request = "delete from atelier where atelier.titre ='$title' ";
	$res = mysqli_query($id_conn,$request);

	//Come back to the listeAteliers after remove
	header("location: ../vue/listeAteliers.php"); 	
?>