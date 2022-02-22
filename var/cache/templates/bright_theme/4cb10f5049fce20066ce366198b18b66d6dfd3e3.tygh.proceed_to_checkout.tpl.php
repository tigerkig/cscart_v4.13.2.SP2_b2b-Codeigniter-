<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 12:27:38
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\themes\responsive\templates\buttons\proceed_to_checkout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6862057256175270a0f3742-20656866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cb10f5049fce20066ce366198b18b66d6dfd3e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\themes\\responsive\\templates\\buttons\\proceed_to_checkout.tpl',
      1 => 1635066672,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6862057256175270a0f3742-20656866',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
    'settings' => 0,
    'but_meta' => 0,
    'but_href' => 0,
    'return_url' => 0,
    'but_text' => 0,
    'but_onclick' => 0,
    'but_target' => 0,
    'but_action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6175270a167594_02666003',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6175270a167594_02666003')) {function content_6175270a167594_02666003($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sign_in','proceed_to_checkout','proceed_to_checkout','sign_in','proceed_to_checkout','proceed_to_checkout'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['settings']->value['Checkout']['disable_anonymous_checkout']==smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->tpl_vars['but_meta'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['but_meta']->value)===null||$tmp==='' ? "ty-btn__primary" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['return_url'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['but_href']->value)===null||$tmp==='' ? (fn_url("checkout.checkout")) : $tmp), null, 0);?>

    <a
        class="cm-dialog-opener cm-dialog-auto-size ty-btn <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
        href="<?php echo htmlspecialchars(fn_url("checkout.login_form?return_url=".((string)urlencode($_smarty_tpl->tpl_vars['return_url']->value))), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-dialog-title="<?php echo $_smarty_tpl->__("sign_in");?>
"
        data-ca-target-id="checkout_login_form"
        rel="nofollow">
        <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("proceed_to_checkout") : $tmp), ENT_QUOTES, 'UTF-8');?>

    </a>
<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>(($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("proceed_to_checkout") : $tmp),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>(($tmp = @$_smarty_tpl->tpl_vars['but_href']->value)===null||$tmp==='' ? "checkout.checkout" : $tmp),'but_target'=>$_smarty_tpl->tpl_vars['but_target']->value,'but_role'=>(($tmp = @$_smarty_tpl->tpl_vars['but_action']->value)===null||$tmp==='' ? "action" : $tmp),'but_meta'=>(($tmp = @$_smarty_tpl->tpl_vars['but_meta']->value)===null||$tmp==='' ? "ty-btn__primary" : $tmp)), 0);?>

<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/proceed_to_checkout.tpl" id="<?php echo smarty_function_set_id(array('name'=>"buttons/proceed_to_checkout.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['settings']->value['Checkout']['disable_anonymous_checkout']==smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->tpl_vars['but_meta'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['but_meta']->value)===null||$tmp==='' ? "ty-btn__primary" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['return_url'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['but_href']->value)===null||$tmp==='' ? (fn_url("checkout.checkout")) : $tmp), null, 0);?>

    <a
        class="cm-dialog-opener cm-dialog-auto-size ty-btn <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
        href="<?php echo htmlspecialchars(fn_url("checkout.login_form?return_url=".((string)urlencode($_smarty_tpl->tpl_vars['return_url']->value))), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-dialog-title="<?php echo $_smarty_tpl->__("sign_in");?>
"
        data-ca-target-id="checkout_login_form"
        rel="nofollow">
        <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("proceed_to_checkout") : $tmp), ENT_QUOTES, 'UTF-8');?>

    </a>
<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>(($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("proceed_to_checkout") : $tmp),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>(($tmp = @$_smarty_tpl->tpl_vars['but_href']->value)===null||$tmp==='' ? "checkout.checkout" : $tmp),'but_target'=>$_smarty_tpl->tpl_vars['but_target']->value,'but_role'=>(($tmp = @$_smarty_tpl->tpl_vars['but_action']->value)===null||$tmp==='' ? "action" : $tmp),'but_meta'=>(($tmp = @$_smarty_tpl->tpl_vars['but_meta']->value)===null||$tmp==='' ? "ty-btn__primary" : $tmp)), 0);?>

<?php }?>
<?php }?><?php }} ?>
