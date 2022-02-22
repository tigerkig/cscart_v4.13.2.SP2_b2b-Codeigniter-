<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 13:24:14
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\themes\responsive\templates\addons\product_reviews\views\product_reviews\components\post_customer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14910420286175344e7ea903-11737794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cadcb3bf94e364ea550e28d8c7c363d31781b2f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\themes\\responsive\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\post_customer.tpl',
      1 => 1635066689,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14910420286175344e7ea903-11737794',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_review' => 0,
    'addons' => 0,
    'date_machine_format' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6175344e847919_56417218',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6175344e847919_56417218')) {function content_6175344e847919_56417218($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('anonymous','product_reviews.verified_purchase','anonymous','product_reviews.verified_purchase'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['product_review']->value) {?>
    <?php $_smarty_tpl->tpl_vars['date_machine_format'] = new Smarty_variable("%Y-%m-%dT%H:%M:%S", null, 0);?>

    <section class="ty-product-review-post-customer">

        <address class="ty-product-review-post-customer__address ty-address">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_reviews:post_customer")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_reviews:post_customer"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


                <h6 class="ty-product-review-post-customer__name">
                    <?php if ($_smarty_tpl->tpl_vars['product_review']->value['user_data']['name']) {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review']->value['user_data']['name'], ENT_QUOTES, 'UTF-8');?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->__("anonymous");?>

                    <?php }?>
                </h6>

                <?php if ($_smarty_tpl->tpl_vars['product_review']->value['user_data']['is_buyer']===smarty_modifier_enum("YesNo::YES")) {?>
                    <div class="ty-product-review-post-customer__verified">
                        <?php echo $_smarty_tpl->__("product_reviews.verified_purchase");?>

                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_ask_for_customer_location']!=="none") {?>
                    <?php if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_ask_for_customer_location']==="country"&&($_smarty_tpl->tpl_vars['product_review']->value['user_data']['country_code']||$_smarty_tpl->tpl_vars['product_review']->value['user_data']['country'])) {?>
                        <div class="ty-product-review-post-customer__location">
                            <div class="ty-product-review-post-customer__location-flag">
                                <i class="ty-flag ty-flag-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['product_review']->value['user_data']['country_code'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 ty-product-review-post-customer__location-flag-content"></i>
                            </div>

                            <div class="ty-product-review-post-customer__location-text">
                                <div class="ty-product-review-post-customer__location-country ty-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review']->value['user_data']['country'], ENT_QUOTES, 'UTF-8');?>
</div>
                            </div>
                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_ask_for_customer_location']==="city") {?>
                        <div class="ty-product-review-post-customer__location">
                            <div class="ty-product-review-post-customer__location-text">
                                <div class="ty-product-review-post-customer__location-city ty-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review']->value['user_data']['city'], ENT_QUOTES, 'UTF-8');?>
</div>
                            </div>
                        </div>
                    <?php }?>

                <?php }?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_reviews:post_customer"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </address>

        <?php if ($_smarty_tpl->tpl_vars['product_review']->value['product_review_timestamp']) {?>
            <time class="ty-product-review-post-customer__date" datetime="<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['product_review']->value['product_review_timestamp'],$_smarty_tpl->tpl_vars['date_machine_format']->value), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['product_review']->value['product_review_timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>

            </time>
        <?php }?>

    </section>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/post_customer.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/post_customer.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['product_review']->value) {?>
    <?php $_smarty_tpl->tpl_vars['date_machine_format'] = new Smarty_variable("%Y-%m-%dT%H:%M:%S", null, 0);?>

    <section class="ty-product-review-post-customer">

        <address class="ty-product-review-post-customer__address ty-address">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_reviews:post_customer")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_reviews:post_customer"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


                <h6 class="ty-product-review-post-customer__name">
                    <?php if ($_smarty_tpl->tpl_vars['product_review']->value['user_data']['name']) {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review']->value['user_data']['name'], ENT_QUOTES, 'UTF-8');?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->__("anonymous");?>

                    <?php }?>
                </h6>

                <?php if ($_smarty_tpl->tpl_vars['product_review']->value['user_data']['is_buyer']===smarty_modifier_enum("YesNo::YES")) {?>
                    <div class="ty-product-review-post-customer__verified">
                        <?php echo $_smarty_tpl->__("product_reviews.verified_purchase");?>

                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_ask_for_customer_location']!=="none") {?>
                    <?php if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_ask_for_customer_location']==="country"&&($_smarty_tpl->tpl_vars['product_review']->value['user_data']['country_code']||$_smarty_tpl->tpl_vars['product_review']->value['user_data']['country'])) {?>
                        <div class="ty-product-review-post-customer__location">
                            <div class="ty-product-review-post-customer__location-flag">
                                <i class="ty-flag ty-flag-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['product_review']->value['user_data']['country_code'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 ty-product-review-post-customer__location-flag-content"></i>
                            </div>

                            <div class="ty-product-review-post-customer__location-text">
                                <div class="ty-product-review-post-customer__location-country ty-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review']->value['user_data']['country'], ENT_QUOTES, 'UTF-8');?>
</div>
                            </div>
                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_ask_for_customer_location']==="city") {?>
                        <div class="ty-product-review-post-customer__location">
                            <div class="ty-product-review-post-customer__location-text">
                                <div class="ty-product-review-post-customer__location-city ty-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review']->value['user_data']['city'], ENT_QUOTES, 'UTF-8');?>
</div>
                            </div>
                        </div>
                    <?php }?>

                <?php }?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_reviews:post_customer"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </address>

        <?php if ($_smarty_tpl->tpl_vars['product_review']->value['product_review_timestamp']) {?>
            <time class="ty-product-review-post-customer__date" datetime="<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['product_review']->value['product_review_timestamp'],$_smarty_tpl->tpl_vars['date_machine_format']->value), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['product_review']->value['product_review_timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>

            </time>
        <?php }?>

    </section>
<?php }?>
<?php }?><?php }} ?>
