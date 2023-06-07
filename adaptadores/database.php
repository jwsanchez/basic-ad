<?php 

class Database {

    private $host = "localhost";
    private $username = "root";
    private $password = "123456789";
    private $database = "adidas";
    private $db_connection;


    function __construct() {}

    private function db_connect(){
		if(!$this->db_connection){
			$this->db_connection = new mysqli($this->host, $this->username, $this->password, $this->database);
			$this->db_connection->set_charset('utf8');
		}
	}

	private function db_disconnect(){
		mysqli_close($this->db_connection);
		$this->db_connection = null;
	}

	function executeSQL($sql, $returnmode=''){	

		$this->db_connect();
		$query_result = $this->db_connection->query($sql);
		if (!$query_result) {
			$error_message = 'Error: ' . mysqli_error($this->db_connection);
			$this->db_disconnect();
			die($error_message);
		}
		
		switch($returnmode){
			case 'uid':
				return $this->db_connection->insert_id ? $this->db_connection->insert_id : -1;
			default:
				$result_rows = array();
				while ($result_row = $query_result->fetch_assoc()){
		            $result_rows[]=$result_row;
		        }
				return $result_rows;
		}
	}

}

?>