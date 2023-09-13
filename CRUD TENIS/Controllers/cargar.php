<?php
function cargar(){
    $consultas = new Consultas();
    $filas = $consultas->cargarProductos();

      foreach ($filas as $fila) {
        echo"<tr>";
        echo "<td>" .$fila['id_producto']."</td>";
        echo "<td>" .$fila['nombre']."</td>";
        echo "<td>" .$fila['descripcion']."</td>";
        echo "<td>" .$fila['categoria']."</td>";
        echo "<td>" .$fila['precio']."</td>";
        echo "<td> <a href='../../Controllers/eliminar.php?id_producto=".$fila['id_producto']."'> Eliminar</td>";
        echo "<td> <a href='../../Views/accion/modificar.php?id_producto=".$fila['id_producto']."'> Editar</td>";
        echo"</tr>";
     
    }

 }

 function buscar($nombre){
  $consultas = new Consultas();
  $filas = $consultas->buscarProductos($nombre);

    foreach ($filas as $fila) {
      echo"<tr>";
      echo "<td>" .$fila['id_producto']."</td>";
      echo "<td>" .$fila['nombre']."</td>";
      echo "<td>" .$fila['descripcion']."</td>";
      echo "<td>" .$fila['categoria']."</td>";
      echo "<td>" .$fila['precio']."</td>";
      echo "<td> <a href='../../Controllers/eliminar.php?id_producto=".$fila['id_producto']."'> Eliminar</td>";
      echo "<td> <a href='../../Views/accion/modificar.php?id_producto=".$fila['id_producto']."'> Editar</td>";
      echo"</tr>";
   
  }
  
  if (isset($filas)){
    foreach ($filas as $fila) {
      echo"<tr>";
      echo "<td>" .$fila['id_producto']."</td>";
      echo "<td>" .$fila['nombre']."</td>";
      echo "<td>" .$fila['descripcion']."</td>";
      echo "<td>" .$fila['categoria']."</td>";
      echo "<td>" .$fila['precio']."</td>";
      echo "<td> <a href='../../Controllers/eliminar.php?id_producto=".$fila['id_producto']."'> Eliminar</td>";
      echo "<td> <a href='../../Views/accion/modificar.php?id_producto=".$fila['id_producto']."'> Editar</td>";
      echo"</tr>";
   
    }

  }

 }
?>