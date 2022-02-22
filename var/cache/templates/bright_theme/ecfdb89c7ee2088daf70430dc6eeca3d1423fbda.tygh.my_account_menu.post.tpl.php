<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 15:14:03
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\themes\responsive\templates\addons\vendor_communication\hooks\profiles\my_account_menu.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99875217361752708cf9c41-49442393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecfdb89c7ee2088daf70430dc6eeca3d1423fbda' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\themes\\responsive\\templates\\addons\\vendor_communication\\hooks\\profiles\\my_account_menu.post.tpl',
      1 => 1635077624,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '99875217361752708cf9c41-49442393',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61752708d251d3_78956892',
  'variables' => 
  array (
    'runtime' => 0,
    'communication_type' => 0,
    'auth' => 0,
    'communication_type_active' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61752708d251d3_78956892')) {function content_61752708d251d3_78956892($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_communication.messages','vendor_communication.messages'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['communication_type'] = new Smarty_variable(smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_CUSTOMER"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['communication_type_active'] = new Smarty_variable(fn_vendor_communication_is_communication_type_active($_smarty_tpl->tpl_vars['communication_type']->value), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['communication_type_active']->value) {?>
    <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars(fn_url("vendor_communication.threads"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" ><?php echo $_smarty_tpl->__("vendor_communication.messages");?>
</a></li>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/hooks/profiles/my_account_menu.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_communication/hooks/profiles/my_account_menu.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['communication_type'] = new Smarty_variable(smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_CUSTOMER"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['communication_type_active'] = new Smarty_variable(fn_vendor_communication_is_communication_type_active($_smarty_tpl->tpl_vars['communication_type']->value), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['communication_type_active']->value) {?>
    <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars(fn_url("vendor_communication.threads"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" ><?php echo $_smarty_tpl->__("vendor_communication.messages");?>
</a></li>
<?php }
}?><?php }} ?>
