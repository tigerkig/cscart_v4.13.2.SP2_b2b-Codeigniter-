<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 12:30:43
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\components\context_menu\items\group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:977558676617527c37e1758-68546691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c8e153bfeea3d9f8875a488adeb367685dc54cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\components\\context_menu\\items\\group.tpl',
      1 => 1628148888,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '977558676617527c37e1758-68546691',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'item_id' => 0,
    'item' => 0,
    'subitem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_617527c37f66b5_56847664',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617527c37f66b5_56847664')) {function content_617527c37f66b5_56847664($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_render_tag_attrs')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.render_tag_attrs.php';
?>

<li <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['data']->value['menu_item_attributes']);?>

    <?php if (!$_smarty_tpl->tpl_vars['data']->value['menu_item_attributes']['class']) {?>
        class="btn bulk-edit__btn bulk-edit__btn--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
 dropleft-mod <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['menu_item_class'], ENT_QUOTES, 'UTF-8');?>
"
    <?php }?>
>
    <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['data']->value['name']['template'],$_smarty_tpl->tpl_vars['data']->value['name']['params']);?>
 <span class="caret mobile-hide"></span></span>

    <ul class="dropdown-menu">
        <?php  $_smarty_tpl->tpl_vars['subitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subitem']->_loop = false;
 $_smarty_tpl->tpl_vars['item_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value->getItems(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subitem']->key => $_smarty_tpl->tpl_vars['subitem']->value) {
$_smarty_tpl->tpl_vars['subitem']->_loop = true;
 $_smarty_tpl->tpl_vars['item_id']->value = $_smarty_tpl->tpl_vars['subitem']->key;
?>
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['subitem']->value->getTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_id'=>$_smarty_tpl->tpl_vars['item_id']->value,'item'=>$_smarty_tpl->tpl_vars['subitem']->value,'data'=>$_smarty_tpl->tpl_vars['subitem']->value->getData()), 0);?>

        <?php } ?>
    </ul>
</li>
<?php }} ?>
