<?php

$id=$_REQUEST['id'];
$idHora=$_REQUEST['idHora'];
$idEstado=$_REQUEST['idEstado'];
$idSoftware=$_REQUEST['idSoftware'];
$idDia=$_REQUEST['idDia'];
$idLab=$_REQUEST['idLab'];
$cedulaLogin=$_REQUEST['cedulaLogin'];
$cedulaReserva=$_REQUEST['cedulaReserva'];
$cedulaEncargado=$_REQUEST['cedulaEncargado'];
$fecha=$_REQUEST['fecha'];


$cnx=new PDO("pgsql:host=localhost;port=5432;dbname=appcecasis","postgres","1234");
$res=$cnx->query("INSERT INTO public.reservlaboratorios
	VALUES (default,'$idHora','$idEstado','$idSoftware','$idDia','$idLab','$cedulaLogin','$cedulaReserva','$cedulaEncargado','$fecha');");

