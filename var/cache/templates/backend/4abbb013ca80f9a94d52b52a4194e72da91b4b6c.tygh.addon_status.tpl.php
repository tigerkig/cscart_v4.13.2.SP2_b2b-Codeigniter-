<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 12:32:48
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\views\addons\components\addons\addon_status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11633113361752840b7f930-73195007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4abbb013ca80f9a94d52b52a4194e72da91b4b6c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\views\\addons\\components\\addons\\addon_status.tpl',
      1 => 1628148888,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11633113361752840b7f930-73195007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'a' => 0,
    'target_id' => 0,
    'key' => 0,
    'c_url' => 0,
    'btn_delete_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61752840bb2805_87636681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61752840bb2805_87636681')) {function content_61752840bb2805_87636681($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('upgrade','refresh','disable','uninstall'));
?>
<?php $_smarty_tpl->tpl_vars['target_id'] = new Smarty_variable("addons_list,header_navbar,header_subnav,addons_counter,elm_developer_pages,elm_all_dev_pages", null, 0);?>
<?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value['current_url'], null, 0);?>

<div>
    <?php if ($_smarty_tpl->tpl_vars['a']->value['status']!==smarty_modifier_enum("ObjectStatuses::NEW_OBJECT")) {?>
        <div class="hidden-tools">

        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <?php if (!$_smarty_tpl->tpl_vars['a']->value['is_core_addon']&&$_smarty_tpl->tpl_vars['a']->value['identified']&&!$_smarty_tpl->tpl_vars['a']->value['personal_review']&&!$_smarty_tpl->tpl_vars['a']->value['hide_post_review']) {?>
                <li class="dropdown__item wrap-normal">
                    <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/rating/enjoying_addon_notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('addon'=>$_smarty_tpl->tpl_vars['a']->value,'id'=>"addons_write_review_manage_".((string)$_smarty_tpl->tpl_vars['a']->value['addon']),'is_big_heading'=>false), 0);?>

                </li>
                <li class="divider"></li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['a']->value['upgrade_available']) {?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("upgrade"),'href'=>"upgrade_center.manage",'class'=>"text-success"));?>
</li>
                <li class="divider"></li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['a']->value['refresh_url']) {?>
                <li>
                    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("refresh"),'href'=>$_smarty_tpl->tpl_vars['a']->value['refresh_url'],'method'=>"POST"));?>

                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['a']->value['status']===smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
                <li>
                    <a class="cm-ajax cm-post cm-ajax-full-render"
                        data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        href="<?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("ObjectStatuses::DISABLED"), ENT_QUOTES, 'UTF-8');
$_tmp17=ob_get_clean();?><?php echo htmlspecialchars(fn_url("addons.update_status?id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&status=".$_tmp17."&redirect_url=".((string)rawurlencode($_smarty_tpl->tpl_vars['c_url']->value))), ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-event="ce.update_object_status_callback"
                    >
                        <?php echo $_smarty_tpl->__("disable");?>

                    </a>
                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['a']->value['delete_url']) {?>
                <?php $_smarty_tpl->tpl_vars['btn_delete_data'] = new Smarty_variable(array("data-ca-target-id"=>"addons_list,header_navbar,header_subnav"), null, 0);?>
                <?php if (isset($_smarty_tpl->tpl_vars['a']->value['confirmation_deleting'])) {?>
                    <?php $_smarty_tpl->createLocalArrayVariable('btn_delete_data', null, 0);
$_smarty_tpl->tpl_vars['btn_delete_data']->value["data-ca-confirm-text"] = $_smarty_tpl->tpl_vars['a']->value['confirmation_deleting'];?>
                <?php }?>

                <li>
                    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm text-error",'text'=>$_smarty_tpl->__("uninstall"),'data'=>$_smarty_tpl->tpl_vars['btn_delete_data']->value,'href'=>$_smarty_tpl->tpl_vars['a']->value['delete_url'],'method'=>"POST"));?>

                </li>
            <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list'],'icon'=>($_smarty_tpl->tpl_vars['a']->value['upgrade_available'] ? "icon-cloud-download" : "icon-cog")));?>


        </div>
    <?php }?>
</div><?php }} ?>
