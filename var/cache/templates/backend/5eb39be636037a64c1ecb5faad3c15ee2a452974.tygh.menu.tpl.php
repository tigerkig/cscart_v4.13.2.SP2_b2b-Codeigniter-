<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 12:31:13
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17176565756175235a34a825-40703126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5eb39be636037a64c1ecb5faad3c15ee2a452974' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\menu.tpl',
      1 => 1635067867,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17176565756175235a34a825-40703126',
  'function' => 
  array (
    'menu_attrs' => 
    array (
      'parameter' => 
      array (
        'attrs' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6175235a4ef214_43244175',
  'variables' => 
  array (
    'attrs' => 0,
    'attr' => 0,
    'value' => 0,
    'sticky_top' => 0,
    'sticky_padding' => 0,
    'runtime' => 0,
    'settings' => 0,
    'auth' => 0,
    'storefront_url' => 0,
    'title' => 0,
    'app' => 0,
    'storefront_id' => 0,
    'storefront_status_icon' => 0,
    'company_name' => 0,
    'navigation' => 0,
    'first_level_title' => 0,
    'm' => 0,
    'second_level' => 0,
    'second_level_title' => 0,
    'sm' => 0,
    'subitem_title' => 0,
    'languages' => 0,
    'currencies' => 0,
    'config' => 0,
    'secondary_currency' => 0,
    'user_info' => 0,
    'companies_picker_name' => 0,
    'id_prefix' => 0,
    'onclick' => 0,
  ),
  'has_nocache_code' => 0,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6175235a4ef214_43244175')) {function content_6175235a4ef214_43244175($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_sizeof')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.sizeof.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('all_vendors','no_active_storefronts','view_storefront','storefront','view_storefront','vendor','signed_in_as','edit_profile','log_in_as_vendor','sign_out','feedback_values','send_feedback','search','close','signed_in_as','edit_profile','sign_out','manage_stores','feedback_values','send_feedback','view_storefront','view_storefront','view_storefront','view_storefront','home','language','currency','go_back'));
?>
<?php if (defined("THEMES_PANEL")) {?>
    <?php $_smarty_tpl->tpl_vars['sticky_top'] = new Smarty_variable(-5, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sticky_padding'] = new Smarty_variable(35, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['sticky_top'] = new Smarty_variable(-40, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sticky_padding'] = new Smarty_variable(0, null, 0);?>
<?php }?>

<?php if (!function_exists('smarty_template_function_menu_attrs')) {
    function smarty_template_function_menu_attrs($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['menu_attrs']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['attr'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['attrs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['attr']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attr']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
    <?php } ?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

<div class="navbar-admin-top cm-sticky-scroll" data-ca-stick-on-screens="sm-large,md,md-large,lg,uhd" data-ca-top="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sticky_top']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-padding="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sticky_padding']->value, ENT_QUOTES, 'UTF-8');?>
">
    <!--Navbar-->
    <div class="navbar navbar-inverse mobile-hidden" id="header_navbar">
        <div class="navbar-inner<?php if ($_smarty_tpl->tpl_vars['runtime']->value['is_current_storefront_closed']||$_smarty_tpl->tpl_vars['runtime']->value['are_all_storefronts_closed']) {?> navbar-inner--disabled<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company']) {?>
            <?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company'], null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Company']['company_name'], null, 0);?>
        <?php }?>

        <?php if (fn_allowed_for("ULTIMATE")) {?>
            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['is_current_storefront_closed']||$_smarty_tpl->tpl_vars['runtime']->value['are_all_storefronts_closed']) {?>
                <?php $_smarty_tpl->tpl_vars['storefront_status_icon'] = new Smarty_variable("icon-lock", null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['have_closed_storefronts']) {?>
                <?php $_smarty_tpl->tpl_vars['storefront_status_icon'] = new Smarty_variable("icon-unlock-alt", null, 0);?>
            <?php }?>

            <div class="nav-ult">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"menu:storefront_icon")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"menu:storefront_icon"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_data']['company_id']) {?>
                        <?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable($_smarty_tpl->__("all_vendors"), null, 0);?>
                    <?php }?>
                <li class="nav-company">
                    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['are_all_storefronts_closed']) {?>
                        <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->__("no_active_storefronts"), null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->__("view_storefront"), null, 0);?>
                    <?php }?>
                    <?php $_smarty_tpl->tpl_vars['storefront_url'] = new Smarty_variable(fn_url("profiles.act_as_user?user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id'])."&area=C"), null, 0);?>
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront_url']->value, ENT_QUOTES, 'UTF-8');?>
" target="_blank" class="brand" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <i class="icon-shopping-cart icon-white"></i>
                    </a>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"menu:storefront_icon"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']||$_smarty_tpl->tpl_vars['runtime']->value['forced_company_id']) {?>
                    <ul class="nav">
                        <li class="dropdown">
                            <a href="<?php echo htmlspecialchars(fn_url("companies.update?company_id=".((string)$_smarty_tpl->tpl_vars['runtime']->value['company_data']['company_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("storefront");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company'], ENT_QUOTES, 'UTF-8');?>
</a>
                        </li>
                    </ul>
                <?php }?>
            </div>
        <?php }?>

        <?php if (fn_allowed_for("MULTIVENDOR")&&!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>

            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['are_all_storefronts_closed']) {?>
                <?php $_smarty_tpl->tpl_vars['storefront_status_icon'] = new Smarty_variable("icon-lock", null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['have_closed_storefronts']) {?>
                <?php $_smarty_tpl->tpl_vars['storefront_status_icon'] = new Smarty_variable("icon-unlock-alt", null, 0);?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['is_multiple_storefronts']) {?>
                <?php if ($_REQUEST['storefront_id']) {?>
                    <?php $_smarty_tpl->tpl_vars['storefront_id'] = new Smarty_variable($_REQUEST['storefront_id'], null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['storefront_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['app']->value['storefront']->storefront_id, null, 0);?>
                <?php }?>
            <?php }?>

            <ul class="nav">
                <li class="nav-company">
                    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type']==smarty_modifier_enum("UserTypes::ADMIN")) {?>
                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['storefront_id']->value) {?><?php echo "&storefront_id=";?><?php echo (string)$_smarty_tpl->tpl_vars['storefront_id']->value;?><?php }
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['storefront_url'] = new Smarty_variable(fn_url("profiles.act_as_user?user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id'])."&area=C".$_tmp1), null, 0);?>
                    <?php } else { ?>
                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['storefront_id']->value) {?><?php echo "&storefront_id=";?><?php echo (string)$_smarty_tpl->tpl_vars['storefront_id']->value;?><?php }
$_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['storefront_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['runtime']->value['company_id'] ? "companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['runtime']->value['company_id']).$_tmp2 : '', null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['storefront_url'] = new Smarty_variable(fn_url($_smarty_tpl->tpl_vars['storefront_url']->value,"C"), null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['storefront_access_key']) {?>
                            <?php $_smarty_tpl->tpl_vars['storefront_url'] = new Smarty_variable(fn_link_attach($_smarty_tpl->tpl_vars['storefront_url']->value,"store_access_key=".((string)$_smarty_tpl->tpl_vars['runtime']->value['storefront_access_key'])), null, 0);?>
                        <?php }?>
                    <?php }?>
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront_url']->value, ENT_QUOTES, 'UTF-8');?>
" target="_blank" class="brand" title="<?php echo $_smarty_tpl->__("view_storefront");?>
">
                        <i class="icon-shopping-cart icon-white"></i>
                    </a>
                    <?php if ($_smarty_tpl->tpl_vars['storefront_status_icon']->value&&fn_check_view_permissions("storefronts.manage","GET")) {?>
                    <a href="<?php echo htmlspecialchars(fn_url("storefronts.manage"), ENT_QUOTES, 'UTF-8');?>
" class="brand">
                        <i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront_status_icon']->value, ENT_QUOTES, 'UTF-8');?>
 dropdown-menu__icon"></i>
                    </a>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>
                        <?php $_smarty_tpl->tpl_vars["company_name"] = new Smarty_variable($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company'], null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars["company_name"] = new Smarty_variable(smarty_modifier_truncate($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company'],43,"...",true), null, 0);?>
                    <?php }?>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['auth']->value['company_id']) {?>
                    <li class="dropdown">
                        <a href="<?php echo htmlspecialchars(fn_url("companies.update?company_id=".((string)$_smarty_tpl->tpl_vars['runtime']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("vendor");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company'], ENT_QUOTES, 'UTF-8');?>
</a>
                    </li>
                <?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_check_view_permissions("companies.update","GET")) {?>
                    <li class="dropdown">
                        <a href="<?php echo htmlspecialchars(fn_url("companies.update?company_id=".((string)$_smarty_tpl->tpl_vars['runtime']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_name']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                    </li>
                <?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                    <li class="dropdown">
                        <a class="unedited-element"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_name']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                    </li>
                <?php }?>
            </ul>
        <?php }?>

            <ul id="mainrightnavbar" class="nav hover-show navbar-right">
            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['navigation']->value['static']) {?>

                <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_smarty_tpl->tpl_vars['first_level_title'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navigation']->value['static']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
 $_smarty_tpl->tpl_vars['first_level_title']->value = $_smarty_tpl->tpl_vars['m']->key;
?>
                    <li class="dropdown dropdown-top-menu-item<?php if ($_smarty_tpl->tpl_vars['first_level_title']->value==$_smarty_tpl->tpl_vars['navigation']->value['selected_tab']) {?> active<?php }?> navigate-items">
                        <a id="elm_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php if ($_smarty_tpl->tpl_vars['m']->value['href']) {
echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['m']->value['href']), ENT_QUOTES, 'UTF-8');
} else { ?>#<?php }?>" class="dropdown-toggle <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['first_level_title']->value);?>

                            <?php if ($_smarty_tpl->tpl_vars['m']->value['items']) {?>
                                <b class="caret"></b>
                            <?php }?>
                        </a>
                        <?php if ($_smarty_tpl->tpl_vars['m']->value['items']) {?>
                        <ul class="dropdown-menu">
                            <?php  $_smarty_tpl->tpl_vars["second_level"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["second_level"]->_loop = false;
 $_smarty_tpl->tpl_vars['second_level_title'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['m']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["second_level"]->key => $_smarty_tpl->tpl_vars["second_level"]->value) {
$_smarty_tpl->tpl_vars["second_level"]->_loop = true;
 $_smarty_tpl->tpl_vars['second_level_title']->value = $_smarty_tpl->tpl_vars["second_level"]->key;
?>
                                <li class="<?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?>dropdown-submenu<?php }
if ($_smarty_tpl->tpl_vars['second_level_title']->value==$_smarty_tpl->tpl_vars['navigation']->value['subsection']) {?> active<?php }?> <?php if ($_smarty_tpl->tpl_vars['second_level']->value['is_promo']) {?>cm-promo-popup<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class'], ENT_QUOTES, 'UTF-8');?>
" <?php smarty_template_function_menu_attrs($_smarty_tpl,array('attrs'=>$_smarty_tpl->tpl_vars['second_level']->value['attrs']['main']));?>
>
                                    <?php if ($_smarty_tpl->tpl_vars['second_level']->value['type']=="title") {?>
                                        <?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?><div class="dropdown-submenu__link-overlay"></div><?php }?>
                                        <a id="elm_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level_title']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?>dropdown-submenu__link<?php }?> <?php if ($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class_href']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class_href'], ENT_QUOTES, 'UTF-8');
}?>" <?php smarty_template_function_menu_attrs($_smarty_tpl,array('attrs'=>$_smarty_tpl->tpl_vars['second_level']->value['attrs']['href']));?>
>
                                            <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['second_level']->value['title'])===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['second_level_title']->value) : $tmp), ENT_QUOTES, 'UTF-8');?>

                                            <?php if ($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class']=="is-addon") {?><span><i class="icon-is-addon"></i></span><?php }?>
                                        </a>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['second_level']->value['type']!="divider") {?>
                                        <?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?><div class="dropdown-submenu__link-overlay"></div><?php }?>
                                        <a id="elm_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level_title']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?>dropdown-submenu__link<?php }?> <?php if ($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class_href']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class_href'], ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['second_level']->value['href']), ENT_QUOTES, 'UTF-8');?>
