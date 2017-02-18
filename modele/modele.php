<?php

function executeRequete($cnx, $sql, $parametres=NULL)
{
	if($parametres == NULL)
	{
		$resultat = $cnx->query($sql); //Requête simple
	}
	else {
		
		$resultat = $cnx->prepare($sql); // Requête préparée
      		$resultat = $resultat->execute($parametres);
	}
        
	return $resultat;
}

//MES DONNEES EN DUR BEURK !
function getBdd() {
    $cnx = connexion("root", "root", "sucrerie","127.0.0.1");
    return $cnx;
}

function connexion($parametreNom, $parametreMotPasse,
         $parametreBase, $parametreServeur)
 {
    try {
       $cnx = new PDO('mysql:host='.$parametreServeur.';dbname='.$parametreBase,
       $parametreNom,$parametreMotPasse,array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        // On retourne la variable de connexion
        return $cnx;

     } catch (PDOException $montreMoi) {

         echo 'Échec lors de la connexion : ' . $montreMoi->getMessage();
         exit;
     }


  // Fin de la fonction
 } 