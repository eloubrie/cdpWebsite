<?php
class TableAteliers
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
	
	public function get_ateliers(){
		//Select data from "atelier"
		$request="select titre, thematique, type, Lieu from atelier ";
		$res = mysqli_query($this->_id_conn,$request);
		return $res;
	}
	
	public function build_table($res){
		//Routine to load data and print as a simple list
		while($ligne = mysqli_fetch_row($res)){
			echo "<tr>\n";
			$this->build_lines($ligne);
			echo " </tr>\n";
		}
	}
	
	protected function build_lines($ligne){
		echo "<td><i/><b/><a href = '../vue/afficherAtelier.php?titre=$ligne[0]'>$ligne[0]</a></td>";
		for($i=1;$i<count($ligne);$i++){
			echo "<td><i/><b/>$ligne[$i]</td>";
		}
		echo "<td><a href = '../controller/modifierAtelier.php?titre=$ligne[0]'/a><img src=../image/mod.png><a href = '../controller/supprimerAtelier.php?titre=$ligne[0]'/a><img src=../image/sup.png></td>";
	}		
}
$t_ateliers = new TableAteliers(); 
$ateliers = $t_ateliers->get_ateliers();
$t_ateliers->build_table($ateliers);
?>