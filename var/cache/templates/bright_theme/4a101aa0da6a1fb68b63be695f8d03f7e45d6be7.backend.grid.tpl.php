<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 14:58:43
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\views\block_manager\frontend_render\grid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124918676361754a738f0cd4-29807243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a101aa0da6a1fb68b63be695f8d03f7e45d6be7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\views\\block_manager\\frontend_render\\grid.tpl',
      1 => 1628148888,
      2 => 'backend',
    ),
  ),
  'nocache_hash' => '124918676361754a738f0cd4-29807243',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'layout_data' => 0,
    'parent_grid' => 0,
    'grid' => 0,
    'fluid_width' => 0,
    'width' => 0,
    'location_data' => 0,
    'content' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61754a73963c99_44101775',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61754a73963c99_44101775')) {function content_61754a73963c99_44101775($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('grid','grid'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>
    <?php if ($_smarty_tpl->tpl_vars['parent_grid']->value['width']>0) {?>
        <?php $_smarty_tpl->tpl_vars['fluid_width'] = new Smarty_variable(fn_get_grid_fluid_width($_smarty_tpl->tpl_vars['layout_data']->value['width'],$_smarty_tpl->tpl_vars['parent_grid']->value['width'],$_smarty_tpl->tpl_vars['grid']->value['width']), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['fluid_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['grid']->value['width'], null, 0);?>
    <?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['grid']->value['status']=="A") {?>
    <?php if ($_smarty_tpl->tpl_vars['grid']->value['alpha']) {?><div data-ca-block-manager-row-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>row-fluid <?php } else { ?>row<?php }?>"><?php }?>
        <?php $_smarty_tpl->tpl_vars['width'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['fluid_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['grid']->value['width'] : $tmp), null, 0);?>
        <div class="span<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['grid']->value['offset']) {?> offset<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['offset'], ENT_QUOTES, 'UTF-8');
}?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['user_class'], ENT_QUOTES, 'UTF-8');?>

            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager']&&$_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
                bm-block-manager__blocks-place
            <?php }?>"
            data-ca-block-manager-grid-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
"
            data-ca-block-manager-grid-name="<?php echo $_smarty_tpl->__("grid");?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['width'], ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['grid']->value['wrapper']!=="blocks/grid_wrappers/lite_checkout.tpl") {?>
                data-ca-block-manager-blocks-place="true"
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['grid']->value['content_align']===constant("\Tygh\BlockManager\Grid::ALIGN_LEFT")) {?>data-ca-block-manager-is-left-alignment="true"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['grid']->value['content_align']===constant("\Tygh\BlockManager\Grid::ALIGN_RIGHT")) {?>data-ca-block-manager-is-right-alignment="true"<?php }?>
            ><?php if ($_smarty_tpl->tpl_vars['grid']->value['wrapper']) {
echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['grid']->value['wrapper'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>$_smarty_tpl->tpl_vars['content']->value), 0);
} else {
echo $_smarty_tpl->tpl_vars['content']->value;
}?></div>
    <?php if ($_smarty_tpl->tpl_vars['grid']->value['omega']) {?></div><?php }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:views/block_manager/frontend_render/grid.tpl" id="<?php echo smarty_function_set_id(array('name'=>"backend:views/block_manager/frontend_render/grid.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>
    <?php if ($_smarty_tpl->tpl_vars['parent_grid']->value['width']>0) {?>
        <?php $_smarty_tpl->tpl_vars['fluid_width'] = new Smarty_variable(fn_get_grid_fluid_width($_smarty_tpl->tpl_vars['layout_data']->value['width'],$_smarty_tpl->tpl_vars['parent_grid']->value['width'],$_smarty_tpl->tpl_vars['grid']->value['width']), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['fluid_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['grid']->value['width'], null, 0);?>
    <?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['grid']->value['status']=="A") {?>
    <?php if ($_smarty_tpl->tpl_vars['grid']->value['alpha']) {?><div data-ca-block-manager-row-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>row-fluid <?php } else { ?>row<?php }?>"><?php }?>
        <?php $_smarty_tpl->tpl_vars['width'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['fluid_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['grid']->value['width'] : $tmp), null, 0);?>
        <div class="span<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['grid']->value['offset']) {?> offset<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['offset'], ENT_QUOTES, 'UTF-8');
}?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['user_class'], ENT_QUOTES, 'UTF-8');?>

            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager']&&$_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
                bm-block-manager__blocks-place
            <?php }?>"
            data-ca-block-manager-grid-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
"
            data-ca-block-manager-grid-name="<?php echo $_smarty_tpl->__("grid");?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['width'], ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['grid']->value['wrapper']!=="blocks/grid_wrappers/lite_checkout.tpl") {?>
                data-ca-block-manager-blocks-place="true"
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['grid']->value['content_align']===constant("\Tygh\BlockManager\Grid::ALIGN_LEFT")) {?>data-ca-block-manager-is-left-alignment="true"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['grid']->value['content_align']===constant("\Tygh\BlockManager\Grid::ALIGN_RIGHT")) {?>data-ca-block-manager-is-right-alignment="true"<?php }?>
            ><?php if ($_smarty_tpl->tpl_vars['grid']->value['wrapper']) {
echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['grid']->value['wrapper'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>$_smarty_tpl->tpl_vars['content']->value), 0);
} else {
echo $_smarty_tpl->tpl_vars['content']->value;
}?></div>
    <?php if ($_smarty_tpl->tpl_vars['grid']->value['omega']) {?></div><?php }?>
<?php }
}?><?php }} ?>
