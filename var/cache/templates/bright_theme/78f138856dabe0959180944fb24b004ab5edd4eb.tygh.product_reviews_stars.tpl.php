<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 13:23:09
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\themes\responsive\templates\addons\product_reviews\views\product_reviews\components\product_reviews_stars.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3200477206175340dee1795-25642863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78f138856dabe0959180944fb24b004ab5edd4eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\themes\\responsive\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\product_reviews_stars.tpl',
      1 => 1635066689,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3200477206175340dee1795-25642863',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'rating' => 0,
    'integer_rating' => 0,
    'is_half_rating' => 0,
    'integer_rating_math' => 0,
    'scroll_to_elm' => 0,
    'external_click_id' => 0,
    'accurate_rating' => 0,
    'link' => 0,
    'title' => 0,
    'button' => 0,
    'product' => 0,
    'meta' => 0,
    'size' => 0,
    'full_stars_count' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6175340df3d707_06535692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6175340df3d707_06535692')) {function content_6175340df3d707_06535692($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.product_is_rated_n_out_of_five_stars','product_reviews.show_rating','product_reviews.click_to_see_reviews','product_reviews.product_is_rated_n_out_of_five_stars','product_reviews.show_rating','product_reviews.click_to_see_reviews'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['rating']->value>0) {?>

    <?php $_smarty_tpl->tpl_vars['integer_rating'] = new Smarty_variable(floor($_smarty_tpl->tpl_vars['rating']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['accurate_rating'] = new Smarty_variable(round($_smarty_tpl->tpl_vars['rating']->value,1), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['is_half_rating'] = new Smarty_variable((($_smarty_tpl->tpl_vars['rating']->value-$_smarty_tpl->tpl_vars['integer_rating']->value)>=0.25&&($_smarty_tpl->tpl_vars['rating']->value-$_smarty_tpl->tpl_vars['integer_rating']->value)<0.75), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['integer_rating_math'] = new Smarty_variable(round($_smarty_tpl->tpl_vars['rating']->value,0), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['full_stars_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['is_half_rating']->value ? $_smarty_tpl->tpl_vars['integer_rating']->value : $_smarty_tpl->tpl_vars['integer_rating_math']->value, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['scroll_to_elm'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['scroll_to_elm']->value)===null||$tmp==='' ? "content_product_reviews" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['external_click_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['external_click_id']->value)===null||$tmp==='' ? "product_reviews" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->__("product_reviews.product_is_rated_n_out_of_five_stars",array($_smarty_tpl->tpl_vars['accurate_rating']->value)), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['link']->value) {?>
        <?php ob_start();
echo $_smarty_tpl->__("product_reviews.show_rating");
$_tmp25=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['title']->value).". ".$_tmp25.".", null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['button']->value) {?>
        <?php ob_start();
echo $_smarty_tpl->__("product_reviews.click_to_see_reviews");
$_tmp26=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['title']->value).". ".$_tmp26.".", null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['link']->value===true) {?>
        <?php $_smarty_tpl->tpl_vars['link'] = new Smarty_variable("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&selected_section=product_reviews#product_reviews", null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['link']->value) {?>
        <a class="ty-product-review-reviews-stars__link <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['link']->value), ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
    <?php } elseif ($_smarty_tpl->tpl_vars['button']->value) {?>
        <button type="button"
            class="ty-product-review-reviews-stars__button ty-btn-reset cm-external-click <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-scroll="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scroll_to_elm']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-external-click-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
    <?php }?>
        <div class="ty-product-review-reviews-stars
            <?php if ($_smarty_tpl->tpl_vars['size']->value==="large") {?>
                ty-product-review-reviews-stars--large
            <?php } elseif ($_smarty_tpl->tpl_vars['size']->value==="xlarge") {?>
                ty-product-review-reviews-stars--xlarge
            <?php }?>
            "
            data-ca-product-review-reviews-stars-rating="<?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['rating']->value), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-product-review-reviews-stars-full="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['full_stars_count']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-product-review-reviews-stars-is-half="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_half_rating']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php if (!$_smarty_tpl->tpl_vars['link']->value&&!$_smarty_tpl->tpl_vars['button']->value) {?>
                title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
        ></div>
    <?php if ($_smarty_tpl->tpl_vars['link']->value) {?>
        </a>
    <?php } elseif ($_smarty_tpl->tpl_vars['button']->value) {?>
        </button>
    <?php }?>

<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['rating']->value>0) {?>

    <?php $_smarty_tpl->tpl_vars['integer_rating'] = new Smarty_variable(floor($_smarty_tpl->tpl_vars['rating']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['accurate_rating'] = new Smarty_variable(round($_smarty_tpl->tpl_vars['rating']->value,1), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['is_half_rating'] = new Smarty_variable((($_smarty_tpl->tpl_vars['rating']->value-$_smarty_tpl->tpl_vars['integer_rating']->value)>=0.25&&($_smarty_tpl->tpl_vars['rating']->value-$_smarty_tpl->tpl_vars['integer_rating']->value)<0.75), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['integer_rating_math'] = new Smarty_variable(round($_smarty_tpl->tpl_vars['rating']->value,0), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['full_stars_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['is_half_rating']->value ? $_smarty_tpl->tpl_vars['integer_rating']->value : $_smarty_tpl->tpl_vars['integer_rating_math']->value, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['scroll_to_elm'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['scroll_to_elm']->value)===null||$tmp==='' ? "content_product_reviews" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['external_click_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['external_click_id']->value)===null||$tmp==='' ? "product_reviews" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->__("product_reviews.product_is_rated_n_out_of_five_stars",array($_smarty_tpl->tpl_vars['accurate_rating']->value)), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['link']->value) {?>
        <?php ob_start();
echo $_smarty_tpl->__("product_reviews.show_rating");
$_tmp27=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['title']->value).". ".$_tmp27.".", null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['button']->value) {?>
        <?php ob_start();
echo $_smarty_tpl->__("product_reviews.click_to_see_reviews");
$_tmp28=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['title']->value).". ".$_tmp28.".", null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['link']->value===true) {?>
        <?php $_smarty_tpl->tpl_vars['link'] = new Smarty_variable("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&selected_section=product_reviews#product_reviews", null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['link']->value) {?>
        <a class="ty-product-review-reviews-stars__link <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['link']->value), ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
    <?php } elseif ($_smarty_tpl->tpl_vars['button']->value) {?>
        <button type="button"
            class="ty-product-review-reviews-stars__button ty-btn-reset cm-external-click <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-scroll="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scroll_to_elm']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-external-click-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
    <?php }?>
        <div class="ty-product-review-reviews-stars
            <?php if ($_smarty_tpl->tpl_vars['size']->value==="large") {?>
                ty-product-review-reviews-stars--large
            <?php } elseif ($_smarty_tpl->tpl_vars['size']->value==="xlarge") {?>
                ty-product-review-reviews-stars--xlarge
            <?php }?>
            "
            data-ca-product-review-reviews-stars-rating="<?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['rating']->value), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-product-review-reviews-stars-full="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['full_stars_count']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-product-review-reviews-stars-is-half="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_half_rating']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php if (!$_smarty_tpl->tpl_vars['link']->value&&!$_smarty_tpl->tpl_vars['button']->value) {?>
                title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
        ></div>
    <?php if ($_smarty_tpl->tpl_vars['link']->value) {?>
        </a>
    <?php } elseif ($_smarty_tpl->tpl_vars['button']->value) {?>
        </button>
    <?php }?>

<?php }?>
<?php }?><?php }} ?>
