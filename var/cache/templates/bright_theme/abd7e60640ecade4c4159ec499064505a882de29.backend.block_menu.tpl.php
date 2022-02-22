<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 14:58:43
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\views\block_manager\frontend_render\components\block_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118879483061754a737df181-19337067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abd7e60640ecade4c4159ec499064505a882de29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\views\\block_manager\\frontend_render\\components\\block_menu.tpl',
      1 => 1628148888,
      2 => 'backend',
    ),
  ),
  'nocache_hash' => '118879483061754a737df181-19337067',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'parent_grid' => 0,
    'is_block_enabled' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61754a73816c57_20442939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61754a73816c57_20442939')) {function content_61754a73816c57_20442939($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['is_block_enabled'] = new Smarty_variable($_smarty_tpl->tpl_vars['block']->value['status']==="A", null, 0);?>
<div class="bm-block-manager__menu-wrapper" data-ca-block-manager-menu-wrapper>
    <div class="bm-block-manager__menu" data-ca-block-manager-menu>
        <div class="bm-block-manager__handler">
            <i class="ty-icon-handler bm-block-manager__icon"></i>
        </div>
        <a href="<?php echo htmlspecialchars(fn_url("block_manager.manage&selected_location=".((string)$_smarty_tpl->tpl_vars['parent_grid']->value['location_id'])."&object_id=".((string)$_smarty_tpl->tpl_vars['block']->value['snapping_id'])."&type=snapping","A"), ENT_QUOTES, 'UTF-8');?>
"
           class="bm-block-manager__btn bm-block-manager__properties"
           target="_blank"
        >
            <i class="ty-icon-cog bm-block-manager__icon"></i>
        </a>
        <button type="button"
                class="bm-block-manager__btn bm-block-manager__switch <?php if (!$_smarty_tpl->tpl_vars['is_block_enabled']->value) {?>bm-block-manager__block--disabled<?php }?>"
                data-ca-block-manager-action="switch"
                data-ca-block-manager-switch="<?php if ($_smarty_tpl->tpl_vars['is_block_enabled']->value) {?>false<?php } else { ?>true<?php }?>"
        >
            <i class="ty-icon-eye-open bm-block-manager__icon <?php if (!$_smarty_tpl->tpl_vars['is_block_enabled']->value) {?>bm-block-manager__icon--hidden<?php }?>"
               data-ca-block-manager-switch-icon="show"
            ></i>
            <i class="ty-icon-eye-close bm-block-manager__icon <?php if ($_smarty_tpl->tpl_vars['is_block_enabled']->value) {?>bm-block-manager__icon--hidden<?php }?>"
               data-ca-block-manager-switch-icon="hide"
            ></i>
        </button>
        <button type="button" class="bm-block-manager__btn bm-block-manager__up"
                data-ca-block-manager-action="move"
                data-ca-block-manager-move="up"
        >
            <i class="ty-icon-arrow-up bm-block-manager__icon"></i>
        </button>
        <button type="button"
                class="bm-block-manager__btn bm-block-manager__down"
                data-ca-block-manager-action="move"
                data-ca-block-manager-move="down"
        >
            <i class="ty-icon-arrow-down bm-block-manager__icon"></i>
        </button>
    </div>
    <div class="bm-block-manager__arrow-wrapper">
        <div class="bm-block-manager__arrow"></div>
    </div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:views/block_manager/frontend_render/components/block_menu.tpl" id="<?php echo smarty_function_set_id(array('name'=>"backend:views/block_manager/frontend_render/components/block_menu.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['is_block_enabled'] = new Smarty_variable($_smarty_tpl->tpl_vars['block']->value['status']==="A", null, 0);?>
<div class="bm-block-manager__menu-wrapper" data-ca-block-manager-menu-wrapper>
    <div class="bm-block-manager__menu" data-ca-block-manager-menu>
        <div class="bm-block-manager__handler">
            <i class="ty-icon-handler bm-block-manager__icon"></i>
        </div>
        <a href="<?php echo htmlspecialchars(fn_url("block_manager.manage&selected_location=".((string)$_smarty_tpl->tpl_vars['parent_grid']->value['location_id'])."&object_id=".((string)$_smarty_tpl->tpl_vars['block']->value['snapping_id'])."&type=snapping","A"), ENT_QUOTES, 'UTF-8');?>
"
           class="bm-block-manager__btn bm-block-manager__properties"
           target="_blank"
        >
            <i class="ty-icon-cog bm-block-manager__icon"></i>
        </a>
        <button type="button"
                class="bm-block-manager__btn bm-block-manager__switch <?php if (!$_smarty_tpl->tpl_vars['is_block_enabled']->value) {?>bm-block-manager__block--disabled<?php }?>"
                data-ca-block-manager-action="switch"
                data-ca-block-manager-switch="<?php if ($_smarty_tpl->tpl_vars['is_block_enabled']->value) {?>false<?php } else { ?>true<?php }?>"
        >
            <i class="ty-icon-eye-open bm-block-manager__icon <?php if (!$_smarty_tpl->tpl_vars['is_block_enabled']->value) {?>bm-block-manager__icon--hidden<?php }?>"
               data-ca-block-manager-switch-icon="show"
            ></i>
            <i class="ty-icon-eye-close bm-block-manager__icon <?php if ($_smarty_tpl->tpl_vars['is_block_enabled']->value) {?>bm-block-manager__icon--hidden<?php }?>"
               data-ca-block-manager-switch-icon="hide"
            ></i>
        </button>
        <button type="button" class="bm-block-manager__btn bm-block-manager__up"
                data-ca-block-manager-action="move"
                data-ca-block-manager-move="up"
        >
            <i class="ty-icon-arrow-up bm-block-manager__icon"></i>
        </button>
        <button type="button"
                class="bm-block-manager__btn bm-block-manager__down"
                data-ca-block-manager-action="move"
                data-ca-block-manager-move="down"
        >
            <i class="ty-icon-arrow-down bm-block-manager__icon"></i>
        </button>
    </div>
    <div class="bm-block-manager__arrow-wrapper">
        <div class="bm-block-manager__arrow"></div>
    </div>
</div>
<?php }?><?php }} ?>
