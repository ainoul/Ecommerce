<!DOCTYPE HTML>
<?php session_start();
require_once 'fonctionconnexion.php' ;
?>
<html>
<head>
	<title>Jeux</title>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="bootstrap-3.3.4/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="bootstrap-3.3.4/js/bootstrap.min.js"></script>
</head>

<body>

<?php include "header.php" ?>
<?php include "carousel.php" ?>

<div id="contenu">
<div class="container">
<h2>Choix de la plateforme</h2>
<button type="button" class="btn btn-primary btn-block" style="width:1000px">Jeux PC</button>
<button type="button" class="btn btn-default btn-block" style="width:1000px">Jeux PS4</button>
<button type="button" class="btn btn-primary btn-block" style="width:1000px">Jeux PS3</button>
<button type="button" class="btn btn-primary btn-block" style="width:1000px">Jeux XboX 360</button>
<button type="button" class="btn btn-primary btn-block" style="width:1000px">Jeux Xbox one</button>
</div>
		
	</div>
	<div id="pied">
		<p>
		Mathilde William & Molou Ainoul BTS SIO1A Tout droits reserves
		</p>
		<p id="copyright">
			&copy; 2015
		</p>
	</div>
</body>
<footer>
</footer>
</html>