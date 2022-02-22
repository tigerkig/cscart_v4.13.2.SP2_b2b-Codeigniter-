<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 12:27:36
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\themes\responsive\templates\views\block_manager\render\block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19737193406175270806c4f4-52733442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acf07a83279104705bbe1a8932222fd01922256a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\themes\\responsive\\templates\\views\\block_manager\\render\\block.tpl',
      1 => 1635066672,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19737193406175270806c4f4-52733442',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'runtime' => 0,
    'location_data' => 0,
    'block' => 0,
    'content_alignment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6175270808c384_81898436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6175270808c384_81898436')) {function content_6175270808c384_81898436($_smarty_tpl) {?><?php if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager']&&$_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("backend:views/block_manager/frontend_render/block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']||$_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT'||$_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT') {?>
            <div class="<?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT') {?>ty-float-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT') {?>ty-float-left<?php }?>">
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']||$_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT'||$_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT') {?>
            </div>
        <?php }?>
    <?php }?>
<?php }?>
<?php }} ?>
