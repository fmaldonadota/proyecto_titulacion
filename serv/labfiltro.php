<?php

$fechae=$_REQUEST['fechae'];
$horae=$_REQUEST['horae'];
$numeroMaquinase=$_REQUEST['numeroMaquinase'];


$cnx=new PDO("pgsql:host=localhost;port=5432;dbname=appcecasis","postgres","1234");
$res=$cnx->query("select * from laboratorio
where maquinas_lab='$numeroMaquinase'
and nombre_lab NOT IN (select id_lab from reservlaboratorios
where id_hora='$horae'
and dfrom='$fechae')");


$datos=array();

foreach ($res as $row){
	$datos[]=$row;
}

echo json_encode($datos);