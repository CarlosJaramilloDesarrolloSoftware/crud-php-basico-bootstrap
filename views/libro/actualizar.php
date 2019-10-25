<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar Libro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php
        if(isset($_SESSION["alert"])){
            ?>
            <div class="alert alert-<?= $_SESSION["alert"]["tipo"] ?>" role="alert">
                <?= $_SESSION["alert"]["mensaje"] ?>
            </div>
            <?php
            unset($_SESSION["alert"]);
        }
    ?>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <header>
                            <h2>Actualizar libro: <b><?= $libro->getNombre() ?></b></h2>
                        </header>

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre" name="nombre" value="<?= $libro->getNombre() ?>">
                            </div>
                            <div class="form-group">
                                <label for="autor">Autor</label>
                                <input type="text" class="form-control" id="autor" placeholder="Ingrese autor" name="autor" value="<?= $libro->getAutor() ?>">
                            </div>
                            <div class="form-group">
                                <label for="anioEdicion">Año edición</label>
                                <input type="number" class="form-control" id="anioEdicion" placeholder="Ingrese año de edición" name="anioEdicion" value="<?= $libro->getAnioEdicion() ?>">
                            </div>
                            <div class="form-group">
                                <label for="paginas">Páginas</label>
                                <input type="number" class="form-control" id="paginas" placeholder="Ingrese páginas" name="paginas" value="<?= $libro->getPaginas() ?>">
                            </div>
                            <div class="form-group">
                                <label for="editorial">Editorial</label>
                                <input type="text" class="form-control" id="editorial" placeholder="Ingrese editorial" name="editorial" value="<?= $libro->getEditorial() ?>">
                            </div>
                            <input type="hidden" name="actualizar" value="actualizar">
                            <button type="submit" class="btn btn-primary">Guardar</button> <a href="LibroController.php" class="btn btn-info">Volver al inicio</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>