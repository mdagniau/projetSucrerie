<?php
/* Smarty version 3.1.29, created on 2017-01-09 10:22:26
  from "D:\wamp64\www\coursphp\fondamentaux\mvc\vue\produitVueListe.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58736462bc9e19_63592777',
  'file_dependency' => 
  array (
    '36e69c3dd0ba2c09044880db8ad8f1191d7c44ef' => 
    array (
      0 => 'D:\\wamp64\\www\\coursphp\\fondamentaux\\mvc\\vue\\produitVueListe.tpl',
      1 => 1483957339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58736462bc9e19_63592777 ($_smarty_tpl) {
?>
<!DOCTYPE html>
    <head>
         <meta charset="UTF-8">
        <link rel="stylesheet" href="../../css/template.css">
        <link rel="icon" type="image/png" href="../../images/favicon.png" />
        <title>Liste des produits</title>
    </head>
    <body>
       
        <h4><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['msg']->value, 'UTF-8');?>
</h4>
    
   	<table>	
        <tr><th>Reference</th>
            <th>Désignation</th>
            <th>Prix unitaire HT</th>
            <th>Action</th>
            <!--<th>Descriptif</th>
            <th>Stock</th>
            <th>Poids pièce</th>-->
        </tr>
        
	
        <?php
$_from = $_smarty_tpl->tpl_vars['listeProduits']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_produit_0_saved_item = isset($_smarty_tpl->tpl_vars['produit']) ? $_smarty_tpl->tpl_vars['produit'] : false;
$_smarty_tpl->tpl_vars['produit'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['produit']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['produit']->value) {
$_smarty_tpl->tpl_vars['produit']->_loop = true;
$__foreach_produit_0_saved_local_item = $_smarty_tpl->tpl_vars['produit'];
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['produit']->value['reference'];?>
</td>
            <td><strong><?php echo $_smarty_tpl->tpl_vars['produit']->value['designation'];?>
</strong></td>
            <td><?php echo $_smarty_tpl->tpl_vars['produit']->value['prix_unitaire_HT'];?>
</td>
           
            <td><form action="index.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['produit']->value['reference'];?>
"/>
                     <input type="submit" name="consulter" value="Consulter"/>
                </form>
            </td>
            <!--<td><?php echo $_smarty_tpl->tpl_vars['produit']->value['quantite'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['produit']->value['descriptif'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['produit']->value['stock'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['produit']->value['poids_piece'];?>
</td>-->
        </tr>
        <?php
$_smarty_tpl->tpl_vars['produit'] = $__foreach_produit_0_saved_local_item;
}
if ($__foreach_produit_0_saved_item) {
$_smarty_tpl->tpl_vars['produit'] = $__foreach_produit_0_saved_item;
}
?>
        
    
         </tr>
        
       </table><hr class="mef">
       
       Nombre de lignes retournées : <?php echo $_smarty_tpl->tpl_vars['nbLg']->value;?>
<br>
       
     
       <!-- Bouton ajouter un produit-->
        <form action="index.php" method="post">
            Ajouter un produit :
            <input type="submit" name="ajouter" value="Ajouter"/>
        </form>

    <hr class="mef">
        
        <a href='../../index.php'>Retour à l'accueil</a>
    </body>
</html>
<?php }
}
