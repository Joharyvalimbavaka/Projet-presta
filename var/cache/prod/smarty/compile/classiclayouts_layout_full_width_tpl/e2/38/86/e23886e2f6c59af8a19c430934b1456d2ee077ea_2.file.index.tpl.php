<?php
/* Smarty version 3.1.48, created on 2023-08-31 14:30:46
  from '/var/www/html/haut_zone/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64f079e6604463_69405615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e23886e2f6c59af8a19c430934b1456d2ee077ea' => 
    array (
      0 => '/var/www/html/haut_zone/themes/classic/templates/index.tpl',
      1 => 1693479407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64f079e6604463_69405615 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149942196364f079e65faaf2_97414439', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_167579391264f079e65fc2b2_17952730 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_186350983864f079e65ff933_77492438 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_56356409864f079e65fe642_81191098 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186350983864f079e65ff933_77492438', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_149942196364f079e65faaf2_97414439 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_149942196364f079e65faaf2_97414439',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_167579391264f079e65fc2b2_17952730',
  ),
  'page_content' => 
  array (
    0 => 'Block_56356409864f079e65fe642_81191098',
  ),
  'hook_home' => 
  array (
    0 => 'Block_186350983864f079e65ff933_77492438',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167579391264f079e65fc2b2_17952730', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56356409864f079e65fe642_81191098', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
