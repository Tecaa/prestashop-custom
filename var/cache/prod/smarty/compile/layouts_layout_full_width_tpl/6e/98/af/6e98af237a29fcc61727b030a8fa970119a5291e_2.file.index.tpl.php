<?php
/* Smarty version 3.1.33, created on 2021-01-03 12:11:44
  from '/bitnami/prestashop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ff1deb03dca34_12456167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e98af237a29fcc61727b030a8fa970119a5291e' => 
    array (
      0 => '/bitnami/prestashop/themes/classic/templates/index.tpl',
      1 => 1606791454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff1deb03dca34_12456167 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9969017055ff1deb03d8886_31393983', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_12583722425ff1deb03d9379_25359386 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_10236498455ff1deb03da972_72050252 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_19087826195ff1deb03da0e2_06701139 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10236498455ff1deb03da972_72050252', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_9969017055ff1deb03d8886_31393983 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_9969017055ff1deb03d8886_31393983',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_12583722425ff1deb03d9379_25359386',
  ),
  'page_content' => 
  array (
    0 => 'Block_19087826195ff1deb03da0e2_06701139',
  ),
  'hook_home' => 
  array (
    0 => 'Block_10236498455ff1deb03da972_72050252',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12583722425ff1deb03d9379_25359386', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19087826195ff1deb03da0e2_06701139', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
