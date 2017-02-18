<!DOCTYPE html>
    <head>
         <meta charset="UTF-8">
        <link rel="stylesheet" href="../../css/template.css">
        <link rel="icon" type="image/png" href="../../images/favicon.png" />
        <title>Liste des produits</title>
    </head>
    <body>
       
        <h4>{$msg|upper}</h4>
    
   	<table>	
        <tr><th>Reference</th>
            <th>Désignation</th>
            <th>Prix unitaire HT</th>
            <th>Action</th>
            <th>Descriptif</th>
            <th>Stock</th>
            <th>Poids pièce</th>
        </tr>
        
	
        {foreach from=$listeProduits item=produit}
        <tr>
            <td>{$produit.reference}</td>
            <td><strong>{$produit.designation}</strong></td>
            <td>{$produit.prix_unitaire_HT}</td>
            <td>{$produit.quantite}</td>
            <td>{$produit.descriptif}</td>
            <td>{$produit.stock}</td>
            <td>{$produit.poids_piece}</td>
            
            <td><form action="index.php" method="POST">
                    <input type="hidden" name="id" value="{$produit.reference}"/>
                    <input type="hidden" name="gestion" value="produit"/>
                    <input type="submit" name="consulter" value="Consulter"/>
                </form>
            </td>
        </tr>
        {/foreach}
        
    
         </tr>
        
       </table><hr class="mef">
       
       Nombre de lignes retournées : {$nbLg}<br>
       
     
       <!-- Bouton ajouter un produit-->
        <form action="index.php" method="post">
            Ajouter un produit :
            <input type="submit" name="ajouter" value="Ajouter"/>
        </form>

    <hr class="mef">
        
        <a href='../../index.php'>Retour à l'accueil</a>
    </body>
</html>
