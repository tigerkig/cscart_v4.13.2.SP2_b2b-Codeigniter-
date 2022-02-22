<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 13:24:14
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\themes\responsive\templates\addons\product_reviews\views\product_reviews\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:281399186175344e528036-60545576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '249791e5b5f0ac59c9328e3011968699d98f138b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\themes\\responsive\\templates\\addons\\product_reviews\\views\\product_reviews\\view.tpl',
      1 => 1635066689,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '281399186175344e528036-60545576',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'container_id' => 0,
    'wrap' => 0,
    'title' => 0,
    'subheader' => 0,
    'product_id' => 0,
    'product_reviews' => 0,
    'product_reviews_search' => 0,
    'product' => 0,
    'product_review' => 0,
    'locate_to_product_review_tab' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6175344e58a126_12205773',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6175344e58a126_12205773')) {function content_6175344e58a126_12205773($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.no_reviews_found','product_reviews.no_reviews_found'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<div class="ty-product-reviews-view" id="<?php if ($_smarty_tpl->tpl_vars['container_id']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['container_id']->value, ENT_QUOTES, 'UTF-8');
} else { ?>content_product_reviews<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['wrap']->value==true) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("content", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['subheader']->value) {?>
        <h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subheader']->value, ENT_QUOTES, 'UTF-8');?>
</h4>
    <?php }?>

    <section class="ty-product-reviews-view__main">
        <div class="ty-product-reviews-view__main-content" id="product_reviews_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">

            <?php if ($_smarty_tpl->tpl_vars['product_reviews']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"pagination_contents_comments_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'extra_url'=>"&selected_section=product_reviews",'search'=>$_smarty_tpl->tpl_vars['product_reviews_search']->value), 0);?>


                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/product_reviews_navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('total_product_reviews'=>$_smarty_tpl->tpl_vars['product']->value['product_reviews_rating_stats']['total']), 0);?>


                <div class="ty-product-review-view__posts">

                    <?php  $_smarty_tpl->tpl_vars['product_review'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_review']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_review']->key => $_smarty_tpl->tpl_vars['product_review']->value) {
$_smarty_tpl->tpl_vars['product_review']->_loop = true;
?>
                        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value), 0);?>

                    <?php } ?>

                </div>

                <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"pagination_contents_comments_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'extra_url'=>"&selected_section=product_reviews",'search'=>$_smarty_tpl->tpl_vars['product_reviews_search']->value), 0);?>

            <?php } else { ?>
                <p class="ty-no-items"><?php echo $_smarty_tpl->__("product_reviews.no_reviews_found");?>
</p>
            <?php }?>
        <!--product_reviews_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/product_reviews_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'locate_to_product_review_tab'=>$_smarty_tpl->tpl_vars['locate_to_product_review_tab']->value,'product_reviews'=>$_smarty_tpl->tpl_vars['product_reviews']->value), 0);?>


    </section>

    <?php if ($_smarty_tpl->tpl_vars['wrap']->value==true) {?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php echo Smarty::$_smarty_vars['capture']['content'];?>

    <?php } else { ?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php }?>
</div>

<?php echo smarty_function_script(array('src'=>"js/addons/product_reviews/fallback.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/product_reviews/index.js"),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<div class="ty-product-reviews-view" id="<?php if ($_smarty_tpl->tpl_vars['container_id']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['container_id']->value, ENT_QUOTES, 'UTF-8');
} else { ?>content_product_reviews<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['wrap']->value==true) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("content", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['subheader']->value) {?>
        <h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subheader']->value, ENT_QUOTES, 'UTF-8');?>
</h4>
    <?php }?>

    <section class="ty-product-reviews-view__main">
        <div class="ty-product-reviews-view__main-content" id="product_reviews_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">

            <?php if ($_smarty_tpl->tpl_vars['product_reviews']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"pagination_contents_comments_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'extra_url'=>"&selected_section=product_reviews",'search'=>$_smarty_tpl->tpl_vars['product_reviews_search']->value), 0);?>


                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/product_reviews_navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('total_product_reviews'=>$_smarty_tpl->tpl_vars['product']->value['product_reviews_rating_stats']['total']), 0);?>


                <div class="ty-product-review-view__posts">

                    <?php  $_smarty_tpl->tpl_vars['product_review'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_review']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_review']->key => $_smarty_tpl->tpl_vars['product_review']->value) {
$_smarty_tpl->tpl_vars['product_review']->_loop = true;
?>
                        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value), 0);?>

                    <?php } ?>

                </div>

                <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"pagination_contents_comments_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'extra_url'=>"&selected_section=product_reviews",'search'=>$_smarty_tpl->tpl_vars['product_reviews_search']->value), 0);?>

            <?php } else { ?>
                <p class="ty-no-items"><?php echo $_smarty_tpl->__("product_reviews.no_reviews_found");?>
</p>
            <?php }?>
        <!--product_reviews_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/product_reviews_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'locate_to_product_review_tab'=>$_smarty_tpl->tpl_vars['locate_to_product_review_tab']->value,'product_reviews'=>$_smarty_tpl->tpl_vars['product_reviews']->value), 0);?>


    </section>

    <?php if ($_smarty_tpl->tpl_vars['wrap']->value==true) {?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php echo Smarty::$_smarty_vars['capture']['content'];?>

    <?php } else { ?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php }?>
</div>

<?php echo smarty_function_script(array('src'=>"js/addons/product_reviews/fallback.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/product_reviews/index.js"),$_smarty_tpl);?>

<?php }?><?php }} ?>
