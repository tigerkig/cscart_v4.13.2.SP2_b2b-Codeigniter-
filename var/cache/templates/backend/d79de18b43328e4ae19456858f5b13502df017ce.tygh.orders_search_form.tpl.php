<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 14:53:29
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\views\orders\components\orders_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200369519761754939641938-06582148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd79de18b43328e4ae19456858f5b13502df017ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\views\\orders\\components\\orders_search_form.tpl',
      1 => 1628148888,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '200369519761754939641938-06582148',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'in_popup' => 0,
    'form_meta' => 0,
    'selected_section' => 0,
    'extra' => 0,
    'search' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'shippings' => 0,
    'payments' => 0,
    'dispatch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_617549396b82a4_34972417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617549396b82a4_34972417')) {function content_617549396b82a4_34972417($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_html_checkboxes')) include 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_checkboxes.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search','customer','email','phone','total','manager','no_manager_assigned','period','order_status','tax_exempt','yes','no','order_id','company','has_credit_memo','credit_memo_id','has_invoice','invoice_id','shipping','payment_methods','ordered_products'));
?>
<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <div class="adv-search">
    <div class="group">
<?php } else { ?>
    <div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("search");?>
</h6>
<?php }?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="orders_search_form" method="get" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php $_smarty_tpl->_capture_stack[0][] = array("simple_search", null, null); ob_start(); ?>

<?php if ($_REQUEST['redirect_url']) {?>
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_REQUEST['redirect_url'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['selected_section']->value!='') {?>
<input type="hidden" id="selected_section" name="selected_section" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_section']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['extra']->value;?>


<div class="sidebar-field">
    <label for="cname"><?php echo $_smarty_tpl->__("customer");?>
</label>
    <input type="text" name="cname" id="cname" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['cname'], ENT_QUOTES, 'UTF-8');?>
" size="30" />
</div>

<div class="sidebar-field">
    <label for="email"><?php echo $_smarty_tpl->__("email");?>
</label>
    <input type="text" name="email" id="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['email'], ENT_QUOTES, 'UTF-8');?>
" size="30"/>
</div>

<div class="sidebar-field">
    <label for="phone"><?php echo $_smarty_tpl->__("phone");?>
</label>
    <input class="cm-phone" type="text" name="phone" id="phone" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['phone'], ENT_QUOTES, 'UTF-8');?>
" size="50"/>
</div>

<div class="sidebar-field">
    <label for="total_from"><?php echo $_smarty_tpl->__("total");?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)</label>
    <input type="text" class="input-small" name="total_from" id="total_from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['total_from'], ENT_QUOTES, 'UTF-8');?>
" size="3" /> - <input type="text" class="input-small" name="total_to" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['total_to'], ENT_QUOTES, 'UTF-8');?>
" size="3" />
</div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("advanced_search", null, null); ob_start(); ?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:advanced_search")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:advanced_search"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<div class="group">
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("manager");?>
</label>
        <div class="controls">
            <div class="nowrap">
                <div class="row-fluid ">
                    <div class="span4">
                        <input type="text" name="issuer" id="issuer" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['issuer'], ENT_QUOTES, 'UTF-8');?>
" size="30" />
                    </div>
                    <div class="span6 checkbox-list">
                        <label for="no_issuer">
                            <input type="checkbox" id="no_issuer" name="no_issuer" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['no_issuer']) {?>checked="checked"<?php }?>><?php echo $_smarty_tpl->__("no_manager_assigned");?>

                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="group form-horizontal">
<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("period");?>
</label>
    <div class="controls">
        <?php echo $_smarty_tpl->getSubTemplate ("common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('period'=>$_smarty_tpl->tpl_vars['search']->value['period'],'form_name'=>"orders_search_form"), 0);?>

    </div>
</div>
</div>

<div class="group">
<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("order_status");?>
</label>
    <div class="controls checkbox-list">
        <?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_smarty_tpl->tpl_vars['search']->value['status'],'display'=>"checkboxes",'name'=>"status",'columns'=>5), 0);?>

    </div>
