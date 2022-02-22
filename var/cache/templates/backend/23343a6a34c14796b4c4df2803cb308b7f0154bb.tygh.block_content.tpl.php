<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 14:59:09
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\views\block_manager\components\block_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68255184361754a8db6b498-53288830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23343a6a34c14796b4c4df2803cb308b7f0154bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\views\\block_manager\\components\\block_content.tpl',
      1 => 1628148888,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '68255184361754a8db6b498-53288830',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block_scheme' => 0,
    'block' => 0,
    'languages' => 0,
    'editable' => 0,
    'name' => 0,
    'setting_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61754a8db83832_28760649',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61754a8db83832_28760649')) {function content_61754a8db83832_28760649($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.count.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('apply_to_all_languages'));
?>
<?php if ($_smarty_tpl->tpl_vars['block_scheme']->value['content']) {
if ($_smarty_tpl->tpl_vars['block_scheme']->value['multilanguage']&&$_smarty_tpl->tpl_vars['block']->value['block_id']&&smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value)>1) {?><div class="control-group"><div class="controls <?php if ($_smarty_tpl->tpl_vars['editable']->value) {?>cm-no-hide-input<?php }?>"><label class="checkbox"><input type="hidden" name="block_data[apply_to_all_langs]" value="N" /><input type="checkbox" id="apply_to_all_languages_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" name="block_data[apply_to_all_langs]" value="Y" /><?php echo $_smarty_tpl->__("apply_to_all_languages");?>
</label></div></div><?php }
$_smarty_tpl->tpl_vars['setting_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['setting_data']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['block_scheme']->value['content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['setting_data']->key => $_smarty_tpl->tpl_vars['setting_data']->value) {
$_smarty_tpl->tpl_vars['setting_data']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['setting_data']->key;
if ($_smarty_tpl->tpl_vars['setting_data']->value['type']!="function") {
echo $_smarty_tpl->getSubTemplate ("views/block_manager/components/setting_element.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('option'=>$_smarty_tpl->tpl_vars['setting_data']->value,'name'=>$_smarty_tpl->tpl_vars['name']->value,'block'=>$_smarty_tpl->tpl_vars['block']->value,'html_id'=>"block_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_content_".((string)$_smarty_tpl->tpl_vars['name']->value),'html_name'=>"block_data[content][".((string)$_smarty_tpl->tpl_vars['name']->value)."]",'editable'=>$_smarty_tpl->tpl_vars['editable']->value,'value'=>$_smarty_tpl->tpl_vars['block']->value['content'][$_smarty_tpl->tpl_vars['name']->value]), 0);
}
}
}?><?php }} ?>
