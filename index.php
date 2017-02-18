<?php
//DEFINE FOLDERS
$root = dirname(__FILE__) . DIRECTORY_SEPARATOR;

set_include_path('.' .
        PATH_SEPARATOR . $root . 'controleur' . DIRECTORY_SEPARATOR .
        PATH_SEPARATOR . $root . 'css' . DIRECTORY_SEPARATOR .
        PATH_SEPARATOR . $root . 'include' . DIRECTORY_SEPARATOR .
        PATH_SEPARATOR . $root . 'modele' . DIRECTORY_SEPARATOR .
        PATH_SEPARATOR . $root . 'vue' . DIRECTORY_SEPARATOR .
        PATH_SEPARATOR . get_include_path()
);
require_once('configuration.php');

//CALL LISTE FUNCTION
//HERE THIS FUNCTION IS COMMENTED
if (isset($_REQUEST['gestion'])) {
    $gestion = $_REQUEST['gestion'];
} else {
    $gestion = 'produit';
}
require_once('router.php');
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">

        <!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>JS/PHP Project</title>
        <script src="include/libs/jquery-3.1.1.js" type="text/javascript"></script>
        <script src="include/libs/bootstrap.js" type="text/javascript"></script>
        <script src="controleur/common.js" type="text/javascript"></script>
        <link href="include/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="include/css/styles.css" rel="stylesheet" type="text/css"/>
        <link href="include/css/demo.css" rel="stylesheet" type="text/css"/>
    </head>

    <body class="index">
        <div class="col-md-12" style="height:50vh; margin-top: 5%">
            <div class="col-md-12" style="background-color:white; color:#2c3e50; font-weight : bold; height:5vh;"><span style="margin-left:2%; font-size:3vh; vertical-align:middle">FICHE PRODUIT</span></div>
            <br/>
            <br/>
            <div class="col-md-12">                   
                <span id="designation" class="col-md-12" style="vertical-align: middle !important; font-size: 0,5em; margin-left:2%"></span></div>
            <!-- We hide some information to reuse them more easily in the JS file. -->
            <span id="indexTab" class="col-md-12" style="visibility: hidden"></span>
            <span id="nbRef" class="col-md-12" style="visibility: hidden"></span>
            <br/>
            <br/>
            <div class="col-md-12">
                <span id="reference_label" class="col-md-4" style="font-weight: bold; margin-left:2%">Référence du produit :</span>
                <span id="reference" class="col-md-4"></span>
            </div>
            <div class="col-md-12">
                <span id="description_label" class="col-md-4" style="font-weight: bold; margin-left:2%">Description du produit :</span>
                <span id="descriptif" class="col-md-4"></span>
            </div>
            <div class="col-md-12">
                <span id="quantity_label" class="col-md-4" style="font-weight: bold; margin-left:2%">Quantité de produits :</span>
                <span id="quantite" class="col-md-4"></span>
            </div>
            <div class="col-md-12">
                <span id="poids_label" class="col-md-4" style="font-weight: bold; margin-left:2%">Poids du produit :</span>
                <span id="poids_piece" class="col-md-4"></span>
            </div>
            <div class="col-md-12">
                <span id="stock_label" class="col-md-4" style="font-weight: bold; margin-left:2%">Stock :</span>
                <span id="stock" class="col-md-4"></span>
            </div>
            <div class="col-md-12">
                <span id="price_label" class="col-md-4" style="font-weight: bold; margin-left:2%">Prix HT du produit :</span>
                <span id="prix_unitaire_HT" class="col-md-4"></span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-4"><img onclick="getPreviousProduct()" src="include/img/gauche-icone-6895-96.png" /></div>
            <div class="col-md-4"></div>
            <div class="col-md-4"><img onclick="getNextProduct()" src="include/img/droite-icone-6895-96.png" /></div>
        </div>


    </body>
</html>

