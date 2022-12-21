<?php

$id=$_REQUEST['id'];
$estado=$_REQUEST['estado'];
$solucion=$_REQUEST['solucion'];

$cnx=new PDO("pgsql:host=localhost;port=5432;dbname=appcecasis","postgres","1234");
$res=$cnx->query("UPDATE public.incidentes
	SET solucion='$solucion',estado_inicidente='$estado'
	WHERE id_incidente=$id;");

