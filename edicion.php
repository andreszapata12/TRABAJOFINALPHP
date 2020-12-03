<?php
    include("BaseDatos.php");
if(isset($_POST["botony"])){
    $id=$_GET["id"];
    
    $nombre=$_POST["nombremodal"];
    $descripcion=$_POST["descripcionmodal"];

    $operationBD=new BaseDatos();
    
    $consultaSQL="UPDATE usuarios SET nombre='$nombre',descripcion='$descripcion' where codigousuario ='$id'";

    $operationBD->actualizarDatos($consultaSQL);
}

?>