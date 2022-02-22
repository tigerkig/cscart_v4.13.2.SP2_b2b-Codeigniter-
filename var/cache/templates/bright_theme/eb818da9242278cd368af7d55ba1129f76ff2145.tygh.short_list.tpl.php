<?php /* Smarty version Smarty-3.1.21, created on 2021-11-08 03:08:50
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\themes\responsive\templates\blocks\product_list_templates\short_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36100348961886a92b24551-92037453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb818da9242278cd368af7d55ba1129f76ff2145' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\themes\\responsive\\templates\\blocks\\product_list_templates\\short_list.tpl',
      1 => 1635066672,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '36100348961886a92b24551-92037453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_add_to_cart' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61886a92b5f470_06783005',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61886a92b5f470_06783005')) {function content_61886a92b5f470_06783005($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/compact_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_name'=>true,'show_sku'=>true,'show_price'=>true,'show_old_price'=>true,'show_clean_price'=>true,'show_add_to_cart'=>(($tmp = @$_smarty_tpl->tpl_vars['show_add_to_cart']->value)===null||$tmp==='' ? true : $tmp),'but_role'=>"action",'hide_form'=>true,'hide_qty_label'=>true,'show_product_labels'=>false,'show_discount_label'=>false,'show_shipping_label'=>false), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_list_templates/short_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_list_templates/short_list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/compact_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_name'=>true,'show_sku'=>true,'show_price'=>true,'show_old_price'=>true,'show_clean_price'=>true,'show_add_to_cart'=>(($tmp = @$_smarty_tpl->tpl_vars['show_add_to_cart']->value)===null||$tmp==='' ? true : $tmp),'but_role'=>"action",'hide_form'=>true,'hide_qty_label'=>true,'show_product_labels'=>false,'show_discount_label'=>false,'show_shipping_label'=>false), 0);
}?><?php }} ?>
