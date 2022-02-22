<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 12:11:47
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\common\settings_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139712115561752353b9b581-30742179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89bf6884b6e18217e0e7ce35cb1841bd973e89b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\common\\settings_fields.tpl',
      1 => 1628148888,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '139712115561752353b9b581-30742179',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'default_attrs' => 0,
    'settings' => 0,
    'app' => 0,
    'disable_input' => 0,
    'global_selector' => 0,
    'option_suffix' => 0,
    'default_option' => 0,
    'default_option_hidden' => 0,
    'default_option_text' => 0,
    'parent_item' => 0,
    'parent_item_html_id' => 0,
    'html_id' => 0,
    'class' => 0,
    'highlight' => 0,
    'label_attrs' => 0,
    'default_label_attrs' => 0,
    'extended_label_attrs' => 0,
    'html_name' => 0,
    'input_placeholder' => 0,
    'input_attrs' => 0,
    'default_checked_value' => 0,
    'default_unchecked_value' => 0,
    'unchecked_value' => 0,
    'checked_value' => 0,
    'SHORT_DIVIDER' => 0,
    'k' => 0,
    'v' => 0,
    'attrs' => 0,
    'countries' => 0,
    'code' => 0,
    'country' => 0,
    'select_attrs' => 0,
    'default_select_attrs' => 0,
    'default_input_attrs' => 0,
    'extended_input_attrs' => 0,
    'button_attrs' => 0,
    'default_button_attrs' => 0,
    'variant_key' => 0,
    'variant_name' => 0,
    'settings_ids' => 0,
    'settings_input_names' => 0,
    'section_name' => 0,
    'total' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_617523540b8721_24104578',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617523540b8721_24104578')) {function content_617523540b8721_24104578($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\block.inline_script.php';
if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_modifier_in_array')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.in_array.php';
if (!is_callable('smarty_modifier_render_tag_attrs')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.render_tag_attrs.php';
if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('select_default','default','select_selectbox_option','no_items','multiple_selectbox_notice','no_items','select_country','select_state','browse','no_items'));
?>
<?php if (($_smarty_tpl->tpl_vars['item']->value['options'])) {?>
    <?php $_smarty_tpl->tpl_vars['label_attrs'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['item']->value['options']['label_attributes'])===null||$tmp==='' ? array() : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['input_attrs'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['item']->value['options']['input_attributes'])===null||$tmp==='' ? array() : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['select_attrs'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['item']->value['options']['select_attributes'])===null||$tmp==='' ? array() : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['button_attrs'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['item']->value['options']['button_attributes'])===null||$tmp==='' ? array() : $tmp), null, 0);?>
<?php }?>
<?php $_smarty_tpl->tpl_vars['default_attrs'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['default_attrs']->value)===null||$tmp==='' ? array() : $tmp), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['item']->value['update_for_all']&&($_smarty_tpl->tpl_vars['settings']->value['Stores']['default_state_update_for_all']==="not_active"||fn_allowed_for("MULTIVENDOR"))&&$_smarty_tpl->tpl_vars['app']->value['storefront.repository']->getCount(array('cache'=>true))>1) {?>
    <?php $_smarty_tpl->tpl_vars['disable_input'] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('default_attrs', null, 0);
$_smarty_tpl->tpl_vars['default_attrs']->value['disabled'] = "disabled";?>
<?php }?>
<?php $_smarty_tpl->tpl_vars['SHORT_DIVIDER'] = new Smarty_variable("──", null, 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['item']->value['global_setting'])) {?>
    <?php $_smarty_tpl->tpl_vars['global_selector'] = new Smarty_variable(true, null, 0);?>

    
    
    <?php $_smarty_tpl->tpl_vars['default_option'] = new Smarty_variable(true, null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['item']->value['has_global_value']) {?>
        <?php $_smarty_tpl->tpl_vars['default_option_hidden'] = new Smarty_variable(true, null, 0);?>
    <?php }?>
    <?php $_smarty_tpl->tpl_vars['default_option_text'] = new Smarty_variable($_smarty_tpl->__("select_default"), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['global_selector']->value&&!$_smarty_tpl->tpl_vars['item']->value['has_global_value']) {?>
        
        <?php $_smarty_tpl->tpl_vars['option_suffix'] = new Smarty_variable($_smarty_tpl->__('default'), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['option_suffix'] = new Smarty_variable("(".((string)$_smarty_tpl->tpl_vars['option_suffix']->value).")", null, 0);?>

        
        <?php $_smarty_tpl->tpl_vars['input_placeholder'] = new Smarty_variable($_smarty_tpl->__("default"), null, 0);?>
    <?php }?>
<?php }?>


<?php $_smarty_tpl->tpl_vars['default_option'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['default_option']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['default_option_hidden'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['default_option_hidden']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['default_option_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['default_option_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("select_selectbox_option") : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['parent_item']->value) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function($, _) {
    $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parent_item_html_id']->value, ENT_QUOTES, 'UTF-8');?>
').on('click', function() {
        $('#container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
').toggle();
    });
}(Tygh.$, Tygh));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>


<?php if ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::INFO")) {?>
    <div><?php echo $_smarty_tpl->tpl_vars['item']->value['info'];?>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::TEMPLATE")) {?>
    <div><?php echo $_smarty_tpl->getSubTemplate ("addons/".((string)$_REQUEST['addon'])."/settings/".((string)$_smarty_tpl->tpl_vars['item']->value['value']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::PERMANENT_TEMPLATE")) {?>
    <div><?php echo $_smarty_tpl->getSubTemplate ("addons/".((string)$_REQUEST['addon'])."/settings/".((string)$_smarty_tpl->tpl_vars['item']->value['value']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('skip_addon_check'=>true), 0);?>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::HEADER")) {?>
    <?php if (Smarty::$_smarty_vars['capture']['header_first']=='true') {?>
            </fieldset>
        </div>
    <?php }?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("header_first", null, null); ob_start(); ?>true<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['item']->value['description'],'target'=>"#collapsable_".((string)$_smarty_tpl->tpl_vars['html_id']->value)), 0);?>

    <div id="collapsable_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="in collapse">
        <fieldset>
<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']!==smarty_modifier_enum("SettingTypes::HIDDEN")&&$_smarty_tpl->tpl_vars['item']->value['type']!==smarty_modifier_enum("SettingTypes::SELECTABLE_BOX")) {?>
    
    <div id="container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-group<?php if ($_smarty_tpl->tpl_vars['class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');
}?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['section_name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['parent_item']->value&&$_smarty_tpl->tpl_vars['parent_item']->value['value']!=smarty_modifier_enum("YesNo::YES")) {?> hidden<?php }
if ($_smarty_tpl->tpl_vars['highlight']->value&&smarty_modifier_in_array($_smarty_tpl->tpl_vars['item']->value['name'],$_smarty_tpl->tpl_vars['highlight']->value)) {?> row-highlight<?php }?>">
        <?php ob_start();
if ($_smarty_tpl->tpl_vars['item']->value['type']==smarty_modifier_enum("SettingTypes::PHONE")) {?><?php echo " cm-mask-phone-label";?><?php }
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['default_label_attrs'] = new Smarty_variable(array("for"=>$_smarty_tpl->tpl_vars['html_id']->value,"class"=>"control-label ".$_tmp1), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['extended_label_attrs'] = new Smarty_variable(array("class"=>$_smarty_tpl->tpl_vars['highlight']->value&&smarty_modifier_in_array($_smarty_tpl->tpl_vars['item']->value['name'],$_smarty_tpl->tpl_vars['highlight']->value) ? "highlight" : ''), null, 0);?>
        <label <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['label_attrs']->value,$_smarty_tpl->tpl_vars['default_label_attrs']->value,$_smarty_tpl->tpl_vars['extended_label_attrs']->value);?>
><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
:
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"settings_fields:setting_description")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"settings_fields:setting_description"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['item']->value['tooltip']) {?><div class="muted description"><?php echo $_smarty_tpl->tpl_vars['item']->value['tooltip'];?>
</div><?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"settings_fields:setting_description"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </label>

        <div class="controls">
            <?php $_smarty_tpl->_capture_stack[0][] = array("setting_field", null, null); ob_start(); ?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::PASSWORD")) {?>
                <?php $_smarty_tpl->tpl_vars['default_attrs'] = new Smarty_variable(array_merge($_smarty_tpl->tpl_vars['default_attrs']->value,array("id"=>((string)$_smarty_tpl->tpl_vars['html_id']->value),"name"=>((string)$_smarty_tpl->tpl_vars['html_name']->value),"type"=>"password","size"=>"30","class"=>"input-text","placeholder"=>((string)$_smarty_tpl->tpl_vars['input_placeholder']->value),"value"=>((string)$_smarty_tpl->tpl_vars['item']->value['value']))), null, 0);?>
                <input <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['input_attrs']->value,$_smarty_tpl->tpl_vars['default_attrs']->value);?>
