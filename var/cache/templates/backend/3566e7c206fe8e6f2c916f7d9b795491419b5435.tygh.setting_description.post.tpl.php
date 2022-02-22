<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 12:11:48
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\addons\seo\hooks\settings_fields\setting_description.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159148868461752354131181-50855550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3566e7c206fe8e6f2c916f7d9b795491419b5435' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\addons\\seo\\hooks\\settings_fields\\setting_description.post.tpl',
      1 => 1628148888,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '159148868461752354131181-50855550',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'show_language_warning' => 0,
    'is_default_storefront_affected' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6175235413e999_69230344',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6175235413e999_69230344')) {function content_6175235413e999_69230344($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('warning','seo.default_storefront_frontend_default_language_warning','seo.storefront_frontend_default_language_warning'));
?>
<?php if ($_smarty_tpl->tpl_vars['item']->value['name']==="frontend_default_language"&&$_smarty_tpl->tpl_vars['show_language_warning']->value) {?>
    <div class="text-warning">
        <strong><?php echo $_smarty_tpl->__("warning");?>
!</strong>
        <?php if ($_smarty_tpl->tpl_vars['is_default_storefront_affected']->value) {?>
            <?php echo $_smarty_tpl->__("seo.default_storefront_frontend_default_language_warning",array("[link]"=>fn_url("addons.update?addon=seo")));?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->__("seo.storefront_frontend_default_language_warning",array("[link]"=>fn_url("addons.update?addon=seo")));?>

        <?php }?>
    </div>
<?php }?><?php }} ?>
