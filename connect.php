<?php
$host='localhost' ;
$bd_name = 'crud'; 
$user = 'root';
$passw ='' ;
   try{
$db= new PDO("mysql:host=$host;dbname=$bd_name",$user,$passw);
//echo " connecté à ". $bd_name ." sur le host " . $host ." avec succés" ;  
}catch(PDOException $e){
die("impossibe de se connecté" . $e->getMessage());
}