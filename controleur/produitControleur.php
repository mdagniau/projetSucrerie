<?php

//require '../modele/produitModele.php';
require 'modele/produitModele.php';

function liste() {

    $msg = "Liste des produits";
    $idResultat = listeProduits($msg);
    require 'produitVueListe.php';
}

function valider($parm) {

    $msg = validerAjoutProduit($parm);
    $idResultat = listeProduits($msg);
    require 'produitVueListe.php';
}

function ajouter() {

    $action = "A";
    require('produitVueFiche.php');
}

function consulter($id) {
    $action = "C";
    $msg = "Consultation des produits";
    $resultat = consulteProduitById($id);
    return $resultat;
}