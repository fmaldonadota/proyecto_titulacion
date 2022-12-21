<?php


$cnx=new PDO("pgsql:host=localhost;port=5432;dbname=appcecasis","postgres","1234");
$res=$cnx->query("select * from laboratorio");


$datos=array();

foreach ($res as $row){
	$datos[]=$row;
}

echo json_encode($datos);