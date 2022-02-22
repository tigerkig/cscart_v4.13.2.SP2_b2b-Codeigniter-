<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 12:11:54
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\common\scripts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3080584246175235aa4fb98-79682265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '804e429274bf892bf8d0b7f5006bd533fd54b69d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\common\\scripts.tpl',
      1 => 1628148888,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3080584246175235aa4fb98-79682265',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jquery_version' => 0,
    'jquery_migrate_version' => 0,
    'settings' => 0,
    'is_setup_wizard_panel_available' => 0,
    'addon_permissions_text' => 0,
    'config' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'secondary_currency' => 0,
    'images_dir' => 0,
    'language_direction' => 0,
    'hash_of_available_countries' => 0,
    'product_version' => 0,
    'product_edition' => 0,
    'current_dispatch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6175235ab6fcd4_86613230',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6175235ab6fcd4_86613230')) {function content_6175235ab6fcd4_86613230($_smarty_tpl) {?><?php if (!is_callable('smarty_block_scripts')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\block.scripts.php';
if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\block.inline_script.php';
if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('no_data','text_nothing_found','bulk_edit.unable_to_delete_all_categories','cannot_buy','no_products_selected','error_no_items_selected','text_select_vendor','delete_confirmation','text_out_of_stock','items','text_required_group_product','save','close','loading','notice','warning','error','text_are_you_sure_to_proceed','text_invalid_url','error_validator_email','error_validator_phone','error_validator_phone_mask','error_validator_integer','error_validator_multiple','error_validator_password','error_validator_required','error_validator_zipcode','error_validator_message','error_validator_color','text_page_loading','error_ajax','text_changes_not_saved','text_data_changed','text_block_trial_notice','text_expired_license','file_browser','editing_block','editing_grid','adding_grid','adding_block_to_grid','manage_blocks','add_block','text_position_updating','more','browse','enter_new_lang_code','no_image','cookie_is_disabled','insert_image','image_url','manage','file_uploading_in_progress_please_wait','please_copy_api_key','select_block','block_manager'));
?>
<?php $_smarty_tpl->tpl_vars['jquery_version'] = new Smarty_variable("3.5.1", null, 0);?>
<?php $_smarty_tpl->tpl_vars['jquery_migrate_version'] = new Smarty_variable("3.3.0", null, 0);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('scripts', array()); $_block_repeat=true; echo smarty_block_scripts(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<?php echo smarty_function_script(array('src'=>"js/lib/jquery/jquery-".((string)$_smarty_tpl->tpl_vars['jquery_version']->value).".min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/jquery/jquery-migrate-".((string)$_smarty_tpl->tpl_vars['jquery_migrate_version']->value).".min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/modernizr/modernizr.custom.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/core.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/history.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/lib/twitterbootstrap/bootstrap.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/jqueryui/jquery-ui.custom.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/autonumeric/autoNumeric.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/appear/jquery.appear-1.1.1.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/tools/tooltip.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/bootstrap_switch/js/bootstrapSwitch.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/companies.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/editors/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_wysiwyg_editor']).".editor.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/tygh/ajax.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/tygh/backend/heading.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/quick_menu.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/storefront_switcher.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/company_switcher.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/buttons/update_for_all.js"),$_smarty_tpl);?>



<?php echo smarty_function_script(array('src'=>"js/tygh/backend/bulkedit.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/tap.plugin.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/tap_multiple_selection.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/mobile_menu.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/tygh/backend/text_toggle.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/lib/maskedinput/jquery.maskedinput.min.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/lib/inputmask/jquery.inputmask.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/jquery-bind-first/jquery.bind-first-0.2.3.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/inputmask-multi/jquery.inputmask-multi.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/tygh/phone_mask.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/autocomplete.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['is_setup_wizard_panel_available']->value) {?>
    <?php echo smarty_function_script(array('src'=>"js/lib/ladda-bootstrap/dist/spin.min.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/lib/ladda-bootstrap/dist/ladda.min.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/lib/jquery-liquid-slider/jquery.liquid-slider.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/lib/jquery-touchswipe/jquery.touchSwipe.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/setup_wizard/tabslideout_fork.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/setup_wizard/setup_wizard.js"),$_smarty_tpl);?>

<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("promo_data", null, null); ob_start(); ?>
    <div class="commercial-promotion-text">
        <p><?php echo $_smarty_tpl->tpl_vars['addon_permissions_text']->value['text'];?>
</p>
    <div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function(_, $) {
    _.tr({
        no_data: '<?php echo strtr($_smarty_tpl->__("no_data"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        nothing_found: '<?php echo strtr($_smarty_tpl->__("text_nothing_found"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        unable_to_delete_all_categories: '<?php echo strtr($_smarty_tpl->__("bulk_edit.unable_to_delete_all_categories"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        cannot_buy: '<?php echo strtr($_smarty_tpl->__("cannot_buy"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        no_products_selected: '<?php echo strtr($_smarty_tpl->__("no_products_selected"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        error_no_items_selected: '<?php echo strtr($_smarty_tpl->__("error_no_items_selected"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        text_select_vendor: '<?php echo strtr($_smarty_tpl->__("text_select_vendor"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        delete_confirmation: '<?php echo strtr($_smarty_tpl->__("delete_confirmation"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        text_out_of_stock: '<?php echo strtr($_smarty_tpl->__("text_out_of_stock"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        items: '<?php echo strtr($_smarty_tpl->__("items"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        text_required_group_product: '<?php echo strtr($_smarty_tpl->__("text_required_group_product"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        save: '<?php echo strtr($_smarty_tpl->__("save"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        close: '<?php echo strtr($_smarty_tpl->__("close"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        loading: '<?php echo strtr($_smarty_tpl->__("loading"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        notice: '<?php echo strtr($_smarty_tpl->__("notice"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        warning: '<?php echo strtr($_smarty_tpl->__("warning"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        error: '<?php echo strtr($_smarty_tpl->__("error"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        text_are_you_sure_to_proceed: '<?php echo strtr($_smarty_tpl->__("text_are_you_sure_to_proceed"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        text_invalid_url: '<?php echo strtr($_smarty_tpl->__("text_invalid_url"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        error_validator_email: '<?php echo strtr($_smarty_tpl->__("error_validator_email"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        error_validator_phone: '<?php echo strtr($_smarty_tpl->__("error_validator_phone"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        error_validator_phone_mask: '<?php echo strtr($_smarty_tpl->__("error_validator_phone_mask"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        error_validator_integer: '<?php echo strtr($_smarty_tpl->__("error_validator_integer"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        error_validator_multiple: '<?php echo strtr($_smarty_tpl->__("error_validator_multiple"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        error_validator_password: '<?php echo strtr($_smarty_tpl->__("error_validator_password"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        error_validator_required: '<?php echo strtr($_smarty_tpl->__("error_validator_required"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        error_validator_zipcode: '<?php echo strtr($_smarty_tpl->__("error_validator_zipcode"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        error_validator_message: '<?php echo strtr($_smarty_tpl->__("error_validator_message"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        error_validator_color: '<?php echo strtr($_smarty_tpl->__("error_validator_color"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        text_page_loading: '<?php echo strtr($_smarty_tpl->__("text_page_loading"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        error_ajax: '<?php echo strtr($_smarty_tpl->__("error_ajax"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        text_changes_not_saved: '<?php echo strtr($_smarty_tpl->__("text_changes_not_saved"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        text_data_changed: '<?php echo strtr($_smarty_tpl->__("text_data_changed"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        trial_notice: '<?php echo strtr($_smarty_tpl->__("text_block_trial_notice",array("[href]"=>$_smarty_tpl->tpl_vars['config']->value['resources']['license_url'])), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        expired_license: '<?php echo strtr($_smarty_tpl->__("text_expired_license",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        file_browser: '<?php echo strtr($_smarty_tpl->__("file_browser"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        editing_block: '<?php echo strtr($_smarty_tpl->__("editing_block"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        editing_grid: '<?php echo strtr($_smarty_tpl->__("editing_grid"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        adding_grid: '<?php echo strtr($_smarty_tpl->__("adding_grid"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        adding_block_to_grid: '<?php echo strtr($_smarty_tpl->__("adding_block_to_grid"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        manage_blocks: '<?php echo strtr($_smarty_tpl->__("manage_blocks"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        add_block: '<?php echo strtr($_smarty_tpl->__("add_block"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        text_position_updating: '<?php echo strtr($_smarty_tpl->__("text_position_updating"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        more: '<?php echo strtr($_smarty_tpl->__("more"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        browse: '<?php echo strtr($_smarty_tpl->__("browse"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        enter_new_lang_code: '<?php echo strtr($_smarty_tpl->__("enter_new_lang_code"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        no_image: '<?php echo strtr($_smarty_tpl->__("no_image"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        cookie_is_disabled: '<?php echo strtr($_smarty_tpl->__("cookie_is_disabled"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        insert_image: '<?php echo strtr($_smarty_tpl->__("insert_image"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        image_url: '<?php echo strtr($_smarty_tpl->__("image_url"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        manage: '<?php echo strtr($_smarty_tpl->__("manage"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        file_uploading_in_progress_please_wait: '<?php echo strtr($_smarty_tpl->__("file_uploading_in_progress_please_wait"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        please_copy_api_key: '<?php echo strtr($_smarty_tpl->__("please_copy_api_key"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        select_block: '<?php echo strtr($_smarty_tpl->__("select_block"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        block_manager: '<?php echo strtr($_smarty_tpl->__("block_manager"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
    });

    $.extend(_, {
        index_script: '<?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)=='vendor') {
echo strtr($_smarty_tpl->tpl_vars['config']->value['vendor_index'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));
} else {
echo strtr($_smarty_tpl->tpl_vars['config']->value['admin_index'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));
}?>',
        changes_warning: '<?php echo strtr($_smarty_tpl->tpl_vars['settings']->value['Appearance']['changes_warning'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        currencies: {
            'primary': {
                'decimals_separator': '<?php echo strtr($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['decimals_separator'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                'thousands_separator': '<?php echo strtr($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['thousands_separator'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                'decimals': '<?php echo strtr($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['decimals'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
            },
            'secondary': {
                'decimals_separator': '<?php echo strtr($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['decimals_separator'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                'thousands_separator': '<?php echo strtr($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['thousands_separator'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                'decimals': '<?php echo strtr($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['decimals'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                'coefficient': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['coefficient'], ENT_QUOTES, 'UTF-8');?>
'
            }
        },
        default_editor: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_wysiwyg_editor'], ENT_QUOTES, 'UTF-8');?>
',
        default_previewer: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer'], ENT_QUOTES, 'UTF-8');?>
',
        current_path: '<?php echo strtr($_smarty_tpl->tpl_vars['config']->value['current_path'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        current_location: '<?php echo strtr($_smarty_tpl->tpl_vars['config']->value['current_location'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        images_dir: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
',
        notice_displaying_time: <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['notice_displaying_time']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Appearance']['notice_displaying_time'], ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>,
        cart_language: '<?php echo htmlspecialchars((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
',
        language_direction: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
',
        default_language: '<?php echo htmlspecialchars((defined('DEFAULT_LANGUAGE') ? constant('DEFAULT_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
',
        cart_prices_w_taxes: <?php if (($_smarty_tpl->tpl_vars['settings']->value['Appearance']['cart_prices_w_taxes']=='Y')) {?>true<?php } else { ?>false<?php }?>,
        current_url: '<?php echo strtr(fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        <?php if ($_smarty_tpl->tpl_vars['config']->value['tweaks']['anti_csrf']) {?>
        security_hash: '<?php echo htmlspecialchars(fn_generate_security_hash(''), ENT_QUOTES, 'UTF-8');?>
', // CSRF form protection key
        <?php }?>
        promo_data: {
            title: '<?php echo strtr($_smarty_tpl->tpl_vars['addon_permissions_text']->value['title'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            text: '<?php echo strtr(Smarty::$_smarty_vars['capture']['promo_data'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
        },
        phone_validation_mode: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Appearance']['phone_validation_mode'], ENT_QUOTES, 'UTF-8');?>
',
        hash_of_available_countries: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hash_of_available_countries']->value, ENT_QUOTES, 'UTF-8');?>
',
        product_version: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_version']->value, ENT_QUOTES, 'UTF-8');?>
',
        product_edition: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_edition']->value, ENT_QUOTES, 'UTF-8');?>
',
        current_dispatch: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_dispatch']->value, ENT_QUOTES, 'UTF-8');?>
',
        product_build: '<?php echo htmlspecialchars((defined('PRODUCT_BUILD') ? constant('PRODUCT_BUILD') : null), ENT_QUOTES, 'UTF-8');?>
',
        current_host: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_host'], ENT_QUOTES, 'UTF-8');?>
'
    });

    $.extend(_, {
        fileManagerOptions: {
            rememberLastDir: true,
            useBrowserHistory: true,
            resizable: false,
            lang: _.cart_language,
            i18nBaseUrl: 'js/lib/elfinder/js/i18n',
            ui: ['toolbar', 'tree', 'path', 'stat'],
            uiOptions: {
                toolbar: [
                    ['back', 'forward'],
                    ['mkdir', 'mkfile', 'upload'],
                    ['download'],
                    ['info'],
                    ['quicklook'],
                    ['copy', 'cut', 'paste'],
                    ['rm', 'rename'],
                    ['edit'],
                    ['extract', 'archive'],
                    ['search'],
                    ['view']
                ],
                toolbarExtra: {
                    displayTextLabel: 'none'
                }
            },
            contextmenu: {
                files: [
                    'getfile', '|',
                    'open', 'quicklook', '|',
                    'download', '|',
                    'copy', 'cut', 'paste', 'duplicate', '|',
                    'rm', '|',
                    'edit', 'rename', '|',
                    'archive', 'extract', '|',
                    'info'
                ],
                navbar: [
                    'open', '|',
                    'copy', 'cut', 'paste', 'duplicate', '|',
                    'rm', '|',
                    'info'
                ],
                cwd: [
                    'reload', 'back', '|',
                    'upload', 'mkdir', 'mkfile', 'paste', '|',
                    'sort', '|',
                    'info'
                ],
            },
            requestType: 'post',
            commands : [
            	'archive', 'back', 'chmod', 'colwidth', 'copy', 'cut', 'download', 'duplicate', 'edit', 'extract',
            	'forward', 'fullscreen', 'getfile', 'help', 'home', 'info', 'mkdir', 'mkfile',
            	'open', 'opendir', 'paste', 'quicklook', 'reload', 'rename', 'restore', 'rm',
            	'search', 'sort', 'up', 'upload', 'view'
            ],
            commandsOptions: {
                info: {
                    showHashAlgorisms: [],
                    showHashOpts: []
                }
            }
        }
    });

    $(document).ready(function(){
        $.runCart('A');
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:scripts")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:scripts"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:scripts"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_scripts(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
