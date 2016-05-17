<?php
//Démarrage de la session:
session_start();
//Ecriture d'une valeur dans le tableau de la session:
$id=$_GET["ajout"];
if (!isset($_SESSION['panier'])){
	//Création de la variable de session:
	$_SESSION['panier']=array();
}
if (!isset($_SESSION['panier'])){
	//Ajoute 1 à la quantité
	$_SESSION['panier'][$id=1];
}
//Renvoi automatique vers la page désignée:
header("location:accueil.php");
?>