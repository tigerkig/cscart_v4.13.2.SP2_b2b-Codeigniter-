<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 12:32:49
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\addons\hidpi\hooks\fileuploader\uploader.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16864875116175284113c216-17161261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f418a23e1c05f91b2301b758dcd8a23cd20d14c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\addons\\hidpi\\hooks\\fileuploader\\uploader.post.tpl',
      1 => 1628148888,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16864875116175284113c216-17161261',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_image' => 0,
    'show_hidpi_checkbox' => 0,
    'var_name' => 0,
    'id_var_name' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61752841147b00_26610825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61752841147b00_26610825')) {function content_61752841147b00_26610825($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('hidpi.upload_high_res_image','hidpi.upload_high_res_image.tooltip'));
?>
<?php if ($_smarty_tpl->tpl_vars['is_image']->value&&(($tmp = @$_smarty_tpl->tpl_vars['show_hidpi_checkbox']->value)===null||$tmp==='' ? true : $tmp)) {?>
    <input type="hidden" name="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((defined('HIDPI_IS_HIGH_RES_FALSE') ? constant('HIDPI_IS_HIGH_RES_FALSE') : null), ENT_QUOTES, 'UTF-8');?>
" id="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
_hidden" class="cm-image-field" />
    <label for="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidpi-mark checkbox">
        <input type="checkbox" name="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((defined('HIDPI_IS_HIGH_RES_TRUE') ? constant('HIDPI_IS_HIGH_RES_TRUE') : null), ENT_QUOTES, 'UTF-8');?>
" id="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['addons']->value['hidpi']['default_upload_high_res_image']==="Y") {?>checked="checked"<?php }?> class="cm-image-field" />
        <?php echo $_smarty_tpl->__("hidpi.upload_high_res_image");?>
 <i class="cm-tooltip icon-question-sign" title="<?php echo $_smarty_tpl->__("hidpi.upload_high_res_image.tooltip");?>
"></i>
    </label>
<?php }?><?php }} ?>
