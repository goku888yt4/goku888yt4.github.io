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
<html lang="en">
<head>
  <title>Galeria</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="icono.jpg">
  
  <header id="HEADER">

<h2 class="logo">Galeria</h2>
 <input type="checkbox" id="menu" />
 <label for="menu">
	 <img src="images/menu.png" alt="menu-icono">
 </label>

 <ul class="menu">

   <li class="item"><a href="Bienvenida.php" class="item">Inicio</a></li>
   <li class="item"><a href="Puestos y Cargos.php" class="item">Puestos y cargos</a></li>
   <li class="item"><a href="Contactos.php" class="item">Contactos</a></li>
 </ul>

</header> 
 
 
 
 <style media="screen">

body{
	line-height: 1.5;
	font-family: sans-serif;
}
header {
  width: 100%;
  position: fixed;
  top: 0;
  left: 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 5%;
  height: 100px;
}
.logo {
  padding: 40px;
  color: #f2f2f2;

}
.menu{
 display: flex; 
 justify-content: center;
 align-items: center;
}

.item{
  margin: 0 15px;
  font-size: 18px;
  font-weight: 600;
  cursor: pointer;
  color: #003afa;
  text-decoration: none;
}
.item :hover{
 color: #000000; 
}
#menu {
  display: none;
}
.menu-icono {
  width: 25px;
}
label{
  cursor: pointer;
  display: none;
}

.hover{
  text-align: start;
  display: block;
  padding: 120px 250px;
  color: #162938;
}

*{
	margin:0;
	box-sizing: border-box;
}
.container{
	max-width: 1170px;
	margin:auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
img{
	max-width: 100%;
	vertical-align: middle;
}
/*.gallery*/
.gallery{
	width: 100%;
	display: block;
	min-height: 100vh;
	background-color: #2a2932;
	padding: 100px 0;
}
.gallery .gallery-filter{
	padding: 0 15px;
	width: 100%;
	text-align: center;
	margin-bottom: 40px;
}
.gallery .gallery-filter .filter-item{
	color: #ffffff;
	font-size: 17px;
  border: 2px solid white;
	text-transform: uppercase;
	display: inline-block;
  border-radius: 20px;
  margin-right: 8px;
	cursor: pointer;
  padding: 8px 20px 8px 20px;
	line-height: 1.2;
	transition: all 0.3s ease;
}
.gallery .gallery-filter .filter-item.active{
	color: white;
	border-color : #16b5ef;
  background: #16b5ef;
}
.gallery .gallery-item{
	width: calc(100% / 3);
	padding: 15px;

}
.gallery .gallery-item-inner img{
	width: 100%;
  border: 3px solid #d4dad9;
}
.gallery .gallery-item.show{
	animation: fadeIn 0.5s ease;
}
@keyframes fadeIn{
	0%{
		opacity: 0;
	}
	100%{
		opacity: 1;
	}
}
.gallery .gallery-item.hide{
	display: none;
}

/*responsive*/
@media(max-width: 491px){
	.gallery .gallery-item{
		width: 50%;
	}
}
@media(max-width: 467px){
    .gallery .gallery-item{
		width: 100%;
	}
	.gallery .gallery-filter .filter-item{
		margin-bottom: 10px;
	}
}
@media(max-width:991px){
  .menu{
      padding: 30px;
      margin: 0;
  }
  label{
      display: initial;
  }
  .menu {
      position: absolute;
      top: 100%;
      left: 0;
      right: 0;
      background-color: #323337;
      display: none;
      
  }
  .item{
      margin: 0 0 20px 0;
      width: 100%;
  }

  #menu:checked ~ .menu{
      display: initial;
  }
}

  </style>
</head>
<body>

<section class="gallery">
	<div class="container">
		<div class="row">
			<div class="gallery-filter">
				<span class="filter-item active" data-filter="all">Todos</span>

                                                              
			</div>
		</div>
		<div class="row">
			<!-- gallery item start -->
			<div class="gallery-item all">
				<div class="gallery-item-inner">
					<img src="imagenes/1.jpg" alt="shoe">
				</div>
			</div>
			<!-- gallery item end -->
                              <!-- gallery item start -->
			<div class="gallery-item all">
				<div class="gallery-item-inner">
					<img src="imagenes/2.jpg" alt="shoe">
				</div>
			</div>
			<!-- gallery item end -->
			<!-- gallery item start -->
			<div class="gallery-item all">
				<div class="gallery-item-inner">
					<img src="imagenes/3.jpg" alt="headphone">
				</div>
			</div>
			<!-- gallery item end -->
			<!-- gallery item start -->
			<div class="gallery-item all">
				<div class="gallery-item-inner">
					<img src="imagenes/4.jpg" alt="camera">
				</div>
			</div>
			<!-- gallery item end -->
			<!-- gallery item start -->
			<div class="gallery-item all">
				<div class="gallery-item-inner">
					<img src="imagenes/6.jpg" alt="headphone">
				</div>
			</div>
			<!-- gallery item end -->
			<!-- gallery item start -->
			<div class="gallery-item all">
				<div class="gallery-item-inner">
					<img src="imagenes/12.jpg" alt="camera">
				</div>
			</div>
			<!-- gallery item end -->
      			<div class="gallery-item all">
      				<div class="gallery-item-inner">
      					<img src="imagenes/5.jpg" alt="phone">
      				</div>
      			</div>

			<div class="gallery-item all">
				<div class="gallery-item-inner">
					<img src="imagenes/7.jpg" alt="camera">
				</div>
			</div>

			<div class="gallery-item all">
				<div class="gallery-item-inner">
					<img src="imagenes/13.jpg" alt="watch">
				</div>
			</div>

			<!-- gallery item start -->
			<div class="gallery-item all">
				<div class="gallery-item-inner">
					<img src="imagenes/9.jpg" alt="watch">
				</div>
			</div>
			<!-- gallery item end -->

                                             <!-- gallery item start -->
			<div class="gallery-item all">
				<div class="gallery-item-inner">
					<img src="imagenes/10.jpg" alt="watch">
				</div>
			</div>
			<!-- gallery item end -->
			<div class="gallery-item all">
				<div class="gallery-item-inner">
					<img src="imagenes/8.jpg" alt="watch">
				</div>
			</div>
			<div class="gallery-item all">
				<div class="gallery-item-inner">
					<img src="imagenes/14.jpg" alt="watch">
				</div>
			</div>
			<div class="gallery-item all">
				<div class="gallery-item-inner">
					<img src="imagenes/15.jpg" alt="watch">
				</div>
			</div>
			<div class="gallery-item all">
				<div class="gallery-item-inner">
					<img src="imagenes/16.jpg" alt="watch">
				</div>
			</div>
		</div>
	</div>
</section>

<script>


 const filterContainer = document.querySelector(".gallery-filter"),
 galleryItems = document.querySelectorAll(".gallery-item");

 filterContainer.addEventListener("click", (event) =>{
   if(event.target.classList.contains("filter-item")){
   	 // deactivate existing active 'filter-item'
   	 filterContainer.querySelector(".active").classList.remove("active");
   	 // activate new 'filter-item'
   	 event.target.classList.add("active");
   	 const filterValue = event.target.getAttribute("data-filter");
   	 galleryItems.forEach((item) =>{
       if(item.classList.contains(filterValue) || filterValue === 'all'){
       	item.classList.remove("hide");
       	 item.classList.add("show");
       }
       else{
       	item.classList.remove("show");
       	item.classList.add("hide");
       }
   	 });
   }
 });
</script>
</body>
</html>
