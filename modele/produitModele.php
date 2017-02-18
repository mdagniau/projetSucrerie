<?php

include 'modele.php';
/************************************************************
 * GET PARAMETERS AND REDIRECT TO FUNCTION
 ************************************************************/
//GET FIRST PARAMETER
$function = filter_input(INPUT_POST, 'function');

//
//TEST IF PARAMETER IS EMPTY OR NOT
if (!empty($function) || !(is_null($function))) {
    //IF FUNCTION EQUALS 'getProduct'
    //YOU CAN USE OTHER FUNCTION LIKE THIS => ONE REQUETE TO DO MULTIPLE THINGS
    if ($function == 'getReferences') {
        getReferences();
    } else if ($function == 'getProduct') {
        getProduct();
    } else {
        returnResult(null, "This function is not recognized.");
    }
}



/************************************************************
 * CALL FUNCTION AND CONVERT TO JSON
 ************************************************************/
function getReferences() {
    //GET ALL REFERENCES
    $allReferences = convertReferencesToJson(getListReferences());
   returnResult($allReferences, null);
}

function getProduct() {
    //TEST IF PARAMETER IS EMPTY OR NOT
    $productToConsult = filter_input(INPUT_POST, 'reference');
    if (!empty($productToConsult) || !(is_null($productToConsult))) {
        //TEST IF PARAMETER IS NUMERIC
        if (is_numeric($productToConsult)) {
            getProductToJSON($productToConsult);
        } else {
            //CREATE ARRAY TO CONVERT ERROR MESSAGE TO JSON
            returnResult(null, "This reference is not a number.");
        }
    }
}

function getProductToJSON($reference) {
    $product = consulteProduitByReference($reference);
    $jsonProduct = convertProductToJson($product);
    //PUT PRODUCT IN OBJECT {"data" : "", "error" :""}
    returnResult($jsonProduct, null);
}


/************************************************************
 * CALL FUNCTIONS TO GET RESULT FROM BDD
 ************************************************************/
function listeProduits($msg, $parm = null) {

    $cnx = getBdd();
    $varQuery = "SELECT * FROM produit";
    $idRequete = executeRequete($cnx, $varQuery);
    return $idRequete;
}

function getListReferences() {

    $cnx = getBdd();
    $varQuery = "SELECT reference FROM produit";
    $idRequete = executeRequete($cnx, $varQuery);
    return $idRequete;
}

function consulteProduit($parm) {

    $cnx = getBdd();
    $id = $parm['id'];
    $varQuery = "SELECT * FROM produit WHERE reference = '$id'";
    $idRequete = executeRequete($cnx, $varQuery);
    return $idRequete;
}

function consulteProduitByReference($reference) {

    $cnx = getBdd();
    $varQuery = "SELECT * FROM produit WHERE reference = '$reference'";
    $idRequete = executeRequete($cnx, $varQuery);
    return $idRequete;
}

function validerAjoutProduit($parm) {

    $cnx = getBdd();

    //$reference=9000;
    $designation = $parm['designation'];
    $quantite = $parm['quantite'];
    $descriptif = $parm['descriptif'];
    $prix_unitaire_HT = $parm['prix_unitaire_HT'];
    $stock = $parm['stock'];
    $poids_piece = $parm['poids_piece'];

    $sql = 'INSERT INTO produit ( designation, quantite ,'
            . 'descriptif,  prix_unitaire_HT, stock, poids_piece)'
            . ' VALUES (?, ?, ?,?,?,?)';
    executeRequete($cnx, $sql, array($designation,
        $quantite, $descriptif, $prix_unitaire_HT, $stock, $poids_piece));

    return $message = "Insertion effectuée !";
}

/************************************************************
 * FUNCTION TO CONVERT OBJECTS TO JSON
 ************************************************************/
function convertProductToJson($resultat) {
    while ($row = $resultat->fetch()) {
        $tableau = array(
            "reference" => $row['reference'],
            "designation" => $row['designation'],
            "quantite" => $row['quantite'],
            "descriptif" => $row['descriptif'],
            "prix_unitaire_HT" => $row['prix_unitaire_HT'],
            "stock" => $row['stock'],
            "poids_piece" => $row['poids_piece']
        );
    }
    return $tableau;
}

function convertReferencesToJson($resultat) {
    while ($row = $resultat->fetch()) {
        $tableau[] = $row['reference'];
    }
    return $tableau;
}

/************************************************************
 * FUNCTION TO PUT RESULT IN GENERIC JSON
 ************************************************************/
function returnResult($data, $error) {
    $resultJson = array(
        "data" => $data,
        "error" => $error,
    );
    echo json_encode($resultJson);
}