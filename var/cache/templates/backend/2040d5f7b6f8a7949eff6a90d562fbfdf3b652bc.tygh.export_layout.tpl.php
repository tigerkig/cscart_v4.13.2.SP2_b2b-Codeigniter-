<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 14:59:05
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\views\block_manager\components\export_layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186654116861754a89dc7eb1-53834989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2040d5f7b6f8a7949eff6a90d562fbfdf3b652bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\views\\block_manager\\components\\export_layout.tpl',
      1 => 1628148888,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '186654116861754a89dc7eb1-53834989',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'location' => 0,
    'locations' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61754a89de3bf8_82536625',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61754a89de3bf8_82536625')) {function content_61754a89de3bf8_82536625($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.date_format.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('general','block_manager.layout_pages','output','direct_download','server','screen','filename','export'));
?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit " name="export_locations">
<input type="hidden" id="s_layout" name="s_layout" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['layout_id'], ENT_QUOTES, 'UTF-8');?>
" />
<div class="tabs cm-j-tabs">
    <ul class="nav nav-tabs">
        <li class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
    </ul>
</div>

<div class="cm-tabs-content">

<div class="control-group cm-no-hide-input">
    <label for="locations_ids" class="control-label"><?php echo $_smarty_tpl->__("block_manager.layout_pages");?>
</label>
    <div class="controls">
        <div class="scroll-y">
            <?php  $_smarty_tpl->tpl_vars["location"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["location"]->_loop = false;
 $_smarty_tpl->tpl_vars["location_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["location"]->key => $_smarty_tpl->tpl_vars["location"]->value) {
$_smarty_tpl->tpl_vars["location"]->_loop = true;
 $_smarty_tpl->tpl_vars["location_id"]->value = $_smarty_tpl->tpl_vars["location"]->key;
?>
                    <label for="location_export_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['location_id'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox"><input id="location_export_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['location_id'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="location_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['location_id'], ENT_QUOTES, 'UTF-8');?>
" checked="checked" class="cm-item" />
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['name'], ENT_QUOTES, 'UTF-8');?>
&nbsp;(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['dispatch'], ENT_QUOTES, 'UTF-8');?>
)</label>
            <?php } ?>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"links"), 0);?>

    </div>
</div>

<div class="control-group">
    <label for="output" class="control-label"><?php echo $_smarty_tpl->__("output");?>
</label>
    <div class="controls">
    <select name="output" id="output">
        <option value="D"><?php echo $_smarty_tpl->__("direct_download");?>
</option>
        <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
            <option value="S"><?php echo $_smarty_tpl->__("server");?>
</option>
        <?php }?>
        <option value="C"><?php echo $_smarty_tpl->__("screen");?>
</option>
    </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="filename"><?php echo $_smarty_tpl->__("filename");?>
</label>
    <div class="controls">
        <input type="text" name="filename" id="filename" size="50" value="layouts_<?php echo htmlspecialchars(smarty_modifier_date_format((defined('TIME') ? constant('TIME') : null),"%m%d%Y"), ENT_QUOTES, 'UTF-8');?>
.xml" />
    </div>
</div>

</div>

<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("export"),'but_name'=>"dispatch[block_manager.export_layout]",'cancel_action'=>"close"), 0);?>

</div>
</form><?php }} ?>
