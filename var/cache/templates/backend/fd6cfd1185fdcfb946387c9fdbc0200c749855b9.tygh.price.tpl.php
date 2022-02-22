<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 12:11:58
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\common\price.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12235865656175235e759441-38793177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd6cfd1185fdcfb946387c9fdbc0200c749855b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\common\\price.tpl',
      1 => 1628148888,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12235865656175235e759441-38793177',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'value' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'span_id' => 0,
    'class' => 0,
    'secondary_currency' => 0,
    'is_integer' => 0,
    'view' => 0,
    'input_id' => 0,
    'input_name' => 0,
    'placeholder' => 0,
    'product_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6175235e7afb20_97960075',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6175235e7afb20_97960075')) {function content_6175235e7afb20_97960075($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_format_price')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.format_price.php';
?><?php $_smarty_tpl->_capture_stack[0][] = array("currencies", null, null); ob_start(); ?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['alternative_currency']=="use_selected_and_alternative") {
echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value],$_smarty_tpl->tpl_vars['span_id']->value,$_smarty_tpl->tpl_vars['class']->value,false);
if ($_smarty_tpl->tpl_vars['secondary_currency']->value!=$_smarty_tpl->tpl_vars['primary_currency']->value) {?>&nbsp;(<?php if ($_smarty_tpl->tpl_vars['class']->value) {?><span class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"></span><?php }
echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value],$_smarty_tpl->tpl_vars['span_id']->value,$_smarty_tpl->tpl_vars['class']->value,true,$_smarty_tpl->tpl_vars['is_integer']->value);
if ($_smarty_tpl->tpl_vars['class']->value) {?><span class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"></span><?php }?>)<?php }
} else {
echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value],$_smarty_tpl->tpl_vars['span_id']->value,$_smarty_tpl->tpl_vars['class']->value,true);
}?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['view']->value=="input") {?>
    <input type="text" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-numeric <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['placeholder']->value, ENT_QUOTES, 'UTF-8');?>
" data-a-sign="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol']);?>
" <?php if ($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['after']=="Y") {?>data-p-sign="s"<?php }?> data-a-dec="." data-a-sep="," <?php if ($_smarty_tpl->tpl_vars['product_id']->value) {?>data-ct-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
<?php } else { ?>
    <?php echo Smarty::$_smarty_vars['capture']['currencies'];?>

<?php }?><?php }} ?>
