<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>BODEGA</title>
</head>
<body>

<header>
<nav class="navbar navbar-expand-lg navbar-light bg-danger">
                <a class="navbar-brand" href="#">TIENDA PUMA</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="registroproc.php">Bodega<span class="sr-only">(current)</span></a>
                        </li>
                    </div>

</header>
<main class="fondo1">
    <?php
        include("BaseDatos.php");
        $operationBD=new BaseDatos();
        $consultaSQL="SELECT * FROM usuarios WHERE 1";
        $usuarios=$operationBD->consultarDatos($consultaSQL);    
    ?>

        <div class="container">
            <div class="row row-cols-1 row-cols-md-3">
                <?php foreach($usuarios as $usario):?>
                    <div class="col mb-4">
                            <div class="card h-100">
                                <img src="<?php echo($usario["foto"])?>" class="card-img-top" alt="FOTO">
                                <div class="card-body">
                                        <h5 class="card-title"><?php echo($usario["nombre"])?></h5>
                                        <p class="card-text"><?php echo($usario["descripcion"])?></p>
                                        <p class="card-text"><?php echo($usario["cedula"])?></p>
                                        <a href="eliminar.php?id=<?php echo($usario["codigousuario"])?>" class="btn btn-warning">ELIMINAR</a>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editar<?php echo($usario["codigousuario"])?>" name="botony">
                                         EDITAR
                                     </button>
                                </div>     
                            </div>
                            <div class="modal fade" id="editar<?php echo($usario["codigousuario"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">edicion</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                        <form action="edicion.php?id=<?php echo($usario["codigousuario"])?>" method="POST">
                                                            <div class="form-group">
                                                                <label>marca:</label>
                                                                <input type="text" class="form-control" value="<?php echo($usario["nombre"])?>"name="nombremodal">  
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Descripcion:</label>
                                                                <textarea class="form-control" rows="3" name="descripcionmodal"> <?php echo($usario["descripcionmodal"])?></textarea>  
                                                            </div>
                                                            <button type="submit" class="btn btn-primary" name="botony">enviar</button>
                                                        </form>
                                                </div>
                                            <div class="modal-footer">
                                                 
                                            </div>
                                    </div>
                                </div>
                            </div>
                    </div> 
                <?php endforeach?>
            </div>
        </div>
        </main>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>