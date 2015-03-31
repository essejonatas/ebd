<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<title><?= $titulo ?></title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.95.3/css/materialize.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.95.3/js/materialize.min.js"></script>

</head>

<body>
	<ul id="dropdown1" class="dropdown-content">
	  <li><a href="#!">Certificado</a></li>
	  <li><a href="#!">Certificado 2</a></li>
	  <li class="divider"></li>
	  <li><a href="#!">Certificado 3</a></li>
	</ul>

	<ul id="dropdown2" class="dropdown-content">
	  <li><a href="#!">Frequência</a></li>
	  <li><a href="#!">Relatório 2</a></li>
	  <li class="divider"></li>
	  <li><a href="#!">Relatório 3</a></li>
	</ul>
	<nav class="cyan darken-4">
	<div class="nav-wrapper container">
	    <a href="#!" class="brand-logo">EBD</a>
	    <ul class="right hide-on-med-and-down">
	      <li><a href="sass.html">Escala</a></li>
	      <li><a href="sass.html">Frequência</a></li>
	      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Certificados<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
	      <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Relatórios<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
	    </ul>
	  </div>
	</nav>
	        

	<div class="container">