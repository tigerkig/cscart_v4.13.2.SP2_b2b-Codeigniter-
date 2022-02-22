<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 12:32:48
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\views\addons\components\addons\addon_actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205226572961752840bcc797-58178090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df18850ea7aed9bb180d4a24f08c6a3abeb7bbe0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\views\\addons\\components\\addons\\addon_actions.tpl',
      1 => 1628148888,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '205226572961752840bcc797-58178090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'runtime' => 0,
    'a' => 0,
    'license_required' => 0,
    'hide_for_vendor' => 0,
    'key' => 0,
    'c_url' => 0,
    'target_id' => 0,
    'action_btn_text' => 0,
    'href' => 0,
    'menu_item' => 0,
    'parent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61752840c106c6_91590635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61752840c106c6_91590635')) {function content_61752840c106c6_91590635($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('not_installed','disabled','active','open_action','addons.activate','addons.install','addons.install','addons.activate','active','addons.upgrade_available','addons.upgrade_available','open_action','active','addons.upgrade_available','addons.upgrade_available','active'));
?>
<?php $_smarty_tpl->tpl_vars['target_id'] = new Smarty_variable("addons_list,header_navbar,header_subnav,addons_counter,elm_developer_pages,elm_all_dev_pages", null, 0);?>
<?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value['current_url'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <?php $_smarty_tpl->tpl_vars['hide_for_vendor'] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['a']->value['status']===smarty_modifier_enum("ObjectStatuses::NEW_OBJECT")) {?>
    <?php $_smarty_tpl->tpl_vars['status_text'] = new Smarty_variable($_smarty_tpl->__("not_installed"), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['a']->value['status']===smarty_modifier_enum("ObjectStatuses::DISABLED")) {?>
    <?php $_smarty_tpl->tpl_vars['status_text'] = new Smarty_variable($_smarty_tpl->__("disabled"), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['a']->value['status']===smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
    <?php $_smarty_tpl->tpl_vars['status_text'] = new Smarty_variable($_smarty_tpl->__("active"), null, 0);?>
<?php }?>

<?php ob_start();
echo $_smarty_tpl->__("open_action");
$_tmp18=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['action_btn_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['a']->value['main_page'] ? "<span class=\"caret\"></span>" : $_tmp18." <span class=\"caret\"></span>", null, 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/addons/addon_license_required.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div>
    <?php if (!$_smarty_tpl->tpl_vars['a']->value['snapshot_correct']) {?>
        <a href=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['license_required']->value['href'], ENT_QUOTES, 'UTF-8');?>

            class="btn cm-post cm-dialog-opener cm-dialog-auto-size"
            data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['license_required']->value['target_id'], ENT_QUOTES, 'UTF-8');?>

            data-ca-dialog-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['license_required']->value['promo_popup_title'], ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php if ($_smarty_tpl->tpl_vars['a']->value['status']===smarty_modifier_enum("ObjectStatuses::DISABLED")) {?>
                <?php echo $_smarty_tpl->__("addons.activate");?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->__("addons.install");?>

            <?php }?>
        </a>
    <?php } elseif ($_smarty_tpl->tpl_vars['a']->value['status']===smarty_modifier_enum("ObjectStatuses::NEW_OBJECT")) {?>
        <?php if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>
            <div>
                <a href="<?php echo htmlspecialchars(fn_url("addons.install?addon=".((string)$_smarty_tpl->tpl_vars['key']->value)."&return_url=".((string)rawurlencode($_smarty_tpl->tpl_vars['c_url']->value))), ENT_QUOTES, 'UTF-8');?>
"
                    class="btn cm-post cm-ajax cm-ajax-full-render"
                    data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'UTF-8');?>

                >
                    <?php echo $_smarty_tpl->__("addons.install");?>

                </a>
            </div>
            <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['a']->value['status']===smarty_modifier_enum("ObjectStatuses::DISABLED")) {?>

        <a href="<?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("ObjectStatuses::ACTIVE"), ENT_QUOTES, 'UTF-8');
$_tmp19=ob_get_clean();?><?php echo htmlspecialchars(fn_url("addons.update_status?id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&status=".$_tmp19."&redirect_url=".((string)rawurlencode($_smarty_tpl->tpl_vars['c_url']->value))), ENT_QUOTES, 'UTF-8');?>
"
            class="btn cm-ajax cm-post cm-ajax-full-render"
            data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-event="ce.update_object_status_callback"
        >
            <?php echo $_smarty_tpl->__("addons.activate");?>

        </a>

    <?php } elseif ($_smarty_tpl->tpl_vars['a']->value['status']===smarty_modifier_enum("ObjectStatuses::ACTIVE")&&$_smarty_tpl->tpl_vars['a']->value['menu_items']) {?>
        <?php if ($_smarty_tpl->tpl_vars['a']->value['upgrade_available']) {?>
            <span class="shift-right muted" title="<?php echo $_smarty_tpl->__("active");?>
. <?php echo $_smarty_tpl->__("addons.upgrade_available");?>
">
                <?php echo $_smarty_tpl->__("addons.upgrade_available");?>

            </span>
        <?php }?>
        <div class="nowrap inline-block-basic">
            <div class="btn-group dropleft">
                <?php if ($_smarty_tpl->tpl_vars['a']->value['main_page']) {?>
                    <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['a']->value['main_page']), ENT_QUOTES, 'UTF-8');?>
" class="btn"><?php echo $_smarty_tpl->__("open_action");?>
</a>
                <?php }?>
                <button class="btn dropdown-toggle" data-toggle="dropdown">
                    <?php echo $_smarty_tpl->tpl_vars['action_btn_text']->value;?>

                </button>
                <ul class="dropdown-menu">
                    <?php  $_smarty_tpl->tpl_vars['menu_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu_item']->_loop = false;
 $_smarty_tpl->tpl_vars['href'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['a']->value['menu_items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu_item']->key => $_smarty_tpl->tpl_vars['menu_item']->value) {
$_smarty_tpl->tpl_vars['menu_item']->_loop = true;
 $_smarty_tpl->tpl_vars['href']->value = $_smarty_tpl->tpl_vars['menu_item']->key;
?>
                        <li>
                        <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['href']->value), ENT_QUOTES, 'UTF-8');?>
