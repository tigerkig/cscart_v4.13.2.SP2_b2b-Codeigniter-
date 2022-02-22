<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 14:53:29
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\views\orders\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:337637657617549393344d0-32631014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93f059f2cd9e573fa5ff3b8eb017dc98de19d0f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\views\\orders\\manage.tpl',
      1 => 1628148888,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '337637657617549393344d0-32631014',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'statuses' => 0,
    'config' => 0,
    'search' => 0,
    'orders' => 0,
    'order_status_descr' => 0,
    'c_url' => 0,
    'rev' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
    'o' => 0,
    'order_statuses' => 0,
    'notify' => 0,
    'notify_department' => 0,
    'notify_vendor' => 0,
    'extra_status' => 0,
    'settings' => 0,
    'current_redirect_url' => 0,
    'total_pages' => 0,
    'display_totals' => 0,
    'totals' => 0,
    'page_title' => 0,
    'selected_storefront_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_617549394dee50_80097005',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617549394dee50_80097005')) {function content_617549394dee50_80097005($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.date_format.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('text_admin_new_orders','orders','id','status','date','customer','phone','total','id','order','invoice','credit_memo','status','date','customer','phone','tools','view','edit','copy','delete','total','no_data','for_this_page_orders','gross_total','totally_paid','for_all_found_orders','gross_total','totally_paid','add_order','view_purchased_products','export_selected'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="new") {?>
    <p><?php echo $_smarty_tpl->__("text_admin_new_orders");?>
</p>
<?php }?>

<?php $_smarty_tpl->tpl_vars['order_status_descr'] = new Smarty_variable(fn_get_simple_statuses((defined('STATUSES_ORDER') ? constant('STATUSES_ORDER') : null),true,true), null, 0);?>
<?php $_smarty_tpl->tpl_vars['order_statuses'] = new Smarty_variable(fn_get_statuses((defined('STATUSES_ORDER') ? constant('STATUSES_ORDER') : null),$_smarty_tpl->tpl_vars['statuses']->value,true,true), null, 0);?>
<?php $_smarty_tpl->tpl_vars['can_change_status'] = new Smarty_variable(fn_check_view_permissions("orders.update_status","POST"), null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:manage_sidebar")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"orders.manage",'view_type'=>"orders"), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/orders/components/orders_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"orders.manage"), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:manage_sidebar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" target="_self" name="orders_list_form" id="orders_list_form" data-ca-is-multiple-submit-allowed="true">

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>$_REQUEST['content_id']), 0);?>


