<?php
/* Smarty version 3.1.29, created on 2016-06-07 14:30:59
  from "E:\wamp64\www\structureProduit\vue\produitConsultation.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5756daa34b2296_10414693',
  'file_dependency' => 
  array (
    '38d4e7580caca7550ac12ad38c1fc7b1a5288a51' => 
    array (
      0 => 'E:\\wamp64\\www\\structureProduit\\vue\\produitConsultation.tpl',
      1 => 1465309842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5756daa34b2296_10414693 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/template.css" />
        <link rel="icon" type="image/x-icon" href="css/images/favicon.ico" />
        <meta charset="UTF-8">
    </head>
    <body>
        <h3> <?php echo $_smarty_tpl->tpl_vars['titreFormConsultation']->value;?>
</h3>
        <form action="index.php" method="post">
            <?php echo $_smarty_tpl->tpl_vars['designation']->value;?>
<input type="text" name="designation" value="<?php echo $_smarty_tpl->tpl_vars['valDesignation']->value;?>
"/><br>
            <?php echo $_smarty_tpl->tpl_vars['quantite']->value;?>
<input type="text" name="quantite" value="<?php echo $_smarty_tpl->tpl_vars['valQuantite']->value;?>
"/><br>
            <?php echo $_smarty_tpl->tpl_vars['descriptif']->value;?>
<input type="text" name="descriptif" value="<?php echo $_smarty_tpl->tpl_vars['valDescriptif']->value;?>
"/><br>
            <?php echo $_smarty_tpl->tpl_vars['puht']->value;?>
<input type="text" name="prix_unitaire_HT" value="<?php echo $_smarty_tpl->tpl_vars['valPuht']->value;?>
"/><br>
            <?php echo $_smarty_tpl->tpl_vars['stock']->value;?>
<input type="text" name="stock" value="<?php echo $_smarty_tpl->tpl_vars['valStock']->value;?>
"/><br>
            <?php echo $_smarty_tpl->tpl_vars['pp']->value;?>
<input type="text" name="poids_piece" value="<?php echo $_smarty_tpl->tpl_vars['valPp']->value;?>
"/><br>
            <hr>
            <input type="submit" name="retour" value="Retour"/>
        </form>
    </body>
</html>
<?php }
}
