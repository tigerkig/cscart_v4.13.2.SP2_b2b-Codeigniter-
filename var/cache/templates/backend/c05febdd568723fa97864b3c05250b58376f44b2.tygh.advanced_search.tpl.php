<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 12:30:43
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\common\advanced_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180269812617527c3ae8153-22292840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c05febdd568723fa97864b3c05250b58376f44b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\common\\advanced_search.tpl',
      1 => 1628148888,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '180269812617527c3ae8153-22292840',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dispatch' => 0,
    'view_type' => 0,
    'in_popup' => 0,
    'simple_search' => 0,
    'no_adv_link' => 0,
    'a_id' => 0,
    'advanced_search' => 0,
    'not_saved' => 0,
    'search' => 0,
    'views' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_617527c3b1e022_90447254',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617527c3b1e022_90447254')) {function content_617527c3b1e022_90447254($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('object_exists','advanced_search','advanced_search','save_this_search_as','name','name','save','cancel','advanced_search_options'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/advanced_search.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
Tygh.tr('object_exists', '<?php echo strtr($_smarty_tpl->__("object_exists"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<input type="hidden" name="is_search" value="Y" />
<?php $_smarty_tpl->tpl_vars["a_id"] = new Smarty_variable(sprintf("s_%s",fn_crc32($_smarty_tpl->tpl_vars['dispatch']->value)), null, 0);?>
<?php $_smarty_tpl->tpl_vars["views"] = new Smarty_variable(fn_get_views($_smarty_tpl->tpl_vars['view_type']->value), null, 0);?>

<?php if (!$_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['simple_search']->value) {?>
    <div id="simple_search_common">
        <div id="simple_search">
            <?php echo $_smarty_tpl->tpl_vars['simple_search']->value;?>

        </div>
    </div>
    <?php }?>
    <div class="sidebar-field">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[".((string)$_smarty_tpl->tpl_vars['dispatch']->value)."]",'method'=>"GET"), 0);?>

        <?php if (!$_smarty_tpl->tpl_vars['no_adv_link']->value) {?>
            <a class="advanced-search cm-dialog-opener" id="adv_search_opener" data-ca-target-id="adv_search" href="#"><?php echo $_smarty_tpl->__("advanced_search");?>
</a>
        <?php }?>
    </div>

<div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="hidden adv-search" id="adv_search" title="<?php echo $_smarty_tpl->__("advanced_search");?>
">
        <?php if ($_smarty_tpl->tpl_vars['simple_search']->value) {?>
            <div class="group" id="simple_search_popup"></div>
        <?php }?>

        <?php echo $_smarty_tpl->tpl_vars['advanced_search']->value;?>


        <div class="modal-footer buttons-container">
            <?php if (!$_smarty_tpl->tpl_vars['not_saved']->value) {?>
                <div class="pull-left">
                    <?php if (strpos($_REQUEST['dispatch'],".picker")===false) {?>
                    <span class="pull-left"><?php echo $_smarty_tpl->__("save_this_search_as");?>
</span>
                    <div class="input-append">
                    <input type="text" id="view_name" name="new_view" value="<?php if ($_smarty_tpl->tpl_vars['search']->value['view_id']&&$_smarty_tpl->tpl_vars['views']->value[$_smarty_tpl->tpl_vars['search']->value['view_id']]) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['views']->value[$_smarty_tpl->tpl_vars['search']->value['view_id']]['name'], ENT_QUOTES, 'UTF-8');
} else {
echo $_smarty_tpl->__("name");
}?>" title="<?php echo $_smarty_tpl->__("name");?>
" class="input-medium cm-hint" />
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("save"),'but_id'=>"adv_search_save",'but_role'=>"advanced-search"), 0);?>

                        </div>
                    <?php }?>
                </div>
            <?php }?>
            <div class="pull-right">
                <a class="cm-dialog-closer cm-cancel tool-link btn bulkedit-unchanged" data-dismiss="modal"><?php echo $_smarty_tpl->__("cancel");?>
</a>
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[".((string)$_smarty_tpl->tpl_vars['dispatch']->value)."]",'but_role'=>"submit",'method'=>"GET"), 0);?>

            </div>
        </div>
    </div>
</div>

<?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['simple_search']->value;?>

    <div class="sidebar-field in-popup">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[".((string)$_smarty_tpl->tpl_vars['dispatch']->value)."]"), 0);?>

    <?php if (trim($_smarty_tpl->tpl_vars['advanced_search']->value)!='') {?>
        <a id="sw_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination cm-save-state" title="<?php echo $_smarty_tpl->__("advanced_search_options");?>
">
            <i id="on_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="icon-chevron-down cm-combination cm-save-state <?php if ($_COOKIE[$_smarty_tpl->tpl_vars['a_id']->value]) {?>hidden<?php }?>"></i>
            <i id="off_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="icon-chevron-up cm-combination cm-save-state <?php if (!$_COOKIE[$_smarty_tpl->tpl_vars['a_id']->value]) {?>hidden<?php }?>"></i>
        </a>
    <?php }?>
    </div>
    <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="search-advanced <?php if (!$_COOKIE[$_smarty_tpl->tpl_vars['a_id']->value]) {?>hidden<?php }?>">
        <?php echo $_smarty_tpl->tpl_vars['advanced_search']->value;?>

    </div>
<?php }?>
<?php }} ?>