" <?php smarty_template_function_menu_attrs($_smarty_tpl,array('attrs'=>$_smarty_tpl->tpl_vars['second_level']->value['attrs']['href']));?>
>
                                            <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['second_level']->value['title'])===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['second_level_title']->value) : $tmp), ENT_QUOTES, 'UTF-8');?>

                                            <?php if ($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class']=="is-addon") {?><span><i class="icon-is-addon"></i></span><?php }?>
                                        </a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?>
                                        <ul class="dropdown-menu">
                                            <?php  $_smarty_tpl->tpl_vars['sm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sm']->_loop = false;
 $_smarty_tpl->tpl_vars['subitem_title'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['second_level']->value['subitems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sm']->key => $_smarty_tpl->tpl_vars['sm']->value) {
$_smarty_tpl->tpl_vars['sm']->_loop = true;
 $_smarty_tpl->tpl_vars['subitem_title']->value = $_smarty_tpl->tpl_vars['sm']->key;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['sm']->value['type']!="divider") {?>
                                                <li class="<?php if ($_smarty_tpl->tpl_vars['sm']->value['active']) {?>active<?php }?> <?php if ($_smarty_tpl->tpl_vars['sm']->value['is_promo']) {?>cm-promo-popup<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class'], ENT_QUOTES, 'UTF-8');?>
" <?php smarty_template_function_menu_attrs($_smarty_tpl,array('attrs'=>$_smarty_tpl->tpl_vars['sm']->value['attrs']['main']));?>
>
                                                    <?php if ($_smarty_tpl->tpl_vars['sm']->value['type']=="title") {?>
                                                        <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['subitem_title']->value);?>

                                                    <?php } elseif ($_smarty_tpl->tpl_vars['sm']->value['type']!="divider") {?>
                                                        <a id="elm_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level_title']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subitem_title']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['sm']->value['attrs']['class']) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sm']->value['attrs']['class'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['sm']->value['href']), ENT_QUOTES, 'UTF-8');?>
" <?php smarty_template_function_menu_attrs($_smarty_tpl,array('attrs'=>$_smarty_tpl->tpl_vars['sm']->value['attrs']['href']));?>
><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['sm']->value['title'])===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['subitem_title']->value) : $tmp), ENT_QUOTES, 'UTF-8');?>

                                                            <?php if ($_smarty_tpl->tpl_vars['sm']->value['attrs']['class']=="is-addon") {?><span><i class="icon-is-addon"></i></span><?php }?>
                                                        </a>
                                                    <?php }?>
                                                </li>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['sm']->value['type']=="divider") {?>
                                                    <li class="divider"></li>
                                                <?php }?>
                                            <?php } ?>
                                        </ul>
                                    <?php }?>
                                </li>
                                <?php if ($_smarty_tpl->tpl_vars['second_level']->value['type']=="divider") {?>
                                    <li class="divider"></li>
                                <?php }?>
                            <?php } ?>
                        </ul>
                        <?php }?>
                    </li>
                <?php } ?>
            <?php }?>
                <!-- end navbar-->

            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>

                <?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['languages']->value)>1||smarty_modifier_sizeof($_smarty_tpl->tpl_vars['currencies']->value)>1) {?>
                    <li class="divider-vertical"></li>
                <?php }?>

                <!--language-->
                <?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
                    <?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"dropdown",'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"sl="),'items'=>$_smarty_tpl->tpl_vars['languages']->value,'selected_id'=>(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),'display_icons'=>true,'key_name'=>"name",'key_selected'=>"lang_code",'class'=>"languages"), 0);?>

                    <?php }?>
                <?php }?>
                <!--end language-->

                <!-- Notification Center -->
                    <?php echo $_smarty_tpl->getSubTemplate ("components/notifications_center/opener.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <!-- /Notification Center -->

                <!--Curriencies-->
                <?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['currencies']->value)>1) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"dropdown",'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"currency="),'items'=>$_smarty_tpl->tpl_vars['currencies']->value,'selected_id'=>$_smarty_tpl->tpl_vars['secondary_currency']->value,'display_icons'=>false,'key_name'=>"description",'key_selected'=>"currency_code"), 0);?>

                <?php }?>
                <!--end curriencies-->

                <li class="divider-vertical"></li>

                <!-- user menu -->
                <li class="dropdown dropdown-top-menu-item dropdown--open-enable">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:top_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:top_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <a class="dropdown-toggle">
                            <i class="icon-white icon-user"></i>
                            <b class="caret"></b>
                        </a>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:top_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <ul class="dropdown-menu pull-right">
                        <li class="disabled">
                            <a><strong><?php echo $_smarty_tpl->__("signed_in_as");?>
