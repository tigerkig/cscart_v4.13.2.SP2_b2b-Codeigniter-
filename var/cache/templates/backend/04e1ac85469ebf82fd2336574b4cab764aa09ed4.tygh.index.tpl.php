<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 16:33:37
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94812387161752355149002-96551597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04e1ac85469ebf82fd2336574b4cab764aa09ed4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\index.tpl',
      1 => 1635079778,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '94812387161752355149002-96551597',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6175235520ae19_37447790',
  'variables' => 
  array (
    'auth' => 0,
    'language_direction' => 0,
    'pb_is_bottom_panel_open' => 0,
    'page_title' => 0,
    'navigation' => 0,
    'images_dir' => 0,
    'class' => 0,
    'is_bottom_panel_available' => 0,
    'logos' => 0,
    'content_tpl' => 0,
    'view_mode' => 0,
    'is_setup_wizard_panel_available' => 0,
    'content' => 0,
    'stats' => 0,
    'show_sm_dialog' => 0,
    'show_trial_dialog' => 0,
    'show_license_errors_dialog' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6175235520ae19_37447790')) {function content_6175235520ae19_37447790($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('admin_panel'));
?>
<?php $_smarty_tpl->tpl_vars['pb_is_bottom_panel_open'] = new Smarty_variable(($_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::ADMIN")||$_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::VENDOR")||defined("THEMES_PANEL"))&&(($tmp = @$_COOKIE['pb_is_bottom_panel_open'])===null||$tmp==='' ? "1" : $tmp), null, 0);?>

<!DOCTYPE html>
<html lang="en"
    dir="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
"
    class="<?php if ($_smarty_tpl->tpl_vars['pb_is_bottom_panel_open']->value) {?>bp-panel-active<?php }?>"
>
<head>
<title><?php if ($_smarty_tpl->tpl_vars['page_title']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page_title']->value, ENT_QUOTES, 'UTF-8');
} else {
if ($_smarty_tpl->tpl_vars['navigation']->value['selected_tab']) {
echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['navigation']->value['selected_tab']);
if ($_smarty_tpl->tpl_vars['navigation']->value['subsection']) {?> :: <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['navigation']->value['subsection']);
}?> - <?php }
echo $_smarty_tpl->__("admin_panel");
}?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-sssss/>


<link rel="apple-touch-icon" sizes="180x180" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/favicons/favicon-16x16.png">
<link rel="manifest" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/favicons/site.webmanifest">
<link rel="mask-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/favicons/safari-pinned-tab.svg" color="#0fa4d6">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="theme-color" content="#ffffff">

<?php echo $_smarty_tpl->getSubTemplate ("common/styles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if (defined("DEVELOPMENT")&&(defined('DEVELOPMENT') ? constant('DEVELOPMENT') : null)==true) {?>
<?php echo '<script'; ?>
 data-no-defer>
window.jsErrors = [];
/*window.onerror = function(errorMessage) {
    document.write('<div data-ca-debug="1" style="border: 2px solid red; margin: 2px;">' + errorMessage + '</div>');
}*/
<?php echo '</script'; ?>
>
<?php }?>
</head>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/helpers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php ob_start();
if ($_COOKIE['layout_status']==1) {?><?php echo "menu-toggled";?><?php }
$_tmp1=ob_get_clean();?><?php ob_start();
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="vendor") {?><?php echo " vendor-area";?><?php }
$_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable($_tmp1.$_tmp2, null, 0);?>
<body <?php if ($_smarty_tpl->tpl_vars['class']->value) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> data-ca-scroll-to-elm-offset="120">

    <?php echo $_smarty_tpl->getSubTemplate ("common/loading_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php if ($_smarty_tpl->tpl_vars['is_bottom_panel_available']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("components/bottom_panel/bottom_panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('logo'=>$_smarty_tpl->tpl_vars['logos']->value['theme']['image']), 0);?>

    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php $_smarty_tpl->tpl_vars["content"] = new Smarty_variable($_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content_tpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0));?>


    <div class="main-wrap <?php if ($_smarty_tpl->tpl_vars['is_bottom_panel_available']->value) {?>bp-tygh-main-container<?php }?>"
        id="main_column<?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']||$_smarty_tpl->tpl_vars['view_mode']->value=='simple') {?>_login<?php }?>"
    >
    <?php if ($_smarty_tpl->tpl_vars['view_mode']->value!="simple") {?>
        <div class="admin-content">
            <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <div class="admin-content-wrap">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:main_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:main_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:main_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <?php if ($_smarty_tpl->tpl_vars['is_setup_wizard_panel_available']->value) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/setup_wizard/components/widget_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php }?>

                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                <?php echo (($tmp = @$_smarty_tpl->tpl_vars['stats']->value)===null||$tmp==='' ? '' : $tmp);?>

            </div>
        </div>
        <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php }?>

    <!--main_column<?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']||$_smarty_tpl->tpl_vars['view_mode']->value=='simple') {?>_login<?php }?>--></div>

    <?php echo $_smarty_tpl->getSubTemplate ("common/comet.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



    <?php if (fn_check_meta_redirect($_REQUEST['meta_redirect_url'])) {?>
        <meta http-equiv="refresh" content="1;url=<?php echo htmlspecialchars(fn_url(fn_check_meta_redirect($_REQUEST['meta_redirect_url'])), ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']&&fn_check_permissions('settings','change_store_mode','admin','POST')) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/settings/store_mode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show'=>$_smarty_tpl->tpl_vars['show_sm_dialog']->value), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("views/settings/trial_expired.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show'=>$_smarty_tpl->tpl_vars['show_trial_dialog']->value), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("views/settings/license_errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show'=>$_smarty_tpl->tpl_vars['show_license_errors_dialog']->value), 0);?>

    <?php }?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:after_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:after_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:after_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php echo $_smarty_tpl->getSubTemplate ("common/loading_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
