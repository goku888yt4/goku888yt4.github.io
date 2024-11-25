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
    <title>Contactos</title>
    <link rel="stylesheet" href="estilos1.css">
    <link rel="shortcut icon" href="Contactos.png">
</head>
<body class="body">
    
   <header id="HEADER">

   <h2 class="logo">Contactos</h2>
    <input type="checkbox" id="menu" />
    <label for="menu">
        <img src="images/menu.png" alt="menu-icono">
    </label>

    <ul class="menu">
   
      <li class="item"><a href="bienvenida.php" class="item">Inicio</a></li>
      <li class="item"><a href="Puestos y Cargos.php" class="item">Puestos y Cargos</a></li>
      <li class="item"><a href="Galeria.php" class="item">Fotos de Participaciones</a></li>
    </ul>
</header>

<nav class="hover">
<h2>Presidente: +1 (829) 853-3934</h2>
<h2>Vicepresidente: +1 (849) 441-8233</h2>
<h2>Secretaria: +1 (829) 351-1693</h2>
<h2>Tesorero: +1 (829) 487-2772</h2>
<h2>Encargado de disiplina: +1 (829) 396-8203</h2>
<h2>Encargada de relaciones publicas: +1 (849) 281-0361</h2>
<h2>Ecargado de deporte: +1 (829) 453-1901</h2>
<h2>Primer vocal: +1 (809) 208-7722</h2>
</nav>



</body>
</html>