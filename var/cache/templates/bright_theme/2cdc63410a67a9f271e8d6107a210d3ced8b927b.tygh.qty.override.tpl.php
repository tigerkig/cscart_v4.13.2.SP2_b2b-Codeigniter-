<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 13:23:10
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\themes\responsive\templates\addons\product_variations\hooks\products\qty.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14034197476175340e5d7f77-49728876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cdc63410a67a9f271e8d6107a210d3ced8b927b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\themes\\responsive\\templates\\addons\\product_variations\\hooks\\products\\qty.override.tpl',
      1 => 1635066683,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14034197476175340e5d7f77-49728876',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_select_variations_button' => 0,
    'details_page' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6175340e5eed67_80119464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6175340e5eed67_80119464')) {function content_6175340e5eed67_80119464($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['show_select_variations_button'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_select_variations_button']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>

<?php if (!$_smarty_tpl->tpl_vars['details_page']->value&&$_smarty_tpl->tpl_vars['product']->value['has_child_variations']&&$_smarty_tpl->tpl_vars['show_select_variations_button']->value) {?>
    &nbsp;
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/products/qty.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/hooks/products/qty.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['show_select_variations_button'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_select_variations_button']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>

<?php if (!$_smarty_tpl->tpl_vars['details_page']->value&&$_smarty_tpl->tpl_vars['product']->value['has_child_variations']&&$_smarty_tpl->tpl_vars['show_select_variations_button']->value) {?>
    &nbsp;
<?php }?>
<?php }?><?php }} ?>
