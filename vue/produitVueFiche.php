<?php
require("libs/smarty.class.php"); 

$tpl = new Smarty();


$tpl->assign("designation","Designation :");
$tpl->assign("quantite","Quantité : ");
$tpl->assign("descriptif","Descriptif :");
$tpl->assign("puht","Prix unitaire HT :");
$tpl->assign("stock","Stock :");
$tpl->assign("pp","Poids Pièce :");

switch($action){
    case "A":
        //Titre
        $tpl->assign("titreForm","Ajouter un produit");
        //Valeur / value
        $tpl->assign("valDesignation","");
        $tpl->assign("valQuantite","");
        $tpl->assign("valDescriptif","");
        $tpl->assign("valPuht","");
        $tpl->assign("valStock","");
        $tpl->assign("valPp","");  
        
        break;
    case "C":
        //Titre
        $tpl->assign("titreForm","Consultation un produit");
         //Valeur / value
        $row = $idResultat->fetch();
        $tpl->assign("valDesignation",$row['designation']);
        $tpl->assign("valQuantite",$row['quantite']);
        $tpl->assign("valDescriptif",$row['descriptif']);
        $tpl->assign("valPuht",$row['prix_unitaire_HT']);
        $tpl->assign("valStock",$row['stock']);
        $tpl->assign("valPp",$row['poids_piece']); 
       
        
        break;
}

        //Affichage
        $tpl->assign("action", $action);
        $tpl->display("vue/produitVueFiche.tpl");
