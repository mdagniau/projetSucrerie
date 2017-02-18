<?php

switch ($gestion) {
    case 'produit':
        require_once($gestion . 'Controleur.php');
        break;
    default:
        error_log('Impossible');
}



if (isset($_POST['ajouter'])) {
    ajouter();
} elseif (isset($_POST['valider'])) {
    valider($_POST);
} elseif (isset($_POST['consulter'])) {
    echo $_POST['id'];
    consulter($_POST);
} else {
    error_log('Call to liste() is commented');
    //  liste();
}