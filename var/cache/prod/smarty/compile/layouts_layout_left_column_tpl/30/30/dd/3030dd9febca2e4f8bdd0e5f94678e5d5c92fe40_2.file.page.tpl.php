<?php
/* Smarty version 3.1.33, created on 2021-01-03 13:41:30
  from '/bitnami/prestashop/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ff1f3ba373344_03719217',
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
function content_5ff1f3ba373344_03719217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15809601345ff1f3ba36b4d1_06753699', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_13597305765ff1f3ba36ca37_39733351 extends Smarty_Internal_Block
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
class Block_17857315535ff1f3ba36be64_39565032 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13597305765ff1f3ba36ca37_39733351', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_13253619385ff1f3ba36f330_88466025 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_5024287925ff1f3ba36fff5_76130265 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_8299736545ff1f3ba36e802_91595106 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13253619385ff1f3ba36f330_88466025', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5024287925ff1f3ba36fff5_76130265', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_150949135ff1f3ba371c97_44354196 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_7889009905ff1f3ba371413_54725065 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150949135ff1f3ba371c97_44354196', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_15809601345ff1f3ba36b4d1_06753699 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15809601345ff1f3ba36b4d1_06753699',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_17857315535ff1f3ba36be64_39565032',
  ),
  'page_title' => 
  array (
    0 => 'Block_13597305765ff1f3ba36ca37_39733351',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_8299736545ff1f3ba36e802_91595106',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_13253619385ff1f3ba36f330_88466025',
  ),
  'page_content' => 
  array (
    0 => 'Block_5024287925ff1f3ba36fff5_76130265',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_7889009905ff1f3ba371413_54725065',
  ),
  'page_footer' => 
  array (
    0 => 'Block_150949135ff1f3ba371c97_44354196',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17857315535ff1f3ba36be64_39565032', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8299736545ff1f3ba36e802_91595106', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7889009905ff1f3ba371413_54725065', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