<?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['c_icon'] = new Smarty_variable("<i class=\"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])."\"></i>", null, 0);?>
<?php $_smarty_tpl->tpl_vars['c_dummy'] = new Smarty_variable("<i class=\"icon-dummy\"></i>", null, 0);?>
<?php $_smarty_tpl->tpl_vars['rev'] = new Smarty_variable((($tmp = @$_REQUEST['content_id'])===null||$tmp==='' ? "pagination_contents" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['page_title'] = new Smarty_variable($_smarty_tpl->__("orders"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['extra_status'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
<?php $_smarty_tpl->tpl_vars['notify_vendor'] = new Smarty_variable(fn_allowed_for("MULTIVENDOR"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['notify'] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars['notify_department'] = new Smarty_variable(true, null, 0);?>
            
<?php if ($_smarty_tpl->tpl_vars['orders']->value) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("orders_table", null, null); ob_start(); ?>
        <div class="table-responsive-wrapper longtap-selection">
            <table width="100%" class="table table-middle table--relative table-responsive table-manage-orders">
            <thead data-ca-bulkedit-default-object="true" data-ca-bulkedit-component="defaultObject">
            <tr>
                <th width="6%" class="left mobile-hide">

                    <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('check_statuses'=>$_smarty_tpl->tpl_vars['order_status_descr']->value), 0);?>

                    <input type="checkbox"
                        class="bulkedit-toggler hide"
                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]" 
                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                    />
                </th>
                <th width="15%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=order_id&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("id");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="order_id") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                <th width="15%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("status");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="status") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                <th width="15%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=date&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("date");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="date") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                <th width="17%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=customer&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("customer");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="customer") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
}?></a></th>
                <th width="14%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=phone&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("phone");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="phone") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
}?></a></th>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:manage_header")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:manage_header"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:manage_header"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <th class="mobile-hide">&nbsp;</th>
                <th width="10%" class="right"><a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="total") {?> sort-link-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=total&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("total");?>
</a></th>

            </tr>
            </thead>
            <?php  $_smarty_tpl->tpl_vars["o"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["o"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["o"]->key => $_smarty_tpl->tpl_vars["o"]->value) {
$_smarty_tpl->tpl_vars["o"]->_loop = true;
?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:order_row")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:order_row"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <tr class="cm-longtap-target"
                data-ca-longtap-action="setCheckBox"
                data-ca-longtap-target="input.cm-item"
                data-ca-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
"
            >
                <td width="6%" class="left mobile-hide">
                    <input type="checkbox" name="order_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['o']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" /></td>
                <td width="15%" data-th="<?php echo $_smarty_tpl->__("id");?>
">
                    <a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['o']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
" class="underlined"><?php echo $_smarty_tpl->__("order");?>
 <bdi>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</bdi></a>
                    <?php if ($_smarty_tpl->tpl_vars['order_statuses']->value[$_smarty_tpl->tpl_vars['o']->value['status']]['params']['appearance_type']=="I"&&$_smarty_tpl->tpl_vars['o']->value['invoice_id']) {?>
                        <p class="muted"><?php echo $_smarty_tpl->__("invoice");?>
 #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['invoice_id'], ENT_QUOTES, 'UTF-8');?>
</p>
                    <?php } elseif ($_smarty_tpl->tpl_vars['order_statuses']->value[$_smarty_tpl->tpl_vars['o']->value['status']]['params']['appearance_type']=="C"&&$_smarty_tpl->tpl_vars['o']->value['credit_memo_id']) {?>
                        <p class="muted"><?php echo $_smarty_tpl->__("credit_memo");?>
 #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['credit_memo_id'], ENT_QUOTES, 'UTF-8');?>
</p>
                    <?php }?>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['o']->value), 0);?>

                </td>
                <td width="15%" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('suffix'=>"o",'order_info'=>$_smarty_tpl->tpl_vars['o']->value,'id'=>$_smarty_tpl->tpl_vars['o']->value['order_id'],'status'=>$_smarty_tpl->tpl_vars['o']->value['status'],'items_status'=>$_smarty_tpl->tpl_vars['order_status_descr']->value,'update_controller'=>"orders",'notify'=>$_smarty_tpl->tpl_vars['notify']->value,'notify_department'=>$_smarty_tpl->tpl_vars['notify_department']->value,'notify_vendor'=>$_smarty_tpl->tpl_vars['notify_vendor']->value,'status_target_id'=>"orders_total,".((string)$_smarty_tpl->tpl_vars['rev']->value),'extra'=>"&return_url=".((string)$_smarty_tpl->tpl_vars['extra_status']->value),'statuses'=>$_smarty_tpl->tpl_vars['order_statuses']->value,'btn_meta'=>mb_strtolower("btn btn-info o-status-".((string)$_smarty_tpl->tpl_vars['o']->value['status'])." order-status btn-small", 'UTF-8'),'text_wrap'=>true), 0);?>

                    <?php if ($_smarty_tpl->tpl_vars['o']->value['issuer_id']) {?>
                        <?php if (trim($_smarty_tpl->tpl_vars['o']->value['issuer_name'])) {?>
                            <p class="muted shift-left manager-order"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['issuer_name'], ENT_QUOTES, 'UTF-8');?>
</p>
                        <?php } else { ?>
                            <p class="muted shift-left manager-order"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['issuer_email'], ENT_QUOTES, 'UTF-8');?>
</p>
                        <?php }?>
                    <?php }?>
                </td>
                <td width="15%" class="nowrap" data-th="<?php echo $_smarty_tpl->__("date");?>
"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['o']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</td>
                <td width="17%" data-th="<?php echo $_smarty_tpl->__("customer");?>
">
                    <?php if ($_smarty_tpl->tpl_vars['o']->value['email']) {?><a href="mailto:<?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['o']->value['email']), ENT_QUOTES, 'UTF-8');?>
">@</a> <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['o']->value['user_id']) {?><a href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['o']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['firstname'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['o']->value['user_id']) {?></a><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['o']->value['company']) {?><p class="muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['company'], ENT_QUOTES, 'UTF-8');?>
</p><?php }?>
                </td>
                <td width="14%" <?php if ($_smarty_tpl->tpl_vars['o']->value['phone']) {?>data-th="<?php echo $_smarty_tpl->__("phone");?>
"<?php }?>><bdi><a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['phone'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</a></bdi></td>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:manage_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:manage_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:manage_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <td class="center" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_items", null, null); ob_start(); ?>
                        <li><?php ob_start();?><?php echo $_smarty_tpl->__("view");?>
