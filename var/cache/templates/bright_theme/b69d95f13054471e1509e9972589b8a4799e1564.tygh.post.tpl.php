<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 13:24:14
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\themes\responsive\templates\addons\product_reviews\views\product_reviews\components\post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14496684706175344e788478-58161440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b69d95f13054471e1509e9972589b8a4799e1564' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\themes\\responsive\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\post.tpl',
      1 => 1635066689,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14496684706175344e788478-58161440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_review' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6175344e7d7994_58545232',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6175344e7d7994_58545232')) {function content_6175344e7d7994_58545232($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<?php if ($_smarty_tpl->tpl_vars['product_review']->value) {?>
    <article class="ty-product-review-post">

        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/post_customer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value), 0);?>


        <section class="ty-product-review-post__content ty-dialog-caret">

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_reviews:post_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_reviews:post_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/post_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value), 0);?>


                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/post_message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value), 0);?>


                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/post_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value), 0);?>


            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_reviews:post_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        </section>

        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/post_vendor_reply.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value), 0);?>

    </article>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<?php if ($_smarty_tpl->tpl_vars['product_review']->value) {?>
    <article class="ty-product-review-post">

        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/post_customer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value), 0);?>


        <section class="ty-product-review-post__content ty-dialog-caret">

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_reviews:post_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_reviews:post_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/post_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value), 0);?>


                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/post_message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value), 0);?>


                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/post_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value), 0);?>


            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_reviews:post_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        </section>

        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/post_vendor_reply.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value), 0);?>

    </article>
<?php }?>
<?php }?><?php }} ?>
