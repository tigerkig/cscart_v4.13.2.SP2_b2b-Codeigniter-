<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 12:11:52
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\common\image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172101989861752358a925f3-97511992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3020cbddf6f0c85a9d001eba53de277a12fd8ce6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\common\\image.tpl',
      1 => 1628148888,
      2 => 'backend',
    ),
  ),
  'nocache_hash' => '172101989861752358a925f3-97511992',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'image' => 0,
    'image_width' => 0,
    'image_height' => 0,
    'show_detailed_link' => 0,
    'href' => 0,
    'link_css_class' => 0,
    'image_data' => 0,
    'image_id' => 0,
    'image_css_class' => 0,
    'no_image_css_class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61752358ae96f5_51279710',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61752358ae96f5_51279710')) {function content_61752358ae96f5_51279710($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('no_image'));
?>
<?php $_smarty_tpl->tpl_vars["image_data"] = new Smarty_variable(fn_image_to_display($_smarty_tpl->tpl_vars['image']->value,$_smarty_tpl->tpl_vars['image_width']->value,$_smarty_tpl->tpl_vars['image_height']->value), null, 0);
$_smarty_tpl->tpl_vars['show_detailed_link'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_detailed_link']->value)===null||$tmp==='' ? true : $tmp), null, 0);
if ($_smarty_tpl->tpl_vars['show_detailed_link']->value&&($_smarty_tpl->tpl_vars['image']->value||$_smarty_tpl->tpl_vars['href']->value)) {?><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_css_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['href']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image']->value['image_path'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" <?php if (!$_smarty_tpl->tpl_vars['href']->value) {?>target="_blank"<?php }?>><?php }
if ($_smarty_tpl->tpl_vars['image_data']->value['image_path']) {?><img <?php if ($_smarty_tpl->tpl_vars['image_id']->value) {?>id="image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['height'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['alt'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['image_data']->value['generate_image']) {?>    class="spinner <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_css_class']->value, ENT_QUOTES, 'UTF-8');?>
"    data-ca-image-path="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
"<?php } else { ?>    class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_css_class']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['alt'], ENT_QUOTES, 'UTF-8');?>
" /><?php } else { ?><div class="no-image <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_image_css_class']->value, ENT_QUOTES, 'UTF-8');?>
" style="width: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['image_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_height']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
px; height: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['image_height']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_width']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
px;"><i class="glyph-image" title="<?php echo $_smarty_tpl->__("no_image");?>
"></i></div><?php }
if ($_smarty_tpl->tpl_vars['show_detailed_link']->value&&($_smarty_tpl->tpl_vars['image']->value||$_smarty_tpl->tpl_vars['href']->value)) {?></a><?php }?><?php }} ?>
