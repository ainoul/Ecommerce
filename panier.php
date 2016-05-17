<!DOCTYPE HTML>
<?php
session_start();
require 'fonctionconnexion.php';
$bdd= connect();
?>
<html>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="bootstrap-3.3.4/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="bootstrap-3.3.4/js/bootstrap.min.js"></script>
  <script src="bootstrap-3.3.4/js/jquery.js"></script>
  <script src="bootstrap-3.3.4/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <?php include "header.php" ?>
    <div id="panier">
    <h2>Votre Panier </h2>
         <table>
          <thead>
            <tr>
              <th class="text" >Produit</th>
              <th>Prix Unit.</th>
              <th>Quantité</th>
              <th>Montant</th>
              <th colspan='2'>Actions </th>
  			   </tr>
          </thead>
        <tbody>
<?php
foreach ($_SESSION['panier'] as $id => $Qte) {
  try{
  $sql='Select * 
        From produit P, exister E, plateforme Pf, appartenir Ap
        Where P.Id_produit=E.Id_produit 
        And E.NumPlat=Pf.NumPlat
        And P.Id_produit=Ap.Id_produit
        And P.Id_produit="$id"';
  $res=$bdd->query($sql);
  echo '<ul class="produitsp">';
    while($produit=$res->fetch(PDO::FETCH_OBJ)){
      echo '<tr>
            <th class="text" >'.$produits->Nom_Produit.'</th>
            <th>'.$nombre_format_francais = number_format($exister->prix, 2, ',', '2').'€</th>
            <th>'.$Qte.'</th>
            <th>'.$nombre_format_francais = number_format($Qte*$exister->prix, 2, ',', '2').'€</th>
            <th colspan="2"><a href="ajouter_panier.php?ajouter='.$produits->Id_produit.'"><img src="Images/ajouterPanier.jpg">
                            <a href="retrait_panier.php?retrait='.$produits->Id_produit.'"><img src="Images/retirerPanier.jpg"></a></th>
            </tr>';
    }
  }
  catch(PDOException $e){
  echo 'Erreur dans la requête'. $e->getMessage();
  return false;
  }
}
?>         
        </tbody>
      </table>
      </div>
<div class="total" ></div>
</body>
<footer>
</footer>
</html>

