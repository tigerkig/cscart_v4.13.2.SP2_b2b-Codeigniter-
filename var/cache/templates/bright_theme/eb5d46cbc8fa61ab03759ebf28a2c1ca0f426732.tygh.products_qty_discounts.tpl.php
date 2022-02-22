<?php /* Smarty version Smarty-3.1.21, created on 2021-11-08 03:08:56
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\themes\responsive\templates\views\products\components\products_qty_discounts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18818731761886a98c336c4-72744656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb5d46cbc8fa61ab03759ebf28a2c1ca0f426732' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\themes\\responsive\\templates\\views\\products\\components\\products_qty_discounts.tpl',
      1 => 1635066672,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18818731761886a98c336c4-72744656',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'price' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61886a98da71b3_62248403',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61886a98da71b3_62248403')) {function content_61886a98da71b3_62248403($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('text_qty_discounts','quantity','price','text_qty_discounts','quantity','price'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-qty-discount">
    <div class="ty-qty-discount__label"><?php echo $_smarty_tpl->__("text_qty_discounts");?>
:</div>
    <table class="ty-table ty-qty-discount__table">
        <thead>
            <tr>
                <th class="ty-qty-discount__td"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                <?php  $_smarty_tpl->tpl_vars["price"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["price"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["price"]->key => $_smarty_tpl->tpl_vars["price"]->value) {
$_smarty_tpl->tpl_vars["price"]->_loop = true;
?>
                    <th class="ty-qty-discount__td"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value['lower_limit'], ENT_QUOTES, 'UTF-8');?>
+</th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="ty-qty-discount__td"><?php echo $_smarty_tpl->__("price");?>
</td>
                <?php  $_smarty_tpl->tpl_vars["price"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["price"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["price"]->key => $_smarty_tpl->tpl_vars["price"]->value) {
$_smarty_tpl->tpl_vars["price"]->_loop = true;
?>
                    <td class="ty-qty-discount__td"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['price']->value['price']), 0);?>
</td>
                <?php } ?>
            </tr>
        </tbody>
    </table>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/products_qty_discounts.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/products_qty_discounts.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ty-qty-discount">
    <div class="ty-qty-discount__label"><?php echo $_smarty_tpl->__("text_qty_discounts");?>
:</div>
    <table class="ty-table ty-qty-discount__table">
        <thead>
            <tr>
                <th class="ty-qty-discount__td"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                <?php  $_smarty_tpl->tpl_vars["price"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["price"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["price"]->key => $_smarty_tpl->tpl_vars["price"]->value) {
$_smarty_tpl->tpl_vars["price"]->_loop = true;
?>
                    <th class="ty-qty-discount__td"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value['lower_limit'], ENT_QUOTES, 'UTF-8');?>
+</th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="ty-qty-discount__td"><?php echo $_smarty_tpl->__("price");?>
</td>
                <?php  $_smarty_tpl->tpl_vars["price"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["price"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["price"]->key => $_smarty_tpl->tpl_vars["price"]->value) {
$_smarty_tpl->tpl_vars["price"]->_loop = true;
?>
                    <td class="ty-qty-discount__td"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['price']->value['price']), 0);?>
</td>
                <?php } ?>
            </tr>
        </tbody>
    </table>
</div><?php }?><?php }} ?>
