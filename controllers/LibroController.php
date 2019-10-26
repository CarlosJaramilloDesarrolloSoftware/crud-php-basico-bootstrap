<?php
session_start();
require_once("../config/conexion.php");
require_once("../models/LibroModel.php");

if(isset($_GET["funcion"])){
    $funcion = $_GET["funcion"];

    switch($funcion){
        case "listar" :
            $libro = new LibroModel();
            $listaLibros = $libro->listar();
            $tituloPagina = "Lista libros";
            include_once("../views/common/cabecera.php");
            include_once("../views/common/alerta.php");
            include_once("../views/common/menu.php");
            include_once("../views/libro/listar.php");
            include_once("../views/common/pie.php");
            break;

        case "nuevo" :
            if(isset($_POST["insertar"])){
                $libro = new LibroModel();
                $libro->setNombre($_POST["nombre"]);
                $libro->setAutor($_POST["autor"]);
                $libro->setAnioEdicion($_POST["anioEdicion"]);
                $libro->setPaginas($_POST["paginas"]);
                $libro->setEditorial($_POST["editorial"]);

                $guardar = $libro->insertar();
                if($guardar){
                    $_SESSION["alert"] = ["tipo" => "success", "mensaje" => "Libro insertado con éxito"];
                    header('Location: LibroController.php');
                }else{
                    $_SESSION["alert"] = ["tipo" => "danger", "mensaje" => "Libro no insertado"];
                }
            }else{
                $tituloPagina = "Nuevo libro";
                include_once("../views/common/cabecera.php");
                include_once("../views/common/alerta.php");
                include_once("../views/common/menu.php");
                include_once("../views/libro/nuevo.php");
                include_once("../views/common/pie.php");
            }
            break;

        case "actualizar":
            if(isset($_GET["id"])){
                $id = $_GET["id"];
                $libro = new LibroModel();
                $libro->setId($id);
                if(isset($_POST["actualizar"])){
                    $libro->setNombre($_POST["nombre"]);
                    $libro->setAutor($_POST["autor"]);
                    $libro->setAnioEdicion($_POST["anioEdicion"]);
                    $libro->setPaginas($_POST["paginas"]);
                    $libro->setEditorial($_POST["editorial"]);

                    $actualizar = $libro->actualizar();
                    if($actualizar){
                        $_SESSION["alert"] = ["tipo" => "success", "mensaje" => "Libro actualizado con éxito"];
                        header('Location: LibroController.php');
                    }else{
                        $_SESSION["alert"] = ["tipo" => "danger", "mensaje" => "Libro no actualizado"];
                    }
                }else{
                    $libroActualizar =  $libro->consultar();
                    if($libroActualizar){
                        $libro->setId($libroActualizar["id"]);
                        $libro->setNombre($libroActualizar["nombre"]);
                        $libro->setAutor($libroActualizar["autor"]);
                        $libro->setAnioEdicion($libroActualizar["anio_edicion"]);
                        $libro->setPaginas($libroActualizar["paginas"]);
                        $libro->setEditorial($libroActualizar["editorial"]);
                        
                        $tituloPagina = "Actualizar el libro: " . $libro->getNombre();
                        include_once("../views/common/cabecera.php");
                        include_once("../views/common/alerta.php");
                        include_once("../views/common/menu.php");
                        include_once("../views/libro/actualizar.php");
                        include_once("../views/common/pie.php");

                    } else {
                        $_SESSION["alert"] = ["tipo" => "danger", "mensaje" => "No hay libro para actualizar"];
                        header('Location: LibroController.php');
                    }
                }
            }else{
                $_SESSION["alert"] = ["tipo" => "danger", "mensaje" => "No se a quien actualizar"];
                header('Location: LibroController.php');
            }
            break;

        case "eliminar":
            if(isset($_GET["id"])){
                $id = $_GET["id"];
                $libro = new LibroModel();
                $eliminar =  $libro->eliminar($id);
                if($eliminar){
                    $_SESSION["alert"] = ["tipo" => "success", "mensaje" => "Libro eliminado con éxito"];
                    header('Location: LibroController.php');
                }else{
                    $_SESSION["alert"] = ["tipo" => "danger", "mensaje" => "Libro no eliminado"];
                }
            }else{
                $_SESSION["alert"] = ["tipo" => "danger", "mensaje" => "No sé a quien eliminar"];
                header('Location: LibroController.php');
            }
            break;

        default:
            header('Location: LibroController.php');
    }
}else{
    header('Location: LibroController.php?funcion=listar');
    //include_once("../views/common/error.php");
}



?>