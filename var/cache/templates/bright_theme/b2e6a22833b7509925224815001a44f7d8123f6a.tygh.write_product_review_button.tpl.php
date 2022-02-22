<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 13:24:13
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\themes\responsive\templates\addons\product_reviews\views\product_reviews\components\write_product_review_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16337626226175344d7ae3b0-35604684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2e6a22833b7509925224815001a44f7d8123f6a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\themes\\responsive\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\write_product_review_button.tpl',
      1 => 1635066689,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16337626226175344d7ae3b0-35604684',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'locate_to_product_review_tab' => 0,
    'config' => 0,
    'settings' => 0,
    'but_meta' => 0,
    'product_id' => 0,
    'return_current_url' => 0,
    'name' => 0,
    'auth' => 0,
    'is_product_and_post_after_purchase_enabled' => 0,
    'but_id' => 0,
    'but_href' => 0,
    'but_title' => 0,
    'target_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6175344d7fc447_46385711',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6175344d7fc447_46385711')) {function content_6175344d7fc447_46385711($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sign_in','sign_in'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['locate_to_product_review_tab']->value) {?>
    <?php $_smarty_tpl->tpl_vars['return_current_url'] = new Smarty_variable(rawurlencode((fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"selected_section=product_reviews"))), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['return_current_url'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['product_reviews']['review_after_purchase']===smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->tpl_vars['is_product_and_post_after_purchase_enabled'] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['is_product_and_post_after_purchase_enabled'] = new Smarty_variable(false, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['but_meta'] = new Smarty_variable("cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close ty-product-review-write-product-review-button ".((string)$_smarty_tpl->tpl_vars['but_meta']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_id'] = new Smarty_variable("opener_new_post_".((string)$_smarty_tpl->tpl_vars['product_id']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_href'] = new Smarty_variable(fn_url("product_reviews.get_new_post_form?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&post_redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), null, 0);?>
<?php $_smarty_tpl->tpl_vars['target_id'] = new Smarty_variable("new_post_dialog_".((string)$_smarty_tpl->tpl_vars['product_id']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['name']->value, null, 0);?>


<?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['is_product_and_post_after_purchase_enabled']->value) {?>
    <?php $_smarty_tpl->tpl_vars['but_id'] = new Smarty_variable("opener_product_review_login_form_new_post_".((string)$_smarty_tpl->tpl_vars['product_id']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['target_id'] = new Smarty_variable("new_product_review_post_login_form_popup", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_href'] = new Smarty_variable(fn_url("product_reviews.get_user_login_form?return_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_title'] = new Smarty_variable($_smarty_tpl->__("sign_in"), null, 0);?>
<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_text'=>$_smarty_tpl->tpl_vars['name']->value,'but_title'=>$_smarty_tpl->tpl_vars['but_title']->value,'but_role'=>"submit",'but_target_id'=>$_smarty_tpl->tpl_vars['target_id']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_rel'=>"nofollow"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/write_product_review_button.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/write_product_review_button.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['locate_to_product_review_tab']->value) {?>
    <?php $_smarty_tpl->tpl_vars['return_current_url'] = new Smarty_variable(rawurlencode((fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"selected_section=product_reviews"))), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['return_current_url'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['product_reviews']['review_after_purchase']===smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->tpl_vars['is_product_and_post_after_purchase_enabled'] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['is_product_and_post_after_purchase_enabled'] = new Smarty_variable(false, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['but_meta'] = new Smarty_variable("cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close ty-product-review-write-product-review-button ".((string)$_smarty_tpl->tpl_vars['but_meta']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_id'] = new Smarty_variable("opener_new_post_".((string)$_smarty_tpl->tpl_vars['product_id']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_href'] = new Smarty_variable(fn_url("product_reviews.get_new_post_form?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&post_redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), null, 0);?>
<?php $_smarty_tpl->tpl_vars['target_id'] = new Smarty_variable("new_post_dialog_".((string)$_smarty_tpl->tpl_vars['product_id']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['name']->value, null, 0);?>


<?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['is_product_and_post_after_purchase_enabled']->value) {?>
    <?php $_smarty_tpl->tpl_vars['but_id'] = new Smarty_variable("opener_product_review_login_form_new_post_".((string)$_smarty_tpl->tpl_vars['product_id']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['target_id'] = new Smarty_variable("new_product_review_post_login_form_popup", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_href'] = new Smarty_variable(fn_url("product_reviews.get_user_login_form?return_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_title'] = new Smarty_variable($_smarty_tpl->__("sign_in"), null, 0);?>
<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_text'=>$_smarty_tpl->tpl_vars['name']->value,'but_title'=>$_smarty_tpl->tpl_vars['but_title']->value,'but_role'=>"submit",'but_target_id'=>$_smarty_tpl->tpl_vars['target_id']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_rel'=>"nofollow"), 0);?>

<?php }?><?php }} ?>
