<?php
class AtelierPrinter
{
	private $_id_conn;
	private $_array;
	
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
	
	public function load_atelier($titre)
	{
		$req="select * from atelier where titre='$titre'";
		$resu=mysqli_query($this->_id_conn,$req) or die("selection error".mysql_error());
		$this->_array = mysqli_fetch_assoc ( $resu );
	}
	
	public function get_array(){
		return $this->_array;
	}
}

$printer = new AtelierPrinter();
$printer->load_atelier($TA);
$atelier = $printer->get_array();

?>