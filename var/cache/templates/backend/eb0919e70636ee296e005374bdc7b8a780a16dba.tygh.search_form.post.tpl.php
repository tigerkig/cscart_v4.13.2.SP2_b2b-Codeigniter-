<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 14:53:29
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\addons\gift_certificates\hooks\orders\search_form.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191236382461754939e581e3-32195579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb0919e70636ee296e005374bdc7b8a780a16dba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\addons\\gift_certificates\\hooks\\orders\\search_form.post.tpl',
      1 => 1628148888,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '191236382461754939e581e3-32195579',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61754939e60313_59768197',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61754939e60313_59768197')) {function content_61754939e60313_59768197($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('gift_cert_code','purchased','used'));
?>
<label class="control-label" for="gift_cert_code"><?php echo $_smarty_tpl->__("gift_cert_code");?>
:</label>
<div class="controls search-field">
    <input type="text" name="gift_cert_code" id="gift_cert_code" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['gift_cert_code'], ENT_QUOTES, 'UTF-8');?>
" size="30" class="input-text" />
    <select name="gift_cert_in">
        <option value="B|U">--</option>
        <option value="B" <?php if ($_smarty_tpl->tpl_vars['search']->value['gift_cert_in']=="B") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("purchased");?>
</option>
        <option value="U" <?php if ($_smarty_tpl->tpl_vars['search']->value['gift_cert_in']=="U") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("used");?>
</option>
    </select>
</div><?php }} ?>
