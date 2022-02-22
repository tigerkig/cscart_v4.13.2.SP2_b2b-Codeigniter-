<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 13:24:12
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\themes\responsive\templates\addons\vendor_communication\views\vendor_communication\components\new_thread_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98909856175344c3bb245-86967961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e68a7e2d97b7386c14a7dd6d84f3f69fd39d9748' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\themes\\responsive\\templates\\addons\\vendor_communication\\views\\vendor_communication\\components\\new_thread_button.tpl',
      1 => 1635066681,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '98909856175344c3bb245-86967961',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'communication_type' => 0,
    'title' => 0,
    'allow_new_thread' => 0,
    'auth' => 0,
    'meta' => 0,
    'object_id' => 0,
    'config' => 0,
    'show_form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6175344c412065_17298384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6175344c412065_17298384')) {function content_6175344c412065_17298384($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_communication.ask_a_question','vendor_communication.ask_a_question'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['communication_type'] = new Smarty_variable(smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_CUSTOMER"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['allow_new_thread'] = new Smarty_variable(fn_vendor_communication_is_communication_type_active($_smarty_tpl->tpl_vars['communication_type']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? $_smarty_tpl->__("vendor_communication.ask_a_question") : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['allow_new_thread']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if (fn_allowed_for("MULTIVENDOR")) {?>ty-vendor-communication__post-write<?php }?> cm-dialog-opener cm-dialog-auto-size <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="new_thread_dialog_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
            <i class="ty-icon-chat"></i>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

        </a>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["return_current_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>

        <a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="new_thread_login_form" class="cm-dialog-opener cm-dialog-auto-size <?php if (fn_allowed_for("MULTIVENDOR")) {?>ty-vendor-communication__post-write<?php }?>" rel="nofollow">
            <i class="ty-icon-chat"></i>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

        </a>

        <?php if ($_smarty_tpl->tpl_vars['show_form']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>
    <?php }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['communication_type'] = new Smarty_variable(smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_CUSTOMER"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['allow_new_thread'] = new Smarty_variable(fn_vendor_communication_is_communication_type_active($_smarty_tpl->tpl_vars['communication_type']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? $_smarty_tpl->__("vendor_communication.ask_a_question") : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['allow_new_thread']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if (fn_allowed_for("MULTIVENDOR")) {?>ty-vendor-communication__post-write<?php }?> cm-dialog-opener cm-dialog-auto-size <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="new_thread_dialog_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
            <i class="ty-icon-chat"></i>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

        </a>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["return_current_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>

        <a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="new_thread_login_form" class="cm-dialog-opener cm-dialog-auto-size <?php if (fn_allowed_for("MULTIVENDOR")) {?>ty-vendor-communication__post-write<?php }?>" rel="nofollow">
            <i class="ty-icon-chat"></i>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

        </a>

        <?php if ($_smarty_tpl->tpl_vars['show_form']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>
    <?php }?>
<?php }
}?><?php }} ?>
