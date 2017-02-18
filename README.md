@ETUDIANTS DE DISII 2016/2017 (CCI Indre)
# projetSucrerie
Ce projet a pour but de coupler du PHP côté serveur et du JS côté client.
L'objectif est de récupérer les données d'une base de données (Sucrerie) dans laquelle se trouve des produits de type "Bonbon". 
Il faut les afficher dans une fiche "Produit" et pouvoir faire défiler chaque fiche.
Cependant, dans notre base de données, aucune clef primaire n'est un entier qui s'incrémente automatiquement. 
Pour palier ce problème, toutes les clefs primaires (reference) ont été récupérées et on appelle ensuite la méthode qui nous retourne les produits 
en fonction de la référence que nous souhaitons voir.

#Connexion bdd
Les données de connexion à la base de données sont écrites en dur dans le fichier modele.php. A modifier en fonction de votre conf.

# Partie PHP
J'ai mis en commentaire l'appel de la méthode liste() à l'initialisation du projet.

#Explications sur le fonctionnement de l'application
Des commentaires sont disséminés un peu partout dans le projet pour vous expliquer ce qui a été fait. 
N'oubliez pas de regarder dans index.php surtout !
Pensez à les lire et envoyez-moi un mail si besoin.
