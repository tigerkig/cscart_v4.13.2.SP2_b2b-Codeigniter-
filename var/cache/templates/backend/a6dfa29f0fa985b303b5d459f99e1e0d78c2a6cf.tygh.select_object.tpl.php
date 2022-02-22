<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 12:11:54
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\common\select_object.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18819596406175235a5b8236-10348861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6dfa29f0fa985b303b5d459f99e1e0d78c2a6cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\common\\select_object.tpl',
      1 => 1628148888,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18819596406175235a5b8236-10348861',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'style' => 0,
    'class' => 0,
    'select_container_id' => 0,
    'selected_id' => 0,
    'suffix' => 0,
    'display_icons' => 0,
    'icon_class' => 0,
    'key_name' => 0,
    'id' => 0,
    'link_tpl' => 0,
    'target_id' => 0,
    'item' => 0,
    'extra' => 0,
    'disable_dropdown_processing' => 0,
    'plain_name' => 0,
    'key_selected' => 0,
    'link_suffix' => 0,
    'link' => 0,
    'selected_key' => 0,
    'selected_name' => 0,
    'select_container_name' => 0,
    'text_wrap' => 0,
    'key' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6175235a642158_61319004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6175235a642158_61319004')) {function content_6175235a642158_61319004($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sizeof')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.sizeof.php';
?><?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['items']->value)>1) {?>

<?php if ($_smarty_tpl->tpl_vars['style']->value=="graphic") {?>
<div class="btn-group <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['select_container_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select_container_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <a class="btn btn-text dropdown-toggle " id="sw_select_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_id']->value, ENT_QUOTES, 'UTF-8');?>
_wrap_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" data-toggle="dropdown">
        <?php if ($_smarty_tpl->tpl_vars['display_icons']->value) {?>
            <?php ob_start();
echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['selected_id']->value]['country_code'], 'UTF-8'), ENT_QUOTES, 'UTF-8');
$_tmp16=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['icon_class'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['selected_id']->value]['icon_class'])===null||$tmp==='' ? "flag flag-".$_tmp16 : $tmp), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['icon_class']->value) {?>
                <i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="sw_select_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_id']->value, ENT_QUOTES, 'UTF-8');?>
_wrap_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"></i>
            <?php }?>
        <?php }?>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['selected_id']->value][$_smarty_tpl->tpl_vars['key_name']->value], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['selected_id']->value]['symbol']) {?>&nbsp;(<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['selected_id']->value]['symbol'];?>
)
        <?php }?>
        <span class="caret"></span>
    </a>
        <?php if ($_smarty_tpl->tpl_vars['key_name']->value=="company") {?>
            <input id="filter" class="input-text cm-filter" type="text" style="width: 85%"/>
        <?php }?>
        <ul class="dropdown-menu cm-select-list <?php if ($_smarty_tpl->tpl_vars['display_icons']->value) {?>popup-icons<?php }?>">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                <li>
                    <a name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                       href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['link_tpl']->value).((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"
                       <?php if ($_smarty_tpl->tpl_vars['target_id']->value) {?>
                           class="cm-ajax"
                           data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                       <?php }?>
                    >
                        <?php if ($_smarty_tpl->tpl_vars['display_icons']->value) {?>
                            <?php ob_start();
echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['item']->value['country_code'], 'UTF-8'), ENT_QUOTES, 'UTF-8');
$_tmp17=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['icon_class'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['item']->value['icon_class'])===null||$tmp==='' ? "flag flag-".$_tmp17 : $tmp), null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['icon_class']->value) {?>
                                <i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon_class']->value, ENT_QUOTES, 'UTF-8');?>
"></i>
                            <?php }?>
                        <?php }?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['key_name']->value], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item']->value['symbol']) {?>&nbsp;(<?php echo $_smarty_tpl->tpl_vars['item']->value['symbol'];?>
)<?php }?>
                    </a>
                </li>
            <?php } ?>
            <?php if ($_smarty_tpl->tpl_vars['extra']->value) {
echo $_smarty_tpl->tpl_vars['extra']->value;
}?>
        </ul>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['style']->value=="dropdown") {?>
    <li class="dropdown dropdown-top-menu-item <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['select_container_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select_container_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
        <a class="dropdown-toggle cm-combination"
           data-toggle="dropdown"
           id="sw_select_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_id']->value, ENT_QUOTES, 'UTF-8');?>
_wrap_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
           <?php if ($_smarty_tpl->tpl_vars['disable_dropdown_processing']->value) {?>data-disable-dropdown-processing="true"<?php }?>
        >
            <?php if ($_smarty_tpl->tpl_vars['plain_name']->value) {?>
                <?php echo $_smarty_tpl->tpl_vars['plain_name']->value;?>

            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['key_selected']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['selected_id']->value]['symbol']) {?>
                        <?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['selected_id']->value]['symbol'];?>

                    <?php } else { ?>
                        <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['selected_id']->value][$_smarty_tpl->tpl_vars['key_selected']->value], 'UTF-8');?>

                    <?php }?>
                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['selected_id']->value][$_smarty_tpl->tpl_vars['key_name']->value];?>

                <?php }?>
            <?php }?>
            <b class="caret"></b>
        </a>
        <ul class="dropdown-menu cm-select-list pull-right">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['item']->key;
