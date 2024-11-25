<?php

session_start();

if(!isset($_SESSION['usuario'])){
    echo '
    <script>
        alert("Por favor debes iniciar sesión");
        window.location = "index.php";
    </script>
    ';
    session_destroy();
    die();
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenidos/as</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="inicio.png">
</head>
<body class="body">
    
   <header id="HEADER">

   <h2 class="logo">Binvenidos al 4to B de INF</h2>
    <input type="checkbox" id="menu" />
    <label for="menu">
        <img src="images/menu.png" alt="menu-icono">
    </label>

    <ul class="menu">
   
      <li class="item"><a href="Puestos y Cargos.php" class="item">Puestos y cargos</a></li>
      <li class="item"><a href="Contactos.php" class="item">Contactos</a></li>
      <li class="item"><a href="Galeria.php" class="item">Fotos de Participaciones</a></li>
      <li class="buttom"><a href="php/cerrar_sesion.php">Cerrar Sesion</a></li>
    </ul>

   </header> 
    



</body>
</html>