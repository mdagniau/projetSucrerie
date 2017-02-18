<?php
/* Smarty version 3.1.29, created on 2016-06-12 15:15:11
  from "E:\wamp64\www\structureProduit\vue\produitVueFiche.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575d7c7f1141f4_25900051',
  'file_dependency' => 
  array (
    'd8e71a41eb7cba07c0b3727fa28e1bd673faa1ad' => 
    array (
      0 => 'E:\\wamp64\\www\\structureProduit\\vue\\produitVueFiche.tpl',
      1 => 1465744420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_575d7c7f1141f4_25900051 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/template.css" />
        <link rel="icon" type="image/x-icon" href="css/images/favicon.ico" />
        <meta charset="UTF-8">
    </head>
    <body>
        <h3> <?php echo $_smarty_tpl->tpl_vars['titreForm']->value;?>
</h3>
        <form action="index.php" method="post">
            
            <div class="lib"><?php echo $_smarty_tpl->tpl_vars['designation']->value;?>
</div><div class="val"><input type="text" name="designation" value="<?php echo $_smarty_tpl->tpl_vars['valDesignation']->value;?>
"/></div>
            <div class="lib"><?php echo $_smarty_tpl->tpl_vars['quantite']->value;?>
</div><div class="val"><input type="text" name="quantite" value="<?php echo $_smarty_tpl->tpl_vars['valQuantite']->value;?>
"/></div>
            <div class="lib"><?php echo $_smarty_tpl->tpl_vars['descriptif']->value;?>
</div><div class="val"><input type="text" name="descriptif" value="<?php echo $_smarty_tpl->tpl_vars['valDescriptif']->value;?>
"/></div>
            <div class="lib"><?php echo $_smarty_tpl->tpl_vars['puht']->value;?>
</div><div class="val"><input type="text" name="prix_unitaire_HT" value="<?php echo $_smarty_tpl->tpl_vars['valPuht']->value;?>
"/></div>
            <div class="lib"><?php echo $_smarty_tpl->tpl_vars['stock']->value;?>
</div><div class="val"><input type="text" name="stock" value="<?php echo $_smarty_tpl->tpl_vars['valStock']->value;?>
"/></div>
            <div class="lib"><?php echo $_smarty_tpl->tpl_vars['pp']->value;?>
</div><div class="val"><input type="text" name="poids_piece" value="<?php echo $_smarty_tpl->tpl_vars['valPp']->value;?>
"/></div>
            <hr>
            <?php if ($_smarty_tpl->tpl_vars['action']->value == 'A') {?>
                <input type="submit" name="valider" value="Valider"/>
            <?php }?>
            <input type="submit" name="retour" value="Retour"/>
        </form>
    </body>
</html>
<?php }
}
