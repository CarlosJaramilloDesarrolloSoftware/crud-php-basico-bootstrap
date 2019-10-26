
    <div class="container">
        <h1>Libros</h1>
        <br>
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
