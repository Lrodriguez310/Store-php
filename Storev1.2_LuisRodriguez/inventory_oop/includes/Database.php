<?php

// Luis rodriguez 0812903

class Database {

   


   public $connection;

    
	
	
	
	public function __construct() {
        $this->connection =new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASSWORD);
    }

   




   public function sqlQuery($sql) {
        $dbc = $this->connection;
        $result = $dbc->query($sql);
        return $result;
    }

   



   public function fetchArray($sql) {
        $result = $this->sqlQuery($sql);
        $numberOfRows = $result->rowCount();
        if ($numberOfRows == 0) {
            return false;
        } else {
            $resultArray = $result->fetchAll(PDO::FETCH_ASSOC);
            return $resultArray;
        }
    }

    
	
	
	public function fetchRecord($sql) {
        $result = $this->sqlQuery($sql);
        $numberOfRows = $result->rowCount();
        if ($numberOfRows == 0) {
            return false;
        } else {
            $resultRow = $result->fetch(PDO::FETCH_ASSOC);
            return $resultRow;
        }
    }
}

    $dbc = new Database();
?>