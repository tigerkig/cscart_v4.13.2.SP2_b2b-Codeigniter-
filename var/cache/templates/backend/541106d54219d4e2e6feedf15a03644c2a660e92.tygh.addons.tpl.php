<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 12:17:13
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\views\settings_wizard\components\addons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4956795617524995dc091-57371688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '541106d54219d4e2e6feedf15a03644c2a660e92' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\views\\settings_wizard\\components\\addons.tpl',
      1 => 1628148888,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4956795617524995dc091-57371688',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wizard_addons_list' => 0,
    'addon' => 0,
    'images_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61752499681d94_10922255',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61752499681d94_10922255')) {function content_61752499681d94_10922255($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('install'));
?>
<?php  $_smarty_tpl->tpl_vars["addon"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["addon"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wizard_addons_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["addon"]->key => $_smarty_tpl->tpl_vars["addon"]->value) {
$_smarty_tpl->tpl_vars["addon"]->_loop = true;
?>
	<div class="table-responsive-wrapper">
		<table class="table table-addons table-wizard table--relative table-responsive table-responsive-w-titles">
		    <tr>
		        <td class="addon-icon" data-th="&nbsp;">
		            <div class="bg-icon">
		                <?php if ($_smarty_tpl->tpl_vars['addon']->value['has_icon']) {?>
		                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
/icon.png" width="38" height="38" border="0" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
" >
		                <?php }?>
		            </div>
		        </td>
		        <td width="95%" data-th="&nbsp;">
		            <div class="object-group-link-wrap">
		                <span class="unedited-element block"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span><br>
		                <span class="row-status object-group-details"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['description'], ENT_QUOTES, 'UTF-8');?>
</span>
		            </div>
		        </td>
		        <td width="5%" data-th="&nbsp;">
		            <input type="hidden" name="addons[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
]" value="N">
		            <label for="addon_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox">
		                <input id="addon_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="addons[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
]" value="Y">
		                <?php echo $_smarty_tpl->__("install");?>

		            </label>     
		        </td>
		    </tr>
		</table>
	</div>
<?php } ?><?php }} ?>
