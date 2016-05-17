<!DOCTYPE HTML>
<?php session_start();
require_once 'fonctionconnexion.php' ;
?>
<html>
<head>
	<title>Accueil</title>
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
	<?php
	
	$bdd=connect() ;
	try
	{
	$sql='select * from produit P, exister E , plateforme Pf 
		  where P.Id_produit=E.Id_produit 
		  and E.NumPlat=Pf.NumPlat 
		  and Pf.NomPlat="PC"' ; 
	$resultat= $bdd->query($sql); //exec pour un update au lieu de query
	echo '<table>';
	echo '<ul class="produits">';
	while($produits=$resultat->fetch(PDO::FETCH_OBJ))
	{
	echo "<li>
			<span class='titre' >".$produits->Nom_Produit."</span>
			<span class='image'><img src='Images/Jeux/".$produits->photo."'/></span>
			<span class='Etat'>".$produits->Etat." --------- ".$produits->Prix."€</span>
			<a href='ajout_panier.php?ajout='".$produits->Id_produit."><button>Ajouter au panier</button></a>
		  </li>";
	}
	}

	catch(PDOException $e)
	{
	echo"erreur dans la requete",$e->getMessage();
	}
	?>
	</ul>
	</table>
		
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