">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu_item']->value['title'] ? $_smarty_tpl->tpl_vars['menu_item']->value['title'] : $_smarty_tpl->__($_smarty_tpl->tpl_vars['menu_item']->value['id']), ENT_QUOTES, 'UTF-8');?>

                            <?php if ($_smarty_tpl->tpl_vars['menu_item']->value['parents']) {?>
                                (<?php  $_smarty_tpl->tpl_vars['parent'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['parent']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_item']->value['parents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['parent']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['parent']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['parent']->key => $_smarty_tpl->tpl_vars['parent']->value) {
$_smarty_tpl->tpl_vars['parent']->_loop = true;
 $_smarty_tpl->tpl_vars['parent']->iteration++;
 $_smarty_tpl->tpl_vars['parent']->last = $_smarty_tpl->tpl_vars['parent']->iteration === $_smarty_tpl->tpl_vars['parent']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["addon_menu_item_parents"]['last'] = $_smarty_tpl->tpl_vars['parent']->last;
echo htmlspecialchars($_smarty_tpl->tpl_vars['parent']->value['title'] ? $_smarty_tpl->tpl_vars['parent']->value['title'] : $_smarty_tpl->__($_smarty_tpl->tpl_vars['parent']->value['id']), ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['addon_menu_item_parents']['last']) {?> / <?php }
} ?>)
                            <?php }?>
                        </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>

    <?php } else { ?>

        <?php if ($_smarty_tpl->tpl_vars['a']->value['upgrade_available']) {?>
            <span class="shift-right muted" title="<?php echo $_smarty_tpl->__("active");?>
. <?php echo $_smarty_tpl->__("addons.upgrade_available");?>
">
                <?php echo $_smarty_tpl->__("addons.upgrade_available");?>

            </span>
        <?php } else { ?>
            <span class="shift-right"><?php echo $_smarty_tpl->__("active");?>
</span>
        <?php }?>

    <?php }?>
</div>
<?php }} ?>
