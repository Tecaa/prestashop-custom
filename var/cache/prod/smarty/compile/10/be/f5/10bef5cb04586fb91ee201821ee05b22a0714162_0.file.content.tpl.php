<?php
/* Smarty version 3.1.33, created on 2021-01-03 12:11:51
  from '/bitnami/prestashop/administration/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ff1deb70993e9_04889767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10bef5cb04586fb91ee201821ee05b22a0714162' => 
    array (
      0 => '/bitnami/prestashop/administration/themes/new-theme/template/content.tpl',
      1 => 1606791447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff1deb70993e9_04889767 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
