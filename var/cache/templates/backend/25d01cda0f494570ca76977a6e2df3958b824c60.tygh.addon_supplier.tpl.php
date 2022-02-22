<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 12:32:48
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\views\addons\components\addons\addon_supplier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197995113061752840b59f80-54871590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25d01cda0f494570ca76977a6e2df3958b824c60' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\views\\addons\\components\\addons\\addon_supplier.tpl',
      1 => 1628148888,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '197995113061752840b59f80-54871590',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'a' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61752840b69319_11635661',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61752840b69319_11635661')) {function content_61752840b69319_11635661($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('verified_developer','addon_has_admin_review'));
?>
<?php if ($_smarty_tpl->tpl_vars['a']->value['supplier']) {?>
    <div class="addons-addon-supplier">
        <a href="<?php echo htmlspecialchars(fn_url("addons.manage&supplier=".((string)$_smarty_tpl->tpl_vars['a']->value['supplier'])), ENT_QUOTES, 'UTF-8');?>
" class="addons-addon-supplier__name row-status">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['supplier'], ENT_QUOTES, 'UTF-8');?>

        </a>
        <?php if ($_smarty_tpl->tpl_vars['a']->value['identified']||$_smarty_tpl->tpl_vars['a']->value['is_core_addon']) {?>
            <i class="icon-ok addons-addon-supplier__identified addons-addon-supplier__identified--<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['a']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
                title="<?php echo $_smarty_tpl->__("verified_developer");?>
"
            ></i>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['a']->value['personal_review']) {?>
            <i class="icon-comment addons-addon-supplier__has-admin-review"
                title="<?php echo $_smarty_tpl->__("addon_has_admin_review");?>
"
            ></i>
        <?php }?>
    </div>
<?php }?>
<?php }} ?>
