<?php

class LibroModel{
    
    private $id;
    private $nombre;
    private $autor;
    private $anioEdicion;
    private $paginas;
    private $editorial;

    public $db;

    function __construct(){
        $this->db = Db::conectar();
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function setAutor($autor){
        $this->autor = $autor;
    }
    
    public function getAnioEdicion(){
        return $this->anioEdicion;
    }

    public function setAnioEdicion($anioEdicion){
        $this->anioEdicion = $anioEdicion;
    }

    public function getPaginas(){
        return $this->paginas;
    }

    public function setPaginas($paginas){
        $this->paginas = $paginas;
    }

    public function getEditorial(){
        return $this->editorial;
    }

    public function setEditorial($editorial){
        $this->editorial = $editorial;
    }

    public function insertar(){
        $insert = $this->db->prepare('INSERT INTO libro VALUES(NULL, :nombre, :autor, :anio_edicion, :paginas, :editorial)');
        $insert->bindValue('nombre', $this->getNombre());
        $insert->bindValue('autor', $this->getAutor());
        $insert->bindValue('anio_edicion', $this->getAnioEdicion());
        $insert->bindValue('paginas', $this->getPaginas());
        $insert->bindValue('editorial', $this->getEditorial());
        return $insert->execute();
    }

    public function listar(){
        $consultaDeBaseDeDatos = $this->db->query("SELECT * FROM libro");
        $listaDeBaseDeDatos = $consultaDeBaseDeDatos->fetchAll();

        $listaDondeGuardarObjetosDeTipoLibro = [];

        foreach ($listaDeBaseDeDatos as $filaParaCrearUnLibro) {
            $objetoLibro = new LibroModel();
            $objetoLibro->setId($filaParaCrearUnLibro["id"]);
            $objetoLibro->setNombre($filaParaCrearUnLibro["nombre"]);
            $objetoLibro->setAutor($filaParaCrearUnLibro["autor"]);
            $objetoLibro->setPaginas($filaParaCrearUnLibro["paginas"]);
            $objetoLibro->setEditorial($filaParaCrearUnLibro["editorial"]);
            $objetoLibro->setAnioEdicion($filaParaCrearUnLibro["anio_edicion"]);

            $listaDondeGuardarObjetosDeTipoLibro[] = $objetoLibro;
        }
        return $listaDondeGuardarObjetosDeTipoLibro;
    }

    public function consultar(){
        $consulta = $this->db->prepare("SELECT * FROM libro WHERE id = :id");
        $consulta->bindValue('id', $this->getId());
        $consulta->execute();
        $libro = $consulta->fetch(PDO::FETCH_ASSOC);
        if($libro){
            return $libro;
        }else{
            return false;
        }
    }

    public function eliminar(){
        $consulta = $this->db->prepare("DELETE FROM libro WHERE id = :id");
        $consulta->bindValue('id', $this->getId());
        return $consulta->execute();
    }

    public function actualizar(){
        $insert = $this->db->prepare('UPDATE libro SET nombre = :nombre, autor = :autor, anio_edicion = :anio_edicion, paginas = :paginas, editorial = :editorial WHERE id = :id');
        $insert->bindValue('id', $this->getId());
        $insert->bindValue('nombre', $this->getNombre());
        $insert->bindValue('autor', $this->getAutor());
        $insert->bindValue('anio_edicion', $this->getAnioEdicion());
        $insert->bindValue('paginas', $this->getPaginas());
        $insert->bindValue('editorial', $this->getEditorial());
        return $insert->execute();
    }
}

?>