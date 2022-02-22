<?php /* Smarty version Smarty-3.1.21, created on 2021-11-08 03:08:49
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\themes\responsive\templates\addons\product_variations\components\variation_features.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189678151361886a91363861-65685146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '382602ebfc02d7b270d7393388ef2083cc611f92' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\themes\\responsive\\templates\\addons\\product_variations\\components\\variation_features.tpl',
      1 => 1635066683,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '189678151361886a91363861-65685146',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'variation_features' => 0,
    'feature' => 0,
    'variant_names' => 0,
    'features_secondary' => 0,
    'features_brackets' => 0,
    'features_separator' => 0,
    'features_split' => 0,
    'features_inline' => 0,
    'features_mini' => 0,
    'features_tags' => 0,
    'features_clearfix' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61886a914af610_20892003',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61886a914af610_20892003')) {function content_61886a914af610_20892003($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['variation_features']->value) {
$_smarty_tpl->tpl_vars['variant_names'] = new Smarty_variable(array(), null, 0);
$_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variation_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
if ($_smarty_tpl->tpl_vars['feature']->value['purpose']===constant("\Tygh\Addons\ProductVariations\Product\FeaturePurposes::CREATE_VARIATION_OF_CATALOG_ITEM")) {
$_smarty_tpl->createLocalArrayVariable('variant_names', null, 0);
$_smarty_tpl->tpl_vars['variant_names']->value[] = $_smarty_tpl->tpl_vars['feature']->value['variant'];
}
}
if ($_smarty_tpl->tpl_vars['variant_names']->value) {
$_smarty_tpl->tpl_vars['features_secondary'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['features_secondary']->value)===null||$tmp==='' ? false : $tmp), null, 0);
$_smarty_tpl->tpl_vars['features_brackets'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['features_brackets']->value)===null||$tmp==='' ? false : $tmp), null, 0);
$_smarty_tpl->tpl_vars['features_separator'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['features_separator']->value)===null||$tmp==='' ? " • " : $tmp), null, 0);
$_smarty_tpl->tpl_vars['features_split'] = new Smarty_variable($_smarty_tpl->tpl_vars['features_split']->value===true ? "—" : $_smarty_tpl->tpl_vars['features_split']->value, null, 0);
$_smarty_tpl->tpl_vars['features_inline'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['features_inline']->value)===null||$tmp==='' ? false : $tmp), null, 0);
$_smarty_tpl->tpl_vars['features_mini'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['features_mini']->value)===null||$tmp==='' ? false : $tmp), null, 0);
$_smarty_tpl->tpl_vars['features_tags'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['features_tags']->value)===null||$tmp==='' ? true : $tmp), null, 0);
$_smarty_tpl->tpl_vars['features_clearfix'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['features_clearfix']->value)===null||$tmp==='' ? false : $tmp), null, 0);
if ($_smarty_tpl->tpl_vars['features_tags']->value) {?><div class="ty-product-variations__variation-features<?php if ($_smarty_tpl->tpl_vars['features_secondary']->value) {?> ty-product-variations__variation-features--secondary<?php }
if ($_smarty_tpl->tpl_vars['features_inline']->value) {?> ty-product-variations__variation-features--inline<?php }
if ($_smarty_tpl->tpl_vars['features_mini']->value) {?> ty-product-variations__variation-features--mini<?php }
if ($_smarty_tpl->tpl_vars['features_clearfix']->value) {?> ty-product-variations__variation-features--clearfix<?php }?>"><?php }
if ($_smarty_tpl->tpl_vars['features_brackets']->value) {?>(<?php }
echo htmlspecialchars(implode($_smarty_tpl->tpl_vars['features_separator']->value,$_smarty_tpl->tpl_vars['variant_names']->value), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['features_brackets']->value) {?>)<?php }
if ($_smarty_tpl->tpl_vars['features_split']->value) {?>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['features_split']->value, ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['features_tags']->value) {?></div><?php }
}
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/components/variation_features.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/components/variation_features.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['variation_features']->value) {
$_smarty_tpl->tpl_vars['variant_names'] = new Smarty_variable(array(), null, 0);
$_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variation_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
if ($_smarty_tpl->tpl_vars['feature']->value['purpose']===constant("\Tygh\Addons\ProductVariations\Product\FeaturePurposes::CREATE_VARIATION_OF_CATALOG_ITEM")) {
$_smarty_tpl->createLocalArrayVariable('variant_names', null, 0);
$_smarty_tpl->tpl_vars['variant_names']->value[] = $_smarty_tpl->tpl_vars['feature']->value['variant'];
}
}
if ($_smarty_tpl->tpl_vars['variant_names']->value) {
$_smarty_tpl->tpl_vars['features_secondary'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['features_secondary']->value)===null||$tmp==='' ? false : $tmp), null, 0);
$_smarty_tpl->tpl_vars['features_brackets'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['features_brackets']->value)===null||$tmp==='' ? false : $tmp), null, 0);
$_smarty_tpl->tpl_vars['features_separator'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['features_separator']->value)===null||$tmp==='' ? " • " : $tmp), null, 0);
$_smarty_tpl->tpl_vars['features_split'] = new Smarty_variable($_smarty_tpl->tpl_vars['features_split']->value===true ? "—" : $_smarty_tpl->tpl_vars['features_split']->value, null, 0);
$_smarty_tpl->tpl_vars['features_inline'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['features_inline']->value)===null||$tmp==='' ? false : $tmp), null, 0);
$_smarty_tpl->tpl_vars['features_mini'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['features_mini']->value)===null||$tmp==='' ? false : $tmp), null, 0);
$_smarty_tpl->tpl_vars['features_tags'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['features_tags']->value)===null||$tmp==='' ? true : $tmp), null, 0);
$_smarty_tpl->tpl_vars['features_clearfix'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['features_clearfix']->value)===null||$tmp==='' ? false : $tmp), null, 0);
if ($_smarty_tpl->tpl_vars['features_tags']->value) {?><div class="ty-product-variations__variation-features<?php if ($_smarty_tpl->tpl_vars['features_secondary']->value) {?> ty-product-variations__variation-features--secondary<?php }
if ($_smarty_tpl->tpl_vars['features_inline']->value) {?> ty-product-variations__variation-features--inline<?php }
if ($_smarty_tpl->tpl_vars['features_mini']->value) {?> ty-product-variations__variation-features--mini<?php }
if ($_smarty_tpl->tpl_vars['features_clearfix']->value) {?> ty-product-variations__variation-features--clearfix<?php }?>"><?php }
if ($_smarty_tpl->tpl_vars['features_brackets']->value) {?>(<?php }
echo htmlspecialchars(implode($_smarty_tpl->tpl_vars['features_separator']->value,$_smarty_tpl->tpl_vars['variant_names']->value), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['features_brackets']->value) {?>)<?php }
if ($_smarty_tpl->tpl_vars['features_split']->value) {?>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['features_split']->value, ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['features_tags']->value) {?></div><?php }
}
}
}?><?php }} ?>
