<?php

	class creationAtelier {
	
	private $_id_conn;
	
	function __construct(){
		$this->initiate_connection();
	}

	protected function initiate_connection(){
		//Database connection
		$this->_id_conn = mysqli_connect('localhost', 'root', '','cnrs')or die('impossible de se connecter');
		//Select database
		mysqli_select_db($this->_id_conn,'cnrs')or die("connection a la base impossible");
	}
	
	public function remplirBD(){
	$TA=$_GET['TA'];
	$TH=$_GET['TH'];
	$TY=$_GET['TY'];
	$HR=$_GET['HR'];
	$LAB=$_GET['LAB'];
	$LI=$_GET['LI'];
	$DR=$_GET['DR'];
	$CA=$_GET['CA'];
	
	$req="insert into atelier values ('$TA','$TH','$TY','$HR','$LAB','$LI','$DR','$CA')";
	$resu=mysqli_query($this->_id_conn,$req) or die("requête non conforme".mysql_error());
	
		header("location: ../vue/listeAteliers.php");
	}
	 public function updateBD(){
	$TA=$_GET['TA'];
	$TH=$_GET['TH'];
	$TY=$_GET['TY'];
	$HR=$_GET['HR'];
	$LAB=$_GET['LAB'];
	$LI=$_GET['LI'];
	$DR=$_GET['DR'];
	$CA=$_GET['CA'];
	$req="delete from atelier where titre='$TA'";
	$resu=mysqli_query($this->_id_conn,$req)or die("suppression error".mysql_error());
	$req="insert into atelier values ('$TA','$TH','$TY','$HR','$LAB','$LI','$DR','$CA')";
	$resu=mysqli_query($this->_id_conn,$req)or die("insertion error".mysql_error());
		header("location: ../vue/listeAteliers.php");
	
	}
	}
		
	$creation = new creationAtelier();
	if(!isset($_GET['MO'])){
	$creation->remplirBD();}
	else {
	$creation->updateBD();}
?>
