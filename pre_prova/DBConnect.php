<?php

class DBConnect { 
    private $servername = "127.0.0.1"; 
    private $username = "root";
    private $password = "123mudar";
    private $dbname="books";
    private $conn;
    public function __construct() { 
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            print_r($this->conn); 
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            }
    }

    public function __destruct() { 
        $this->fechar_conexao();
	    print "DESTRUÍDO: Objeto {$this->conn}\n"; 
	} 

    private function fechar_conexao(){
        $this->conn = null;
    }
}




?>