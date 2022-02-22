<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 13:24:14
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\themes\responsive\templates\addons\product_reviews\views\product_reviews\components\product_reviews_navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8958236146175344e647910-18459445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af1cfd0c123d94dee10cbc433291948507fd35ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\themes\\responsive\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\product_reviews_navigation.tpl',
      1 => 1635066689,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8958236146175344e647910-18459445',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'total_product_reviews' => 0,
    'config' => 0,
    '_REQUEST' => 0,
    'product_reviews_sorting' => 0,
    'product_reviews_sorting_orders' => 0,
    'product_reviews_search' => 0,
    'product_reviews_avail_sorting' => 0,
    'product_id' => 0,
    'product_reviews_with_images' => 0,
    'curl' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6175344e699368_97867033',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6175344e699368_97867033')) {function content_6175344e699368_97867033($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.with_photo','product_reviews.with_photo'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['total_product_reviews']->value) {?>
    <?php $_smarty_tpl->tpl_vars['curl'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","with_images"), null, 0);?>

    
    <?php $_smarty_tpl->tpl_vars['product_reviews_with_images'] = new Smarty_variable(($_smarty_tpl->tpl_vars['_REQUEST']->value['with_images']==="1"), null, 0);?>
    

    <nav class="ty-product-review-reviews-navigation">

        <?php $_smarty_tpl->tpl_vars['curl'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order","result_ids","layout"), null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('sorting'=>$_smarty_tpl->tpl_vars['product_reviews_sorting']->value,'sorting_orders'=>$_smarty_tpl->tpl_vars['product_reviews_sorting_orders']->value,'search'=>$_smarty_tpl->tpl_vars['product_reviews_search']->value,'avail_sorting'=>$_smarty_tpl->tpl_vars['product_reviews_avail_sorting']->value,'ajax_class'=>"cm-ajax",'pagination_id'=>"pagination_contents_comments_".((string)$_smarty_tpl->tpl_vars['product_id']->value)), 0);?>


        <label class="ty-product-review-reviews-navigation__filter <?php if ($_smarty_tpl->tpl_vars['product_reviews_with_images']->value) {?>ty-product-review-reviews-navigation__filter--active<?php }?>">
            <input id="product_review_with_images"
                type="checkbox"
                name="product_review_with_images"
                <?php if ($_smarty_tpl->tpl_vars['product_reviews_with_images']->value) {?>checked="checked"<?php }?>
                class="cm-external-click ty-product-review-reviews-navigation__filter-checkbox
                <?php if ($_smarty_tpl->tpl_vars['product_reviews_with_images']->value) {?>
                    ty-product-review-reviews-navigation__filter-checkbox--active
                <?php }?>
                "
                data-ca-external-click-id="product_review_with_images_link"
            >
            <a id="product_review_with_images_link"
                href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['product_reviews_with_images']->value) {?><?php echo "0";?><?php } else { ?><?php echo "1";?><?php }
$_tmp3=ob_get_clean();?><?php echo htmlspecialchars(fn_link_attach($_smarty_tpl->tpl_vars['curl']->value,"with_images=".$_tmp3."&selected_section=product_reviews#product_reviews"), ENT_QUOTES, 'UTF-8');?>
"
                class="ty-product-review-reviews-navigation__filter-link cm-ajax"
                data-ca-target-id="pagination_contents_comments_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                rel="nofollow"
            >
                <?php echo $_smarty_tpl->__("product_reviews.with_photo");?>

            </a>
        </label>

    </nav>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/product_reviews_navigation.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/product_reviews_navigation.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['total_product_reviews']->value) {?>
    <?php $_smarty_tpl->tpl_vars['curl'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","with_images"), null, 0);?>

    
    <?php $_smarty_tpl->tpl_vars['product_reviews_with_images'] = new Smarty_variable(($_smarty_tpl->tpl_vars['_REQUEST']->value['with_images']==="1"), null, 0);?>
    

    <nav class="ty-product-review-reviews-navigation">

        <?php $_smarty_tpl->tpl_vars['curl'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order","result_ids","layout"), null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('sorting'=>$_smarty_tpl->tpl_vars['product_reviews_sorting']->value,'sorting_orders'=>$_smarty_tpl->tpl_vars['product_reviews_sorting_orders']->value,'search'=>$_smarty_tpl->tpl_vars['product_reviews_search']->value,'avail_sorting'=>$_smarty_tpl->tpl_vars['product_reviews_avail_sorting']->value,'ajax_class'=>"cm-ajax",'pagination_id'=>"pagination_contents_comments_".((string)$_smarty_tpl->tpl_vars['product_id']->value)), 0);?>


        <label class="ty-product-review-reviews-navigation__filter <?php if ($_smarty_tpl->tpl_vars['product_reviews_with_images']->value) {?>ty-product-review-reviews-navigation__filter--active<?php }?>">
            <input id="product_review_with_images"
                type="checkbox"
                name="product_review_with_images"
                <?php if ($_smarty_tpl->tpl_vars['product_reviews_with_images']->value) {?>checked="checked"<?php }?>
                class="cm-external-click ty-product-review-reviews-navigation__filter-checkbox
                <?php if ($_smarty_tpl->tpl_vars['product_reviews_with_images']->value) {?>
                    ty-product-review-reviews-navigation__filter-checkbox--active
                <?php }?>
                "
                data-ca-external-click-id="product_review_with_images_link"
            >
            <a id="product_review_with_images_link"
                href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['product_reviews_with_images']->value) {?><?php echo "0";?><?php } else { ?><?php echo "1";?><?php }
$_tmp4=ob_get_clean();?><?php echo htmlspecialchars(fn_link_attach($_smarty_tpl->tpl_vars['curl']->value,"with_images=".$_tmp4."&selected_section=product_reviews#product_reviews"), ENT_QUOTES, 'UTF-8');?>
"
                class="ty-product-review-reviews-navigation__filter-link cm-ajax"
                data-ca-target-id="pagination_contents_comments_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                rel="nofollow"
            >
                <?php echo $_smarty_tpl->__("product_reviews.with_photo");?>

            </a>
        </label>

    </nav>
<?php }?>
<?php }?><?php }} ?>