/>
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::TEXTAREA")) {?>
                <?php $_smarty_tpl->tpl_vars['default_attrs'] = new Smarty_variable(array_merge($_smarty_tpl->tpl_vars['default_attrs']->value,array("id"=>((string)$_smarty_tpl->tpl_vars['html_id']->value),"name"=>((string)$_smarty_tpl->tpl_vars['html_name']->value),"type"=>"password","class"=>"input-large","placeholder"=>((string)$_smarty_tpl->tpl_vars['input_placeholder']->value),"rows"=>"5","cols"=>"19")), null, 0);?>
                <textarea <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['input_attrs']->value,$_smarty_tpl->tpl_vars['default_attrs']->value);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['value'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::CHECKBOX")) {?>
                <?php $_smarty_tpl->tpl_vars['default_checked_value'] = new Smarty_variable(smarty_modifier_enum("YesNo::YES"), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['default_unchecked_value'] = new Smarty_variable(smarty_modifier_enum("YesNo::NO"), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['checked_value'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_attrs']->value['checked_value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_checked_value']->value : $tmp), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['unchecked_value'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_attrs']->value['unchecked_value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_unchecked_value']->value : $tmp), null, 0);?>
                <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unchecked_value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?> />
                <?php $_smarty_tpl->tpl_vars['default_attrs'] = new Smarty_variable(array_merge($_smarty_tpl->tpl_vars['default_attrs']->value,array("id"=>((string)$_smarty_tpl->tpl_vars['html_id']->value),"name"=>((string)$_smarty_tpl->tpl_vars['html_name']->value),"type"=>"checkbox","value"=>$_smarty_tpl->tpl_vars['checked_value']->value)), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['value']==$_smarty_tpl->tpl_vars['checked_value']->value) {?>
                    <?php $_smarty_tpl->createLocalArrayVariable('default_attrs', null, 0);
$_smarty_tpl->tpl_vars['default_attrs']->value['checked'] = "checked";?>
                <?php }?>
                <input <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['input_attrs']->value,$_smarty_tpl->tpl_vars['default_attrs']->value);?>
 />
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::SELECTBOX")) {?>
                <?php $_smarty_tpl->tpl_vars['default_attrs'] = new Smarty_variable(array_merge($_smarty_tpl->tpl_vars['default_attrs']->value,array("id"=>((string)$_smarty_tpl->tpl_vars['html_id']->value),"name"=>((string)$_smarty_tpl->tpl_vars['html_name']->value))), null, 0);?>
                <select <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['input_attrs']->value,$_smarty_tpl->tpl_vars['default_attrs']->value);?>
