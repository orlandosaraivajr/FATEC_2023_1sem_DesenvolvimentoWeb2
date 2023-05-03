<?php
require_once('DBConnect.php');

$objeto1 = new DBConnect(); 
# print_r($objeto1->conn);

if ($objeto1->inserir_autor('Andrew','Tannembaum')){
    print("E não é que deu certo ! ...");
};

unset($objeto1);

$objeto1 = new DBConnect(); 
?>