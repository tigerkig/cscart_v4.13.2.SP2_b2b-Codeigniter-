<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 12:30:43
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\views\pages\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1540910292617527c316af75-34742408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8432bc14ec96eb96e5feaafe6959f163d428f493' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\views\\pages\\manage.tpl',
      1 => 1628148888,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1540910292617527c316af75-34742408',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'hide_position' => 0,
    'search' => 0,
    'page_types' => 0,
    'pages_tree' => 0,
    'hide_show_all' => 0,
    'has_permission' => 0,
    '_k' => 0,
    'come_from' => 0,
    '_p' => 0,
    'is_exclusive_page_type' => 0,
    'view_type' => 0,
    'view_suffix' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_617527c32bbfb0_15026115',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617527c32bbfb0_15026115')) {function content_617527c32bbfb0_15026115($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_modifier_sizeof')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.sizeof.php';
if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('no_data','pages'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/backend/pages_bulk_edit.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars['pages_statuses'] = new Smarty_variable(fn_get_default_statuses('',true), null, 0);?>
<?php $_smarty_tpl->tpl_vars['has_permission'] = new Smarty_variable(fn_check_permissions("pages","update","admin","POST"), null, 0);?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="pages_tree_form" id="pages_tree_form">
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>$_REQUEST['content_id'],'hide_position'=>$_smarty_tpl->tpl_vars['hide_position']->value), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("pages_table", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['search']->value['page_type']) {?>
    <input type="hidden" name="page_type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['page_type'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['page_types']->value[$_smarty_tpl->tpl_vars['search']->value['page_type']]['hide_fields']&&$_smarty_tpl->tpl_vars['page_types']->value[$_smarty_tpl->tpl_vars['search']->value['page_type']]['hide_fields']['position']) {?>
        <?php $_smarty_tpl->tpl_vars['hide_position'] = new Smarty_variable(true, null, 0);?>
    <?php }?>


    <?php $_smarty_tpl->tpl_vars['come_from'] = new Smarty_variable($_smarty_tpl->tpl_vars['search']->value['page_type'], null, 0);?>

    <div class="items-container multi-level pages-tree__content">
        <?php if ($_smarty_tpl->tpl_vars['pages_tree']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/pages/components/pages_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('header'=>true,'show_id'=>true,'combination_suffix'=>"_list",'is_bulkedit_menu'=>true), 0);?>

        <?php } else { ?>
            <?php if (!$_smarty_tpl->tpl_vars['hide_show_all']->value) {?>
                <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
            <?php }?>
        <?php }?>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('has_permission'=>$_smarty_tpl->tpl_vars['has_permission']->value,'form'=>"pages_tree_form",'object'=>"pages",'items'=>Smarty::$_smarty_vars['capture']['pages_table']), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>$_REQUEST['content_id']), 0);?>


<?php $_smarty_tpl->tpl_vars['rev'] = new Smarty_variable((($tmp = @$_REQUEST['content_id'])===null||$tmp==='' ? "pagination_contents" : $tmp), null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['has_permission']->value) {?>
        <?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['page_types']->value)==1) {?>
            <?php  $_smarty_tpl->tpl_vars["_p"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["_p"]->_loop = false;
 $_smarty_tpl->tpl_vars["_k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['page_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["_p"]->key => $_smarty_tpl->tpl_vars["_p"]->value) {
$_smarty_tpl->tpl_vars["_p"]->_loop = true;
 $_smarty_tpl->tpl_vars["_k"]->value = $_smarty_tpl->tpl_vars["_p"]->key;
?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"pages.add?page_type=".((string)$_smarty_tpl->tpl_vars['_k']->value)."&come_from=".((string)$_smarty_tpl->tpl_vars['come_from']->value),'prefix'=>"top",'title'=>$_smarty_tpl->__($_smarty_tpl->tpl_vars['_p']->value['add_name']),'hide_tools'=>true,'icon'=>"icon-plus"), 0);?>

            <?php } ?>
        <?php } else { ?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                <?php  $_smarty_tpl->tpl_vars["_p"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["_p"]->_loop = false;
 $_smarty_tpl->tpl_vars["_k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['page_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["_p"]->key => $_smarty_tpl->tpl_vars["_p"]->value) {
$_smarty_tpl->tpl_vars["_p"]->_loop = true;
 $_smarty_tpl->tpl_vars["_k"]->value = $_smarty_tpl->tpl_vars["_p"]->key;
?>
                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__($_smarty_tpl->tpl_vars['_p']->value['add_name']),'href'=>"pages.add?page_type=".((string)$_smarty_tpl->tpl_vars['_k']->value)."&come_from=".((string)$_smarty_tpl->tpl_vars['come_from']->value)));?>
</li>
                <?php } ?>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list'],'icon'=>"icon-plus",'no_caret'=>true,'placement'=>"right"));?>

        <?php }?>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['pages_tree']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"pages:list_extra_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"pages:list_extra_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"pages:list_extra_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list'],'class'=>"mobile-hide bulkedit-dropdown--legacy hide"));?>

        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[pages.m_update]",'but_role'=>"action",'but_target_form'=>"pages_tree_form",'but_meta'=>"cm-submit"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['is_exclusive_page_type']->value) {?>
    <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->__($_smarty_tpl->tpl_vars['page_types']->value[$_smarty_tpl->tpl_vars['search']->value['page_type']]['content']), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['view_type'] = new Smarty_variable("pages_".((string)$_smarty_tpl->tpl_vars['search']->value['page_type']), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['view_suffix'] = new Smarty_variable("page_type=".((string)$_smarty_tpl->tpl_vars['search']->value['page_type'])."&get_tree=multi_level", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->__("pages"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['view_type'] = new Smarty_variable("pages", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['view_suffix'] = new Smarty_variable('', null, 0);?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"pages:manage_sidebar")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"pages:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"pages.manage",'view_type'=>$_smarty_tpl->tpl_vars['view_type']->value,'view_suffix'=>$_smarty_tpl->tpl_vars['view_suffix']->value), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/pages/components/pages_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"pages.manage",'view_type'=>$_smarty_tpl->tpl_vars['view_type']->value), 0);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"pages:sidebar")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"pages:sidebar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"pages:sidebar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"pages:manage_sidebar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['title']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'content_id'=>"manage_pages"), 0);?>
<?php }} ?>
