<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 14:59:05
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\views\block_manager\components\device_availability_attributes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82616483861754a8968f017-73637379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f88d41bb93c636989feb973a511fd8e6af222b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\views\\block_manager\\components\\device_availability_attributes.tpl',
      1 => 1628148888,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '82616483861754a8968f017-73637379',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'devices' => 0,
    'device' => 0,
    'is_available' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61754a896982c6_78286930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61754a896982c6_78286930')) {function content_61754a896982c6_78286930($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['devices'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['item']->value['availability'])===null||$tmp==='' ? array() : $tmp), null, 0);?>
<?php  $_smarty_tpl->tpl_vars['is_available'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['is_available']->_loop = false;
 $_smarty_tpl->tpl_vars['device'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['devices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['is_available']->key => $_smarty_tpl->tpl_vars['is_available']->value) {
$_smarty_tpl->tpl_vars['is_available']->_loop = true;
 $_smarty_tpl->tpl_vars['device']->value = $_smarty_tpl->tpl_vars['is_available']->key;
?>
    data-ca-device-availability-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['device']->value, ENT_QUOTES, 'UTF-8');?>
="<?php if ($_smarty_tpl->tpl_vars['is_available']->value) {?>true<?php } else { ?>false<?php }?>"
<?php } ?>
<?php }} ?>
