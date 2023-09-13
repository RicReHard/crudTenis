<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">    
    <link rel="stylesheet" href="../Views/css/style.css">
    <title>Eliminación de Producto</title>
    
</head>
<body>
    <div class="container mt-5">
        <?php
        require_once ('../Models/conexion.php');
        require_once ('../Models/consultas.php');

        if(isset($_GET['id_producto'])){
            $id_producto = $_GET['id_producto'];
            $consultas = new Consultas ();
            $mensaje = $consultas->eliminarProducto($id_producto);
            echo $mensaje;

            // Agrega un botón estilizado de Bootstrap
            echo '<div class="alert alert-primary mt-3" role="alert">
                      <a href="../Views/accion/verproductos.php" class="btn btn-primary">Volver a Productos</a>
                  </div>';
        }
        ?>
    </div>
</body>
</html>
