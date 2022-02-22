<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 13:24:13
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\themes\responsive\templates\addons\social_buttons\providers\facebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:666521396175344db37b24-82166146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65d8ab61ed4f9fc0d7a48f92a38db46a9ed23fc2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\themes\\responsive\\templates\\addons\\social_buttons\\providers\\facebook.tpl',
      1 => 1635066679,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '666521396175344db37b24-82166146',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'provider_settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6175344db87260_20382649',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6175344db87260_20382649')) {function content_6175344db87260_20382649($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable']=="Y"&&$_smarty_tpl->tpl_vars['provider_settings']->value['facebook']['data']) {?>
<div id="fb-root"></div>
<div class="fb-like" <?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['facebook']['data'];?>
></div>
<?php echo '<script'; ?>
 class="cm-ajax-force">
    (function(_, $) {
        if ($(".fb-like").length > 0) {
            if (typeof (FB) != 'undefined') {
                FB.init({ status: true, cookie: true, xfbml: true });
            } else {
                $.getScript("//connect.facebook.net/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_lang'], ENT_QUOTES, 'UTF-8');?>
/all.js#xfbml=1&appId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_app_id'], ENT_QUOTES, 'UTF-8');?>
", function () {
                    FB.init({ status: true, cookie: true, xfbml: true });
                });
            }
        }
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/social_buttons/providers/facebook.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/social_buttons/providers/facebook.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable']=="Y"&&$_smarty_tpl->tpl_vars['provider_settings']->value['facebook']['data']) {?>
<div id="fb-root"></div>
<div class="fb-like" <?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['facebook']['data'];?>
></div>
<?php echo '<script'; ?>
 class="cm-ajax-force">
    (function(_, $) {
        if ($(".fb-like").length > 0) {
            if (typeof (FB) != 'undefined') {
                FB.init({ status: true, cookie: true, xfbml: true });
            } else {
                $.getScript("//connect.facebook.net/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_lang'], ENT_QUOTES, 'UTF-8');?>
/all.js#xfbml=1&appId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_app_id'], ENT_QUOTES, 'UTF-8');?>
", function () {
                    FB.init({ status: true, cookie: true, xfbml: true });
                });
            }
        }
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }?>
<?php }?><?php }} ?>