</strong><br><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a>
                        </li>
                        <li class="divider"></li>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"menu:profile")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"menu:profile"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li><a href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("edit_profile");?>
</a></li>
                        <?php if (fn_allowed_for("MULTIVENDOR")&&!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']&&$_smarty_tpl->tpl_vars['auth']->value['user_type']==smarty_modifier_enum("UserTypes::ADMIN")&&fn_check_view_permissions("companies.get_companies_list","GET")&&fn_check_view_permissions("profiles.login_as_vendor","POST")) {?>
                            <li id="company_picker_dropdown_menu"
                                class="js-company-switcher"
                                data-ca-switcher-param-name="company_id"
                                data-ca-switcher-data-name="company_id">
                                <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>$_smarty_tpl->tpl_vars['companies_picker_name']->value,'item_ids'=>array($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company_id']),'type'=>"list",'show_advanced'=>false,'selection_title_pre'=>$_smarty_tpl->__("log_in_as_vendor"),'dropdown_parent_selector'=>"#company_picker_dropdown_menu"), 0);?>

                            </li>
                        <?php }?>
                        <li><a href="<?php echo htmlspecialchars(fn_url("auth.logout"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("sign_out");?>
</a></li>
                        <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                            <li class="divider"></li>
                            <li>
                                <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"group".((string)$_smarty_tpl->tpl_vars['id_prefix']->value)."feedback",'edit_onclick'=>$_smarty_tpl->tpl_vars['onclick']->value,'text'=>$_smarty_tpl->__("feedback_values"),'act'=>"link",'picker_meta'=>"cm-clear-content",'link_text'=>$_smarty_tpl->__("send_feedback",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))),'content'=>Smarty::$_smarty_vars['capture']['update_block'],'href'=>"feedback.prepare",'no_icon_link'=>true,'but_name'=>"dispatch[feedback.send]",'opener_ajax_class'=>"cm-ajax"), 0);?>

                            </li>
                        <?php }?>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"menu:profile"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </li>
                <!--end user menu -->
            <?php }?>
            </ul>

        </div>
    <!--header_navbar--></div>

    <!--Subnav-->
    <div class="subnav" id="header_subnav">
        <!--quick search-->
        <div class="search pull-right">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:global_search")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:global_search"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <form id="global_search" method="get" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" class="search__form">
                    <input type="hidden" name="dispatch" value="search.results" />
                    <input type="hidden" name="compact" value="Y" />
                    <label for="gs_text" class="search__group">
                        <input type="text" class="cm-autocomplete-off search__input" id="gs_text" name="q" placeholder="<?php echo $_smarty_tpl->__("search");?>
