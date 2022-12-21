<?php

$dsn = "Driver={SQL Server};
Server=localhost;Database=testconndb;Integrated Security=SSPI;Persist Security Info=False;";
$conn = odbc_connect( $dsn, '', '' );


if (!$conn) { exit( "Error al conectar: " . $conn);
$sql = "SELECT * FROM Tabla";
$rs = odbc_exec( $conn, $sql );
if ( !$rs ) { exit( "Error en la consulta SQL" ); }
while ( odbc_fetch_row($rs) ) { $resultado=odbc_result($rs,"Campo");
echo $resultado; }


odbc_close( $conn );
?>

