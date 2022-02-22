<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 12:30:43
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\addons\blog\hooks\pages\sidebar.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1815238138617527c3b902b1-84826155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d84c5c0fae544fdeda8660ae42458bc895481db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\addons\\blog\\hooks\\pages\\sidebar.post.tpl',
      1 => 1628148888,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1815238138617527c3b902b1-84826155',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_managing_blog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_617527c3b988b2_62959342',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617527c3b988b2_62959342')) {function content_617527c3b988b2_62959342($_smarty_tpl) {?><?php if (!is_callable('smarty_block_notes')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\block.notes.php';
?><?php if ($_smarty_tpl->tpl_vars['is_managing_blog']->value) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('notes', array()); $_block_repeat=true; echo smarty_block_notes(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="sidebar-note-item">
        <?php echo $_smarty_tpl->__('blog_functionality_notes');?>

    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_notes(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