" value="<?php echo htmlspecialchars($_REQUEST['q'], ENT_QUOTES, 'UTF-8');?>
" />
                        <button class="btn search__button" type="submit" id="search_button"></button>
                    </label>
                </form>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:global_search"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        </div>
        <!--end quick search-->

        <!-- quick menu -->
        <?php echo $_smarty_tpl->getSubTemplate ("common/quick_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!-- end quick menu -->

        <ul class="nav hover-show nav-pills">
            <li class="mobile-hidden"><a href="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" class="home"><i class="icon-home"></i></a></li>

            <div class="menu-heading mobile-visible">

                <button class="btn btn-primary mobile-visible-inline mobile-menu-closer"><?php echo $_smarty_tpl->__("close");?>
</button>


                <!-- title of heading -->
                <div class="menu-heading__title-block">
                    <span class="menu-heading__title-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['email'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <span class="caret menu-heading__title-caret"></span>
                </div>

                <div class="menu-heading__dropdowned closed">
                <ul class="dropdown-menu menu-heading__dropdowned-menu">
                    
                    <li class="disabled">
                        <a><strong><?php echo $_smarty_tpl->__("signed_in_as");?>
</strong><br><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a>
                    </li>
                    <li class="divider"></li>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"menu:profile")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"menu:profile"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li><a href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("edit_profile");?>
