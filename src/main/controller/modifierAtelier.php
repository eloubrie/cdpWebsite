<?php

class modiferAtelier {

	private $_id_conn;
function __construct()
{
		$this->initiate_connection();
}

	protected function initiate_connection(){
		//Database connection
		$this->_id_conn = mysqli_connect('localhost', 'root', '','cnrs')or die('impossible de se connecter');
		//Select database
		mysqli_select_db($this->_id_conn,'cnrs')or die("connection a la base impossible");
	}

	public function recuperationBD()
	{		
		$title=$_GET['titre'];
		
		$req="select * from atelier where atelier.titre ='$title' ";
		$res = mysqli_query($this->_id_conn,$req);
		while($ligne = mysqli_fetch_row($res)){
		header("location: ../vue/creationAtelier.php?titre=$title&th=$ligne[1]&tp=$ligne[2]&date=$ligne[3]&lab=$ligne[4]&lieu=$ligne[5]&dure=$ligne[6]&capa=$ligne[7]&modif=1");}
		
	}
	

}
	$modifier=new modiferAtelier();
	$modifier->recuperationBD();


?>