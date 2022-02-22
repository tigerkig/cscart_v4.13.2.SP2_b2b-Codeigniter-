<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 14:39:09
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\themes\responsive\templates\blocks\product_filters\original.tpl" */ ?>
<?php /*%%SmartyHeaderCode:932361348617545ddc3e262-09342666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '117d2dd8665ee137b8d6d42ca63f5d8c94dc0d88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\themes\\responsive\\templates\\blocks\\product_filters\\original.tpl',
      1 => 1635066672,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '932361348617545ddc3e262-09342666',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'config' => 0,
    'curl' => 0,
    'show_not_found_notification' => 0,
    'ajax_div_ids' => 0,
    'filter_base_url' => 0,
    'is_selected_filters' => 0,
    'items' => 0,
    'filter' => 0,
    'filter_uid' => 0,
    'cookie_name_show_filter' => 0,
    'fh' => 0,
    'collapse' => 0,
    'reset_url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_617545ddd21556_71920689',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617545ddd21556_71920689')) {function content_617545ddd21556_71920689($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_sizeof')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.sizeof.php';
if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('reset','reset'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php echo smarty_function_script(array('src'=>"js/tygh/product_filters.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['block']->value['type']=="product_filters") {?>
    <?php $_smarty_tpl->tpl_vars['ajax_div_ids'] = new Smarty_variable("product_filters_*,selected_filters_*,products_search_*,category_products_*,currencies_*,languages_*,product_features_*", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['curl'] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value['current_url'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['curl'] = new Smarty_variable(fn_url("products.search"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['ajax_div_ids'] = new Smarty_variable('', null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['filter_base_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['curl']->value,"result_ids","full_render","filter_id","view_all","req_range_id","features_hash","subcats","page","total"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['is_selected_filters'] = new Smarty_variable($_REQUEST['features_hash'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['show_not_found_notification'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_not_found_notification']->value)===null||$tmp==='' ? 0 : $tmp), null, 0);?>

<div class="cm-product-filters"
    data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-base-url="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['filter_base_url']->value), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-tooltip-class = "ty-product-filters__tooltip"
    data-ca-tooltip-right-class = "ty-product-filters__tooltip--right"
    data-ca-tooltip-mobile-class = "ty-tooltip--mobile"
    data-ca-tooltip-layout-selector = "[data-ca-tooltip-layout='true']"
    data-ce-tooltip-events-tooltip = "mouseenter"
    id="product_filters_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
<div class="ty-product-filters__wrapper" data-ca-product-filters="wrapper" <?php if ($_smarty_tpl->tpl_vars['is_selected_filters']->value) {?>data-ca-product-filters-status="active"<?php }?>>
<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>

<?php  $_smarty_tpl->tpl_vars["filter"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["filter"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["filter"]->key => $_smarty_tpl->tpl_vars["filter"]->value) {
$_smarty_tpl->tpl_vars["filter"]->_loop = true;
?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:product_filters_variants")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:product_filters_variants"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_smarty_tpl->tpl_vars["filter_uid"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['filter']->value['filter_id']), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["cookie_name_show_filter"] = new Smarty_variable("content_".((string)$_smarty_tpl->tpl_vars['filter_uid']->value), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['filter']->value['display']=="N") {?>
        
        <?php $_smarty_tpl->tpl_vars["collapse"] = new Smarty_variable(true, null, 0);?>
        <?php if ($_COOKIE[$_smarty_tpl->tpl_vars['cookie_name_show_filter']->value]) {?>
            <?php $_smarty_tpl->tpl_vars["collapse"] = new Smarty_variable(false, null, 0);?>
        <?php }?>
    <?php } else { ?>
        
        <?php $_smarty_tpl->tpl_vars["collapse"] = new Smarty_variable(false, null, 0);?>
        <?php if ($_COOKIE[$_smarty_tpl->tpl_vars['cookie_name_show_filter']->value]) {?>
            <?php $_smarty_tpl->tpl_vars["collapse"] = new Smarty_variable(true, null, 0);?>
        <?php }?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['reset_url'] = new Smarty_variable('', null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['filter']->value['selected_variants']||$_smarty_tpl->tpl_vars['filter']->value['selected_range']) {?>
        <?php $_smarty_tpl->tpl_vars['reset_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['filter_base_url']->value, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['fh'] = new Smarty_variable(fn_delete_filter_from_hash($_REQUEST['features_hash'],$_smarty_tpl->tpl_vars['filter']->value['filter_id']), null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['fh']->value) {?>
            <?php $_smarty_tpl->tpl_vars['reset_url'] = new Smarty_variable(fn_link_attach(fn_link_attach($_smarty_tpl->tpl_vars['filter_base_url']->value,"features_hash=".((string)$_smarty_tpl->tpl_vars['fh']->value)),"show_not_found_notification=".((string)$_smarty_tpl->tpl_vars['show_not_found_notification']->value)), null, 0);?>
        <?php }?>
    <?php }?>
    
    <div class="ty-product-filters__block">
        <div id="sw_content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-product-filters__switch cm-combination-filter_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['collapse']->value) {?> open<?php }?> cm-save-state <?php if ($_smarty_tpl->tpl_vars['filter']->value['display']=="Y") {?>cm-ss-reverse<?php }?>">
            <span class="ty-product-filters__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['filter']->value['selected_variants']) {?> (<?php echo htmlspecialchars(smarty_modifier_sizeof($_smarty_tpl->tpl_vars['filter']->value['selected_variants']), ENT_QUOTES, 'UTF-8');?>
)<?php }
if ($_smarty_tpl->tpl_vars['reset_url']->value) {?><a class="cm-ajax cm-ajax-full-render cm-history" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['reset_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="ty-icon-cancel-circle"></i></a><?php }?></span>
            <i class="ty-product-filters__switch-down ty-icon-down-open"></i>
            <i class="ty-product-filters__switch-right ty-icon-up-open"></i>
        </div>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:product_filters_variants_element")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:product_filters_variants_element"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['filter']->value['slider']) {?>
                <?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_type']==smarty_modifier_enum("ProductFeatures::DATE")) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("blocks/product_filters/components/product_filter_datepicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('filter_uid'=>$_smarty_tpl->tpl_vars['filter_uid']->value,'filter'=>$_smarty_tpl->tpl_vars['filter']->value), 0);?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->getSubTemplate ("blocks/product_filters/components/product_filter_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('filter_uid'=>$_smarty_tpl->tpl_vars['filter_uid']->value,'filter'=>$_smarty_tpl->tpl_vars['filter']->value), 0);?>

                <?php }?>
            <?php } else { ?>
                <?php echo $_smarty_tpl->getSubTemplate ("blocks/product_filters/components/product_filter_variants.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('filter_uid'=>$_smarty_tpl->tpl_vars['filter_uid']->value,'filter'=>$_smarty_tpl->tpl_vars['filter']->value,'collapse'=>$_smarty_tpl->tpl_vars['collapse']->value), 0);?>

            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:product_filters_variants_element"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:product_filters_variants"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } ?>

<?php if ($_smarty_tpl->tpl_vars['ajax_div_ids']->value) {?>
<div class="ty-product-filters__tools clearfix <?php if (!$_smarty_tpl->tpl_vars['is_selected_filters']->value) {?>hidden<?php }?>" data-ca-product-filters="tools">

    <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['filter_base_url']->value), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-product-filters__reset-button cm-ajax cm-ajax-full-render cm-history" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="ty-product-filters__reset-icon ty-icon-cw"></i> <?php echo $_smarty_tpl->__("reset");?>
</a>

</div>
<?php }?>

<?php }?>
</div>
<!--product_filters_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

<div data-ca-tooltip-layout="true" class="hidden">
    <button type="button" data-ca-scroll=".ty-mainbox-title" class="cm-scroll ty-tooltip--link ty-tooltip--filter"><span class="tooltip-arrow"></span></button>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_filters/original.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_filters/original.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php echo smarty_function_script(array('src'=>"js/tygh/product_filters.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['block']->value['type']=="product_filters") {?>
    <?php $_smarty_tpl->tpl_vars['ajax_div_ids'] = new Smarty_variable("product_filters_*,selected_filters_*,products_search_*,category_products_*,currencies_*,languages_*,product_features_*", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['curl'] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value['current_url'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['curl'] = new Smarty_variable(fn_url("products.search"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['ajax_div_ids'] = new Smarty_variable('', null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['filter_base_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['curl']->value,"result_ids","full_render","filter_id","view_all","req_range_id","features_hash","subcats","page","total"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['is_selected_filters'] = new Smarty_variable($_REQUEST['features_hash'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['show_not_found_notification'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_not_found_notification']->value)===null||$tmp==='' ? 0 : $tmp), null, 0);?>

<div class="cm-product-filters"
    data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-base-url="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['filter_base_url']->value), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-tooltip-class = "ty-product-filters__tooltip"
    data-ca-tooltip-right-class = "ty-product-filters__tooltip--right"
    data-ca-tooltip-mobile-class = "ty-tooltip--mobile"
    data-ca-tooltip-layout-selector = "[data-ca-tooltip-layout='true']"
    data-ce-tooltip-events-tooltip = "mouseenter"
    id="product_filters_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
<div class="ty-product-filters__wrapper" data-ca-product-filters="wrapper" <?php if ($_smarty_tpl->tpl_vars['is_selected_filters']->value) {?>data-ca-product-filters-status="active"<?php }?>>
<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>

<?php  $_smarty_tpl->tpl_vars["filter"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["filter"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["filter"]->key => $_smarty_tpl->tpl_vars["filter"]->value) {
$_smarty_tpl->tpl_vars["filter"]->_loop = true;
?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:product_filters_variants")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:product_filters_variants"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_smarty_tpl->tpl_vars["filter_uid"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['filter']->value['filter_id']), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["cookie_name_show_filter"] = new Smarty_variable("content_".((string)$_smarty_tpl->tpl_vars['filter_uid']->value), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['filter']->value['display']=="N") {?>
        
        <?php $_smarty_tpl->tpl_vars["collapse"] = new Smarty_variable(true, null, 0);?>
        <?php if ($_COOKIE[$_smarty_tpl->tpl_vars['cookie_name_show_filter']->value]) {?>
            <?php $_smarty_tpl->tpl_vars["collapse"] = new Smarty_variable(false, null, 0);?>
        <?php }?>
    <?php } else { ?>
        
        <?php $_smarty_tpl->tpl_vars["collapse"] = new Smarty_variable(false, null, 0);?>
        <?php if ($_COOKIE[$_smarty_tpl->tpl_vars['cookie_name_show_filter']->value]) {?>
            <?php $_smarty_tpl->tpl_vars["collapse"] = new Smarty_variable(true, null, 0);?>
        <?php }?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['reset_url'] = new Smarty_variable('', null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['filter']->value['selected_variants']||$_smarty_tpl->tpl_vars['filter']->value['selected_range']) {?>
        <?php $_smarty_tpl->tpl_vars['reset_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['filter_base_url']->value, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['fh'] = new Smarty_variable(fn_delete_filter_from_hash($_REQUEST['features_hash'],$_smarty_tpl->tpl_vars['filter']->value['filter_id']), null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['fh']->value) {?>
            <?php $_smarty_tpl->tpl_vars['reset_url'] = new Smarty_variable(fn_link_attach(fn_link_attach($_smarty_tpl->tpl_vars['filter_base_url']->value,"features_hash=".((string)$_smarty_tpl->tpl_vars['fh']->value)),"show_not_found_notification=".((string)$_smarty_tpl->tpl_vars['show_not_found_notification']->value)), null, 0);?>
        <?php }?>
    <?php }?>
    
    <div class="ty-product-filters__block">
        <div id="sw_content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-product-filters__switch cm-combination-filter_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['collapse']->value) {?> open<?php }?> cm-save-state <?php if ($_smarty_tpl->tpl_vars['filter']->value['display']=="Y") {?>cm-ss-reverse<?php }?>">
            <span class="ty-product-filters__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['filter']->value['selected_variants']) {?> (<?php echo htmlspecialchars(smarty_modifier_sizeof($_smarty_tpl->tpl_vars['filter']->value['selected_variants']), ENT_QUOTES, 'UTF-8');?>
)<?php }
if ($_smarty_tpl->tpl_vars['reset_url']->value) {?><a class="cm-ajax cm-ajax-full-render cm-history" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['reset_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="ty-icon-cancel-circle"></i></a><?php }?></span>
            <i class="ty-product-filters__switch-down ty-icon-down-open"></i>
            <i class="ty-product-filters__switch-right ty-icon-up-open"></i>
        </div>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:product_filters_variants_element")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:product_filters_variants_element"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['filter']->value['slider']) {?>
                <?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_type']==smarty_modifier_enum("ProductFeatures::DATE")) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("blocks/product_filters/components/product_filter_datepicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('filter_uid'=>$_smarty_tpl->tpl_vars['filter_uid']->value,'filter'=>$_smarty_tpl->tpl_vars['filter']->value), 0);?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->getSubTemplate ("blocks/product_filters/components/product_filter_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('filter_uid'=>$_smarty_tpl->tpl_vars['filter_uid']->value,'filter'=>$_smarty_tpl->tpl_vars['filter']->value), 0);?>

                <?php }?>
            <?php } else { ?>
                <?php echo $_smarty_tpl->getSubTemplate ("blocks/product_filters/components/product_filter_variants.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('filter_uid'=>$_smarty_tpl->tpl_vars['filter_uid']->value,'filter'=>$_smarty_tpl->tpl_vars['filter']->value,'collapse'=>$_smarty_tpl->tpl_vars['collapse']->value), 0);?>

            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:product_filters_variants_element"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:product_filters_variants"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } ?>

<?php if ($_smarty_tpl->tpl_vars['ajax_div_ids']->value) {?>
<div class="ty-product-filters__tools clearfix <?php if (!$_smarty_tpl->tpl_vars['is_selected_filters']->value) {?>hidden<?php }?>" data-ca-product-filters="tools">

    <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['filter_base_url']->value), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-product-filters__reset-button cm-ajax cm-ajax-full-render cm-history" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="ty-product-filters__reset-icon ty-icon-cw"></i> <?php echo $_smarty_tpl->__("reset");?>
</a>

</div>
<?php }?>

<?php }?>
</div>
<!--product_filters_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

<div data-ca-tooltip-layout="true" class="hidden">
    <button type="button" data-ca-scroll=".ty-mainbox-title" class="cm-scroll ty-tooltip--link ty-tooltip--filter"><span class="tooltip-arrow"></span></button>
</div><?php }?><?php }} ?>
