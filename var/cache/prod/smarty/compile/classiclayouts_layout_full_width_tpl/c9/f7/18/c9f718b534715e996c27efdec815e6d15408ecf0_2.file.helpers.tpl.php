<?php
/* Smarty version 3.1.48, created on 2023-08-31 14:30:46
  from '/var/www/html/haut_zone/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64f079e66ab281_99218630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9f718b534715e996c27efdec815e6d15408ecf0' => 
    array (
      0 => '/var/www/html/haut_zone/themes/classic/templates/_partials/helpers.tpl',
      1 => 1693479407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64f079e66ab281_99218630 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/html/haut_zone/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/c9/f7/18/c9f718b534715e996c27efdec815e6d15408ecf0_2.file.helpers.tpl.php',
    'uid' => 'c9f718b534715e996c27efdec815e6d15408ecf0',
    'call_name' => 'smarty_template_function_renderLogo_116230992064f079e669b542_40794692',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_116230992064f079e669b542_40794692 */
if (!function_exists('smarty_template_function_renderLogo_116230992064f079e669b542_40794692')) {
function smarty_template_function_renderLogo_116230992064f079e669b542_40794692(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_116230992064f079e669b542_40794692 */
}
