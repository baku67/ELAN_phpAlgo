<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>

<?php
$prix_unitaire = 9.99;
$quantite = 5;
$taux_tva = 0.2;

$result = $prix_unitaire * $quantite + ($prix_unitaire * $quantite * $taux_tva);

$display = "<h2>Prix unitaire de l'article: $prix_unitaire €</h2><br>";
$display .= "<h2>Quantité: $quantite</h2><br>";
$display .= "<h2>Taux TVA: $taux_tva</h2><br>";
$display .= "<h2>Le montant de la facture à régler est de : $result €</h2><br>";
echo $display;

?>