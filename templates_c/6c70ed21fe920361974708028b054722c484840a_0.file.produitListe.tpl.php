<?php
/* Smarty version 3.1.29, created on 2016-06-07 13:25:24
  from "E:\wamp64\www\structureProduit\vue\produitListe.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5756cb4403e8e1_44092100',
  'file_dependency' => 
  array (
    '6c70ed21fe920361974708028b054722c484840a' => 
    array (
      0 => 'E:\\wamp64\\www\\structureProduit\\vue\\produitListe.tpl',
      1 => 1465305904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5756cb4403e8e1_44092100 ($_smarty_tpl) {
?>
<!DOCTYPE html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/template.css" />
        <link rel="icon" type="image/x-icon" href="css/images/favicon.ico" />
        <meta charset="UTF-8">
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
        
       </table><hr>
       
       Nombre de lignes retournées : <?php echo $_smarty_tpl->tpl_vars['nbLg']->value;?>
<br>
       
     
       <!-- Bouton ajouter un produit-->
        <form action="index.php" method="post">
            Ajouter un produit :
            <input type="submit" name="ajouter" value="Ajouter"/>
        </form>

    
    </body>
</html>
<?php }
}