>
                    <?php if ($_smarty_tpl->tpl_vars['default_option']->value) {?>
                        <option value="" disabled <?php if ($_smarty_tpl->tpl_vars['default_option_hidden']->value) {?>class="hidden"<?php }?> data-ca-type="defaultOption">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SHORT_DIVIDER']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['default_option_text']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SHORT_DIVIDER']->value, ENT_QUOTES, 'UTF-8');?>

                        </option>
                    <?php }?>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <option
                            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
"
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['value']==$_smarty_tpl->tpl_vars['k']->value) {?>selected="selected"<?php }?>
                            data-ca-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
"
                        >
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_suffix']->value, ENT_QUOTES, 'UTF-8');?>

                        </option>
                    <?php } ?>
                </select>
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::RADIOGROUP")) {?>
                <div class="select-field" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <label for="variant_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" class="radio">
                            <?php $_smarty_tpl->tpl_vars['attrs'] = new Smarty_variable(array_merge($_smarty_tpl->tpl_vars['default_attrs']->value,array("type"=>"radio","name"=>((string)$_smarty_tpl->tpl_vars['html_name']->value),"value"=>((string)$_smarty_tpl->tpl_vars['k']->value),"id"=>"variant_".((string)$_smarty_tpl->tpl_vars['item']->value['name'])."_".((string)$_smarty_tpl->tpl_vars['k']->value))), null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['value']==$_smarty_tpl->tpl_vars['k']->value) {?>
                                <?php $_smarty_tpl->createLocalArrayVariable('attrs', null, 0);
$_smarty_tpl->tpl_vars['attrs']->value['checked'] = "checked";?>
                            <?php }?>
                            <input <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['input_attrs']->value,$_smarty_tpl->tpl_vars['attrs']->value);?>
> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>

                        </label>
                    <?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
                        <?php echo $_smarty_tpl->__("no_items");?>

                    <?php } ?>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::MULTIPLE_SELECT")) {?>
                <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?> />
                <?php $_smarty_tpl->tpl_vars['default_attrs'] = new Smarty_variable(array_merge($_smarty_tpl->tpl_vars['default_attrs']->value,array("id"=>((string)$_smarty_tpl->tpl_vars['html_id']->value),"name"=>((string)$_smarty_tpl->tpl_vars['html_name']->value)."[]","multiple"=>"multiple")), null, 0);?>
                <select <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['input_attrs']->value,$_smarty_tpl->tpl_vars['default_attrs']->value);?>
>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['value']&&$_smarty_tpl->tpl_vars['item']->value['value'][$_smarty_tpl->tpl_vars['k']->value]===smarty_modifier_enum("YesNo::YES")) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                </select>
                <div class="muted description"><?php echo $_smarty_tpl->__("multiple_selectbox_notice");?>
</div>
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::MULTIPLE_CHECKBOXES")) {?>
                <div class="select-field" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?> />
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <label for="variant_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" class="checkbox">
                            <?php $_smarty_tpl->tpl_vars['attrs'] = new Smarty_variable(array_merge($_smarty_tpl->tpl_vars['default_attrs']->value,array("type"=>"checkbox","name"=>((string)$_smarty_tpl->tpl_vars['html_name']->value)."[]","value"=>((string)$_smarty_tpl->tpl_vars['k']->value),"id"=>"variant_".((string)$_smarty_tpl->tpl_vars['item']->value['name'])."_".((string)$_smarty_tpl->tpl_vars['k']->value))), null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['value'][$_smarty_tpl->tpl_vars['k']->value]===smarty_modifier_enum("YesNo::YES")) {?>
                                <?php $_smarty_tpl->createLocalArrayVariable('attrs', null, 0);
$_smarty_tpl->tpl_vars['attrs']->value['checked'] = "checked";?>
                            <?php }?>
                            <input <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['input_attrs']->value,$_smarty_tpl->tpl_vars['attrs']->value);?>
>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>

                        </label>
                    <?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
                        <?php echo $_smarty_tpl->__("no_items");?>

                    <?php } ?>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::COUNTRY")) {?>
                <?php $_smarty_tpl->tpl_vars['default_attrs'] = new Smarty_variable(array_merge($_smarty_tpl->tpl_vars['default_attrs']->value,array("id"=>((string)$_smarty_tpl->tpl_vars['html_id']->value),"name"=>((string)$_smarty_tpl->tpl_vars['html_name']->value),"class"=>"cm-country cm-location-billing")), null, 0);?>
                <select <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['input_attrs']->value,$_smarty_tpl->tpl_vars['default_attrs']->value);?>
>
                    <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
                    <?php $_smarty_tpl->tpl_vars["countries"] = new Smarty_variable(fn_get_simple_countries(''), null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['country']->key;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['code']->value==$_smarty_tpl->tpl_vars['item']->value['value']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                </select>
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::STATE")) {?>
                <?php $_smarty_tpl->tpl_vars['default_select_attrs'] = new Smarty_variable(array_merge($_smarty_tpl->tpl_vars['default_attrs']->value,array("id"=>((string)$_smarty_tpl->tpl_vars['html_id']->value),"name"=>((string)$_smarty_tpl->tpl_vars['html_name']->value),"class"=>"cm-state cm-location-billing")), null, 0);?>
                <select <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['select_attrs']->value,$_smarty_tpl->tpl_vars['default_select_attrs']->value);?>
