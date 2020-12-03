<?php
$id=$_GET["id"];
include("BaseDatos.php");
$operationBD=new BaseDatos();
$consultaSQL="DELETE FROM usuarios WHERE codigousuario ='$id'";
$operationBD->eliminarDatos($consultaSQL)
?>