<?php $_tmp1=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'href'=>"orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['o']->value['order_id']),'text'=>$_tmp1));?>
</li>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:list_extra_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:list_extra_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li><?php ob_start();?><?php echo $_smarty_tpl->__("edit");?>
<?php $_tmp2=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'href'=>"order_management.edit?order_id=".((string)$_smarty_tpl->tpl_vars['o']->value['order_id']),'text'=>$_tmp2));?>
</li>
                            <li><?php ob_start();?><?php echo $_smarty_tpl->__("copy");?>
<?php $_tmp3=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'href'=>"order_management.edit?order_id=".((string)$_smarty_tpl->tpl_vars['o']->value['order_id'])."&copy=1",'text'=>$_tmp3));?>
</li>
                            <?php $_smarty_tpl->tpl_vars['current_redirect_url'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
                            <li><?php ob_start();?><?php echo $_smarty_tpl->__("delete");?>
<?php $_tmp4=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'href'=>"orders.delete?order_id=".((string)$_smarty_tpl->tpl_vars['o']->value['order_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['current_redirect_url']->value),'class'=>"cm-confirm",'text'=>$_tmp4,'method'=>"POST"));?>
</li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:list_extra_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                    <div class="hidden-tools">
                        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_items']));?>

                    </div>
                </td>
                <td width="10%" class="right" data-th="<?php echo $_smarty_tpl->__("total");?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['o']->value['total']), 0);?>

                </td>
            </tr>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:order_row"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php } ?>
            </table>
        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('form'=>"orders_list_form",'object'=>"orders",'items'=>Smarty::$_smarty_vars['capture']['orders_table']), 0);?>

<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['orders']->value) {?>
    <div class="statistic clearfix" id="orders_total">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:statistic_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:statistic_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="table-wrapper">
            <table class="pull-right ">
                <?php if ($_smarty_tpl->tpl_vars['total_pages']->value>1&&$_smarty_tpl->tpl_vars['search']->value['page']!="full_list") {?>
                    <tr>
                        <td>&nbsp;</td>
                        <td width="100px"><?php echo $_smarty_tpl->__("for_this_page_orders");?>
:</td>
                    </tr>
                    <tr>
                        <td><?php echo $_smarty_tpl->__("gross_total");?>
:</td>
                        <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['display_totals']->value['gross_total']), 0);?>
</td>
                    </tr>
                    <tr>
                        <td><?php echo $_smarty_tpl->__("totally_paid");?>
:</td>
                        <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['display_totals']->value['totally_paid']), 0);?>
</td>
                    </tr>
                    <hr />
                    <tr>
                        <td><?php echo $_smarty_tpl->__("for_all_found_orders");?>
:</td>
                    </tr>
                <?php }?>
                <tr>
                    <td class="shift-right"><?php echo $_smarty_tpl->__("gross_total");?>
:</td>
                    <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['gross_total']), 0);?>
</td>
                </tr>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:totals_stats")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:totals_stats"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <tr>
                    <td class="shift-right"><h4><?php echo $_smarty_tpl->__("totally_paid");?>
:</h4></td>
                    <td class="price"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['totally_paid']), 0);?>
</td>
                </tr>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:totals_stats"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </table>
        </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:statistic_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <!--orders_total--></div>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>$_REQUEST['content_id']), 0);?>



<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:manage_tools")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:manage_tools"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"order_management.new",'prefix'=>"bottom",'hide_tools'=>"true",'title'=>$_smarty_tpl->__("add_order"),'icon'=>"icon-plus"), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:manage_tools"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <li class="bulkedit-action--legacy hide"><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("view_purchased_products"),'dispatch'=>"dispatch[orders.products_range]",'form'=>"orders_list_form"));?>
</li>
        <li class="bulkedit-action--legacy hide divider"></li>
        <li class="bulkedit-action--legacy hide mobile-hide"><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("export_selected"),'dispatch'=>"dispatch[orders.export_range]",'form'=>"orders_list_form"));?>
</li>
        <li class="bulkedit-action--legacy hide mobile-hide"><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[orders.m_delete]",'form'=>"orders_list_form"));?>
</li>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:list_tools")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:list_tools"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:list_tools"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list'],'class'=>"bulkedit-dropdown--legacy hide"));?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['page_title']->value,'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'content_id'=>"manage_orders",'select_storefront'=>true,'storefront_switcher_param_name'=>"storefront_id",'selected_storefront_id'=>$_smarty_tpl->tpl_vars['selected_storefront_id']->value), 0);?>

<?php }} ?>
