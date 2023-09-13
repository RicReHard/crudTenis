<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="Views/css/style.css">
    <title>Inserción de Producto</title>
</head>
<body>
<div class="container mt-5">
    <?php
    require_once ('../Models/conexion.php');
    require_once ('../Models/consultas.php');

    $mensaje = null;

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['categoria'];
    $precio = $_POST['precio'];

    if(strlen($nombre) > 0 && strlen ($descripcion) > 0 && strlen ($categoria) > 0 && strlen ($precio) > 0) {
        $consultas = new Consultas ();
        $mensaje = $consultas -> insertarProducto($nombre, $descripcion, $categoria, $precio);
        echo '<div class="alert alert-success" role="alert">
                  Producto registrado con éxito.
              </div>';
        echo '<a href="../form.html" class="btn btn-primary">Nuevo Producto</a>';
        echo '<span style="margin: 0 10px;"></span>';
        echo '<a href="../Views/accion/verproductos.php" class="btn btn-primary">Ver Productos</a>';
    } else {
        echo '<div class="alert alert-danger" role="alert">
                  Complete todos los campos.
              </div>';
        echo '<a href="../form.html" class="btn btn-primary">Nuevo Producto</a>';
    }
    ?>
</div>
</body>
</html>