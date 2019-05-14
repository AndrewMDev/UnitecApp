<?php require_once 'conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Blog Uningeniero</title>
		<link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
		<link rel="icon" href="./assets/img/logo.jpg">
		
	</head>
	<body>
		<!-- CABECERA -->
		<header id="cabecera">
			<!-- LOGO -->
			<div class="header-logo">
						<a class="logo" href="index.php">
							<img src="./assets/img/logo.jpg" alt="">
						</a>
			</div>
			
			<!-- MENU -->
			<nav id="menu">
				<ul>
					<li>
						<a href="index.php">Inicio</a>
					</li>
					<?php 
						$categorias = conseguirCategorias($db);
						if(!empty($categorias)):
							while($categoria = mysqli_fetch_assoc($categorias)): 
					?>
								<li>
									<a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?></a>
								</li>
					<?php
							endwhile;
						endif;
					?>
					
					
				</ul>
			</nav>
			
			<div class="clearfix"></div>
		</header>
		
		<div id="contenedor">