</a></li>
                        <li><a href="<?php echo htmlspecialchars(fn_url("auth.logout"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("sign_out");?>
</a></li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"menu:profile"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    

                    <?php if (fn_allowed_for("ULTIMATE")) {?>
                        <?php if (fn_check_view_permissions("companies.manage","GET")) {?>
                            <li class="divider"></li>
                            <li><a href="<?php echo htmlspecialchars(fn_url("companies.manage?switch_company_id=0"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("manage_stores");?>
...</a></li>
                        <?php }?>
                    <?php }?>

                    
                    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                        <li class="divider"></li>
                        <li>
                            <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"group".((string)$_smarty_tpl->tpl_vars['id_prefix']->value)."feedback",'edit_onclick'=>$_smarty_tpl->tpl_vars['onclick']->value,'text'=>$_smarty_tpl->__("feedback_values"),'act'=>"link",'picker_meta'=>"cm-clear-content",'link_text'=>$_smarty_tpl->__("send_feedback",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))),'content'=>Smarty::$_smarty_vars['capture']['update_block'],'href'=>"feedback.prepare",'no_icon_link'=>true,'but_name'=>"dispatch[feedback.send]",'opener_ajax_class'=>"cm-ajax"), 0);?>

                        </li>
                    <?php }?>
                    
                </ul>
                </div>
            </div>

            <ul class="nav hover-show nav-pills nav-child mobile-visible nav-first">
            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_data']['storefront']) {?>
                <li class="dropdown">
                    <?php $_smarty_tpl->tpl_vars['storefront_url'] = new Smarty_variable(fn_url("profiles.act_as_user?user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id'])."&area=C"), null, 0);?>
                    <a  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                        target="_blank"
                        title="<?php echo $_smarty_tpl->__("view_storefront");?>
"
                        class="dropdown-toggle"
                    ><?php echo $_smarty_tpl->__("view_storefront");?>
</a>
                </li>
            <?php } elseif (fn_allowed_for("MULTIVENDOR")) {?>
                <li class="dropdown">
                    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type']==smarty_modifier_enum("UserTypes::ADMIN")) {?>
                        <?php $_smarty_tpl->tpl_vars['storefront_url'] = new Smarty_variable(fn_url("profiles.act_as_user?user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id'])."&area=C"), null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars['storefront_url'] = new Smarty_variable(fn_url('',"C"), null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['storefront_access_key']) {?>
                            <?php $_smarty_tpl->tpl_vars['storefront_url'] = new Smarty_variable(fn_link_attach($_smarty_tpl->tpl_vars['storefront_url']->value,"store_access_key=".((string)$_smarty_tpl->tpl_vars['runtime']->value['storefront_access_key'])), null, 0);?>
                        <?php }?>
                    <?php }?>
                    <a  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                        target="_blank"
                        title="<?php echo $_smarty_tpl->__("view_storefront");?>
"
                        class="dropdown-toggle"
                    ><?php echo $_smarty_tpl->__("view_storefront");?>
</a>
                </li>
            <?php }?>
                <li class="dropdown"><a href="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" class="dropdown-toggle"><?php echo $_smarty_tpl->__("home");?>
</a></li>
            </ul>

            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['navigation']->value['static']['central']) {?>
            <hr class="mobile-visible navbar-hr" />
            <ul class="nav hover-show nav-pills nav-child">
            <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_smarty_tpl->tpl_vars['first_level_title'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navigation']->value['static']['central']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
 $_smarty_tpl->tpl_vars['first_level_title']->value = $_smarty_tpl->tpl_vars['m']->key;
?>
                <li class="dropdown <?php if ($_smarty_tpl->tpl_vars['first_level_title']->value==$_smarty_tpl->tpl_vars['navigation']->value['selected_tab']) {?> active<?php }?> ">
                    <a href="#" class="dropdown-toggle">
                        <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['m']->value['title'])===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['first_level_title']->value) : $tmp), ENT_QUOTES, 'UTF-8');?>

                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <?php  $_smarty_tpl->tpl_vars["second_level"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["second_level"]->_loop = false;
 $_smarty_tpl->tpl_vars['second_level_title'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['m']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["second_level"]->key => $_smarty_tpl->tpl_vars["second_level"]->value) {
$_smarty_tpl->tpl_vars["second_level"]->_loop = true;
 $_smarty_tpl->tpl_vars['second_level_title']->value = $_smarty_tpl->tpl_vars["second_level"]->key;
?>
                            <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level_title']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?> dropdown-submenu<?php }
if ($_smarty_tpl->tpl_vars['second_level_title']->value==$_smarty_tpl->tpl_vars['navigation']->value['subsection']&&$_smarty_tpl->tpl_vars['first_level_title']->value==$_smarty_tpl->tpl_vars['navigation']->value['selected_tab']) {?> active<?php }?>" <?php smarty_template_function_menu_attrs($_smarty_tpl,array('attrs'=>$_smarty_tpl->tpl_vars['second_level']->value['attrs']['main']));?>
>
                                <?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?><div class="dropdown-submenu__link-overlay"></div><?php }?>
                                <a class="<?php if ($_smarty_tpl->tpl_vars['second_level']->value['is_promo']) {?>cm-promo-popup<?php }?> <?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?>dropdown-submenu__link<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class'], ENT_QUOTES, 'UTF-8');?>
" <?php if (!$_smarty_tpl->tpl_vars['second_level']->value['is_promo']) {?>href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['second_level']->value['href']), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php smarty_template_function_menu_attrs($_smarty_tpl,array('attrs'=>$_smarty_tpl->tpl_vars['second_level']->value['attrs']['href']));?>
>
                                <span><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['second_level_title']->value);
