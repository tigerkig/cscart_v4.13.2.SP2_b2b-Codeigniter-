<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 13:24:14
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\themes\responsive\templates\common\content_more.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11986759886175344ea73c12-11948274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd660f2bb9d924623e38ec7d33ee222c2687150db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\themes\\responsive\\templates\\common\\content_more.tpl',
      1 => 1635066672,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11986759886175344ea73c12-11948274',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'text_limit' => 0,
    'display' => 0,
    'text' => 0,
    'more_text' => 0,
    'meta' => 0,
    'prefix' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6175344eac20c7_56828223',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6175344eac20c7_56828223')) {function content_6175344eac20c7_56828223($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('content_more','content_more'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars['text_limit'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['text_limit']->value)===null||$tmp==='' ? 600 : $tmp), null, 0);?>
<?php if (!$_smarty_tpl->tpl_vars['display']->value) {?>
    <?php $_smarty_tpl->tpl_vars['display'] = new Smarty_variable((mb_strlen($_smarty_tpl->tpl_vars['text']->value, 'UTF-8')>$_smarty_tpl->tpl_vars['text_limit']->value), null, 0);?>
<?php }?>
<?php $_smarty_tpl->tpl_vars['text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['text']->value)===null||$tmp==='' ? "–" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['more_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['more_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("content_more") : $tmp), null, 0);?>

<div class="ty-content-more" data-ca-elem="contentMore">
    <div class="ty-content-more__text <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-elem="contentMoreText">
        <?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

    </div>
    <div class="ty-content-more__btn-wrapper <?php if (!$_smarty_tpl->tpl_vars['display']->value) {?>hidden<?php }?>" data-ca-elem="contentMoreBtnWrapper">
        <button type="button" class="ty-content-more__btn" data-ca-elem="contentMoreBtn">
            <?php echo $_smarty_tpl->tpl_vars['more_text']->value;?>

        </button>
    </div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/content_more.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/content_more.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php $_smarty_tpl->tpl_vars['text_limit'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['text_limit']->value)===null||$tmp==='' ? 600 : $tmp), null, 0);?>
<?php if (!$_smarty_tpl->tpl_vars['display']->value) {?>
    <?php $_smarty_tpl->tpl_vars['display'] = new Smarty_variable((mb_strlen($_smarty_tpl->tpl_vars['text']->value, 'UTF-8')>$_smarty_tpl->tpl_vars['text_limit']->value), null, 0);?>
<?php }?>
<?php $_smarty_tpl->tpl_vars['text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['text']->value)===null||$tmp==='' ? "–" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['more_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['more_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("content_more") : $tmp), null, 0);?>

<div class="ty-content-more" data-ca-elem="contentMore">
    <div class="ty-content-more__text <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-elem="contentMoreText">
        <?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

    </div>
    <div class="ty-content-more__btn-wrapper <?php if (!$_smarty_tpl->tpl_vars['display']->value) {?>hidden<?php }?>" data-ca-elem="contentMoreBtnWrapper">
        <button type="button" class="ty-content-more__btn" data-ca-elem="contentMoreBtn">
            <?php echo $_smarty_tpl->tpl_vars['more_text']->value;?>

        </button>
    </div>
</div>
<?php }?><?php }} ?>
