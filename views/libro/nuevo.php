    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <header>
                            <h2>Nuevo libro</h2>
                        </header>

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre" name="nombre">
                            </div>
                            <div class="form-group">
                                <label for="autor">Autor</label>
                                <input type="text" class="form-control" id="autor" placeholder="Ingrese autor" name="autor">
                            </div>
                            <div class="form-group">
                                <label for="anioEdicion">Año edición</label>
                                <input type="number" class="form-control" id="anioEdicion" placeholder="Ingrese año de edición" name="anioEdicion">
                            </div>
                            <div class="form-group">
                                <label for="paginas">Páginas</label>
                                <input type="number" class="form-control" id="paginas" placeholder="Ingrese páginas" name="paginas">
                            </div>
                            <div class="form-group">
                                <label for="editorial">Editorial</label>
                                <input type="text" class="form-control" id="editorial" placeholder="Ingrese editorial" name="editorial">
                            </div>
                            <input type="hidden" name="insertar" value="insertar">
                            <button type="submit" class="btn btn-primary">Guardar</button> <a href="LibroController.php" class="btn btn-info">Volver al inicio</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
