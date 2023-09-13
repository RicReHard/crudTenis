<?php
require_once ('../../Models/conexion.php');
require_once ('../../Models/consultas.php');
require_once ('../../Controllers/cargar.php');
?>

<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="../css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<head>
    <title>CRUD</title>
    <style>
        body {
            background-image: url('../img/blue3.png');
            background-size: cover;
            background-position: center;
            background-color: #f0f0f0;
        }
    </style>
</head>

<body>
    <h1>Productos</h1>
    <div class="container">
    <form method="get" class="formulario">
        <div class="input-container">
            <input type="text" name="buscar" class="input-buscar" placeholder="Buscar...">
            <input type="submit" value="Buscar" class="boton-buscar">
        </div>
    </form>
         
        <div class="table-responsive">
        <table class="table table-striped table-bordered table-condensed table-hover">
            <thead class="text-center">
          <tr>
            <th>Id</th>
            <th>Nombre</th> 
            <th>Descripcion</th> 
            <th>Categoria</th>
            <th>Precio</th>
            <th>Eliminar</th>
            <th>Editar</th>
          </tr>
          </thead>
          </div>
        </div>
        </div>
   
    <?php 
    if(isset($_GET['buscar'])){
        buscar($_GET['buscar']);
    }else{
        cargar();
    }
     ?>
   
    <div class="container1">
        <a href="../../form.html" class="boton">Nuevo Producto</a>
    </div>
    </table>
    </div>
 
</body>
</html>