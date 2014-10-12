<?php
class WebSiteTest
{
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
	
	// TEST FUNCTION for BDD
	//TODO : methode de reinitialisation de la BDD pour chaque pass => tests plus solides
	public function database_test(){
		$passed[0] = $this->insertion_error("insert into atelier (titre, thematique, type, horaire, nomlab, Lieu, durée, capacité) values ('toto','tata','titi','2014-09-01','tete','tito','1','1')");
		$passed[1] = $this->get_error("select titre, thematique, type, Lieu from atelier ");
		$passed[2] = $this->suppression_error("delete from atelier where titre='toto'");
		$passed[3] = $this->insertion_error("insert into atelier (titre, thematique, type, horaire, nomlab, Lieu, durée, capacité) values ('toto','tata','titi','2014-09-01','tete','tito','1','1')");
		$passed[4] = $this->modification_error("UPDATE atelier SET titre='totoLeRetour' where titre='toto'");
		$passed[5] = $this->suppression_error("delete from atelier where titre='totoLeRetour'");
		//$passed[6] = $this->suppression_error("delete from atelier where titre='tdedoedetoLeRetourFEFFEFEFEFEFEFE'"); //Must return error
		foreach($passed as $pas){
			if($pas != 1)
				die("Tests : KO");
		}
		echo("Tests : OK");
	}
	
	protected function insertion_error($request){
		$res = mysqli_query($this->_id_conn,$request);
		if($res == TRUE)
			return 1;
		else
		{
			echo("Insertion error with ".$request."</br>");
			return 0;
		}
	}
	
	protected function get_error($request){
		$res = mysqli_query($this->_id_conn,$request);
		if($res != FALSE)
			return 1;
		else{
			echo("Get error with ".$request."</br>");
			return 0;
		}
	}
	
	protected function suppression_error($request){
		mysqli_query($this->_id_conn,$request);
		if(mysqli_affected_rows($this->_id_conn) > 0)
			return 1;
		else{	
			echo("Suppression error with ".$request."</br>");
			return 0;
		}
	}
	
	protected function modification_error($request){
		$res = mysqli_query($this->_id_conn,$request);
		if($res == TRUE)
			return 1;
		else{	
			echo("Modification error with ".$request."</br>");
			return 0;
		}
	}
}

$bdd = new WebSiteTest();
$bdd->database_test();

?>