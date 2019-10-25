<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libros</title>
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
        <h1>Libros</h1>
        <a href="LibroController.php?funcion=nuevo" class="btn btn-primary">Nuevo</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Año publicación</th>
                    <th scope="col">Páginas</th>
                    <th scope="col">Editorial</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($listaLibros as $libro) { ?>
                    
                    <tr>
                        <th scope="row"><?= $libro->getId() ?></th>
                        <td><?= $libro->getNombre() ?></td>
                        <td><?= $libro->getAutor() ?></td>
                        <td><?= $libro->getAnioEdicion() ?></td>
                        <td><?= $libro->getPaginas() ?></td>
                        <td><?= $libro->getEditorial(); ?></td>
                        <td><a href="LibroController.php?funcion=actualizar&id=<?= $libro->getId() ?>" class="btn btn-warning">Actualizar</a></td>
                        <td><a href="LibroController.php?funcion=eliminar&id=<?= $libro->getId() ?>" class="btn btn-danger">Eliminar</a></td>
                    </tr>

                <?php }  ?>

            </tbody>
        </table>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>