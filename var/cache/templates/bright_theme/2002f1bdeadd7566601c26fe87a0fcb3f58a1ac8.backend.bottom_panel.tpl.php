<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 13:22:58
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\components\bottom_panel\bottom_panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171358409461753402745399-58694900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2002f1bdeadd7566601c26fe87a0fcb3f58a1ac8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\components\\bottom_panel\\bottom_panel.tpl',
      1 => 1628148888,
      2 => 'backend',
    ),
  ),
  'nocache_hash' => '171358409461753402745399-58694900',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'config' => 0,
    'location_data' => 0,
    'auth' => 0,
    'settings' => 0,
    'page' => 0,
    'quick_menu' => 0,
    'sect' => 0,
    'subsect' => 0,
    'edition' => 0,
    'app' => 0,
    'active_mode' => 0,
    'logo' => 0,
    'storefront_id' => 0,
    'redirect_area' => 0,
    'c_url' => 0,
    'utm' => 0,
    'pb_is_bottom_panel_open' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61753402d74d51_69115662',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61753402d74d51_69115662')) {function content_61753402d74d51_69115662($_smarty_tpl) {?><?php if (!is_callable('smarty_block_styles')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\block.styles.php';
if (!is_callable('smarty_function_style')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.style.php';
if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php';
if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('bottom_panel.change_theme','bottom_panel.change_theme','bottom_panel.edit_layout','bottom_panel.edit_layout','bottom_panel.edit_template','bottom_panel.edit_template','bottom_panel.edit_translations','bottom_panel.edit_translations','bottom_panel.edit_menus','bottom_panel.edit_menus','bottom_panel.edit_product_tabs','bottom_panel.edit_product_tabs','bottom_panel.go_to_home_page','bottom_panel.go_to_dashboard','bottom_panel.storefront','bottom_panel.admin_panel','bottom_panel.vendor_panel','bottom_panel.preview_mode','bottom_panel.text_mode','bottom_panel.theme_mode','bottom_panel.theme_mode.not_available','bottom_panel.build_mode','bottom_panel.build_mode.not_available','bottom_panel.settings','bottom_panel.help','bottom_panel.documentation','bottom_panel.community_forums','bottom_panel.video_tutorials','bottom_panel.faq','bottom_panel.customer_help_desk','bottom_panel.hire_a_developers','bottom_panel.hide_bottom_admin_panel','bottom_panel.show_bottom_admin_panel','bottom_panel.change_theme','bottom_panel.change_theme','bottom_panel.edit_layout','bottom_panel.edit_layout','bottom_panel.edit_template','bottom_panel.edit_template','bottom_panel.edit_translations','bottom_panel.edit_translations','bottom_panel.edit_menus','bottom_panel.edit_menus','bottom_panel.edit_product_tabs','bottom_panel.edit_product_tabs','bottom_panel.go_to_home_page','bottom_panel.go_to_dashboard','bottom_panel.storefront','bottom_panel.admin_panel','bottom_panel.vendor_panel','bottom_panel.preview_mode','bottom_panel.text_mode','bottom_panel.theme_mode','bottom_panel.theme_mode.not_available','bottom_panel.build_mode','bottom_panel.build_mode.not_available','bottom_panel.settings','bottom_panel.help','bottom_panel.documentation','bottom_panel.community_forums','bottom_panel.video_tutorials','bottom_panel.faq','bottom_panel.customer_help_desk','bottom_panel.hire_a_developers','bottom_panel.hide_bottom_admin_panel','bottom_panel.show_bottom_admin_panel'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (((defined('AREA') ? constant('AREA') : null)=='C')) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('styles', array()); $_block_repeat=true; echo smarty_block_styles(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_function_style(array('content'=>"@import \"../../../backend/css/tygh/bottom_panel/index.less\";"),$_smarty_tpl);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_styles(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } else { ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('styles', array()); $_block_repeat=true; echo smarty_block_styles(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_function_style(array('src'=>"tygh/bottom_panel/index.less"),$_smarty_tpl);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_styles(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"bottom_panel:edition")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"bottom_panel:edition"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_smarty_tpl->tpl_vars['edition'] = new Smarty_variable("store", null, 0);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"bottom_panel:edition"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']==="products") {?>
    <?php $_smarty_tpl->tpl_vars['page'] = new Smarty_variable("products", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['controller']==="checkout"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']==="checkout") {?>
    <?php $_smarty_tpl->tpl_vars['page'] = new Smarty_variable("checkout", null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager']&&$_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
    <?php $_smarty_tpl->tpl_vars['active_mode'] = new Smarty_variable("build", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>
    <?php $_smarty_tpl->tpl_vars['active_mode'] = new Smarty_variable("text", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['theme_editor']) {?>
    <?php $_smarty_tpl->tpl_vars['active_mode'] = new Smarty_variable("theme", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['active_mode'] = new Smarty_variable("preview", null, 0);?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("settings_menu_main_links", null, null); ob_start(); ?>
    <?php if (fn_check_permissions("themes","manage","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->tpl_vars['auth']->value['user_id'])&&($_smarty_tpl->tpl_vars['auth']->value['user_type']!==smarty_modifier_enum("UserTypes::VENDOR")||$_smarty_tpl->tpl_vars['settings']->value['Vendors']['can_edit_styles']===smarty_modifier_enum("YesNo::YES"))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars(fn_url("themes.manage",$_smarty_tpl->tpl_vars['auth']->value['user_type']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("bottom_panel.change_theme");?>
"><?php echo $_smarty_tpl->__("bottom_panel.change_theme");?>
</a>
    <?php }?>
    <?php if (fn_check_permissions("block_manager","manage","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->tpl_vars['auth']->value['user_id'])&&($_smarty_tpl->tpl_vars['auth']->value['user_type']!==smarty_modifier_enum("UserTypes::VENDOR")||$_smarty_tpl->tpl_vars['settings']->value['Vendors']['can_edit_blocks']===smarty_modifier_enum("YesNo::YES"))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars(fn_url("block_manager.manage?selected_location=".((string)$_smarty_tpl->tpl_vars['location_data']->value['location_id'])."&redirect_to_block_manager=1",$_smarty_tpl->tpl_vars['auth']->value['user_type']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("bottom_panel.edit_layout");?>
"><?php echo $_smarty_tpl->__("bottom_panel.edit_layout");?>
</a>
    <?php }?>
    <?php if (fn_check_permissions("templates","manage","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->tpl_vars['auth']->value['user_id'])&&(empty($_smarty_tpl->tpl_vars['auth']->value['company_id'])||fn_check_company_permissions("templates","manage",'',array()))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars(fn_url("templates.manage",$_smarty_tpl->tpl_vars['auth']->value['user_type']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("bottom_panel.edit_template");?>
"><?php echo $_smarty_tpl->__("bottom_panel.edit_template");?>
</a>
    <?php }?>
    <?php if (fn_check_permissions("languages","translations","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->tpl_vars['auth']->value['user_id'])&&(empty($_smarty_tpl->tpl_vars['auth']->value['company_id'])||fn_check_company_permissions("languages","translations",'',array()))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars(fn_url("languages.translations",$_smarty_tpl->tpl_vars['auth']->value['user_type']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("bottom_panel.edit_translations");?>
"><?php echo $_smarty_tpl->__("bottom_panel.edit_translations");?>
</a>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("settings_menu_additional_links", null, null); ob_start(); ?>
    <?php if (fn_check_permissions("templates","manage","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->tpl_vars['auth']->value['user_id'])&&(empty($_smarty_tpl->tpl_vars['auth']->value['company_id'])||fn_check_company_permissions("templates","manage",'',array()))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars(fn_url("menus.manage",$_smarty_tpl->tpl_vars['auth']->value['user_type']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("bottom_panel.edit_menus");?>
"><?php echo $_smarty_tpl->__("bottom_panel.edit_menus");?>
</a>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value==="products"&&fn_check_permissions("tabs","manage","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->tpl_vars['auth']->value['user_id'])&&(empty($_smarty_tpl->tpl_vars['auth']->value['company_id'])||fn_check_company_permissions("tabs","manage",'',array()))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars(fn_url("tabs.manage",$_smarty_tpl->tpl_vars['auth']->value['user_type']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("bottom_panel.edit_product_tabs");?>
"><?php echo $_smarty_tpl->__("bottom_panel.edit_product_tabs");?>
</a>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("settings_menu", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['quick_menu']->value) {?>
        <?php  $_smarty_tpl->tpl_vars['sect'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sect']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['quick_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sect']->key => $_smarty_tpl->tpl_vars['sect']->value) {
$_smarty_tpl->tpl_vars['sect']->_loop = true;
?>
            <div class="bp-dropdown-menu__group">
                <span class="bp-dropdown-menu__item-text bp-dropdown-menu__item-text--head"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sect']->value['section']['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php  $_smarty_tpl->tpl_vars['subsect'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subsect']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sect']->value['subsection']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subsect']->key => $_smarty_tpl->tpl_vars['subsect']->value) {
$_smarty_tpl->tpl_vars['subsect']->_loop = true;
?>
                    <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['subsect']->value['url'],$_smarty_tpl->tpl_vars['auth']->value['user_type']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subsect']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subsect']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                <?php } ?>
            </div>
        <?php } ?>
    <?php }?>
    <?php if (trim(Smarty::$_smarty_vars['capture']['settings_menu_main_links'])) {?>
        <div class="bp-dropdown-menu__group">
            <?php echo Smarty::$_smarty_vars['capture']['settings_menu_main_links'];?>

        </div>
    <?php }?>
    <?php if (trim(Smarty::$_smarty_vars['capture']['settings_menu_additional_links'])) {?>
        <div class="bp-dropdown-menu__group">
            <?php echo Smarty::$_smarty_vars['capture']['settings_menu_additional_links'];?>

        </div>
    <?php }?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"bottom_panel:extra_link_in_settings_menu")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"bottom_panel:extra_link_in_settings_menu"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"bottom_panel:extra_link_in_settings_menu"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php $_smarty_tpl->tpl_vars['utm'] = new Smarty_variable("utm_source=".((string)smarty_modifier_replace(preg_replace('!\s+!u', '',mb_strtolower((defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null), 'UTF-8')),'-','_'))."&utm_medium=".((string)$_smarty_tpl->tpl_vars['edition']->value), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['is_multiple_storefronts']) {?>
    <?php if ($_REQUEST['storefront_id']) {?>
        <?php $_smarty_tpl->tpl_vars['storefront_id'] = new Smarty_variable($_REQUEST['storefront_id'], null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['storefront_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['app']->value['storefront']->storefront_id, null, 0);?>
    <?php }?>
<?php }?>

<div class="bp__container">
    <div id="bp_bottom_panel"
        class="bp-panel bp-panel--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['edition']->value, ENT_QUOTES, 'UTF-8');?>
 bp-panel--<?php echo htmlspecialchars((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-bottom-pannel="true"
        data-bp-mode="demo"
        data-bp-is-bottom-panel-open="true"
        data-bp-nav-active=<?php echo htmlspecialchars((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null), ENT_QUOTES, 'UTF-8');?>

        data-bp-modes-active="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['active_mode']->value, ENT_QUOTES, 'UTF-8');?>
">
        <a href="<?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="customer") {
echo htmlspecialchars(fn_url('',"C"), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(fn_url('',"A"), ENT_QUOTES, 'UTF-8');
}?>"
            class="bp-logo"
            data-bp-tooltip="true">
            <?php echo $_smarty_tpl->getSubTemplate ("backend:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image'=>$_smarty_tpl->tpl_vars['logo']->value,'image_css_class'=>"bp-logo-img--no-color",'show_detailed_link'=>false), 0);?>

            <div class="bp-tooltip bp-tooltip--left">
            <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="customer") {?>
                <?php echo $_smarty_tpl->__("bottom_panel.go_to_home_page");?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->__("bottom_panel.go_to_dashboard");?>

            <?php }?>
            </div>
        </a>
        <div class="bp-nav">
            <?php $_smarty_tpl->tpl_vars['redirect_area'] = new Smarty_variable($_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::VENDOR") ? "V" : "A", null, 0);?>
            <a href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['storefront_id']->value) {?><?php echo "&storefront_id=";?><?php echo (string)$_smarty_tpl->tpl_vars['storefront_id']->value;?><?php }
$_tmp1=ob_get_clean();?><?php echo htmlspecialchars(fn_url("bottom_panel.redirect?url=".((string)urlencode($_smarty_tpl->tpl_vars['config']->value['current_url']))."&area=".((string)(defined('AREA') ? constant('AREA') : null))."&to_area=C".$_tmp1,$_smarty_tpl->tpl_vars['redirect_area']->value), ENT_QUOTES, 'UTF-8');?>
"
                class="bp-nav__item cm-no-ajax
                <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="customer") {?>
                    bp-nav__item--active
                <?php }?>"
                data-bp-nav-item="customer">
                <span class="bp-nav__item-text"><?php echo $_smarty_tpl->__("bottom_panel.storefront");?>
</span>
            </a>
            <?php if (defined("THEMES_PANEL")||$_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::ADMIN")) {?>
                <a href="<?php echo htmlspecialchars(smarty_modifier_replace(fn_url("bottom_panel.redirect?url=".((string)urlencode($_smarty_tpl->tpl_vars['config']->value['current_url']))."&area=".((string)(defined('AREA') ? constant('AREA') : null))."&user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id'])."&switch_company_id=0","A"),$_smarty_tpl->tpl_vars['config']->value['vendor_index'],$_smarty_tpl->tpl_vars['config']->value['admin_index']), ENT_QUOTES, 'UTF-8');?>
" class="bp-nav__item cm-no-ajax
                    <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="admin") {?>
                        bp-nav__item--active
                    <?php }?>"
                    data-bp-nav-item="admin">
                    <span class="bp-nav__item-text"><?php echo $_smarty_tpl->__("bottom_panel.admin_panel");?>
</span>
                </a>
            <?php }?>
            <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                <?php if (defined("THEMES_PANEL")||$_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::VENDOR")) {?>
                    <a href="<?php echo htmlspecialchars(fn_url("bottom_panel.login_as_vendor?url=".((string)urlencode($_smarty_tpl->tpl_vars['config']->value['current_url']))."&area=".((string)(defined('AREA') ? constant('AREA') : null))."&user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id']),"C"), ENT_QUOTES, 'UTF-8');?>
" class="bp-nav__item cm-no-ajax cm-post
                        <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="vendor") {?>
                            bp-nav__item--active
                        <?php }?>"
                        data-bp-nav-item="vendor">
                        <span class="bp-nav__item-text"><?php echo $_smarty_tpl->__("bottom_panel.vendor_panel");?>
</span>
                    </a>
                <?php }?>
            <?php }?>
            <div id="bp-nav__active" class="bp-nav__active
                <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="customer") {?>
                    bp-nav__active--activated
                <?php }?>"></div>
        </div>
        <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="customer") {?>
            <div class="bp-modes">
                <a
                    <?php if ($_smarty_tpl->tpl_vars['active_mode']->value==="text") {?>
                        href="<?php ob_start();
echo htmlspecialchars(urlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
$_tmp2=ob_get_clean();?><?php echo htmlspecialchars(fn_url("customization.disable_mode?type=live_editor&return_url=".$_tmp2), ENT_QUOTES, 'UTF-8');?>
"
                    <?php } elseif ($_smarty_tpl->tpl_vars['active_mode']->value==="theme") {?>
                        href="<?php ob_start();
echo htmlspecialchars(urlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
$_tmp3=ob_get_clean();?><?php echo htmlspecialchars(fn_url("customization.disable_mode?type=theme_editor&return_url=".$_tmp3), ENT_QUOTES, 'UTF-8');?>
"
                    <?php } elseif ($_smarty_tpl->tpl_vars['active_mode']->value==="build") {?>
                        href="<?php ob_start();
echo htmlspecialchars(urlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
$_tmp4=ob_get_clean();?><?php echo htmlspecialchars(fn_url("customization.disable_mode?type=block_manager&return_url=".$_tmp4), ENT_QUOTES, 'UTF-8');?>
"
                    <?php } else { ?>
                        href="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    id="settings_block_manager" class="cm-no-ajax bp-modes__item bp-modes__item--preview
                    <?php if ($_smarty_tpl->tpl_vars['active_mode']->value==="preview") {?>bp-modes__item--active<?php }?>" data-bp-modes-item="preview"
                    data-bp-tooltip="true">
                    <?php echo $_smarty_tpl->getSubTemplate ("backend:components/bottom_panel/icons/bp-modes__item--preview.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <div class="bp-tooltip"><?php echo $_smarty_tpl->__("bottom_panel.preview_mode");?>
</div>
                </a>
                <?php if (fn_check_permissions("customization","update_mode","admin",'',array("type"=>"live_editor"),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->tpl_vars['auth']->value['user_id'])&&$_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::ADMIN")) {?>
                    <a href="<?php ob_start();
echo htmlspecialchars(urlencode($_smarty_tpl->tpl_vars['c_url']->value), ENT_QUOTES, 'UTF-8');
$_tmp5=ob_get_clean();?><?php echo htmlspecialchars(fn_url("customization.update_mode?type=live_editor&status=enable&return_url=".$_tmp5), ENT_QUOTES, 'UTF-8');?>
"
                        id="settings_live_editor"
                        class="cm-no-ajax bp-modes__item bp-modes__item--text
                        <?php if ($_smarty_tpl->tpl_vars['active_mode']->value==="text") {?>bp-modes__item--active<?php }?>"
                        data-bp-modes-item="text"
                        data-bp-tooltip="true">
                        <?php echo $_smarty_tpl->getSubTemplate ("backend:components/bottom_panel/icons/bp-modes__item--text.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        <div class="bp-tooltip"><?php echo $_smarty_tpl->__("bottom_panel.text_mode");?>
</div>
                    </a>
                <?php }?>
                <?php if (fn_check_permissions("customization","update_mode","admin",'',array("type"=>"theme_editor"),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->tpl_vars['auth']->value['user_id'])&&(($_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::ADMIN"))||(($_smarty_tpl->tpl_vars['settings']->value['Vendors']['can_edit_styles']===smarty_modifier_enum("YesNo::YES"))&&$_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::VENDOR")))) {?>
                    <a href=" <?php if (fn_is_theme_editor_available_for_user($_smarty_tpl->tpl_vars['auth']->value)) {
ob_start();
echo htmlspecialchars(urlencode($_smarty_tpl->tpl_vars['c_url']->value), ENT_QUOTES, 'UTF-8');
$_tmp6=ob_get_clean();?><?php echo htmlspecialchars(fn_url("customization.update_mode?type=theme_editor&status=enable&return_url=".$_tmp6), ENT_QUOTES, 'UTF-8');
} else { ?>#<?php }?>"
                        id="settings_theme_editor"
                        class="cm-no-ajax bp-modes__item bp-modes__item--theme
                        <?php if ($_smarty_tpl->tpl_vars['active_mode']->value==="theme") {?>bp-modes__item--active<?php }?>
                        <?php if (!fn_is_theme_editor_available_for_user($_smarty_tpl->tpl_vars['auth']->value)) {?>bp-modes__item--disabled<?php }?>"
                        data-bp-modes-item="theme"
                        data-bp-tooltip="true">
                        <?php echo $_smarty_tpl->getSubTemplate ("backend:components/bottom_panel/icons/bp-modes__item--theme.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        <div class="bp-tooltip">
                            <?php echo $_smarty_tpl->__("bottom_panel.theme_mode");?>

                            <?php if (!fn_is_theme_editor_available_for_user($_smarty_tpl->tpl_vars['auth']->value)) {?>
                                <div class="bp-tooltip__secondary">
                                    <?php echo $_smarty_tpl->__("bottom_panel.theme_mode.not_available");?>

                                </div>
                            <?php }?>
                        </div>
                    </a>
                <?php }?>
                <?php if (fn_check_permissions("customization","update_mode","admin",'',array("type"=>"block_manager"),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->tpl_vars['auth']->value['user_id'])&&(empty($_smarty_tpl->tpl_vars['auth']->value['company_id'])||fn_check_company_permissions("customization","update_mode",'',array("type"=>"block_manager")))&&$_smarty_tpl->tpl_vars['auth']->value['user_type']!==smarty_modifier_enum("UserTypes::CUSTOMER")) {?>
                    <a href="<?php if ($_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {
ob_start();
echo htmlspecialchars(urlencode($_smarty_tpl->tpl_vars['c_url']->value), ENT_QUOTES, 'UTF-8');
$_tmp7=ob_get_clean();?><?php echo htmlspecialchars(fn_url("customization.update_mode?type=block_manager&status=enable&return_url=".$_tmp7), ENT_QUOTES, 'UTF-8');
} else { ?>#<?php }?>"
                       id="settings_block_manager"
                       class="cm-no-ajax bp-modes__item bp-modes__item--build
                        <?php if ($_smarty_tpl->tpl_vars['active_mode']->value==="build") {?>bp-modes__item--active<?php }?>
                        <?php if (!$_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>bp-modes__item--disabled<?php }?>"
                       data-bp-modes-item="build"
                       data-bp-tooltip="true">
                        <?php echo $_smarty_tpl->getSubTemplate ("backend:components/bottom_panel/icons/bp-modes__item--build.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        <div class="bp-tooltip">
                            <?php echo $_smarty_tpl->__("bottom_panel.build_mode");?>

                            <?php if (!$_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
                                <div class="bp-tooltip__secondary">
                                    <?php echo $_smarty_tpl->__("bottom_panel.build_mode.not_available");?>

                                </div>
                            <?php }?>
                        </div>
                    </a>
                <?php }?>
                <div id="bp-modes__active" class="bp-modes__active
                    <?php if ($_smarty_tpl->tpl_vars['active_mode']->value==="preview") {?>
                        bp-modes__active--preview
                    <?php }?>"
                    ></div>
            </div>
        <?php }?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"bottom_panel:extra_element_on_panel")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"bottom_panel:extra_element_on_panel"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"bottom_panel:extra_element_on_panel"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <div class="bp-actions <?php if (!trim(Smarty::$_smarty_vars['capture']['settings_menu'])) {?>bp-actions--one-column<?php }?>">
            <?php if (trim(Smarty::$_smarty_vars['capture']['settings_menu'])) {?>
                <div class="bp-dropdown bp-actions__item">
                    <button class="bp-dropdown-button bp-dropdown-button--animation" data-bp-toggle="dropdown"
                        data-bp-tooltip="true">
                        <?php echo $_smarty_tpl->getSubTemplate ("backend:components/bottom_panel/icons/bp-dropdown-button--settings.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        <span class="bp-tooltip"><?php echo $_smarty_tpl->__("bottom_panel.settings");?>
</span>
                    </button>
                    <div class="bp-dropdown-menu">
                        <?php echo Smarty::$_smarty_vars['capture']['settings_menu'];?>

                    </div>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type']!==smarty_modifier_enum("UserTypes::VENDOR")) {?>
                <div class="bp-dropdown bp-actions__item">
                    <button class="bp-dropdown-button" data-bp-toggle="dropdown" data-bp-tooltip="true">
                        <?php echo $_smarty_tpl->getSubTemplate ("backend:components/bottom_panel/icons/bp-dropdown-button--help.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        <span class="bp-tooltip"><?php echo $_smarty_tpl->__("bottom_panel.help");?>
</span>
                    </button>
                    <div class="bp-dropdown-menu">
                        <div class="bp-dropdown-menu__group">
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['resources']['docs_url'],$_smarty_tpl->tpl_vars['utm']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("bottom_panel.documentation");?>
</a>
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['resources']['forum'],$_smarty_tpl->tpl_vars['utm']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("bottom_panel.community_forums");?>
</a>
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['resources']['video_tutorials'],$_smarty_tpl->tpl_vars['utm']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("bottom_panel.video_tutorials");?>
</a>
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['resources']['faq'],$_smarty_tpl->tpl_vars['utm']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("bottom_panel.faq");?>
</a>
                        </div>
                        <div class="bp-dropdown-menu__group">
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['resources']['helpdesk_url'],$_smarty_tpl->tpl_vars['utm']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("bottom_panel.customer_help_desk");?>
</a>
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['resources']['developers_catalog'],$_smarty_tpl->tpl_vars['utm']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("bottom_panel.hire_a_developers");?>
</a>
                        </div>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"bottom_panel:extra_link_in_help_menu")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"bottom_panel:extra_link_in_help_menu"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"bottom_panel:extra_link_in_help_menu"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>
                </div>
            <?php }?>
        </div>
        <button id="bp_off_bottom_panel" class="bp-close"
            data-bp-tooltip="true"
            data-bp-save-state="true">
            <?php echo $_smarty_tpl->getSubTemplate ("backend:components/bottom_panel/icons/bp-close.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <span class="bp-tooltip bp-tooltip--right"><?php echo $_smarty_tpl->__("bottom_panel.hide_bottom_admin_panel");?>
</span>
        </button>
    </div>
    <div id="bp_bottom_buttons" class="bp-bottom-buttons
        <?php if (!$_smarty_tpl->tpl_vars['pb_is_bottom_panel_open']->value) {?>
            bp-bottom-buttons--active
        <?php }?>">
        <button id="bp_on_bottom_panel"
            class="bp-bottom-button bp-bottom-button--logo
            <?php if ($_smarty_tpl->tpl_vars['pb_is_bottom_panel_open']->value) {?>
                bp-bottom-button--disabled bp-bottom-button--disabled-panel
            <?php }?>"
            data-bp-bottom-buttons="panel"
            data-bp-tooltip="true">
            <?php echo $_smarty_tpl->getSubTemplate ("backend:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image'=>$_smarty_tpl->tpl_vars['logo']->value,'image_css_class'=>"bp-logo-img bp-bottom-button-img",'show_detailed_link'=>false), 0);?>

            <span class="bp-tooltip bp-tooltip--left"><?php echo $_smarty_tpl->__("bottom_panel.show_bottom_admin_panel");?>
</span>
        </button>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"bottom_panel:extra_element_on_closed_panel")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"bottom_panel:extra_element_on_closed_panel"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"bottom_panel:extra_element_on_closed_panel"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
</div>
<?php echo smarty_function_script(array('src'=>"js/tygh/bottom_panel.js"),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:components/bottom_panel/bottom_panel.tpl" id="<?php echo smarty_function_set_id(array('name'=>"backend:components/bottom_panel/bottom_panel.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (((defined('AREA') ? constant('AREA') : null)=='C')) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('styles', array()); $_block_repeat=true; echo smarty_block_styles(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_function_style(array('content'=>"@import \"../../../backend/css/tygh/bottom_panel/index.less\";"),$_smarty_tpl);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_styles(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } else { ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('styles', array()); $_block_repeat=true; echo smarty_block_styles(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_function_style(array('src'=>"tygh/bottom_panel/index.less"),$_smarty_tpl);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_styles(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"bottom_panel:edition")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"bottom_panel:edition"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_smarty_tpl->tpl_vars['edition'] = new Smarty_variable("store", null, 0);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"bottom_panel:edition"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']==="products") {?>
    <?php $_smarty_tpl->tpl_vars['page'] = new Smarty_variable("products", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['controller']==="checkout"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']==="checkout") {?>
    <?php $_smarty_tpl->tpl_vars['page'] = new Smarty_variable("checkout", null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager']&&$_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
    <?php $_smarty_tpl->tpl_vars['active_mode'] = new Smarty_variable("build", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>
    <?php $_smarty_tpl->tpl_vars['active_mode'] = new Smarty_variable("text", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['theme_editor']) {?>
    <?php $_smarty_tpl->tpl_vars['active_mode'] = new Smarty_variable("theme", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['active_mode'] = new Smarty_variable("preview", null, 0);?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("settings_menu_main_links", null, null); ob_start(); ?>
    <?php if (fn_check_permissions("themes","manage","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->tpl_vars['auth']->value['user_id'])&&($_smarty_tpl->tpl_vars['auth']->value['user_type']!==smarty_modifier_enum("UserTypes::VENDOR")||$_smarty_tpl->tpl_vars['settings']->value['Vendors']['can_edit_styles']===smarty_modifier_enum("YesNo::YES"))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars(fn_url("themes.manage",$_smarty_tpl->tpl_vars['auth']->value['user_type']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("bottom_panel.change_theme");?>
"><?php echo $_smarty_tpl->__("bottom_panel.change_theme");?>
</a>
    <?php }?>
    <?php if (fn_check_permissions("block_manager","manage","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->tpl_vars['auth']->value['user_id'])&&($_smarty_tpl->tpl_vars['auth']->value['user_type']!==smarty_modifier_enum("UserTypes::VENDOR")||$_smarty_tpl->tpl_vars['settings']->value['Vendors']['can_edit_blocks']===smarty_modifier_enum("YesNo::YES"))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars(fn_url("block_manager.manage?selected_location=".((string)$_smarty_tpl->tpl_vars['location_data']->value['location_id'])."&redirect_to_block_manager=1",$_smarty_tpl->tpl_vars['auth']->value['user_type']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("bottom_panel.edit_layout");?>
"><?php echo $_smarty_tpl->__("bottom_panel.edit_layout");?>
</a>
    <?php }?>
    <?php if (fn_check_permissions("templates","manage","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->tpl_vars['auth']->value['user_id'])&&(empty($_smarty_tpl->tpl_vars['auth']->value['company_id'])||fn_check_company_permissions("templates","manage",'',array()))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars(fn_url("templates.manage",$_smarty_tpl->tpl_vars['auth']->value['user_type']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("bottom_panel.edit_template");?>
"><?php echo $_smarty_tpl->__("bottom_panel.edit_template");?>
</a>
    <?php }?>
    <?php if (fn_check_permissions("languages","translations","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->tpl_vars['auth']->value['user_id'])&&(empty($_smarty_tpl->tpl_vars['auth']->value['company_id'])||fn_check_company_permissions("languages","translations",'',array()))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars(fn_url("languages.translations",$_smarty_tpl->tpl_vars['auth']->value['user_type']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("bottom_panel.edit_translations");?>
"><?php echo $_smarty_tpl->__("bottom_panel.edit_translations");?>
</a>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("settings_menu_additional_links", null, null); ob_start(); ?>
    <?php if (fn_check_permissions("templates","manage","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->tpl_vars['auth']->value['user_id'])&&(empty($_smarty_tpl->tpl_vars['auth']->value['company_id'])||fn_check_company_permissions("templates","manage",'',array()))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars(fn_url("menus.manage",$_smarty_tpl->tpl_vars['auth']->value['user_type']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("bottom_panel.edit_menus");?>
"><?php echo $_smarty_tpl->__("bottom_panel.edit_menus");?>
</a>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value==="products"&&fn_check_permissions("tabs","manage","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->tpl_vars['auth']->value['user_id'])&&(empty($_smarty_tpl->tpl_vars['auth']->value['company_id'])||fn_check_company_permissions("tabs","manage",'',array()))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars(fn_url("tabs.manage",$_smarty_tpl->tpl_vars['auth']->value['user_type']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("bottom_panel.edit_product_tabs");?>
"><?php echo $_smarty_tpl->__("bottom_panel.edit_product_tabs");?>
</a>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("settings_menu", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['quick_menu']->value) {?>
        <?php  $_smarty_tpl->tpl_vars['sect'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sect']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['quick_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sect']->key => $_smarty_tpl->tpl_vars['sect']->value) {
$_smarty_tpl->tpl_vars['sect']->_loop = true;
?>
            <div class="bp-dropdown-menu__group">
                <span class="bp-dropdown-menu__item-text bp-dropdown-menu__item-text--head"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sect']->value['section']['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php  $_smarty_tpl->tpl_vars['subsect'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subsect']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sect']->value['subsection']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subsect']->key => $_smarty_tpl->tpl_vars['subsect']->value) {
$_smarty_tpl->tpl_vars['subsect']->_loop = true;
?>
                    <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['subsect']->value['url'],$_smarty_tpl->tpl_vars['auth']->value['user_type']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subsect']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subsect']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                <?php } ?>
            </div>
        <?php } ?>
    <?php }?>
    <?php if (trim(Smarty::$_smarty_vars['capture']['settings_menu_main_links'])) {?>
        <div class="bp-dropdown-menu__group">
            <?php echo Smarty::$_smarty_vars['capture']['settings_menu_main_links'];?>

        </div>
    <?php }?>
    <?php if (trim(Smarty::$_smarty_vars['capture']['settings_menu_additional_links'])) {?>
        <div class="bp-dropdown-menu__group">
            <?php echo Smarty::$_smarty_vars['capture']['settings_menu_additional_links'];?>

        </div>
    <?php }?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"bottom_panel:extra_link_in_settings_menu")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"bottom_panel:extra_link_in_settings_menu"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"bottom_panel:extra_link_in_settings_menu"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php $_smarty_tpl->tpl_vars['utm'] = new Smarty_variable("utm_source=".((string)smarty_modifier_replace(preg_replace('!\s+!u', '',mb_strtolower((defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null), 'UTF-8')),'-','_'))."&utm_medium=".((string)$_smarty_tpl->tpl_vars['edition']->value), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['is_multiple_storefronts']) {?>
    <?php if ($_REQUEST['storefront_id']) {?>
        <?php $_smarty_tpl->tpl_vars['storefront_id'] = new Smarty_variable($_REQUEST['storefront_id'], null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['storefront_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['app']->value['storefront']->storefront_id, null, 0);?>
    <?php }?>
<?php }?>

<div class="bp__container">
    <div id="bp_bottom_panel"
        class="bp-panel bp-panel--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['edition']->value, ENT_QUOTES, 'UTF-8');?>
 bp-panel--<?php echo htmlspecialchars((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-bottom-pannel="true"
        data-bp-mode="demo"
        data-bp-is-bottom-panel-open="true"
        data-bp-nav-active=<?php echo htmlspecialchars((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null), ENT_QUOTES, 'UTF-8');?>

        data-bp-modes-active="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['active_mode']->value, ENT_QUOTES, 'UTF-8');?>
">
        <a href="<?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="customer") {
echo htmlspecialchars(fn_url('',"C"), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(fn_url('',"A"), ENT_QUOTES, 'UTF-8');
}?>"
            class="bp-logo"
            data-bp-tooltip="true">
            <?php echo $_smarty_tpl->getSubTemplate ("backend:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image'=>$_smarty_tpl->tpl_vars['logo']->value,'image_css_class'=>"bp-logo-img--no-color",'show_detailed_link'=>false), 0);?>

            <div class="bp-tooltip bp-tooltip--left">
            <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="customer") {?>
                <?php echo $_smarty_tpl->__("bottom_panel.go_to_home_page");?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->__("bottom_panel.go_to_dashboard");?>

            <?php }?>
            </div>
        </a>
        <div class="bp-nav">
            <?php $_smarty_tpl->tpl_vars['redirect_area'] = new Smarty_variable($_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::VENDOR") ? "V" : "A", null, 0);?>
            <a href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['storefront_id']->value) {?><?php echo "&storefront_id=";?><?php echo (string)$_smarty_tpl->tpl_vars['storefront_id']->value;?><?php }
$_tmp8=ob_get_clean();?><?php echo htmlspecialchars(fn_url("bottom_panel.redirect?url=".((string)urlencode($_smarty_tpl->tpl_vars['config']->value['current_url']))."&area=".((string)(defined('AREA') ? constant('AREA') : null))."&to_area=C".$_tmp8,$_smarty_tpl->tpl_vars['redirect_area']->value), ENT_QUOTES, 'UTF-8');?>
"
                class="bp-nav__item cm-no-ajax
                <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="customer") {?>
                    bp-nav__item--active
                <?php }?>"
                data-bp-nav-item="customer">
                <span class="bp-nav__item-text"><?php echo $_smarty_tpl->__("bottom_panel.storefront");?>
</span>
            </a>
            <?php if (defined("THEMES_PANEL")||$_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::ADMIN")) {?>
                <a href="<?php echo htmlspecialchars(smarty_modifier_replace(fn_url("bottom_panel.redirect?url=".((string)urlencode($_smarty_tpl->tpl_vars['config']->value['current_url']))."&area=".((string)(defined('AREA') ? constant('AREA') : null))."&user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id'])."&switch_company_id=0","A"),$_smarty_tpl->tpl_vars['config']->value['vendor_index'],$_smarty_tpl->tpl_vars['config']->value['admin_index']), ENT_QUOTES, 'UTF-8');?>
" class="bp-nav__item cm-no-ajax
                    <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="admin") {?>
                        bp-nav__item--active
                    <?php }?>"
                    data-bp-nav-item="admin">
                    <span class="bp-nav__item-text"><?php echo $_smarty_tpl->__("bottom_panel.admin_panel");?>
</span>
                </a>
            <?php }?>
            <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                <?php if (defined("THEMES_PANEL")||$_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::VENDOR")) {?>
                    <a href="<?php echo htmlspecialchars(fn_url("bottom_panel.login_as_vendor?url=".((string)urlencode($_smarty_tpl->tpl_vars['config']->value['current_url']))."&area=".((string)(defined('AREA') ? constant('AREA') : null))."&user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id']),"C"), ENT_QUOTES, 'UTF-8');?>
" class="bp-nav__item cm-no-ajax cm-post
                        <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="vendor") {?>
                            bp-nav__item--active
                        <?php }?>"
                        data-bp-nav-item="vendor">
                        <span class="bp-nav__item-text"><?php echo $_smarty_tpl->__("bottom_panel.vendor_panel");?>
</span>
                    </a>
                <?php }?>
            <?php }?>
            <div id="bp-nav__active" class="bp-nav__active
                <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="customer") {?>
                    bp-nav__active--activated
                <?php }?>"></div>
        </div>
        <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="customer") {?>
            <div class="bp-modes">
                <a
                    <?php if ($_smarty_tpl->tpl_vars['active_mode']->value==="text") {?>
                        href="<?php ob_start();
echo htmlspecialchars(urlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
$_tmp9=ob_get_clean();?><?php echo htmlspecialchars(fn_url("customization.disable_mode?type=live_editor&return_url=".$_tmp9), ENT_QUOTES, 'UTF-8');?>
"
                    <?php } elseif ($_smarty_tpl->tpl_vars['active_mode']->value==="theme") {?>
                        href="<?php ob_start();
echo htmlspecialchars(urlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
$_tmp10=ob_get_clean();?><?php echo htmlspecialchars(fn_url("customization.disable_mode?type=theme_editor&return_url=".$_tmp10), ENT_QUOTES, 'UTF-8');?>
"
                    <?php } elseif ($_smarty_tpl->tpl_vars['active_mode']->value==="build") {?>
                        href="<?php ob_start();
echo htmlspecialchars(urlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
$_tmp11=ob_get_clean();?><?php echo htmlspecialchars(fn_url("customization.disable_mode?type=block_manager&return_url=".$_tmp11), ENT_QUOTES, 'UTF-8');?>
"
                    <?php } else { ?>
                        href="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    id="settings_block_manager" class="cm-no-ajax bp-modes__item bp-modes__item--preview
                    <?php if ($_smarty_tpl->tpl_vars['active_mode']->value==="preview") {?>bp-modes__item--active<?php }?>" data-bp-modes-item="preview"
                    data-bp-tooltip="true">
                    <?php echo $_smarty_tpl->getSubTemplate ("backend:components/bottom_panel/icons/bp-modes__item--preview.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <div class="bp-tooltip"><?php echo $_smarty_tpl->__("bottom_panel.preview_mode");?>
</div>
                </a>
                <?php if (fn_check_permissions("customization","update_mode","admin",'',array("type"=>"live_editor"),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->tpl_vars['auth']->value['user_id'])&&$_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::ADMIN")) {?>
                    <a href="<?php ob_start();
echo htmlspecialchars(urlencode($_smarty_tpl->tpl_vars['c_url']->value), ENT_QUOTES, 'UTF-8');
$_tmp12=ob_get_clean();?><?php echo htmlspecialchars(fn_url("customization.update_mode?type=live_editor&status=enable&return_url=".$_tmp12), ENT_QUOTES, 'UTF-8');?>
"
                        id="settings_live_editor"
                        class="cm-no-ajax bp-modes__item bp-modes__item--text
                        <?php if ($_smarty_tpl->tpl_vars['active_mode']->value==="text") {?>bp-modes__item--active<?php }?>"
                        data-bp-modes-item="text"
                        data-bp-tooltip="true">
                        <?php echo $_smarty_tpl->getSubTemplate ("backend:components/bottom_panel/icons/bp-modes__item--text.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        <div class="bp-tooltip"><?php echo $_smarty_tpl->__("bottom_panel.text_mode");?>
</div>
                    </a>
                <?php }?>
                <?php if (fn_check_permissions("customization","update_mode","admin",'',array("type"=>"theme_editor"),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->tpl_vars['auth']->value['user_id'])&&(($_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::ADMIN"))||(($_smarty_tpl->tpl_vars['settings']->value['Vendors']['can_edit_styles']===smarty_modifier_enum("YesNo::YES"))&&$_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::VENDOR")))) {?>
                    <a href=" <?php if (fn_is_theme_editor_available_for_user($_smarty_tpl->tpl_vars['auth']->value)) {
ob_start();
echo htmlspecialchars(urlencode($_smarty_tpl->tpl_vars['c_url']->value), ENT_QUOTES, 'UTF-8');
$_tmp13=ob_get_clean();?><?php echo htmlspecialchars(fn_url("customization.update_mode?type=theme_editor&status=enable&return_url=".$_tmp13), ENT_QUOTES, 'UTF-8');
} else { ?>#<?php }?>"
                        id="settings_theme_editor"
                        class="cm-no-ajax bp-modes__item bp-modes__item--theme
                        <?php if ($_smarty_tpl->tpl_vars['active_mode']->value==="theme") {?>bp-modes__item--active<?php }?>
                        <?php if (!fn_is_theme_editor_available_for_user($_smarty_tpl->tpl_vars['auth']->value)) {?>bp-modes__item--disabled<?php }?>"
                        data-bp-modes-item="theme"
                        data-bp-tooltip="true">
                        <?php echo $_smarty_tpl->getSubTemplate ("backend:components/bottom_panel/icons/bp-modes__item--theme.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        <div class="bp-tooltip">
                            <?php echo $_smarty_tpl->__("bottom_panel.theme_mode");?>

                            <?php if (!fn_is_theme_editor_available_for_user($_smarty_tpl->tpl_vars['auth']->value)) {?>
                                <div class="bp-tooltip__secondary">
                                    <?php echo $_smarty_tpl->__("bottom_panel.theme_mode.not_available");?>

                                </div>
                            <?php }?>
                        </div>
                    </a>
                <?php }?>
                <?php if (fn_check_permissions("customization","update_mode","admin",'',array("type"=>"block_manager"),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->tpl_vars['auth']->value['user_id'])&&(empty($_smarty_tpl->tpl_vars['auth']->value['company_id'])||fn_check_company_permissions("customization","update_mode",'',array("type"=>"block_manager")))&&$_smarty_tpl->tpl_vars['auth']->value['user_type']!==smarty_modifier_enum("UserTypes::CUSTOMER")) {?>
                    <a href="<?php if ($_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {
ob_start();
echo htmlspecialchars(urlencode($_smarty_tpl->tpl_vars['c_url']->value), ENT_QUOTES, 'UTF-8');
$_tmp14=ob_get_clean();?><?php echo htmlspecialchars(fn_url("customization.update_mode?type=block_manager&status=enable&return_url=".$_tmp14), ENT_QUOTES, 'UTF-8');
} else { ?>#<?php }?>"
                       id="settings_block_manager"
                       class="cm-no-ajax bp-modes__item bp-modes__item--build
                        <?php if ($_smarty_tpl->tpl_vars['active_mode']->value==="build") {?>bp-modes__item--active<?php }?>
                        <?php if (!$_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>bp-modes__item--disabled<?php }?>"
                       data-bp-modes-item="build"
                       data-bp-tooltip="true">
                        <?php echo $_smarty_tpl->getSubTemplate ("backend:components/bottom_panel/icons/bp-modes__item--build.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        <div class="bp-tooltip">
                            <?php echo $_smarty_tpl->__("bottom_panel.build_mode");?>

                            <?php if (!$_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
                                <div class="bp-tooltip__secondary">
                                    <?php echo $_smarty_tpl->__("bottom_panel.build_mode.not_available");?>

                                </div>
                            <?php }?>
                        </div>
                    </a>
                <?php }?>
                <div id="bp-modes__active" class="bp-modes__active
                    <?php if ($_smarty_tpl->tpl_vars['active_mode']->value==="preview") {?>
                        bp-modes__active--preview
                    <?php }?>"
                    ></div>
            </div>
        <?php }?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"bottom_panel:extra_element_on_panel")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"bottom_panel:extra_element_on_panel"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"bottom_panel:extra_element_on_panel"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <div class="bp-actions <?php if (!trim(Smarty::$_smarty_vars['capture']['settings_menu'])) {?>bp-actions--one-column<?php }?>">
            <?php if (trim(Smarty::$_smarty_vars['capture']['settings_menu'])) {?>
                <div class="bp-dropdown bp-actions__item">
                    <button class="bp-dropdown-button bp-dropdown-button--animation" data-bp-toggle="dropdown"
                        data-bp-tooltip="true">
                        <?php echo $_smarty_tpl->getSubTemplate ("backend:components/bottom_panel/icons/bp-dropdown-button--settings.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        <span class="bp-tooltip"><?php echo $_smarty_tpl->__("bottom_panel.settings");?>
</span>
                    </button>
                    <div class="bp-dropdown-menu">
                        <?php echo Smarty::$_smarty_vars['capture']['settings_menu'];?>

                    </div>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type']!==smarty_modifier_enum("UserTypes::VENDOR")) {?>
                <div class="bp-dropdown bp-actions__item">
                    <button class="bp-dropdown-button" data-bp-toggle="dropdown" data-bp-tooltip="true">
                        <?php echo $_smarty_tpl->getSubTemplate ("backend:components/bottom_panel/icons/bp-dropdown-button--help.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        <span class="bp-tooltip"><?php echo $_smarty_tpl->__("bottom_panel.help");?>
</span>
                    </button>
                    <div class="bp-dropdown-menu">
                        <div class="bp-dropdown-menu__group">
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['resources']['docs_url'],$_smarty_tpl->tpl_vars['utm']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("bottom_panel.documentation");?>
</a>
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['resources']['forum'],$_smarty_tpl->tpl_vars['utm']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("bottom_panel.community_forums");?>
</a>
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['resources']['video_tutorials'],$_smarty_tpl->tpl_vars['utm']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("bottom_panel.video_tutorials");?>
</a>
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['resources']['faq'],$_smarty_tpl->tpl_vars['utm']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("bottom_panel.faq");?>
</a>
                        </div>
                        <div class="bp-dropdown-menu__group">
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['resources']['helpdesk_url'],$_smarty_tpl->tpl_vars['utm']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("bottom_panel.customer_help_desk");?>
</a>
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['resources']['developers_catalog'],$_smarty_tpl->tpl_vars['utm']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("bottom_panel.hire_a_developers");?>
</a>
                        </div>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"bottom_panel:extra_link_in_help_menu")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"bottom_panel:extra_link_in_help_menu"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"bottom_panel:extra_link_in_help_menu"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>
                </div>
            <?php }?>
        </div>
        <button id="bp_off_bottom_panel" class="bp-close"
            data-bp-tooltip="true"
            data-bp-save-state="true">
            <?php echo $_smarty_tpl->getSubTemplate ("backend:components/bottom_panel/icons/bp-close.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <span class="bp-tooltip bp-tooltip--right"><?php echo $_smarty_tpl->__("bottom_panel.hide_bottom_admin_panel");?>
</span>
        </button>
    </div>
    <div id="bp_bottom_buttons" class="bp-bottom-buttons
        <?php if (!$_smarty_tpl->tpl_vars['pb_is_bottom_panel_open']->value) {?>
            bp-bottom-buttons--active
        <?php }?>">
        <button id="bp_on_bottom_panel"
            class="bp-bottom-button bp-bottom-button--logo
            <?php if ($_smarty_tpl->tpl_vars['pb_is_bottom_panel_open']->value) {?>
                bp-bottom-button--disabled bp-bottom-button--disabled-panel
            <?php }?>"
            data-bp-bottom-buttons="panel"
            data-bp-tooltip="true">
            <?php echo $_smarty_tpl->getSubTemplate ("backend:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image'=>$_smarty_tpl->tpl_vars['logo']->value,'image_css_class'=>"bp-logo-img bp-bottom-button-img",'show_detailed_link'=>false), 0);?>

            <span class="bp-tooltip bp-tooltip--left"><?php echo $_smarty_tpl->__("bottom_panel.show_bottom_admin_panel");?>
</span>
        </button>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"bottom_panel:extra_element_on_closed_panel")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"bottom_panel:extra_element_on_closed_panel"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"bottom_panel:extra_element_on_closed_panel"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
</div>
<?php echo smarty_function_script(array('src'=>"js/tygh/bottom_panel.js"),$_smarty_tpl);?>

<?php }?><?php }} ?>
