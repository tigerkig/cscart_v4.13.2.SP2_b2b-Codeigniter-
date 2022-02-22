<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 13:24:11
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\themes\responsive\templates\buttons\add_to_compare_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15313408426175344baecab2-65302408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a27ffb3c91afa49365e39d81717e53c311b06fd3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\themes\\responsive\\templates\\buttons\\add_to_compare_list.tpl',
      1 => 1635066672,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15313408426175344baecab2-65302408',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'config' => 0,
    'hide_compare_list_button' => 0,
    'redirect_url' => 0,
    'compare_button_type' => 0,
    'compare_but_title' => 0,
    'compare_but_href' => 0,
    'compare_but_role' => 0,
    'compare_but_target_id' => 0,
    'compare_but_rel' => 0,
    'compare_but_icon' => 0,
    'compare_but_text' => 0,
    'compare_but_meta' => 0,
    'but_text' => 0,
    'but_title' => 0,
    'but_href' => 0,
    'but_role' => 0,
    'but_target_id' => 0,
    'but_meta' => 0,
    'but_rel' => 0,
    'but_icon' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6175344bb68210_79997133',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6175344bb68210_79997133')) {function content_6175344bb68210_79997133($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_to_comparison_list','add_to_comparison_list','add_to_comparison_list','add_to_comparison_list'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->tpl_vars['ajax_class'] = new Smarty_variable("cm-ajax cm-ajax-full-render", null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['hide_compare_list_button']->value) {?>
    <?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(rawurlencode((($tmp = @$_smarty_tpl->tpl_vars['redirect_url']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] : $tmp)), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['compare_button_type'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_button_type']->value)===null||$tmp==='' ? "icon" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_title'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_title']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_to_comparison_list") : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_href'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_href']->value)===null||$tmp==='' ? "product_features.add_product?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value) : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_role'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_role']->value)===null||$tmp==='' ? "text" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_target_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_target_id']->value)===null||$tmp==='' ? "comparison_list,account_info*" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_rel'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_rel']->value)===null||$tmp==='' ? "nofollow" : $tmp), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['compare_button_type']->value=="icon") {?>
        <?php $_smarty_tpl->tpl_vars['but_icon'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_icon']->value)===null||$tmp==='' ? "ty-icon-chart-bar" : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['but_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_text']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['but_meta'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_meta']->value)===null||$tmp==='' ? "ty-btn__tertiary ty-btn-icon ty-add-to-compare ".((string)$_smarty_tpl->tpl_vars['ajax_class']->value) : $tmp), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['but_icon'] = new Smarty_variable($_smarty_tpl->tpl_vars['compare_but_icon']->value===true ? "ty-icon-chart-bar" : $_smarty_tpl->tpl_vars['compare_but_icon']->value, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['but_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_to_comparison_list") : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['but_meta'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_meta']->value)===null||$tmp==='' ? "ty-btn__text ty-add-to-compare ".((string)$_smarty_tpl->tpl_vars['ajax_class']->value) : $tmp), null, 0);?>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->tpl_vars['but_text']->value,'but_title'=>$_smarty_tpl->tpl_vars['but_title']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_target_id'=>$_smarty_tpl->tpl_vars['but_target_id']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_rel'=>$_smarty_tpl->tpl_vars['but_rel']->value,'but_icon'=>$_smarty_tpl->tpl_vars['but_icon']->value), 0);?>

<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/add_to_compare_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"buttons/add_to_compare_list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->tpl_vars['ajax_class'] = new Smarty_variable("cm-ajax cm-ajax-full-render", null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['hide_compare_list_button']->value) {?>
    <?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(rawurlencode((($tmp = @$_smarty_tpl->tpl_vars['redirect_url']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] : $tmp)), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['compare_button_type'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_button_type']->value)===null||$tmp==='' ? "icon" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_title'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_title']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_to_comparison_list") : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_href'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_href']->value)===null||$tmp==='' ? "product_features.add_product?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value) : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_role'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_role']->value)===null||$tmp==='' ? "text" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_target_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_target_id']->value)===null||$tmp==='' ? "comparison_list,account_info*" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_rel'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_rel']->value)===null||$tmp==='' ? "nofollow" : $tmp), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['compare_button_type']->value=="icon") {?>
        <?php $_smarty_tpl->tpl_vars['but_icon'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_icon']->value)===null||$tmp==='' ? "ty-icon-chart-bar" : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['but_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_text']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['but_meta'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_meta']->value)===null||$tmp==='' ? "ty-btn__tertiary ty-btn-icon ty-add-to-compare ".((string)$_smarty_tpl->tpl_vars['ajax_class']->value) : $tmp), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['but_icon'] = new Smarty_variable($_smarty_tpl->tpl_vars['compare_but_icon']->value===true ? "ty-icon-chart-bar" : $_smarty_tpl->tpl_vars['compare_but_icon']->value, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['but_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_to_comparison_list") : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['but_meta'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_meta']->value)===null||$tmp==='' ? "ty-btn__text ty-add-to-compare ".((string)$_smarty_tpl->tpl_vars['ajax_class']->value) : $tmp), null, 0);?>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->tpl_vars['but_text']->value,'but_title'=>$_smarty_tpl->tpl_vars['but_title']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_target_id'=>$_smarty_tpl->tpl_vars['but_target_id']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_rel'=>$_smarty_tpl->tpl_vars['but_rel']->value,'but_icon'=>$_smarty_tpl->tpl_vars['but_icon']->value), 0);?>

<?php }?>
<?php }?><?php }} ?>
