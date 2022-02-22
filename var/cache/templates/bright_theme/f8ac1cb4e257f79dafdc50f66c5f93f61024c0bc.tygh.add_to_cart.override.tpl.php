<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 13:24:11
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\themes\responsive\templates\addons\product_variations\hooks\products\add_to_cart.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10058564256175344b50d792-78963376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8ac1cb4e257f79dafdc50f66c5f93f61024c0bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\themes\\responsive\\templates\\addons\\product_variations\\hooks\\products\\add_to_cart.override.tpl',
      1 => 1635066683,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10058564256175344b50d792-78963376',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_select_variations_button' => 0,
    'details_page' => 0,
    'product' => 0,
    'obj_prefix' => 0,
    'obj_id' => 0,
    'opt_but_role' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6175344b537731_36672172',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6175344b537731_36672172')) {function content_6175344b537731_36672172($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.select_variation','product_variations.select_variation'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['show_select_variations_button'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_select_variations_button']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>

<?php if (!$_smarty_tpl->tpl_vars['details_page']->value&&$_smarty_tpl->tpl_vars['product']->value['has_child_variations']&&$_smarty_tpl->tpl_vars['show_select_variations_button']->value) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:add_to_cart")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:add_to_cart"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php ob_start();
echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_cart_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'but_text'=>$_smarty_tpl->__("product_variations.select_variation"),'but_name'=>'','but_href'=>$_tmp1,'but_role'=>$_smarty_tpl->tpl_vars['opt_but_role']->value,'but_meta'=>"ty-btn__primary ty-btn__big"), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:add_to_cart"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/products/add_to_cart.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/hooks/products/add_to_cart.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['show_select_variations_button'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_select_variations_button']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>

<?php if (!$_smarty_tpl->tpl_vars['details_page']->value&&$_smarty_tpl->tpl_vars['product']->value['has_child_variations']&&$_smarty_tpl->tpl_vars['show_select_variations_button']->value) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:add_to_cart")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:add_to_cart"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php ob_start();
echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');
$_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_cart_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'but_text'=>$_smarty_tpl->__("product_variations.select_variation"),'but_name'=>'','but_href'=>$_tmp2,'but_role'=>$_smarty_tpl->tpl_vars['opt_but_role']->value,'but_meta'=>"ty-btn__primary ty-btn__big"), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:add_to_cart"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }?><?php }} ?>
