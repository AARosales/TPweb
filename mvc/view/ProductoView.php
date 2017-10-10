<?php
class ProductoView extends View
{
  // function mostrarDetalle($detalles){
  //   $this->smarty->assign('detalles', $detalles);
  // //  $this->smarty->assign('producto', $producto);
  //   $this->smarty->display('templates/Detalle/index.tpl');
  // }
  function mostrarProductos($productos){
    $this->smarty->assign('productos', $productos);
    $this->smarty->display('templates/Producto/index.tpl');
    }
    
  function mostrarCrearProducto($categoria){
    $this->assignarProductoForm();
    $this->smarty->assign('categorias', $categoria);
    $this->smarty->display('templates/formCrearProducto.tpl');
  }

  function errorCrear($error, $id_categoria, $precio, $color, $talle, $stock){
    $this->assignarProductoForm($id_categoria, $precio, $color, $talle, $stock);
    $this->smarty->assign('error', $error);
    $this->smarty->display('templates/formCrearProducto.tpl');
  }

  private function assignarProductoForm($id_categoria='', $precio='', $color='', $talle='', $stock= 1){
    $this->smarty->assign('id_categoria', $id_categoria);
    $this->smarty->assign('precio', $precio);
    $this->smarty->assign('color', $color);
    $this->smarty->assign('talle', $talle);
    $this->smarty->assign('stock', $stock);

  }

}

 ?>
