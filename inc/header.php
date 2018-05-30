<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>SISTEMA-PORTARIA</title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>assets/css/bootstrap.min.css">

	<style type="text/css">
		body{
			padding-top: 50px;
			padding-bottom: 50px;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>assets/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">	
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expaned="false" aria-controls="navbar">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>					
				</button>
				<a href="<?php echo BASEURL;?>index.php" class="navbar-brand">SISTEMA-PORTARIA</a>
			</div	>
		</div>
		<div id="navbar"class="navbar-collpase collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expaned="false">
							Chaves<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo BASEURL;?>customers">Gerenciar Chaves</a></li>
							<li><a href="<?php echo BASEURL;?>customers/add.php">Inserir Nova Chave</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expaned="false">
							Porteiros<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo BASEURL;?>customers">Gerenciar Porteiros</a></li>
							<li><a href="<?php echo BASEURL;?>customers/add.php">Inserir Novo Porteiro</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expaned="false">
							Registros<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo BASEURL;?>customers">Gerenciar Registros</a></li>
							<li><a href="<?php echo BASEURL;?>customers/add.php">Novo Registro</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expaned="false">
							Veículos<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo BASEURL;?>customers">Gerenciar Veículos</a></li>
							<li><a href="<?php echo BASEURL;?>customers/add.php">Novo Veículo</a></li>
						</ul>
					</li>					
				</ul>
			</div><!--/.navbar-collapse -->
	</nav>
	<main class="container">
