<?php

function seleccionar (){
    if(isset($_GET['id_producto'])){
        $consultas = new Consultas();
        $id_producto = $_GET['id_producto'];
        $filas = $consultas->cargarProducto($id_producto);
          
        foreach ($filas as $fila){

            echo '<div class="container"><form action ="../../Controllers/modificarproducto.php?id_producto='.$id_producto.'" method = "post">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre"  value="'.$fila['nombre'].'">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
            <textarea class="form-control" name="descripcion" rows="3">'.$fila['descripcion'].'</textarea>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Categoria</label>
            <input type="text" class="form-control" name="categoria"  value="'.$fila['categoria'].'">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Precio</label>
            <input type="text" class="form-control" name="precio"  value="'.$fila['precio'].'">
          </div>
      
          <input type="hidden" name="id_producto" value="'.$id_producto.'">
      
          <button type="submit" class="btn btn-outline-primary" value="Modificar Producto">Editar Producto</button>
    </form>
    </div>';

        }

        
    }
}

?>