>
                    <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
                </select>
                <?php $_smarty_tpl->tpl_vars['default_input_attrs'] = new Smarty_variable(array_merge($_smarty_tpl->tpl_vars['default_attrs']->value,array("id"=>((string)$_smarty_tpl->tpl_vars['html_id']->value)."_d","name"=>((string)$_smarty_tpl->tpl_vars['html_name']->value),"value"=>((string)$_smarty_tpl->tpl_vars['item']->value['value']),"type"=>"text","size"=>"32","maxlength"=>"64","placeholder"=>((string)$_smarty_tpl->tpl_vars['input_placeholder']->value),"disabled"=>"disabled","class"=>"cm-state cm-location-billing")), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['extended_input_attrs'] = new Smarty_variable(array("class"=>"hidden"), null, 0);?>
                <input <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['input_attrs']->value,$_smarty_tpl->tpl_vars['default_input_attrs']->value,$_smarty_tpl->tpl_vars['extended_input_attrs']->value);?>
 />
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::FILE")) {?>
                <div class="input-append">
                    <?php $_smarty_tpl->tpl_vars['default_input_attrs'] = new Smarty_variable(array_merge($_smarty_tpl->tpl_vars['default_attrs']->value,array("id"=>"file_".((string)$_smarty_tpl->tpl_vars['html_id']->value),"name"=>((string)$_smarty_tpl->tpl_vars['html_name']->value),"value"=>((string)$_smarty_tpl->tpl_vars['item']->value['value']),"type"=>"text","placeholder"=>((string)$_smarty_tpl->tpl_vars['input_placeholder']->value),"size"=>"30")), null, 0);?>
                    <input <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['input_attrs']->value,$_smarty_tpl->tpl_vars['default_input_attrs']->value);?>
>
                    <?php $_smarty_tpl->tpl_vars['default_button_attrs'] = new Smarty_variable(array_merge($_smarty_tpl->tpl_vars['default_attrs']->value,array("id"=>((string)$_smarty_tpl->tpl_vars['html_id']->value),"class"=>"btn","type"=>"button","onclick"=>"Tygh.fileuploader.init('box_server_upload', this.id);")), null, 0);?>
                    <button <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['button_attrs']->value,$_smarty_tpl->tpl_vars['default_button_attrs']->value);?>
><?php echo $_smarty_tpl->__("browse");?>
</button>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::MULTIPLE_CHECKBOXES_FOR_SELECTBOX")) {?>
                <div class="cm-combo-checkbox-group" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php  $_smarty_tpl->tpl_vars['variant_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant_name']->_loop = false;
 $_smarty_tpl->tpl_vars['variant_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant_name']->key => $_smarty_tpl->tpl_vars['variant_name']->value) {
$_smarty_tpl->tpl_vars['variant_name']->_loop = true;
 $_smarty_tpl->tpl_vars['variant_key']->value = $_smarty_tpl->tpl_vars['variant_name']->key;
?>
                        <label for="variant_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="checkbox">
                            <?php $_smarty_tpl->tpl_vars['attrs'] = new Smarty_variable(array_merge($_smarty_tpl->tpl_vars['default_attrs']->value,array("id"=>"variant_".((string)$_smarty_tpl->tpl_vars['item']->value['name'])."_".((string)$_smarty_tpl->tpl_vars['variant_key']->value),"name"=>((string)$_smarty_tpl->tpl_vars['html_name']->value)."[]","class"=>"cm-combo-checkbox","value"=>((string)$_smarty_tpl->tpl_vars['variant_key']->value),"type"=>"checkbox")), null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['value'][$_smarty_tpl->tpl_vars['variant_key']->value]==smarty_modifier_enum("YesNo::YES")) {?>
                                <?php $_smarty_tpl->createLocalArrayVariable('attrs', null, 0);
$_smarty_tpl->tpl_vars['attrs']->value['checked'] = "checked";?>
                            <?php }?>
                            <input <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['input_attrs']->value,$_smarty_tpl->tpl_vars['attrs']->value);?>
>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_name']->value, ENT_QUOTES, 'UTF-8');?>

                        </label>
                    <?php }
if (!$_smarty_tpl->tpl_vars['variant_name']->_loop) {
?>
                        <?php echo $_smarty_tpl->__("no_items");?>

                    <?php } ?>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::SELECTBOX_WITH_SOURCE")) {?>
                <?php $_smarty_tpl->tpl_vars['default_attrs'] = new Smarty_variable(array_merge($_smarty_tpl->tpl_vars['default_attrs']->value,array("id"=>((string)$_smarty_tpl->tpl_vars['html_id']->value),"name"=>((string)$_smarty_tpl->tpl_vars['html_name']->value),"class"=>"cm-combo-select")), null, 0);?>
                <select <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['input_attrs']->value,$_smarty_tpl->tpl_vars['default_attrs']->value);?>
