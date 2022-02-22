<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 13:24:13
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\themes\responsive\templates\addons\geo_maps\hooks\products\product_detail_bottom.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12105389246175344d9c6120-14279711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c4969e1a05a3574e611f786e2392b343055066a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\themes\\responsive\\templates\\addons\\geo_maps\\hooks\\products\\product_detail_bottom.pre.tpl',
      1 => 1635066681,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12105389246175344d9c6120-14279711',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'shipping_estimation_product_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6175344d9e2e03_89419453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6175344d9e2e03_89419453')) {function content_6175344d9e2e03_89419453($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo $_smarty_tpl->getSubTemplate ("addons/geo_maps/views/geo_maps/shipping_estimation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('shipping_methods'=>null,'product_id'=>(($tmp = @$_smarty_tpl->tpl_vars['shipping_estimation_product_id']->value)===null||$tmp==='' ? null : $tmp)), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/geo_maps/hooks/products/product_detail_bottom.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/geo_maps/hooks/products/product_detail_bottom.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo $_smarty_tpl->getSubTemplate ("addons/geo_maps/views/geo_maps/shipping_estimation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('shipping_methods'=>null,'product_id'=>(($tmp = @$_smarty_tpl->tpl_vars['shipping_estimation_product_id']->value)===null||$tmp==='' ? null : $tmp)), 0);?>

<?php }?><?php }} ?>
