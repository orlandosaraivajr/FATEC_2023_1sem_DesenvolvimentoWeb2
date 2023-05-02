<?php
require_once('DBConnect.php');

$objeto1 = new DBConnect(); 
# print_r($objeto1->conn);
# Para depois do papá...
# $objeto1->inserir_autor('Andrew','Tannembaum');
unset($objeto1);

$objeto1 = new DBConnect(); 
?>