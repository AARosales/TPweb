<?php
class CategoriaView extends View
{
  function mostrarCategoria($categorias){
    $this->smarty->assign('categorias', $categorias);
    $this->smarty->display('templates/index.tpl');
  }

  function mostrarCrearCategoria(){
    $this->assignarCategoriaForm();
    $this->smarty->display('templates/formCrear.tpl');
  }

  function errorCrear($error, $nombre, $descripcion){
    $this->assignarCategoriaForm($nombre, $descripcion);
    $this->smarty->assign('error', $error);
    $this->smarty->display('templates/formCrear.tpl');
  }

  private function assignarCategoriaForm($nombre='', $descripcion=''){
    $this->smarty->assign('nombre', $nombre);
    $this->smarty->assign('descripcion', $descripcion);
  }

}

 ?>
