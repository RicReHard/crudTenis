<?php

class Consultas{
    public function insertarProducto($arg_nombre,$arg_descripcion,$arg_categoria,$arg_precio){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "insert into productos (nombre, descripcion, categoria, precio) 
        values(:nombre, :descripcion, :categoria, :precio)";
        $statement = $conexion -> prepare($sql);
        $statement->bindParam(':nombre',$arg_nombre);
        $statement->bindParam(':descripcion',$arg_descripcion);
        $statement->bindParam(':categoria',$arg_categoria);
        $statement->bindParam(':precio',$arg_precio);
        if(!$statement){
            return "Error al crear el registro";
        }else{
            $statement->execute();
            return "Producto registrado con éxito.";
        }

    }
    
    public function cargarProductos(){
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from productos";
        $statement = $conexion->prepare($sql);
        $statement->execute();
    
        while($result = $statement->fetch())
        {
           $rows[]=$result;
        }
        return $rows;
    }

    public function eliminarProducto($arg_id_producto){
        $modelo = new Conexion ();
        $conexion = $modelo->get_conexion();
        $sql = "delete from productos where id_producto = :id_producto";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id_producto', $arg_id_producto);
        if(!$statement){
          return "Error al eliminar producto";
        } else {
            $statement->execute();
            return "Producto eliminado con éxito";
        }
    }

    public function buscarProductos($arg_nombre){
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $nombre = "%".$arg_nombre."%";
        $sql = "select * from productos where nombre like :nombre";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(":nombre", $nombre);
        $statement->execute();
    
        while($result = $statement->fetch())
        {
           $rows[]=$result;
        }
        return $rows;

    }

    public function cargarProducto($arg_id_producto){
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from productos where id_producto = :id_producto";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(":id_producto", $arg_id_producto);
        $statement->execute();
    
        while($result = $statement->fetch())
        {
           $rows[]=$result;
        }
        return $rows;
    }

    public function modificarProducto($arg_campo, $arg_valor, $arg_id_producto){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "UPDATE productos set $arg_campo = :valor where id_producto = :id_producto";
        $statement = $conexion->prepare($sql);   
        $statement->bindParam(":valor",$arg_valor);
        $statement->bindParam(":id_producto",$arg_id_producto);
        if (!$statement){
            return "Error al modificar el producto";
        } else {
            $statement->execute();
            return "Producto modificado con éxito";
        }
    }

}


?>