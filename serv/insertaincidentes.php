<?php

$laboratorio=$_REQUEST['laboratorio'];
$maquina=$_REQUEST['maquina'];
$descripcion=$_REQUEST['descripcion'];
$foto=$_REQUEST['foto'];
$cedulaLogin=$_REQUEST['cedulaLogin'];
$estado=$_REQUEST['estado'];
$asignacion=$_REQUEST['asignacion'];

//$hoy = getdate();


$cnx=new PDO("pgsql:host=localhost;port=5432;dbname=appcecasis","postgres","1234");
$res=$cnx->query("INSERT INTO public.incidentes
	VALUES (default,'$laboratorio', '$maquina', '$descripcion', '$foto', '$cedulaLogin','$estado','$asignacion','','2/7/2018');");

