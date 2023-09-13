<?php
require_once ('../../Models/conexion.php');
require_once ('../../Models/consultas.php');
require_once ('../../Controllers/seleccionar.php');
?>



<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <style>
        body {
            background-image: url('../img/Blue.png');
            background-size: cover;
            background-position: center;
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <h1>Editar Producto</h1>
 
    <?php
     seleccionar();
    ?>

</body>
</html>