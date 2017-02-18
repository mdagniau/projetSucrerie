<?php
/* Smarty version 3.1.29, created on 2016-06-07 10:17:50
  from "E:\wamp64\www\structureProduit\vue\produitAjout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57569f4e29efc2_58125807',
  'file_dependency' => 
  array (
    'f39c2dd0bff4fb787c88099fc50f53aabc17f763' => 
    array (
      0 => 'E:\\wamp64\\www\\structureProduit\\vue\\produitAjout.tpl',
      1 => 1465294663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57569f4e29efc2_58125807 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/template.css" />
        <link rel="icon" type="image/x-icon" href="css/images/favicon.ico" />
        <meta charset="UTF-8">
    </head>
    <body>
        <h3> <?php echo $_smarty_tpl->tpl_vars['titreFormAjout']->value;?>
</h3>
        <form action="index.php" method="post">
            <?php echo $_smarty_tpl->tpl_vars['designation']->value;?>
<input type="text" name="designation" value=""/><br>
            <?php echo $_smarty_tpl->tpl_vars['quantite']->value;?>
<input type="text" name="quantite" value=""/><br>
            <?php echo $_smarty_tpl->tpl_vars['descriptif']->value;?>
<input type="text" name="descriptif" value=""/><br>
            <?php echo $_smarty_tpl->tpl_vars['puht']->value;?>
<input type="text" name="prix_unitaire_HT" value=""/><br>
            <?php echo $_smarty_tpl->tpl_vars['stock']->value;?>
<input type="text" name="stock" value=""/><br>
            <?php echo $_smarty_tpl->tpl_vars['pp']->value;?>
<input type="text" name="poids_piece" value=""/><br>
            <hr>
            <input type="submit" name="valider" value="Valider"/>
        </form>
    </body>
</html>
<?php }
}
