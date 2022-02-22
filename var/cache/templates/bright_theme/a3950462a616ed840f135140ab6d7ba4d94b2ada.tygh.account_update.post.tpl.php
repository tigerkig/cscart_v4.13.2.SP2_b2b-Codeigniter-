<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 14:46:21
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\themes\responsive\templates\addons\hybrid_auth\hooks\profiles\account_update.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:848029766175478d1378f7-22079698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3950462a616ed840f135140ab6d7ba4d94b2ada' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\themes\\responsive\\templates\\addons\\hybrid_auth\\hooks\\profiles\\account_update.post.tpl',
      1 => 1635066691,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '848029766175478d1378f7-22079698',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'providers_list' => 0,
    'provider_data' => 0,
    'linked_providers' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6175478d176ea8_51631551',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6175478d176ea8_51631551')) {function content_6175478d176ea8_51631551($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('hybrid_auth.link_provider','hybrid_auth.text_link_provider','hybrid_auth.linked_provider','hybrid_auth.not_linked_provider','hybrid_auth.link_provider','hybrid_auth.text_link_provider','hybrid_auth.linked_provider','hybrid_auth.not_linked_provider'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['providers_list']->value) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"hybrid_auth:account_update")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"hybrid_auth:account_update"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("hybrid_auth.link_provider")), 0);?>

    <p><?php echo $_smarty_tpl->__("hybrid_auth.text_link_provider");?>
</p>

    <div class="clearfix ty-hybrid-auth__icon-container" id="hybrid_providers">
        <?php  $_smarty_tpl->tpl_vars['provider_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['provider_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['providers_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['provider_data']->key => $_smarty_tpl->tpl_vars['provider_data']->value) {
$_smarty_tpl->tpl_vars['provider_data']->_loop = true;
?>
        <?php if (in_array($_smarty_tpl->tpl_vars['provider_data']->value['provider'],$_smarty_tpl->tpl_vars['linked_providers']->value)) {?>
        <div class="ty-hybrid-auth__icon ty-float-left">
            <a class="cm-unlink-provider ty-hybrid-auth__remove" data-idp="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['provider_id'], ENT_QUOTES, 'UTF-8');?>
" data-provider="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
"><i class="ty-icon-cancel-circle"></i></a>
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['icon'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("hybrid_auth.linked_provider");?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
"/>
        </div>
        <?php }?>
        <?php } ?>
        <div class="ty-hybrid-auth__icon ty-float-left">&nbsp;</div>
        <?php  $_smarty_tpl->tpl_vars['provider_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['provider_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['providers_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['provider_data']->key => $_smarty_tpl->tpl_vars['provider_data']->value) {
$_smarty_tpl->tpl_vars['provider_data']->_loop = true;
?>
        <?php if (!in_array($_smarty_tpl->tpl_vars['provider_data']->value['provider'],$_smarty_tpl->tpl_vars['linked_providers']->value)) {?>
        <div class="ty-hybrid-auth__icon ty-float-left">
            <a class="cm-link-provider ty-link-unlink-provider" data-idp="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['provider_id'], ENT_QUOTES, 'UTF-8');?>
" data-provider="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
">
                <i class="ty-hybrid-auth__add ty-icon-plus-circle"></i>
                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['icon'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("hybrid_auth.not_linked_provider");?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
"/>
            </a>
        </div>
        <?php }?>
        <?php } ?>
    <!--hybrid_providers--></div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"hybrid_auth:account_update"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hybrid_auth/hooks/profiles/account_update.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/hybrid_auth/hooks/profiles/account_update.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['providers_list']->value) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"hybrid_auth:account_update")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"hybrid_auth:account_update"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("hybrid_auth.link_provider")), 0);?>

    <p><?php echo $_smarty_tpl->__("hybrid_auth.text_link_provider");?>
</p>

    <div class="clearfix ty-hybrid-auth__icon-container" id="hybrid_providers">
        <?php  $_smarty_tpl->tpl_vars['provider_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['provider_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['providers_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['provider_data']->key => $_smarty_tpl->tpl_vars['provider_data']->value) {
$_smarty_tpl->tpl_vars['provider_data']->_loop = true;
?>
        <?php if (in_array($_smarty_tpl->tpl_vars['provider_data']->value['provider'],$_smarty_tpl->tpl_vars['linked_providers']->value)) {?>
        <div class="ty-hybrid-auth__icon ty-float-left">
            <a class="cm-unlink-provider ty-hybrid-auth__remove" data-idp="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['provider_id'], ENT_QUOTES, 'UTF-8');?>
" data-provider="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
"><i class="ty-icon-cancel-circle"></i></a>
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['icon'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("hybrid_auth.linked_provider");?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
"/>
        </div>
        <?php }?>
        <?php } ?>
        <div class="ty-hybrid-auth__icon ty-float-left">&nbsp;</div>
        <?php  $_smarty_tpl->tpl_vars['provider_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['provider_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['providers_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['provider_data']->key => $_smarty_tpl->tpl_vars['provider_data']->value) {
$_smarty_tpl->tpl_vars['provider_data']->_loop = true;
?>
        <?php if (!in_array($_smarty_tpl->tpl_vars['provider_data']->value['provider'],$_smarty_tpl->tpl_vars['linked_providers']->value)) {?>
        <div class="ty-hybrid-auth__icon ty-float-left">
            <a class="cm-link-provider ty-link-unlink-provider" data-idp="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['provider_id'], ENT_QUOTES, 'UTF-8');?>
" data-provider="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
">
                <i class="ty-hybrid-auth__add ty-icon-plus-circle"></i>
                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['icon'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("hybrid_auth.not_linked_provider");?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
"/>
            </a>
        </div>
        <?php }?>
        <?php } ?>
    <!--hybrid_providers--></div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"hybrid_auth:account_update"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }
}?><?php }} ?>