?>

                
                <?php $_smarty_tpl->tpl_vars['link'] = new Smarty_variable(fn_url(((string)$_smarty_tpl->tpl_vars['link_tpl']->value).((string)$_smarty_tpl->tpl_vars['id']->value)), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['link_suffix']->value) {?>
                    <?php $_smarty_tpl->tpl_vars['link'] = new Smarty_variable(fn_link_attach($_smarty_tpl->tpl_vars['link']->value,((string)$_smarty_tpl->tpl_vars['link_suffix']->value).((string)$_smarty_tpl->tpl_vars['id']->value)), null, 0);?>
                <?php }?>

                <li <?php if ($_smarty_tpl->tpl_vars['id']->value==$_smarty_tpl->tpl_vars['selected_id']->value) {?>class="active"<?php }?>>
                    <a name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php if ($_smarty_tpl->tpl_vars['display_icons']->value) {?>
                            <?php ob_start();
echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['item']->value['country_code'], 'UTF-8'), ENT_QUOTES, 'UTF-8');
$_tmp18=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['icon_class'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['item']->value['icon_class'])===null||$tmp==='' ? "flag flag-".$_tmp18 : $tmp), null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['icon_class']->value) {?>
                                <i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon_class']->value, ENT_QUOTES, 'UTF-8');?>
"></i>
                            <?php }?>
                        <?php }?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['key_name']->value], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item']->value['symbol']) {?>&nbsp;(<?php echo $_smarty_tpl->tpl_vars['item']->value['symbol'];?>
)<?php }?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </li>
<?php } elseif ($_smarty_tpl->tpl_vars['style']->value=="field") {?>
<div class="cm-popup-box btn-group <?php if ($_smarty_tpl->tpl_vars['class']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');
}?>">
    <?php if (!$_smarty_tpl->tpl_vars['selected_key']->value) {?>
        <?php $_smarty_tpl->tpl_vars['selected_key'] = new Smarty_variable(key($_smarty_tpl->tpl_vars['items']->value), null, 0);?>
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['selected_name']->value) {?>
        <?php $_smarty_tpl->tpl_vars['selected_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['selected_key']->value], null, 0);?>
    <?php }?>
    <input type="hidden"
           name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select_container_name']->value, ENT_QUOTES, 'UTF-8');?>
"
           <?php if ($_smarty_tpl->tpl_vars['select_container_id']->value) {?>
               id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select_container_id']->value, ENT_QUOTES, 'UTF-8');?>
"
           <?php }?>
           value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_key']->value, ENT_QUOTES, 'UTF-8');?>
"
    />
    <a id="sw_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select_container_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="dropdown-toggle btn-text btn <?php if ($_smarty_tpl->tpl_vars['text_wrap']->value) {?>dropdown-toggle--text-wrap<?php }?>" data-toggle="dropdown">
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_name']->value, ENT_QUOTES, 'UTF-8');?>

        <span class="caret"></span>
    </a>
    <ul class="dropdown-menu cm-select">
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
            <li <?php if ($_smarty_tpl->tpl_vars['selected_key']->value==$_smarty_tpl->tpl_vars['key']->value) {?>class="disabled"<?php }?>>
                <a class="<?php if ($_smarty_tpl->tpl_vars['selected_key']->value==$_smarty_tpl->tpl_vars['key']->value) {?>active<?php }?> cm-select-option <?php if ($_smarty_tpl->tpl_vars['text_wrap']->value) {?>dropdown--text-wrap<?php }?>"
                   data-ca-list-item="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                ><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</a></li>
        <?php } ?>
    </ul>
</div>
<?php }?>

<?php }?>
<?php }} ?>
