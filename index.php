<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>TIENDA</title>
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
    <main class="fondo2">
        <form action="registro.php" method="POST">
            <div class="row">
                <div class="col">
                        <label class="letra" for="validationDefault03">Marca</label>
                        <input type="text" class="form-control" placeholder="MARCA" name="nombre">
                </div>
            </div>
                <div class="row">
                    <div class="col">
                            <label  class="letra" for="validationDefault03">precio</label>
                            <input type="text" class="form-control" placeholder="$$$PRECIO" name="cedula">
                    </div>
                </div>
                <div class="row">   
                    <div class="col">
                            <label class="letra"  for="validationDefault03">descripcion</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"></textarea>
                    </div>
                </div>
                <div class="row">    
                    <div class=" col">
                            <label class="letra" for="validationDefault03">foto</label>
                            <input type="text" class="form-control" placeholder="FOTO URL" name="foto">
                   </div>
                </div>   
                <button type="submit" class="btn btn-danger btn-block" name="boton">Registrar</button>
        </form>
    </main>
    <footer class="fondo2">
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>