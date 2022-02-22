<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 12:30:43
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\common\select_popup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1718811562617527c34f3384-14570635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58b556d8089313f639b860c7479fd31a26b22daf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\common\\select_popup.tpl',
      1 => 1628148888,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1718811562617527c34f3384-14570635',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'update_controller' => 0,
    'custom_href' => 0,
    'non_editable' => 0,
    '_update_controller' => 0,
    'table' => 0,
    'has_permission' => 0,
    'display' => 0,
    'items_status' => 0,
    'status' => 0,
    'default_status_text' => 0,
    'prefix' => 0,
    'btn_meta' => 0,
    'popup_additional_class' => 0,
    'hide_for_vendor' => 0,
    'id' => 0,
    'text_wrap' => 0,
    'object_id_name' => 0,
    'hidden' => 0,
    'extra' => 0,
    'st_return_url' => 0,
    'extra_params' => 0,
    'return_url' => 0,
    'st' => 0,
    'confirm' => 0,
    'ajax_full_render' => 0,
    'status_meta' => 0,
    'status_target_id' => 0,
    'dynamic_object' => 0,
    'statuses' => 0,
    'st_result_ids' => 0,
    'custom_title' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_617527c3577ba9_11329947',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617527c3577ba9_11329947')) {function content_617527c3577ba9_11329947($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('active','hidden','disabled','pending','new','active','disabled','hidden','pending','new'));
?>
<?php $_smarty_tpl->tpl_vars['notify_customer_status'] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars['notify_department_status'] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars['notify_vendor_status'] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars['_update_controller'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['update_controller']->value)===null||$tmp==='' ? "tools" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['custom_href'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['custom_href']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>

<?php if (!$_smarty_tpl->tpl_vars['non_editable']->value) {?>
    <?php $_smarty_tpl->tpl_vars['has_permission'] = new Smarty_variable(fn_check_permissions($_smarty_tpl->tpl_vars['_update_controller']->value,"update_status","admin","POST",array("table"=>$_smarty_tpl->tpl_vars['table']->value)), null, 0);?>
    <?php if (!$_smarty_tpl->tpl_vars['has_permission']->value) {?>
        <?php $_smarty_tpl->tpl_vars['non_editable'] = new Smarty_variable(true, null, 0);?>
    <?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['non_editable']->value||$_smarty_tpl->tpl_vars['display']->value=="text") {?>
    <span class="view-status">
        <?php if ($_smarty_tpl->tpl_vars['items_status']->value) {?>
            <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['items_status']->value[$_smarty_tpl->tpl_vars['status']->value])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_status_text']->value : $tmp), ENT_QUOTES, 'UTF-8');?>

        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['status']->value=="A") {?>
                <?php echo $_smarty_tpl->__("active");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['status']->value=="H") {?>
                <?php echo $_smarty_tpl->__("hidden");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['status']->value=="D") {?>
                <?php echo $_smarty_tpl->__("disabled");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['status']->value=="P") {?>
                <?php echo $_smarty_tpl->__("pending");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['status']->value=="N") {?>
                <?php echo $_smarty_tpl->__("new");?>

            <?php }?>
        <?php }?>
    </span>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars["prefix"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['prefix']->value)===null||$tmp==='' ? "select" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars["btn_meta"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['btn_meta']->value)===null||$tmp==='' ? "btn-text" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars["popup_additional_class"] = new Smarty_variable($_smarty_tpl->tpl_vars['popup_additional_class']->value, null, 0);?>
<div class="cm-popup-box <?php if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>dropdown<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['popup_additional_class']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>
        <a href="#" <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="sw_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_wrap"<?php }?> class="<?php if ($_smarty_tpl->tpl_vars['btn_meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['btn_meta']->value, ENT_QUOTES, 'UTF-8');
}?> status-dropdown-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['status']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 btn dropdown-toggle<?php if ($_smarty_tpl->tpl_vars['id']->value) {?> cm-combination<?php }?> <?php if ($_smarty_tpl->tpl_vars['text_wrap']->value) {?>dropdown-toggle--text-wrap<?php }?>" data-toggle="dropdown">
    <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['items_status']->value) {?>
            <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['items_status']->value[$_smarty_tpl->tpl_vars['status']->value])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_status_text']->value : $tmp), ENT_QUOTES, 'UTF-8');?>

        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['status']->value=="A") {?>
                <?php echo $_smarty_tpl->__("active");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['status']->value=="D") {?>
                <?php echo $_smarty_tpl->__("disabled");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['status']->value=="H") {?>
                <?php echo $_smarty_tpl->__("hidden");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['status']->value=="P") {?>
                <?php echo $_smarty_tpl->__("pending");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['status']->value=="N") {?>
                <?php echo $_smarty_tpl->__("new");?>

            <?php }?>
        <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>
        <span class="caret"></span>
        </a>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['id']->value&&!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['table']->value&&$_smarty_tpl->tpl_vars['object_id_name']->value) {
$_smarty_tpl->_capture_stack[0][] = array("_extra", null, null); ob_start(); ?>&table=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value, ENT_QUOTES, 'UTF-8');?>
&id_name=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id_name']->value, ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>
            <ul class="dropdown-menu">
            <?php if (!$_smarty_tpl->tpl_vars['items_status']->value) {?>
                <?php $_smarty_tpl->tpl_vars["items_status"] = new Smarty_variable(fn_get_default_statuses($_smarty_tpl->tpl_vars['status']->value,$_smarty_tpl->tpl_vars['hidden']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["extra_params"] = new Smarty_variable("&table=".((string)$_smarty_tpl->tpl_vars['table']->value)."&id_name=".((string)$_smarty_tpl->tpl_vars['object_id_name']->value), null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars["extra_params"] = new Smarty_variable(((string)Smarty::$_smarty_vars['capture']['_extra']).((string)$_smarty_tpl->tpl_vars['extra']->value), null, 0);?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['st_return_url']->value) {?>
                <?php $_smarty_tpl->tpl_vars['return_url'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['st_return_url']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['extra_params'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['extra_params']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_url']->value), null, 0);?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['items_status']->value) {?>
                <?php  $_smarty_tpl->tpl_vars["val"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["val"]->_loop = false;
 $_smarty_tpl->tpl_vars["st"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items_status']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["val"]->key => $_smarty_tpl->tpl_vars["val"]->value) {
$_smarty_tpl->tpl_vars["val"]->_loop = true;
 $_smarty_tpl->tpl_vars["st"]->value = $_smarty_tpl->tpl_vars["val"]->key;
?>
                <li <?php if ($_smarty_tpl->tpl_vars['status']->value==$_smarty_tpl->tpl_vars['st']->value) {?>class="disabled"<?php }?>>
                    <a
                        class="<?php if ($_smarty_tpl->tpl_vars['text_wrap']->value) {?>dropdown--text-wrap<?php }?> <?php if ($_smarty_tpl->tpl_vars['confirm']->value) {?>cm-confirm <?php }?>status-link-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['st']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['status']->value==$_smarty_tpl->tpl_vars['st']->value) {?>active<?php } else { ?>cm-ajax cm-post<?php if ($_smarty_tpl->tpl_vars['ajax_full_render']->value) {?> cm-ajax-full-render<?php }
}?> <?php if ($_smarty_tpl->tpl_vars['status_meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['status_meta']->value, ENT_QUOTES, 'UTF-8');
}?>"
                        <?php if ($_smarty_tpl->tpl_vars['status_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['custom_href']->value) {?>
                            href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['custom_href']->value, ENT_QUOTES, 'UTF-8');?>
"
                        <?php } else { ?>
                            href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['_update_controller']->value).".update_status?id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&status=".((string)$_smarty_tpl->tpl_vars['st']->value).((string)$_smarty_tpl->tpl_vars['extra_params']->value).((string)$_smarty_tpl->tpl_vars['dynamic_object']->value)), ENT_QUOTES, 'UTF-8');?>
"
                        <?php }?>
                        onclick="return fn_check_object_status(this, '<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['st']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
', '<?php if ($_smarty_tpl->tpl_vars['statuses']->value) {
echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['statuses']->value[$_smarty_tpl->tpl_vars['st']->value]['params']['color'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');
}?>');"
                        <?php if ($_smarty_tpl->tpl_vars['st_result_ids']->value) {?>data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['st_result_ids']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                        data-ca-event="ce.update_object_status_callback"
                        title="<?php if ($_smarty_tpl->tpl_vars['custom_title']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['custom_title']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');
}?>"
                    ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                </li>
                <?php } ?>
            <?php }?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("list_items", null, null); ob_start(); ?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/notify_checkboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php if (trim(Smarty::$_smarty_vars['capture']['list_items'])) {?>
                <?php echo Smarty::$_smarty_vars['capture']['list_items'];?>

            <?php }?>
        </ul>
        <?php if (!Smarty::$_smarty_vars['capture']['avail_box']) {?>
        <?php echo smarty_function_script(array('src'=>"js/tygh/select_popup.js"),$_smarty_tpl);?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("avail_box", null, null); ob_start(); ?>Y<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php }?>
    <?php }?>
</div>
<?php }?>
<?php }} ?>
