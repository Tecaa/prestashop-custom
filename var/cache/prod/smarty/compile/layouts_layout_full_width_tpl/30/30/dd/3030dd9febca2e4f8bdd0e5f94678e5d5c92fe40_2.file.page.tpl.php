<?php
/* Smarty version 3.1.33, created on 2021-01-03 12:11:44
  from '/bitnami/prestashop/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ff1deb03e74c2_43386557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3030dd9febca2e4f8bdd0e5f94678e5d5c92fe40' => 
    array (
      0 => '/bitnami/prestashop/themes/classic/templates/page.tpl',
      1 => 1606791454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff1deb03e74c2_43386557 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16050808405ff1deb03e04d7_66763972', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_2517864505ff1deb03e1821_79101346 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_20628799345ff1deb03e0d86_91607747 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2517864505ff1deb03e1821_79101346', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_11201670495ff1deb03e3ba8_21233466 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_17598820395ff1deb03e4711_06190297 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_20466802005ff1deb03e3370_21123686 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11201670495ff1deb03e3ba8_21233466', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17598820395ff1deb03e4711_06190297', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_10612980095ff1deb03e6077_36679600 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_18106127145ff1deb03e5898_93164624 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10612980095ff1deb03e6077_36679600', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_16050808405ff1deb03e04d7_66763972 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16050808405ff1deb03e04d7_66763972',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_20628799345ff1deb03e0d86_91607747',
  ),
  'page_title' => 
  array (
    0 => 'Block_2517864505ff1deb03e1821_79101346',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_20466802005ff1deb03e3370_21123686',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_11201670495ff1deb03e3ba8_21233466',
  ),
  'page_content' => 
  array (
    0 => 'Block_17598820395ff1deb03e4711_06190297',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_18106127145ff1deb03e5898_93164624',
  ),
  'page_footer' => 
  array (
    0 => 'Block_10612980095ff1deb03e6077_36679600',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20628799345ff1deb03e0d86_91607747', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20466802005ff1deb03e3370_21123686', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18106127145ff1deb03e5898_93164624', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
