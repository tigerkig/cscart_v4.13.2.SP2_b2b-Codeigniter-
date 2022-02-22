<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 12:27:35
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\themes\responsive\templates\blocks\languages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201371374461752707e6ec02-05394750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b613fb4c7b1f29af8d6f5648e705e0f3a5dcb888' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\themes\\responsive\\templates\\blocks\\languages.tpl',
      1 => 1635066672,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '201371374461752707e6ec02-05394750',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'languages' => 0,
    'block' => 0,
    'dropdown_limit' => 0,
    'config' => 0,
    'language' => 0,
    'format' => 0,
    'code' => 0,
    'uid' => 0,
    'key_name' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6175270803e7d2_77825933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6175270803e7d2_77825933')) {function content_6175270803e7d2_77825933($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.count.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('change_language','change_language'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['languages']->value&&smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
<div id="languages_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->tpl_vars['uid'] = new Smarty_variable(uniqid(), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['dropdown_limit']->value>0&&smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value)<=$_smarty_tpl->tpl_vars['dropdown_limit']->value) {?>
        <div class="ty-select-wrapper ty-languages">
            <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
                <a href="<?php echo htmlspecialchars(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"sl=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_code'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("change_language");?>
" class="ty-languages__item<?php if ($_smarty_tpl->tpl_vars['format']->value=="icon") {?> ty-languages__icon-link<?php }
if ((defined('DESCR_SL') ? constant('DESCR_SL') : null)==$_smarty_tpl->tpl_vars['code']->value) {?> ty-languages__active<?php }?>"><i class="ty-flag ty-flag-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['language']->value['country_code'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
"></i><?php if ($_smarty_tpl->tpl_vars['format']->value=="name") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');
}?></a>
            <?php } ?>
        </div>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['format']->value=="name") {?>
            <?php $_smarty_tpl->tpl_vars["key_name"] = new Smarty_variable("name", null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["key_name"] = new Smarty_variable('', null, 0);?>
        <?php }?>
        <div class="ty-select-wrapper<?php if ($_smarty_tpl->tpl_vars['format']->value=="icon") {?> ty-languages__icon-link<?php }?>"><?php echo $_smarty_tpl->getSubTemplate ("common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"graphic",'suffix'=>"language_".((string)$_smarty_tpl->tpl_vars['uid']->value),'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"sl="),'items'=>$_smarty_tpl->tpl_vars['languages']->value,'selected_id'=>(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),'display_icons'=>true,'key_name'=>$_smarty_tpl->tpl_vars['key_name']->value,'language_var_name'=>"sl",'link_class'=>"hidden-phone hidden-tablet"), 0);?>
</div>
    <?php }?>
<!--languages_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/languages.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/languages.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['languages']->value&&smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
<div id="languages_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->tpl_vars['uid'] = new Smarty_variable(uniqid(), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['dropdown_limit']->value>0&&smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value)<=$_smarty_tpl->tpl_vars['dropdown_limit']->value) {?>
        <div class="ty-select-wrapper ty-languages">
            <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
                <a href="<?php echo htmlspecialchars(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"sl=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_code'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("change_language");?>
" class="ty-languages__item<?php if ($_smarty_tpl->tpl_vars['format']->value=="icon") {?> ty-languages__icon-link<?php }
if ((defined('DESCR_SL') ? constant('DESCR_SL') : null)==$_smarty_tpl->tpl_vars['code']->value) {?> ty-languages__active<?php }?>"><i class="ty-flag ty-flag-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['language']->value['country_code'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
"></i><?php if ($_smarty_tpl->tpl_vars['format']->value=="name") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');
}?></a>
            <?php } ?>
        </div>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['format']->value=="name") {?>
            <?php $_smarty_tpl->tpl_vars["key_name"] = new Smarty_variable("name", null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["key_name"] = new Smarty_variable('', null, 0);?>
        <?php }?>
        <div class="ty-select-wrapper<?php if ($_smarty_tpl->tpl_vars['format']->value=="icon") {?> ty-languages__icon-link<?php }?>"><?php echo $_smarty_tpl->getSubTemplate ("common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"graphic",'suffix'=>"language_".((string)$_smarty_tpl->tpl_vars['uid']->value),'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"sl="),'items'=>$_smarty_tpl->tpl_vars['languages']->value,'selected_id'=>(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),'display_icons'=>true,'key_name'=>$_smarty_tpl->tpl_vars['key_name']->value,'language_var_name'=>"sl",'link_class'=>"hidden-phone hidden-tablet"), 0);?>
</div>
    <?php }?>
<!--languages_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}?><?php }} ?>
