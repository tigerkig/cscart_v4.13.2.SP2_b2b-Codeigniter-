<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 13:24:14
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\themes\responsive\templates\addons\product_reviews\views\product_reviews\components\post_message_section.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6512715736175344ea45574-27432497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d2231ec0c4dfcc3bb41b67353920522a2181eb8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\themes\\responsive\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\post_message_section.tpl',
      1 => 1635066689,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6512715736175344ea45574-27432497',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'message_title' => 0,
    'message_body' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6175344ea611d7_73312823',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6175344ea611d7_73312823')) {function content_6175344ea611d7_73312823($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['message_title']->value&&$_smarty_tpl->tpl_vars['message_body']->value) {?>

    <dl class="ty-product-review-post-message-section ty-dl" data-ca-product-review="postMessageSection">

        <?php if ($_smarty_tpl->tpl_vars['message_title']->value) {?>
            <dt class="ty-product-review-post-message-section__title ty-dt ty-strong">
                <?php echo $_smarty_tpl->tpl_vars['message_title']->value;?>

            </dt>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['message_body']->value) {?>
            <dd class="ty-product-review-post-message-section__body ty-dd">
                <?php echo $_smarty_tpl->getSubTemplate ("common/content_more.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('text'=>nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['message_body']->value, ENT_QUOTES, 'UTF-8', true))), 0);?>

            </dd>
        <?php }?>

    </dl>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/post_message_section.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/post_message_section.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['message_title']->value&&$_smarty_tpl->tpl_vars['message_body']->value) {?>

    <dl class="ty-product-review-post-message-section ty-dl" data-ca-product-review="postMessageSection">

        <?php if ($_smarty_tpl->tpl_vars['message_title']->value) {?>
            <dt class="ty-product-review-post-message-section__title ty-dt ty-strong">
                <?php echo $_smarty_tpl->tpl_vars['message_title']->value;?>

            </dt>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['message_body']->value) {?>
            <dd class="ty-product-review-post-message-section__body ty-dd">
                <?php echo $_smarty_tpl->getSubTemplate ("common/content_more.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('text'=>nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['message_body']->value, ENT_QUOTES, 'UTF-8', true))), 0);?>

            </dd>
        <?php }?>

    </dl>
<?php }?>
<?php }?><?php }} ?>
