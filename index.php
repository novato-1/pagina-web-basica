<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!--agregar icono-->
	<link rel="icon" type="image/png" href="ico/icono.ico" />
	
	<!--nombre de la pagina-->
	<title>Umbari</title> 
	
	<!--descripcion de la pagina--> 
	<meta name="description" content="Umbari es un proyecto de creacion de pagina web para emprendedores"/>
	<!--palabras claves de la pagina-->
	<!--<meta name="keywords" content="emprendimiento, ecommerce, marketing"/>-->
	
	<!--autor-->
	<meta name="author" content="Steven Arias" />
	
	<!--para los iconos-->
	<link rel="stylesheet" href="css/all.min.css">
	
	<!--estilos de letras-->
	<link href = "https://fonts.googleapis.com/css2? family = Roboto + Mono: wght @ 100 & family = Roboto: wght @ 100 & display = swap" rel = "stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i%7CRajdhani:400,600,700"rel="stylesheet"> 

	<!-- Plugins estilos -->
    <link rel="stylesheet" href="css/loader/loaders.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/aos/aos.css">
    <link rel="stylesheet" href="css/swiper/swiper.css">
    <link rel="stylesheet" href="css/lightgallery.min.css">

	<!--estilos css personalizados-->
	<link rel="stylesheet" href="css/navegador.css">
	<link rel="stylesheet" href="css/services.css">
	<link rel="stylesheet" href="css/precios.css">
	<!--<link rel="stylesheet" href="css/precios.css">-->
	<link rel="stylesheet" href="css/nosotros.css">
	<link rel="stylesheet" href="css/contactenos.css">
	<link rel="stylesheet" href="css/footer.css">	
</head>
<body>
	<?php
		include("vistas/navegador.php");
		include("vistas/carrusel.php");
		include("vistas/servicios.php");
		include("vistas/precios.php");
		include("vistas/nosotros.php");
		include("vistas/contactenos.php");
		include("vistas/footer.php");	
	?>
	
	
	<!--archivos js de bootstrap-->
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.bundle.js"></script>
	<script src="js/jquery-3.5.1.js"></script>
	<script src="js/loaders.css.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/lightgallery-all.min.js"></script>
    <!--Template Script-->
    <script src="js/main.js"></script>
</body>
</html>