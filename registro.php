<?php
include("BaseDatos.php");
if(isset($_POST["boton"])){
    $nombre=$_POST["nombre"];
    $cedula=$_POST["cedula"];
    $descripcion=$_POST["descripcion"];
    $foto=$_POST["foto"];
    $operationBD=new BaseDatos();
     $consultaSQL="INSERT INTO usuarios(nombre,cedula,descripcion,foto) VALUES ('$nombre','$cedula','$descripcion','$foto')";
   $operationBD->agregarDatos($consultaSQL);
  
}
?>