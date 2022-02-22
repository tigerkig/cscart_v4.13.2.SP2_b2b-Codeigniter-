<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 12:32:48
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\views\addons\components\manage\manage_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14113899961752840d6cde0-67689075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e38e3c68ff89544d0e2b54213ec98427ca07f847' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\views\\addons\\components\\manage\\manage_sidebar.tpl',
      1 => 1628148888,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14113899961752840d6cde0-67689075',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category_tree' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61752840d828a7_68240299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61752840d828a7_68240299')) {function content_61752840d828a7_68240299($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('categories'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"addons:manage_sidebar")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"addons:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/manage/addon_name_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"addons.manage",'view_type'=>"addons",'allow_new_search'=>false), 0);?>

    <?php if ($_smarty_tpl->tpl_vars['category_tree']->value) {?>
        <div class="sidebar-row">
            <h6><?php echo $_smarty_tpl->__("categories");?>
</h6>
            <div class="nested-tree">
                <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/addon_categories_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_all'=>false,'categories_tree'=>$_smarty_tpl->tpl_vars['category_tree']->value,'direction'=>"right"), 0);?>

            </div>
        </div>
    <?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/manage/addons_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"addons.manage"), 0);?>



<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"addons:manage_sidebar_marketplace")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"addons:manage_sidebar_marketplace"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"addons:manage_sidebar_marketplace"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"addons:manage_sidebar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
