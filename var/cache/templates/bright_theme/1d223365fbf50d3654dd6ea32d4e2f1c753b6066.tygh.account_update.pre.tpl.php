<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 14:46:20
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\themes\responsive\templates\addons\newsletters\hooks\profiles\account_update.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8614277696175478cf2ecc2-93976933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d223365fbf50d3654dd6ea32d4e2f1c753b6066' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\themes\\responsive\\templates\\addons\\newsletters\\hooks\\profiles\\account_update.pre.tpl',
      1 => 1635066680,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8614277696175478cf2ecc2-93976933',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'page_mailing_lists' => 0,
    'list' => 0,
    'user_mailing_lists' => 0,
    'show_newsletters_content' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6175478d02f2e4_62507908',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6175478d02f2e4_62507908')) {function content_6175478d02f2e4_62507908($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('text_signup_for_subscriptions','mailing_lists','text_signup_for_subscriptions','mailing_lists'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['page_mailing_lists']->value) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("mailing_lists", null, null); ob_start(); ?>
        <?php $_smarty_tpl->tpl_vars["show_newsletters_content"] = new Smarty_variable(false, null, 0);?>

        <div class="ty-newsletters">

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"newsletters:profile_email_subscription")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"newsletters:profile_email_subscription"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <p><?php echo $_smarty_tpl->__("text_signup_for_subscriptions");?>
</p>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"newsletters:profile_email_subscription"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page_mailing_lists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['list']->value['show_on_registration']) {?>
                    <?php $_smarty_tpl->tpl_vars["show_newsletters_content"] = new Smarty_variable(true, null, 0);?>
                <?php }?>
                <input id="all_profile_mailing_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
" type="hidden" name="all_mailing_lists[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
" />

                <div class="ty-newsletters__item<?php if (!$_smarty_tpl->tpl_vars['list']->value['show_on_registration']) {?> hidden<?php }?>">
                    <input id="profile_mailing_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="mailing_lists[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['user_mailing_lists']->value[$_smarty_tpl->tpl_vars['list']->value['list_id']]) {?>checked="checked"<?php }?> class="checkbox" /><label for="profile_mailing_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['object'], ENT_QUOTES, 'UTF-8');?>
</label>
                </div>
            <?php } ?>
        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php if ($_smarty_tpl->tpl_vars['show_newsletters_content']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("mailing_lists")), 0);?>


        <?php echo Smarty::$_smarty_vars['capture']['mailing_lists'];?>

    <?php }?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/newsletters/hooks/profiles/account_update.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/newsletters/hooks/profiles/account_update.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['page_mailing_lists']->value) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("mailing_lists", null, null); ob_start(); ?>
        <?php $_smarty_tpl->tpl_vars["show_newsletters_content"] = new Smarty_variable(false, null, 0);?>

        <div class="ty-newsletters">

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"newsletters:profile_email_subscription")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"newsletters:profile_email_subscription"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <p><?php echo $_smarty_tpl->__("text_signup_for_subscriptions");?>
</p>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"newsletters:profile_email_subscription"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page_mailing_lists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['list']->value['show_on_registration']) {?>
                    <?php $_smarty_tpl->tpl_vars["show_newsletters_content"] = new Smarty_variable(true, null, 0);?>
                <?php }?>
                <input id="all_profile_mailing_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
" type="hidden" name="all_mailing_lists[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
" />

                <div class="ty-newsletters__item<?php if (!$_smarty_tpl->tpl_vars['list']->value['show_on_registration']) {?> hidden<?php }?>">
                    <input id="profile_mailing_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="mailing_lists[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['user_mailing_lists']->value[$_smarty_tpl->tpl_vars['list']->value['list_id']]) {?>checked="checked"<?php }?> class="checkbox" /><label for="profile_mailing_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['object'], ENT_QUOTES, 'UTF-8');?>
</label>
                </div>
            <?php } ?>
        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php if ($_smarty_tpl->tpl_vars['show_newsletters_content']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("mailing_lists")), 0);?>


        <?php echo Smarty::$_smarty_vars['capture']['mailing_lists'];?>

    <?php }?>
<?php }?>
<?php }?><?php }} ?>
