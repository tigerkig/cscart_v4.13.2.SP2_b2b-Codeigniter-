<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 13:24:13
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\themes\responsive\templates\addons\vendor_communication\views\vendor_communication\components\new_thread_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3423549396175344dd15ad1-97984341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd222c8801eec15b025c935041633015472fa43d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\themes\\responsive\\templates\\addons\\vendor_communication\\views\\vendor_communication\\components\\new_thread_form.tpl',
      1 => 1635066681,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3423549396175344dd15ad1-97984341',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'object_id' => 0,
    'vendor_name' => 0,
    'no_ajax' => 0,
    'redirect_url' => 0,
    'config' => 0,
    'company_id' => 0,
    'object_type' => 0,
    'product' => 0,
    'settings' => 0,
    'initial_message' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6175344dd758c8_94891681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6175344dd758c8_94891681')) {function content_6175344dd758c8_94891681($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_communication.contact_vendor_name','vendor_communication.contact_vendor','vendor_communication.your_message_to_vendor_name','vendor_communication.your_message_to_admin','send','vendor_communication.contact_vendor_name','vendor_communication.contact_vendor','vendor_communication.your_message_to_vendor_name','vendor_communication.your_message_to_admin','send'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="hidden" id="new_thread_dialog_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['vendor_name']->value) {
echo $_smarty_tpl->__("vendor_communication.contact_vendor_name",array("[vendor_name]"=>$_smarty_tpl->tpl_vars['vendor_name']->value));
} else {
echo $_smarty_tpl->__("vendor_communication.contact_vendor");
}?>">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="<?php if (!$_smarty_tpl->tpl_vars['no_ajax']->value) {?>cm-ajax<?php }?> cm-form-dialog-closer" name="add_thread_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="new_thread_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="result_ids" value="new_thread_message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
,threads_container" />
        <input type="hidden" name="redirect_url" value="<?php if ($_smarty_tpl->tpl_vars['redirect_url']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['redirect_url']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');
}?>" />
        <input type="hidden" name="thread[company_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="thread[object_type]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="thread[object_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="thread[communication_type]" value="<?php echo htmlspecialchars(smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_CUSTOMER"), ENT_QUOTES, 'UTF-8');?>
" />

        <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
            <div class="ty-vendor-communication-product-info-container">
                <div class="ty-vendor-communication-product-info-image">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_height']), 0);?>

                </div>
                <div class="ty-vendor-communication-product-info-header">
                    <h3 class="ty-product-block-title"><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
</bdi></h3>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_additional_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_additional_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_additional_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            </div>
        <?php }?>

        <div id="new_thread_message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <div class="ty-control-group">
                <label for="thread_msg_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required">
                    <?php if ($_smarty_tpl->tpl_vars['vendor_name']->value) {?>
                        <?php echo $_smarty_tpl->__("vendor_communication.your_message_to_vendor_name",array("[vendor_name]"=>$_smarty_tpl->tpl_vars['vendor_name']->value));?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->__("vendor_communication.your_message_to_admin");?>

                    <?php }?>
                </label>
                <textarea id="thread_msg_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="thread[message]" class="ty-input-textarea ty-input-text-large" rows="5" cols="72"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['initial_message']->value, ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
        <!--new_thread_message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

        <div class="buttons-container">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("send"),'but_meta'=>"ty-btn__primary cm-post cm-reset-link",'but_role'=>"submit",'but_name'=>"dispatch[vendor_communication.create_thread]"), 0);?>

        </div>
    </form>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="hidden" id="new_thread_dialog_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['vendor_name']->value) {
echo $_smarty_tpl->__("vendor_communication.contact_vendor_name",array("[vendor_name]"=>$_smarty_tpl->tpl_vars['vendor_name']->value));
} else {
echo $_smarty_tpl->__("vendor_communication.contact_vendor");
}?>">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="<?php if (!$_smarty_tpl->tpl_vars['no_ajax']->value) {?>cm-ajax<?php }?> cm-form-dialog-closer" name="add_thread_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="new_thread_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="result_ids" value="new_thread_message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
,threads_container" />
        <input type="hidden" name="redirect_url" value="<?php if ($_smarty_tpl->tpl_vars['redirect_url']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['redirect_url']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');
}?>" />
        <input type="hidden" name="thread[company_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="thread[object_type]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="thread[object_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="thread[communication_type]" value="<?php echo htmlspecialchars(smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_CUSTOMER"), ENT_QUOTES, 'UTF-8');?>
" />

        <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
            <div class="ty-vendor-communication-product-info-container">
                <div class="ty-vendor-communication-product-info-image">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_height']), 0);?>

                </div>
                <div class="ty-vendor-communication-product-info-header">
                    <h3 class="ty-product-block-title"><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
</bdi></h3>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_additional_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_additional_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_additional_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            </div>
        <?php }?>

        <div id="new_thread_message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <div class="ty-control-group">
                <label for="thread_msg_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required">
                    <?php if ($_smarty_tpl->tpl_vars['vendor_name']->value) {?>
                        <?php echo $_smarty_tpl->__("vendor_communication.your_message_to_vendor_name",array("[vendor_name]"=>$_smarty_tpl->tpl_vars['vendor_name']->value));?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->__("vendor_communication.your_message_to_admin");?>

                    <?php }?>
                </label>
                <textarea id="thread_msg_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="thread[message]" class="ty-input-textarea ty-input-text-large" rows="5" cols="72"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['initial_message']->value, ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
        <!--new_thread_message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

        <div class="buttons-container">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("send"),'but_meta'=>"ty-btn__primary cm-post cm-reset-link",'but_role'=>"submit",'but_name'=>"dispatch[vendor_communication.create_thread]"), 0);?>

        </div>
    </form>
</div>
<?php }?><?php }} ?>
