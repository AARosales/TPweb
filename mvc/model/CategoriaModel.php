<?php
class CategoriaModel extends Model
{
  function getCategoria(){
    $sentencia = $this->db->prepare("select * from categoria"); //conecta con la tabla de MySQL
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function guardarCategoria($nombre, $descripcion){
    $sentencia = $this->db->prepare('INSERT INTO categoria(nombre, descripcion) VALUES(?,?)');
    $sentencia->execute([$nombre, $descripcion]);
  }

  function borrarCategoria($id){
    $sentencia = $this->db->prepare("delete from categoria where id=?");
    $sentencia->execute([$id]);
  }
}

 ?>
