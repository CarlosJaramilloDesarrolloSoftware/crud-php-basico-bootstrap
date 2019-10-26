
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