<?php
require("libs/smarty.class.php"); 

$tpl = new Smarty();

//Chargement des données
$listeProduits = array();
$i = 0;
while($row = $idResultat->fetch()){
    $listeProduits[$i]['reference'] = $row['reference'];
    $listeProduits[$i]['designation'] = $row['designation'];
    $listeProduits[$i]['prix_unitaire_HT'] = $row['prix_unitaire_HT'];
    $listeProduits[$i]['quantite'] = $row['quantite'];
    $listeProduits[$i]['descriptif'] = $row['descriptif'];
    $listeProduits[$i]['stock'] = $row['stock'];
    $listeProduits[$i]['poids_piece'] = $row['poids_piece'];
    $i++;
}
$nbLg = $idResultat->rowCount();
$tpl->assign('msg', "Liste des bons produits");
$tpl->assign('nbLg', $nbLg);
$tpl->assign('listeProduits', $listeProduits);
$tpl->display("vue/produitVueListe.tpl");
