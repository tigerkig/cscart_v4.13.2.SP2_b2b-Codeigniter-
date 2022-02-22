<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 13:50:36
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\views\debugger\components\sorter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213856529661753a7c0e8a12-41352424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c307037b4128579687daa44cd5e69fcde023fcb8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\views\\debugger\\components\\sorter.tpl',
      1 => 1628148888,
      2 => 'backend',
    ),
  ),
  'nocache_hash' => '213856529661753a7c0e8a12-41352424',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
    'order_by' => 0,
    'direction' => 0,
    'url' => 0,
    'order_direction' => 0,
    'debugger_hash' => 0,
    'target_id' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61753a7c0f7a36_77402853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61753a7c0f7a36_77402853')) {function content_61753a7c0f7a36_77402853($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['field']->value!=$_smarty_tpl->tpl_vars['order_by']->value) {?>
    <?php $_smarty_tpl->tpl_vars['direction'] = new Smarty_variable("none", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['order_direction'] = new Smarty_variable("asc", null, 0);?>
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['direction']->value=="asc") {?>
        <?php $_smarty_tpl->tpl_vars['order_direction'] = new Smarty_variable("desc", null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['order_direction'] = new Smarty_variable("asc", null, 0);?>
    <?php }?>
<?php }?>
<a class="cm-ajax cm-ajax-cache" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['url']->value)."?order_by=".((string)$_smarty_tpl->tpl_vars['field']->value).",".((string)$_smarty_tpl->tpl_vars['order_direction']->value)."&debugger_hash=".((string)$_smarty_tpl->tpl_vars['debugger_hash']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['direction']->value=="none") {?><i class="icon-asc"></i><i class="icon-desc" style="margin-left: -7px;"></i><?php } else { ?><i class="icon-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_direction']->value, ENT_QUOTES, 'UTF-8');?>
"></i><?php }?></a><?php }} ?>