if ($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class']=="is-addon") {?><i class="icon-is-addon"></i><?php }?></span>
                                <?php if ($_smarty_tpl->__($_smarty_tpl->tpl_vars['second_level']->value['description'])!="_".((string)$_smarty_tpl->tpl_vars['second_level_title']->value)."_menu_description") {
if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['show_menu_descriptions']=="Y") {?><span class="hint"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['second_level']->value['description']);?>
</span><?php }
}?></a>

                                <?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?>
                                    <ul class="dropdown-menu">
                                        <?php  $_smarty_tpl->tpl_vars['sm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sm']->_loop = false;
 $_smarty_tpl->tpl_vars['subitem_title'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['second_level']->value['subitems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sm']->key => $_smarty_tpl->tpl_vars['sm']->value) {
$_smarty_tpl->tpl_vars['sm']->_loop = true;
 $_smarty_tpl->tpl_vars['subitem_title']->value = $_smarty_tpl->tpl_vars['sm']->key;
?>
                                            <li class="<?php if ($_smarty_tpl->tpl_vars['sm']->value['active']) {?>active<?php }?> <?php if ($_smarty_tpl->tpl_vars['sm']->value['is_promo']) {?>cm-promo-popup<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class'], ENT_QUOTES, 'UTF-8');?>
" <?php smarty_template_function_menu_attrs($_smarty_tpl,array('attrs'=>$_smarty_tpl->tpl_vars['sm']->value['attrs']['main']));?>
><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['sm']->value['href']), ENT_QUOTES, 'UTF-8');?>
" <?php smarty_template_function_menu_attrs($_smarty_tpl,array('attrs'=>$_smarty_tpl->tpl_vars['sm']->value['attrs']['href']));?>
><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['subitem_title']->value);?>
</a></li>
                                        <?php } ?>
                                    </ul>
                                <?php }?>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>
            </ul>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['navigation']->value['static']['top']) {?>
            <hr class="mobile-visible navbar-hr" />
            <ul class="nav hover-show nav-pills nav-child mobile-visible">
            <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_smarty_tpl->tpl_vars['first_level_title'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navigation']->value['static']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
 $_smarty_tpl->tpl_vars['first_level_title']->value = $_smarty_tpl->tpl_vars['m']->key;
?>
                <li class="dropdown dropdown-top-menu-item<?php if ($_smarty_tpl->tpl_vars['first_level_title']->value==$_smarty_tpl->tpl_vars['navigation']->value['selected_tab']) {?> active<?php }?> navigate-items">
                    <a id="elm_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
" href="#" class="dropdown-toggle <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['first_level_title']->value);?>

                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <?php  $_smarty_tpl->tpl_vars["second_level"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["second_level"]->_loop = false;
 $_smarty_tpl->tpl_vars['second_level_title'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['m']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["second_level"]->key => $_smarty_tpl->tpl_vars["second_level"]->value) {
$_smarty_tpl->tpl_vars["second_level"]->_loop = true;
 $_smarty_tpl->tpl_vars['second_level_title']->value = $_smarty_tpl->tpl_vars["second_level"]->key;
?>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?>dropdown-submenu<?php }
if ($_smarty_tpl->tpl_vars['second_level_title']->value==$_smarty_tpl->tpl_vars['navigation']->value['subsection']) {?> active<?php }?> <?php if ($_smarty_tpl->tpl_vars['second_level']->value['is_promo']) {?>cm-promo-popup<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class'], ENT_QUOTES, 'UTF-8');?>
" <?php smarty_template_function_menu_attrs($_smarty_tpl,array('attrs'=>$_smarty_tpl->tpl_vars['second_level']->value['attrs']['main']));?>
>
                                <?php if ($_smarty_tpl->tpl_vars['second_level']->value['type']=="title") {?>
                                    <a id="elm_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level_title']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class_href']) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class_href'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php smarty_template_function_menu_attrs($_smarty_tpl,array('attrs'=>$_smarty_tpl->tpl_vars['second_level']->value['attrs']['href']));?>
><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['second_level']->value['title'])===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['second_level_title']->value) : $tmp), ENT_QUOTES, 'UTF-8');?>
</a>
                                <?php } elseif ($_smarty_tpl->tpl_vars['second_level']->value['type']!="divider") {?>
                                    <a id="elm_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level_title']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class_href']) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class_href'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['second_level']->value['href']), ENT_QUOTES, 'UTF-8');?>
" <?php smarty_template_function_menu_attrs($_smarty_tpl,array('attrs'=>$_smarty_tpl->tpl_vars['second_level']->value['attrs']['href']));?>
><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['second_level']->value['title'])===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['second_level_title']->value) : $tmp), ENT_QUOTES, 'UTF-8');?>

                                        <?php if ($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class']=="is-addon") {?><span><i class="icon-is-addon"></i></span><?php }?>
                                    </a>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?>
                                    <ul class="dropdown-menu">
                                        <?php  $_smarty_tpl->tpl_vars['sm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sm']->_loop = false;
 $_smarty_tpl->tpl_vars['subitem_title'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['second_level']->value['subitems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sm']->key => $_smarty_tpl->tpl_vars['sm']->value) {
$_smarty_tpl->tpl_vars['sm']->_loop = true;
 $_smarty_tpl->tpl_vars['subitem_title']->value = $_smarty_tpl->tpl_vars['sm']->key;
?>
                                            <li class="<?php if ($_smarty_tpl->tpl_vars['sm']->value['active']) {?>active<?php }?> <?php if ($_smarty_tpl->tpl_vars['sm']->value['is_promo']) {?>cm-promo-popup<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class'], ENT_QUOTES, 'UTF-8');?>
" <?php smarty_template_function_menu_attrs($_smarty_tpl,array('attrs'=>$_smarty_tpl->tpl_vars['sm']->value['attrs']['main']));?>
>
                                                <?php if ($_smarty_tpl->tpl_vars['sm']->value['type']=="title") {?>
                                                    <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['subitem_title']->value);?>

                                                <?php } elseif ($_smarty_tpl->tpl_vars['sm']->value['type']!="divider") {?>
                                                    <a id="elm_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level_title']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subitem_title']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['sm']->value['href']), ENT_QUOTES, 'UTF-8');?>
" <?php smarty_template_function_menu_attrs($_smarty_tpl,array('attrs'=>$_smarty_tpl->tpl_vars['sm']->value['attrs']['href']));?>
><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['sm']->value['title'])===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['subitem_title']->value) : $tmp), ENT_QUOTES, 'UTF-8');?>
</a>
                                                <?php }?>
                                            </li>
                                            <?php if ($_smarty_tpl->tpl_vars['sm']->value['type']=="divider") {?>
                                                <li class="divider"></li>
                                            <?php }?>
                                        <?php } ?>
                                    </ul>
                                <?php }?>
                            </li>
                            <?php if ($_smarty_tpl->tpl_vars['second_level']->value['type']=="divider") {?>
                                <li class="divider"></li>
                            <?php }?>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>
            </ul>
            <?php }?>

            <hr class="mobile-visible navbar-hr" />
            <ul class="nav hover-show nav-pills nav-child mobile-visible">
                <!--language-->
                <?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"dropdown",'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"sl="),'items'=>$_smarty_tpl->tpl_vars['languages']->value,'selected_id'=>(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),'display_icons'=>true,'key_name'=>"name",'key_selected'=>"lang_code",'class'=>"languages",'plain_name'=>$_smarty_tpl->__("language")), 0);?>

                <?php }?>
                <!--end language-->

                <!--curriencies-->
                <?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['currencies']->value)>1) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"dropdown",'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"currency="),'items'=>$_smarty_tpl->tpl_vars['currencies']->value,'selected_id'=>$_smarty_tpl->tpl_vars['secondary_currency']->value,'display_icons'=>false,'key_name'=>"description",'key_selected'=>"currency_code",'plain_name'=>$_smarty_tpl->__("currency")), 0);?>

                <?php }?>
                <!--end curriencies-->
            </ul>
            <hr class="mobile-visible navbar-hr" />

        </ul>
    <!--header_subnav--></div>
</div>


<div class="overlayed-mobile-menu mobile-visible">
    <div class="overlayed-mobile-menu__content">
        <div class="overlayed-mobile-menu__title-container">
            <h3 class="overlayed-mobile-menu-title"></h3>
        </div>

        <div class="overlayed-mobile-menu-closer">
            <button class="mobile-visible-inline overlay-navbar-close btn btn-primary"><?php echo $_smarty_tpl->__("go_back");?>
</button>
        </div>
    </div>

    <div class="overlayed-mobile-menu__content">
    </div>
    <div class="overlayed-mobile-menu-container"></div>
</div>

<?php }} ?>
