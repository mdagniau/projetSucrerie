<?php
/* Smarty version 3.1.29, created on 2017-02-16 21:44:48
  from "C:\xampp\htdocs\sucrerie-mvc-base\vue\produitVueFiche.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a60f40e7a291_38055176',
  'file_dependency' => 
  array (
    '84961810da01c852096b162e24820fc796adf60a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sucrerie-mvc-base\\vue\\produitVueFiche.tpl',
      1 => 1483957626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a60f40e7a291_38055176 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../css/template.css">
        <link rel="icon" type="image/png" href="../../images/favicon.png" />
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
           <hr class="mef">
            <?php if ($_smarty_tpl->tpl_vars['action']->value == 'A') {?>
                <input type="submit" name="valider" value="Valider"/>
            <?php }?>
            <input type="submit" name="retour" value="Retour à la liste"/>
        </form>
            
            <hr class="mef">
        
        <a href='../../index.php'>Retour à l'accueil</a>
        
    </body>
</html>
<?php }
}