>
                    <?php  $_smarty_tpl->tpl_vars['variant_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant_name']->_loop = false;
 $_smarty_tpl->tpl_vars['variant_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant_name']->key => $_smarty_tpl->tpl_vars['variant_name']->value) {
$_smarty_tpl->tpl_vars['variant_name']->_loop = true;
 $_smarty_tpl->tpl_vars['variant_key']->value = $_smarty_tpl->tpl_vars['variant_name']->key;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_key']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['value']==$_smarty_tpl->tpl_vars['variant_key']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                </select>
            <?php } else { ?>
                <?php ob_start();
if ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::NUMBER")) {?><?php echo " cm-value-integer";?><?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::PHONE")) {?><?php echo " cm-mask-phone";?><?php }
$_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['default_attrs'] = new Smarty_variable(array_merge($_smarty_tpl->tpl_vars['default_attrs']->value,array("id"=>((string)$_smarty_tpl->tpl_vars['html_id']->value),"type"=>"text","name"=>((string)$_smarty_tpl->tpl_vars['html_name']->value),"size"=>"30","class"=>$_tmp2,"placeholder"=>((string)$_smarty_tpl->tpl_vars['input_placeholder']->value),"value"=>((string)$_smarty_tpl->tpl_vars['item']->value['value']))), null, 0);?>
                <input <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['input_attrs']->value,$_smarty_tpl->tpl_vars['default_attrs']->value);?>
/>
            <?php }?>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("update_for_all", null, null); ob_start(); ?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['global_setting']) {?>
                    <?php $_smarty_tpl->tpl_vars['settings_ids'] = new Smarty_variable(array($_smarty_tpl->tpl_vars['item']->value['object_id'],$_smarty_tpl->tpl_vars['item']->value['global_setting']['object_id']), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['settings_input_names'] = new Smarty_variable(array($_smarty_tpl->tpl_vars['item']->value['object_id']=>"update_all_vendors[".((string)$_smarty_tpl->tpl_vars['item']->value['object_id'])."]",$_smarty_tpl->tpl_vars['item']->value['global_setting']['object_id']=>"update_all_vendors[".((string)$_smarty_tpl->tpl_vars['item']->value['global_setting']['object_id'])."]"), null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['settings_ids'] = new Smarty_variable(array($_smarty_tpl->tpl_vars['item']->value['object_id']), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['settings_input_names'] = new Smarty_variable(array($_smarty_tpl->tpl_vars['item']->value['object_id']=>"update_all_vendors[".((string)$_smarty_tpl->tpl_vars['item']->value['object_id'])."]"), null, 0);?>
                <?php }?>

                <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>$_smarty_tpl->tpl_vars['item']->value['update_for_all'],'hide_element'=>$_smarty_tpl->tpl_vars['html_id']->value,'object_ids'=>$_smarty_tpl->tpl_vars['settings_ids']->value,'names'=>$_smarty_tpl->tpl_vars['settings_input_names']->value,'static_position'=>$_smarty_tpl->tpl_vars['global_selector']->value,'component'=>"settings.".((string)$_smarty_tpl->tpl_vars['item']->value['name'])), 0);?>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php if ($_smarty_tpl->tpl_vars['global_selector']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("components/global_individual.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['setting_field'],'extra'=>Smarty::$_smarty_vars['capture']['update_for_all'],'html_id'=>$_smarty_tpl->tpl_vars['html_id']->value,'html_name'=>$_smarty_tpl->tpl_vars['html_name']->value,'global_setting'=>$_smarty_tpl->tpl_vars['item']->value['global_setting'],'disable_input'=>$_smarty_tpl->tpl_vars['disable_input']->value), 0);?>

            <?php } else { ?>
                <?php echo Smarty::$_smarty_vars['capture']['setting_field'];?>

                <?php echo Smarty::$_smarty_vars['capture']['update_for_all'];?>

            <?php }?>
        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::SELECTABLE_BOX")) {?>
    <div class="control-group">
        <?php echo $_smarty_tpl->getSubTemplate ("common/selectable_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('addon'=>$_smarty_tpl->tpl_vars['section_name']->value,'name'=>$_smarty_tpl->tpl_vars['html_name']->value,'id'=>$_smarty_tpl->tpl_vars['html_id']->value,'fields'=>$_smarty_tpl->tpl_vars['item']->value['variants'],'selected_fields'=>$_smarty_tpl->tpl_vars['item']->value['value']), 0);?>

    </div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['total']->value==$_smarty_tpl->tpl_vars['index']->value&&Smarty::$_smarty_vars['capture']['header_first']=='true') {?>
    </fieldset>
        </div>
<?php }?>
<?php }} ?>
