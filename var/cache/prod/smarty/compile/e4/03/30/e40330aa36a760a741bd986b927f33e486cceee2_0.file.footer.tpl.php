<?php
/* Smarty version 3.1.33, created on 2021-01-03 12:11:51
  from '/bitnami/prestashop/administration/themes/new-theme/template/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ff1deb7159795_96845515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e40330aa36a760a741bd986b927f33e486cceee2' => 
    array (
      0 => '/bitnami/prestashop/administration/themes/new-theme/template/footer.tpl',
      1 => 1606791447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff1deb7159795_96845515 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="footer" class="bootstrap">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBackOfficeFooter"),$_smarty_tpl ) );?>

</div>
<?php }
}
