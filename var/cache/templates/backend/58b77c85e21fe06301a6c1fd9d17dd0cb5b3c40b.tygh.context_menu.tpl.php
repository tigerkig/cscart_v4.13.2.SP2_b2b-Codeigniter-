<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 12:30:43
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\components\context_menu\context_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1107988498617527c36bd927-52658043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58b77c85e21fe06301a6c1fd9d17dd0cb5b3c40b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\components\\context_menu\\context_menu.tpl',
      1 => 1628148888,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1107988498617527c36bd927-52658043',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'context_menu_items' => 0,
    'status_selector' => 0,
    'context_menu_id' => 0,
    'item' => 0,
    'item_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_617527c36c7e43_35843610',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617527c36c7e43_35843610')) {function content_617527c36c7e43_35843610($_smarty_tpl) {?>

<div class="bulk-edit clearfix hidden <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['class'], ENT_QUOTES, 'UTF-8');?>
"
     <?php if ($_smarty_tpl->tpl_vars['context_menu_items']->value) {?>
         data-ca-bulkedit-expanded-object="true"
         data-ca-bulkedit-component="expandedObject"
     <?php } else { ?>
         data-ca-bulkedit-disabled="true"
     <?php }?>
>

    <ul class="btn-group bulk-edit__wrapper">
        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['status_selector']->value->getTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('statuses'=>$_smarty_tpl->tpl_vars['status_selector']->value->getStatuses(),'elms_container'=>$_smarty_tpl->tpl_vars['context_menu_id']->value), 0);?>


        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['item_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['context_menu_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item_id']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['item']->value->getTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_id'=>$_smarty_tpl->tpl_vars['item_id']->value,'item'=>$_smarty_tpl->tpl_vars['item']->value,'data'=>$_smarty_tpl->tpl_vars['item']->value->getData()), 0);?>

        <?php } ?>
    </ul>

</div>
<?php }} ?>
