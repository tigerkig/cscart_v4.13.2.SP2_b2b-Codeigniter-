<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 12:32:48
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\views\addons\components\addons\addon_full_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1022620495617528409ed481-27553727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ac87bf77eb5063ee1e9c9a2cad68a198e20f072' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\views\\addons\\components\\addons\\addon_full_info.tpl',
      1 => 1628148888,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1022620495617528409ed481-27553727',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon' => 0,
    'a' => 0,
    'ADDON_NAME_LIMIT' => 0,
    'key' => 0,
    'installed_version' => 0,
    'actual_version' => 0,
    'latest_version' => 0,
    'settings' => 0,
    'install_datetime_format' => 0,
    'verified_developer' => 0,
    'status_description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61752840a40463_80218275',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61752840a40463_80218275')) {function content_61752840a40463_80218275($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.date_format.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('active','disabled','not_installed','na','na','verified','installed_version','addons.latest_version','installed_version','addons.latest_version','addons.latest_available_for_installation_version','installed_version','version','installed_date','developer','addon_id','status','installed_date'));
?>



<?php $_smarty_tpl->tpl_vars['ADDON_NAME_LIMIT'] = new Smarty_variable(50, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['ADDON_NAME_LIMIT'] = clone $_smarty_tpl->tpl_vars['ADDON_NAME_LIMIT'];?>

<?php if ($_smarty_tpl->tpl_vars['addon']->value['status']===smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
    <?php $_smarty_tpl->tpl_vars['status_description'] = new Smarty_variable($_smarty_tpl->__("active"), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['addon']->value['status']===smarty_modifier_enum("ObjectStatuses::DISABLED")) {?>
    <?php $_smarty_tpl->tpl_vars['status_description'] = new Smarty_variable($_smarty_tpl->__("disabled"), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['addon']->value['status']===smarty_modifier_enum("ObjectStatuses::NEW_OBJECT")) {?>
    <?php $_smarty_tpl->tpl_vars['status_description'] = new Smarty_variable($_smarty_tpl->__("not_installed"), null, 0);?>
<?php }?>
<?php $_smarty_tpl->tpl_vars['installed_version'] = new Smarty_variable($_smarty_tpl->tpl_vars['addon']->value['version'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['latest_version'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['addon']->value['latest_upgrade_version'])===null||$tmp==='' ? $_smarty_tpl->__("na") : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['actual_version'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['addon']->value['actual_version'])===null||$tmp==='' ? $_smarty_tpl->__("na") : $tmp), null, 0);?>
<?php ob_start();
echo $_smarty_tpl->__("verified");
$_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['verified_developer'] = new Smarty_variable($_smarty_tpl->tpl_vars['a']->value['identified']||$_smarty_tpl->tpl_vars['a']->value['is_core_addon'] ? " (".$_tmp4.")" : '', null, 0);?>


<?php $_smarty_tpl->createLocalArrayVariable('a', null, 1);
$_smarty_tpl->tpl_vars['a']->value['is_long_name'] = (mb_strlen(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['a']->value['name']), 'UTF-8')>$_smarty_tpl->tpl_vars['ADDON_NAME_LIMIT']->value);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['a'] = clone $_smarty_tpl->tpl_vars['a'];?>
<?php $_smarty_tpl->createLocalArrayVariable('a', null, 1);
$_smarty_tpl->tpl_vars['a']->value['short_name'] = (($tmp = @smarty_modifier_truncate($_smarty_tpl->tpl_vars['a']->value['name'],$_smarty_tpl->tpl_vars['ADDON_NAME_LIMIT']->value,"...",true))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['key']->value : $tmp);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['a'] = clone $_smarty_tpl->tpl_vars['a'];?>



<?php if ($_smarty_tpl->tpl_vars['addon']->value['is_core_addon']||!$_smarty_tpl->tpl_vars['addon']->value['actual_version']) {?>
    <?php ob_start();
echo $_smarty_tpl->__("installed_version");
$_tmp5=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['addon_full_version_info'] = new Smarty_variable($_tmp5.":
".((string)$_smarty_tpl->tpl_vars['installed_version']->value), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['addon_full_version_info'] = clone $_smarty_tpl->tpl_vars['addon_full_version_info'];?>

<?php } elseif ($_smarty_tpl->tpl_vars['actual_version']->value===$_smarty_tpl->tpl_vars['latest_version']->value) {?>
    <?php ob_start();
echo $_smarty_tpl->__("addons.latest_version");
$_tmp6=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("installed_version");
$_tmp7=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['addon_full_version_info'] = new Smarty_variable($_tmp6.":
".((string)$_smarty_tpl->tpl_vars['actual_version']->value)."

".$_tmp7.":
".((string)$_smarty_tpl->tpl_vars['installed_version']->value), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['addon_full_version_info'] = clone $_smarty_tpl->tpl_vars['addon_full_version_info'];?>

<?php } else { ?>
    <?php ob_start();
echo $_smarty_tpl->__("addons.latest_version");
$_tmp8=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("addons.latest_available_for_installation_version");
$_tmp9=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("installed_version");
$_tmp10=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['addon_full_version_info'] = new Smarty_variable($_tmp8.":
".((string)$_smarty_tpl->tpl_vars['actual_version']->value)."

".$_tmp9.":
".((string)$_smarty_tpl->tpl_vars['latest_version']->value)."

".$_tmp10.":
".((string)$_smarty_tpl->tpl_vars['installed_version']->value), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['addon_full_version_info'] = clone $_smarty_tpl->tpl_vars['addon_full_version_info'];?>

<?php }?>


<?php $_smarty_tpl->tpl_vars['install_datetime_format'] = new Smarty_variable(smarty_modifier_date_format($_smarty_tpl->tpl_vars['a']->value['install_datetime'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), null, 0);?>



<?php ob_start();
echo $_smarty_tpl->__("version");
$_tmp11=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("installed_date");
$_tmp12=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("developer");
$_tmp13=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("addon_id");
$_tmp14=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("status");
$_tmp15=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['addon_full_description'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['addon']->value['name'])."

".((string)strip_tags($_smarty_tpl->tpl_vars['addon']->value['description']))."

".$_tmp11.": ".((string)(($tmp = @$_smarty_tpl->tpl_vars['addon']->value['version'])===null||$tmp==='' ? 0.1 : $tmp))."
".$_tmp12.": ".((string)$_smarty_tpl->tpl_vars['install_datetime_format']->value)."
".$_tmp13.": ".((string)$_smarty_tpl->tpl_vars['a']->value['supplier']).((string)$_smarty_tpl->tpl_vars['verified_developer']->value)."
".$_tmp14.": ".((string)$_smarty_tpl->tpl_vars['addon']->value['addon'])."
".$_tmp15.": ".((string)$_smarty_tpl->tpl_vars['status_description']->value), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['addon_full_description'] = clone $_smarty_tpl->tpl_vars['addon_full_description'];?>



<?php ob_start();
echo $_smarty_tpl->__("installed_date");
$_tmp16=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['install_datetime_full_info'] = new Smarty_variable($_tmp16.":
".((string)$_smarty_tpl->tpl_vars['install_datetime_format']->value), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['install_datetime_full_info'] = clone $_smarty_tpl->tpl_vars['install_datetime_full_info'];?>
<?php }} ?>
