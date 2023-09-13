<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="Views/css/style.css">
    <title>Modificación de Producto</title>
</head>
<body>
    <div class="container mt-5">
        <?php
        require_once ('../Models/conexion.php');
        require_once ('../Models/consultas.php');

        $msj = null;
        $consultas = new Consultas();
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $categoria = $_POST['categoria'];
        $precio = $_POST['precio'];
        $id_producto = $_POST['id_producto'];

        if(strlen($nombre) > 0 && strlen($descripcion) > 0 &&strlen($categoria) > 0 &&strlen($precio) > 0){
            $msj = $consultas->modificarProducto("nombre", $nombre, $id_producto);
            $msj = $consultas->modificarProducto("descripcion", $descripcion, $id_producto);
            $msj = $consultas->modificarProducto("categoria", $categoria, $id_producto);
            $msj = $consultas->modificarProducto("precio", $precio, $id_producto);
            echo $msj;
            echo '<div class="alert alert-success mt-3" role="alert">
                      <a href="../Views/accion/verproductos.php" class="btn btn-primary">Ver Productos</a>
                  </div>';
        } else {
            echo '<div class="alert alert-danger">Por favor rellene todos los campos, son obligatorios</div>';
        }
        ?>
    </div>
</body>
</html>
