<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 14:58:40
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\common\theme_editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141732742661754a707ae1c0-92109167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96fafb2102778fcc2c3b5c55fcff6925c1102526' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\common\\theme_editor.tpl',
      1 => 1628148888,
      2 => 'backend',
    ),
  ),
  'nocache_hash' => '141732742661754a707ae1c0-92109167',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61754a70823e00_98316240',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61754a70823e00_98316240')) {function content_61754a70823e00_98316240($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/lib/ace/ace.js"),$_smarty_tpl);?>

<div id="theme_editor">
<div class="theme-editor"></div>
<?php echo '<script'; ?>
>
(function(_, $) {
    $.extend(_, {
        query_string: encodeURIComponent('<?php echo strtr($_SERVER['QUERY_STRING'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
')
    });
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/tygh/theme_editor.js"),$_smarty_tpl);?>

<!--theme_editor--></div>
<?php }} ?>