</div>
</div>

<div class="row-fluid">
    <div class="group span6 form-horizontal">
    <div class="control-group">
        <label class="control-label" for="tax_exempt"><?php echo $_smarty_tpl->__("tax_exempt");?>
</label>
        <div class="controls">
        <select name="tax_exempt" id="tax_exempt">
            <option value="">--</option>
            <option value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['tax_exempt']=="Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yes");?>
</option>
            <option value="N" <?php if ($_smarty_tpl->tpl_vars['search']->value['tax_exempt']=="N") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("no");?>
</option>
        </select>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="order_id"><?php echo $_smarty_tpl->__("order_id");?>
</label>
        <div class="controls">
            <input type="text" name="order_id" id="order_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" size="10"/>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="elm_company"><?php echo $_smarty_tpl->__("company");?>
</label>
        <div class="controls">
            <input type="text" name="company" id="elm_company" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['company'], ENT_QUOTES, 'UTF-8');?>
" size="10"/>
        </div>
    </div>
    </div>

    <div class="group span6 form-horizontal">
        <div class="control-group">
            <label class="control-label" for="has_credit_memo"><?php echo $_smarty_tpl->__("has_credit_memo");?>
</label>
            <div class="controls">
                <input type="checkbox" name="has_credit_memo" id="has_credit_memo" value="Y"<?php if ($_smarty_tpl->tpl_vars['search']->value['has_credit_memo']) {?> checked="checked"<?php }?> />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="crmemo_id"><?php echo $_smarty_tpl->__("credit_memo_id");?>
</label>
            <div class="controls">
                <input type="text" name="credit_memo_id" id="crmemo_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['credit_memo_id'], ENT_QUOTES, 'UTF-8');?>
" size="10"/>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="has_invoice"><?php echo $_smarty_tpl->__("has_invoice");?>
</label>
            <div class="controls">
                <input type="checkbox" name="has_invoice" id="has_invoice" value="Y"<?php if ($_smarty_tpl->tpl_vars['search']->value['has_invoice']) {?> checked="checked"<?php }?> />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inv_id"><?php echo $_smarty_tpl->__("invoice_id");?>
</label>
            <div class="controls">
                <input type="text" name="invoice_id" id="inv_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['invoice_id'], ENT_QUOTES, 'UTF-8');?>
" size="10"/>
            </div>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("common/select_vendor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</div>
<div class="group">
<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("shipping");?>
</label>
    <div class="controls checkbox-list">
        <?php echo smarty_function_html_checkboxes(array('name'=>"shippings",'options'=>$_smarty_tpl->tpl_vars['shippings']->value,'selected'=>$_smarty_tpl->tpl_vars['search']->value['shippings'],'columns'=>4),$_smarty_tpl);?>

    </div>
</div>
</div>

<div class="group">
<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("payment_methods");?>
</label>
    <div class="controls checkbox-list">
        <?php echo smarty_function_html_checkboxes(array('name'=>"payments",'options'=>$_smarty_tpl->tpl_vars['payments']->value,'selected'=>$_smarty_tpl->tpl_vars['search']->value['payments'],'columns'=>4),$_smarty_tpl);?>

    </div>
</div>
</div>
<div class="group">
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("ordered_products");?>
</label>
        <div class="controls ">
            <?php echo $_smarty_tpl->getSubTemplate ("common/products_to_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('placement'=>"right"), 0);?>

        </div>
    </div>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:advanced_search"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="group">
    <div class="control-group">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:search_form")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:search_form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:search_form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
</div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('simple_search'=>Smarty::$_smarty_vars['capture']['simple_search'],'advanced_search'=>Smarty::$_smarty_vars['capture']['advanced_search'],'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"orders",'in_popup'=>$_smarty_tpl->tpl_vars['in_popup']->value), 0);?>


</form>

<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    </div></div>
<?php } else { ?>
    </div><hr>
<?php }?>
<?php }} ?>
