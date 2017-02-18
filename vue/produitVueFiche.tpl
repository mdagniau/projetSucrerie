<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../css/template.css">
        <link rel="icon" type="image/png" href="../../images/favicon.png" />
    </head>
    <body>
        <h3> {$titreForm}</h3>
        <form action="index.php" method="post">
            
            <div class="lib">{$designation}</div><div class="val"><input type="text" name="designation" value="{$valDesignation}"/></div>
            <div class="lib">{$quantite}</div><div class="val"><input type="text" name="quantite" value="{$valQuantite}"/></div>
            <div class="lib">{$descriptif}</div><div class="val"><input type="text" name="descriptif" value="{$valDescriptif}"/></div>
            <div class="lib">{$puht}</div><div class="val"><input type="text" name="prix_unitaire_HT" value="{$valPuht}"/></div>
            <div class="lib">{$stock}</div><div class="val"><input type="text" name="stock" value="{$valStock}"/></div>
            <div class="lib">{$pp}</div><div class="val"><input type="text" name="poids_piece" value="{$valPp}"/></div>
           <hr class="mef">
            {if $action eq 'A'}
                <input type="submit" name="valider" value="Valider"/>
            {/if}
            <input type="submit" name="retour" value="Retour à la liste"/>
        </form>
            
            <hr class="mef">
        
        <a href='../../index.php'>Retour à l'accueil</a>
        
    </body>
</html>
