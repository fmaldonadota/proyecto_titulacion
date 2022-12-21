<?php

$cid = odbc_connect("MBA3","API","API");


if (!$cid){
	exit("<strong>Ya ocurrido un error tratando de conectarse con el origen de datos.</strong>");
}	

// consulta SQL a nuestra tabla "usuarios" que se encuentra en la base de datos "db.mdb"
$sql="select prod.ORIGIN,prod.TRANS_DATE, prod.COD_CLIENTE, pri.NOMBRE_CLIENTE, prod.ORIGIN_REF, prod.PRODUCT_ID, prod.PRODUCT_NAME, prod.QUANTITY from INVT_Producto_Movimientos as prod, CLNT_Ficha_Principal as pri where prod.TRANS_DATE = '23/01/2018' AND prod.ORIGIN = 'PRI' and prod.COD_CLIENTE=pri.CODIGO_CLIENTE";

// generamos la tabla mediante odbc_result_all(); utilizando borde 1
$result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
print odbc_result_all($result,"border=1");
?>
