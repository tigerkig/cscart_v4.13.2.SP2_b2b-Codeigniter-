<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 13:23:10
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\themes\responsive\templates\views\products\components\product_label.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21454367566175340e4210d1-09386709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9299ed4619ee03abf7469bf9284b2f5fff8e5c1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\themes\\responsive\\templates\\views\\products\\components\\product_label.tpl',
      1 => 1635066672,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21454367566175340e4210d1-09386709',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'label_href' => 0,
    'label_extra' => 0,
    'label_mini' => 0,
    'label_rounded' => 0,
    'label_meta' => 0,
    'label_icon' => 0,
    'label_text' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6175340e44c7b5_18691575',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6175340e44c7b5_18691575')) {function content_6175340e44c7b5_18691575($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['label_href']->value) {?>
    
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_href']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_extra']->value, ENT_QUOTES, 'UTF-8');?>
 class="ty-product-labels__item ty-product-labels__item--link <?php if ($_smarty_tpl->tpl_vars['label_mini']->value) {?>ty-product-labels__item--mini<?php }?> <?php if ($_smarty_tpl->tpl_vars['label_rounded']->value) {?>ty-product-labels__item--rounded<?php }?> <?php if ($_smarty_tpl->tpl_vars['label_meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['label_meta']->value, ENT_QUOTES, 'UTF-8');
}?>">
        <div class="ty-product-labels__content"><?php if ($_smarty_tpl->tpl_vars['label_icon']->value) {?><i class="ty-product-labels__icon <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_icon']->value, ENT_QUOTES, 'UTF-8');?>
"></i><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['label_text']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    </a>
<?php } else { ?>
    
    <div <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_extra']->value, ENT_QUOTES, 'UTF-8');?>
 class="ty-product-labels__item <?php if ($_smarty_tpl->tpl_vars['label_mini']->value) {?>ty-product-labels__item--mini<?php }?> <?php if ($_smarty_tpl->tpl_vars['label_rounded']->value) {?>ty-product-labels__item--rounded<?php }?> <?php if ($_smarty_tpl->tpl_vars['label_meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['label_meta']->value, ENT_QUOTES, 'UTF-8');
}?>">
        <div class="ty-product-labels__content"><?php if ($_smarty_tpl->tpl_vars['label_icon']->value) {?><i class="ty-product-labels__icon <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_icon']->value, ENT_QUOTES, 'UTF-8');?>
"></i><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['label_text']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    </div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/product_label.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/product_label.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['label_href']->value) {?>
    
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_href']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_extra']->value, ENT_QUOTES, 'UTF-8');?>
 class="ty-product-labels__item ty-product-labels__item--link <?php if ($_smarty_tpl->tpl_vars['label_mini']->value) {?>ty-product-labels__item--mini<?php }?> <?php if ($_smarty_tpl->tpl_vars['label_rounded']->value) {?>ty-product-labels__item--rounded<?php }?> <?php if ($_smarty_tpl->tpl_vars['label_meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['label_meta']->value, ENT_QUOTES, 'UTF-8');
}?>">
        <div class="ty-product-labels__content"><?php if ($_smarty_tpl->tpl_vars['label_icon']->value) {?><i class="ty-product-labels__icon <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_icon']->value, ENT_QUOTES, 'UTF-8');?>
"></i><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['label_text']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    </a>
<?php } else { ?>
    
    <div <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_extra']->value, ENT_QUOTES, 'UTF-8');?>
 class="ty-product-labels__item <?php if ($_smarty_tpl->tpl_vars['label_mini']->value) {?>ty-product-labels__item--mini<?php }?> <?php if ($_smarty_tpl->tpl_vars['label_rounded']->value) {?>ty-product-labels__item--rounded<?php }?> <?php if ($_smarty_tpl->tpl_vars['label_meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['label_meta']->value, ENT_QUOTES, 'UTF-8');
}?>">
        <div class="ty-product-labels__content"><?php if ($_smarty_tpl->tpl_vars['label_icon']->value) {?><i class="ty-product-labels__icon <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_icon']->value, ENT_QUOTES, 'UTF-8');?>
"></i><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['label_text']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    </div>
<?php }
}?><?php }} ?>
