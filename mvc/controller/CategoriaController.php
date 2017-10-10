<?php
include_once('model/CategoriaModel.php');
include_once('view/CategoriaView.php');

class CategoriaController extends SecuredController
{
  //private $palabrasProhibidasModel;

  function __construct()
  {
    parent::__construct();
    $this->view = new CategoriaView(); // construye el objeto CategoriaView
    $this->model = new CategoriaModel();// construye el objeto CategoriaModel
  //  $this->palabrasProhibidasModel = new PalabrasProhibidasModel();
  }

  public function index()
  {

    $categorias = $this->model->getCategoria();
    $this->view->mostrarCategoria($categorias);
  }

  public function create()
  {
    $this->view->mostrarCrearCategoria();
  }

  public function store()
  {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    if(isset($_POST['nombre']) && !empty($_POST['nombre'])){
      $this->model->guardarCategoria($nombre, $descripcion);
      header('Location: '.HOME);
      }else{
          $this->view->errorCrear("El campo nombre es requerido", $nombre, $descripcion);
      }
    }

  public function destroy($params)
  {
    $id = $params[0];
    $this->model->borrarCategoria($id);
    header('Location: '.HOME);
  }

  public function finish($params)
  {
    $id= $params[0];
    $this->model->finalizarCategoria($id);
    header('Location: '.HOME);
  }


}

 ?>
