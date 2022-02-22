<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 12:32:49
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\buttons\save_cancel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10748677256175284115af73-38860835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fd958916316021162a192b92015d3a69158efaa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\buttons\\save_cancel.tpl',
      1 => 1628148888,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10748677256175284115af73-38860835',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_target_id' => 0,
    'but_target_form' => 0,
    'save' => 0,
    'but_name' => 0,
    'but_href' => 0,
    'cancel_action' => 0,
    'cancel_meta' => 0,
    'r' => 0,
    'hide_first_button' => 0,
    'but_text' => 0,
    'but_label' => 0,
    'but_onclick' => 0,
    'but_role' => 0,
    'but_meta' => 0,
    'extra' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61752841178e77_40672424',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61752841178e77_40672424')) {function content_61752841178e77_40672424($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('save','save_and_close','create','create_and_close','cancel'));
?>
<?php if ($_smarty_tpl->tpl_vars['but_target_id']->value||$_smarty_tpl->tpl_vars['but_target_form']->value) {?>
<?php $_smarty_tpl->tpl_vars["but_role"] = new Smarty_variable("submit-link", null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars["but_role"] = new Smarty_variable("button_main", null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['save']->value) {?>
    <?php $_smarty_tpl->tpl_vars["but_label"] = new Smarty_variable($_smarty_tpl->__("save"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["but_label2"] = new Smarty_variable($_smarty_tpl->__("save_and_close"), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["but_label"] = new Smarty_variable($_smarty_tpl->__("create"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["but_label2"] = new Smarty_variable($_smarty_tpl->__("create_and_close"), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['but_name']->value) {
$_smarty_tpl->tpl_vars["r"] = new Smarty_variable($_smarty_tpl->tpl_vars['but_name']->value, null, 0);
} else {
$_smarty_tpl->tpl_vars["r"] = new Smarty_variable($_smarty_tpl->tpl_vars['but_href']->value, null, 0);
}?>

<?php if ($_smarty_tpl->tpl_vars['cancel_action']->value=="close") {?>
    <a class="cm-dialog-closer cm-inline-dialog-closer cm-cancel tool-link btn <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cancel_meta']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("cancel");?>
</a>
<?php }?>

<?php if (fn_check_view_permissions($_smarty_tpl->tpl_vars['r']->value)) {?>
    <?php if (!$_smarty_tpl->tpl_vars['hide_first_button']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>(($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_label']->value : $tmp),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_meta'=>"btn-primary ".((string)$_smarty_tpl->tpl_vars['but_meta']->value)), 0);?>

    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["skip_or"] = new Smarty_variable(true, null, 0);?>
    <?php }?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["skip_or"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['extra']->value) {?>
    <?php echo $_smarty_tpl->tpl_vars['extra']->value;?>

<?php }?>
<?php }} ?>
