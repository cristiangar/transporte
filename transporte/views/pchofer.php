<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <ul class="navbar-nav ml-auto">
        <li class="navbar-item">
            <a class="nav-link" >Usuario: chofer</a>
        </li>
        <li class="navbar-item">
            <a class="nav-link" href="../index.php">Cerrar sesión</a>
        </li>
    </ul>

</nav>
<div class="container-fluid">
<h1>Marque el estado en el cual se encuentra el paquete</h1>

<div class="form-row">
    <div class="col-sm-4">
    <form action="buscar.php">
                <div class="form-check">
                <label class="form-check-label" for="check1">
                    <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>En Camino a recoger
                </label>
                </div>
                <div class="form-check">
                <label class="form-check-label" for="check2">
                    <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something" disabled>recogiendo
                </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" disabled>En ruta
                </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" disabled>Entregado
                </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" disabled>Retrassdo
                </label>
                </div>
                <label for="comment">Comentario del chofer:</label>
                <textarea class="form-control" rows="5" id="comment"></textarea>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
 </div>
</div>

</div>
</body>
</html>