<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 12:32:48
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\views\addons\components\manage\addons_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117528156461752840dfaf08-06325120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9208af49e09da9fc4591c48e389a2257c1cbae5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\views\\addons\\components\\manage\\addons_search_form.tpl',
      1 => 1628148888,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '117528156461752840dfaf08-06325120',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_meta' => 0,
    'developers' => 0,
    'developer_key' => 0,
    'developer' => 0,
    'search' => 0,
    'prefix' => 0,
    'id_prefix' => 0,
    'period' => 0,
    'versions' => 0,
    'version' => 0,
    'dispatch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61752840e5b619_45765278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61752840e5b619_45765278')) {function content_61752840e5b619_45765278($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_in_array')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.in_array.php';
if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('developers','addon_type','third_party_addons','without_rating','has_additional_pages','favorites','status','any','not_installed','installed','active','disabled','install_date','all','this_day','this_week','this_month','this_year','yesterday','previous_week','previous_month','previous_year','last_24hours','last_n_days','last_n_days','compatibility','any','search','reset'));
?>
<div class="sidebar-row">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="addons_filters" method="get" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
" id="addon_filters">
        <div class="sidebar-field">
            <div class="control-group">
                <strong><?php echo $_smarty_tpl->__("developers");?>
</strong>
                <?php  $_smarty_tpl->tpl_vars['developer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['developer']->_loop = false;
 $_smarty_tpl->tpl_vars['developer_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['developers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['developer']->key => $_smarty_tpl->tpl_vars['developer']->value) {
$_smarty_tpl->tpl_vars['developer']->_loop = true;
 $_smarty_tpl->tpl_vars['developer_key']->value = $_smarty_tpl->tpl_vars['developer']->key;
?>
                    <label class="control-label checkbox" for="supplier_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['developer_key']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <input type="checkbox" id="supplier_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['developer_key']->value, ENT_QUOTES, 'UTF-8');?>
" name="supplier[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['developer']->value['title'], ENT_QUOTES, 'UTF-8');?>
" <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['developer']->value['title'],$_smarty_tpl->tpl_vars['search']->value['supplier'])) {?> checked="checked"<?php }?>>
                        <span>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['developer']->value['title'], ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['developer']->value['position'], ENT_QUOTES, 'UTF-8');?>
)
                        </span>
                    </label>
                <?php } ?>
            </div>
        </div>
        <div class="sidebar-field">
            <div class="control-group">
                <strong><?php echo $_smarty_tpl->__("addon_type");?>
</strong>
                <label class="control-label checkbox" for="third_party_addons">
                    <input type="checkbox" id="third_party_addons" name="source" value="third" <?php if ($_smarty_tpl->tpl_vars['search']->value['source']) {?> checked="checked"<?php }?>>
                    <span>
                        <?php echo $_smarty_tpl->__("third_party_addons");?>

                    </span>
                </label>
                <label class="control-label checkbox" for="without_rating">
                    <input type="checkbox" id="without_rating" name="without_rating" value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['without_rating']) {?> checked="checked"<?php }?>>
                    <?php echo $_smarty_tpl->__("without_rating");?>

                </label>
                <label class="control-label checkbox" for="additional_pages">
                    <input type="checkbox" id="additional_pages" name="add_pages" value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['add_pages']) {?> checked="checked"<?php }?>>
                    <span>
                        <?php echo $_smarty_tpl->__("has_additional_pages");?>

                    </span>
                </label>
                <label class="control-label checkbox" for="favorites">
                    <input type="checkbox" id="favorites" name="favorites" value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['favorites']) {?> checked="checked"<?php }?>>
                    <span>
                    <?php echo $_smarty_tpl->__("favorites");?>

                    </span>
                </label>
            </div>
        </div>
        <div class="sidebar-field">
            <label for="addon_status"><strong><?php echo $_smarty_tpl->__("status");?>
</strong></label>
            <select id="addon_status" name="type">
                <option value="any" <?php if (empty($_smarty_tpl->tpl_vars['search']->value['type'])||$_smarty_tpl->tpl_vars['search']->value['type']=="any") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("any");?>
</option>
                <option value="not_installed" <?php if ($_smarty_tpl->tpl_vars['search']->value['type']=="not_installed") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("not_installed");?>
</option>
                <option value="installed" <?php if ($_smarty_tpl->tpl_vars['search']->value['type']=="installed") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("installed");?>
</option>
                <option value="active" <?php if ($_smarty_tpl->tpl_vars['search']->value['type']=="active") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("active");?>
</option>
                <option value="disabled" <?php if ($_smarty_tpl->tpl_vars['search']->value['type']=="disabled") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("disabled");?>
</option>
            </select>
        </div>
        <div class="sidebar-field">
            <strong><?php echo $_smarty_tpl->__("install_date");?>
</strong>

            <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
period" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
period_selects">
                <option value="A" <?php if ($_smarty_tpl->tpl_vars['search']->value['period']==="A"||!$_smarty_tpl->tpl_vars['period']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("all");?>
</option>
                <optgroup label="=============">
                    <option value="D" <?php if ($_smarty_tpl->tpl_vars['search']->value['period']==="D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_day");?>
</option>
                    <option value="W" <?php if ($_smarty_tpl->tpl_vars['search']->value['period']==="W") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_week");?>
</option>
                    <option value="M" <?php if ($_smarty_tpl->tpl_vars['search']->value['period']==="M") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_month");?>
</option>
                    <option value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['period']==="Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_year");?>
</option>
                </optgroup>
                <optgroup label="=============">
                    <option value="LD" <?php if ($_smarty_tpl->tpl_vars['search']->value['period']==="LD") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yesterday");?>
</option>
                    <option value="LW" <?php if ($_smarty_tpl->tpl_vars['search']->value['period']==="LW") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("previous_week");?>
</option>
                    <option value="LM" <?php if ($_smarty_tpl->tpl_vars['search']->value['period']==="LM") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("previous_month");?>
</option>
                    <option value="LY" <?php if ($_smarty_tpl->tpl_vars['search']->value['period']==="LY") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("previous_year");?>
</option>
                </optgroup>
                <optgroup label="=============">
                    <option value="HH" <?php if ($_smarty_tpl->tpl_vars['search']->value['period']==="HH") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("last_24hours");?>
</option>
                    <option value="HW" <?php if ($_smarty_tpl->tpl_vars['search']->value['period']==="HW") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("last_n_days",array("[N]"=>7));?>
</option>
                    <option value="HM" <?php if ($_smarty_tpl->tpl_vars['search']->value['period']==="HM") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("last_n_days",array("[N]"=>30));?>
</option>
                </optgroup>
            </select>
        </div>
        <div class="sidebar-field">
            <strong><?php echo $_smarty_tpl->__("compatibility");?>
</strong>
            <select name="store_version" id="version_options">
                <option value="" selected="selected"><?php echo $_smarty_tpl->__("any");?>
</option>
                <?php  $_smarty_tpl->tpl_vars['version'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['version']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['versions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['version']->key => $_smarty_tpl->tpl_vars['version']->value) {
$_smarty_tpl->tpl_vars['version']->_loop = true;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['version']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['store_version']===$_smarty_tpl->tpl_vars['version']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['version']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            </select>
        </div>

        <div class="sidebar-field">
            <input class="btn" type="submit" name="dispatch[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dispatch']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo $_smarty_tpl->__("search");?>
">
            <a class="btn btn-text" href="<?php echo htmlspecialchars(fn_url("addons.manage.reset_view"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("reset");?>
</a>
        </div>
    </form>
</div>
<?php }} ?>
