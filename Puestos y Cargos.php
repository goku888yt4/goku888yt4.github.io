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
    <title>Puestos y cargos</title>
    <link rel="stylesheet" href="estilos2.css">
    <link rel="shortcut icon" href="descarga.png">
</head>
<body class="body">
    
   <header id="HEADER">

   <h2 class="logo">Binvenidos al 4to B de INF</h2>
    <input type="checkbox" id="menu" />
    <label for="menu">
        <img src="images/menu.png" alt="menu-icono">
    </label>

    <ul class="menu">
   
      <li class="item"><a href="bienvenida.php" class="item">Inicio</a></li>
      <li class="item"><a href="Contactos.php" class="item">Contactos</a></li>
      <li class="item"><a href="Galeria.php" class="item">Fotos de Participaciones</a></li>
    </ul>

   </header> 
    
   <nav class="contenedor">
    <h2>Presidente:Sleyther Perez</h2>
    <h2>Vicepresidente:Albert Arias</h2>
    <h2>Secretaria:Greiny Mateo</h2>
    <h2>Tesorero:Jairo Ernandez</h2>
    <h2>Encargado de disiplina:Alkendry Mateo</h2>
    <h2>Encargada de releciones publicas:Rossiel Castillo</h2>
    <h2>Encargado de deportes:John Mateo</h2>
    <h2>Primer vocal:Frankely Cipriane</h2>
</nav>


</body>
</html>