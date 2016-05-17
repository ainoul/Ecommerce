<?php 
include 'utilisateurFactory.class.php';
session_start();
if (!empty($_POST))
{
	extract($_POST);
	$valid=true;
}
if ($valid)
{
	utilisateurFactory::logUtilisateur($login, $mdp);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<center>
	<fieldset>
	<form class="well">
		
		<legend>Identifiez-vous</legend>
		
		Login :</br><input type="text" name="" class="form-group">
		</br>
		Votre Mot de Passe :</br><input type="text" name="" class="form-group">
		</br>
		<button type="button" class="btn btn-success">Connexion</button>
		<button type="button" class="btn btn-danger">Annuler</button>
		</br></br>
		<a class="btn btn-warning btn-xs" href="inscription.php">S'inscrire</a>

	</form>
	</fieldset>
	</center>
</body>
</html>