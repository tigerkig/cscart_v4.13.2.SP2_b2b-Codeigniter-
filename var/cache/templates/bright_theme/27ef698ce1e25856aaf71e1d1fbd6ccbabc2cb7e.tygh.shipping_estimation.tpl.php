<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 13:24:13
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\themes\responsive\templates\addons\geo_maps\views\geo_maps\shipping_estimation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8301425966175344d9f5050-28110897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27ef698ce1e25856aaf71e1d1fbd6ccbabc2cb7e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\themes\\responsive\\templates\\addons\\geo_maps\\views\\geo_maps\\shipping_estimation.tpl',
      1 => 1635066681,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8301425966175344d9f5050-28110897',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'product' => 0,
    'product_id' => 0,
    'location' => 0,
    'shippings_summary' => 0,
    'shipping_type' => 0,
    'shipping' => 0,
    'no_shippings_available' => 0,
    'shipping_methods' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6175344da90068_01571142',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6175344da90068_01571142')) {function content_6175344da90068_01571142($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart_v4.13.2.SP2_b2b/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('geo_maps.shipping_time_and_rates','geo_maps.shipping_group_','geo_maps.from_pickup_points','geo_maps.shipping_about','geo_maps.shipping_from','geo_maps.no_shippings','shipping_methods','geo_maps.shipping_time_and_rates','shipping_method','geo_maps.shipping_time','cost','geo_maps.from_pickup_points','geo_maps.shipping_time_and_rates','geo_maps.shipping_group_','geo_maps.from_pickup_points','geo_maps.shipping_about','geo_maps.shipping_from','geo_maps.no_shippings','shipping_methods','geo_maps.shipping_time_and_rates','shipping_method','geo_maps.shipping_time','cost','geo_maps.from_pickup_points'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['addons']->value['geo_maps']['show_shippings_on_product']===smarty_modifier_enum("YesNo::YES")&&($_smarty_tpl->tpl_vars['product']->value['is_edp']!==smarty_modifier_enum("YesNo::YES")||$_smarty_tpl->tpl_vars['product']->value['edp_shipping']===smarty_modifier_enum("YesNo::YES"))) {?>
    <div data-ca-geo-maps-shippings-methods-list-id="geo_maps_shipping_methods_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
         data-ca-geo-maps-shipping-estimation-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
         id="geo_maps_shipping_estimation_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="ty-geo-maps-shipping__wrapper" id="shipping_methods_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <div class="ty-geo-maps-shipping__title">
                <?php echo $_smarty_tpl->__("geo_maps.shipping_time_and_rates");?>
: <?php echo $_smarty_tpl->getSubTemplate ("addons/geo_maps/blocks/customer_location.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"shipping_estimation_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'location'=>$_smarty_tpl->tpl_vars['location']->value,'location_detected'=>true,'block'=>null), 0);?>

            </div>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"geo_maps:shipping_estimation")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"geo_maps:shipping_estimation"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['shippings_summary']->value) {?>
                    <?php  $_smarty_tpl->tpl_vars['shipping'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shipping']->_loop = false;
 $_smarty_tpl->tpl_vars['shipping_type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shippings_summary']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->key => $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->_loop = true;
 $_smarty_tpl->tpl_vars['shipping_type']->value = $_smarty_tpl->tpl_vars['shipping']->key;
?>
                        <div class="ty-geo-maps-shipping__item">
                            <div class="ty-geo-maps-shipping__label">
                                <a class="cm-dialog-opener cm-dialog-auto-size ty-geo-maps-shipping__link" data-ca-target-id="geo_maps_shipping_methods_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['shipping_type']->value=="pickup") {?><i class="ty-icon-pointer"></i><?php } elseif ($_smarty_tpl->tpl_vars['shipping_type']->value=="courier") {?><i class="ty-icon-courier"></i><?php } else { ?><i class="ty-icon-shipping"></i><?php }?><span class="ty-geo-maps-shipping__link-text"><?php echo $_smarty_tpl->__("geo_maps.shipping_group_".((string)$_smarty_tpl->tpl_vars['shipping_type']->value));?>
</span></a><?php if ($_smarty_tpl->tpl_vars['shipping']->value['number_of_pickup_points']) {
echo $_smarty_tpl->__("geo_maps.from_pickup_points",array($_smarty_tpl->tpl_vars['shipping']->value['number_of_pickup_points'],"[shipping]"=>$_smarty_tpl->tpl_vars['shipping']->value['shipping']));
}?><span class="ty-geo-maps-shipping__value-separator">:</span>
                            </div>
                            <div class="ty-geo-maps-shipping__value">
                                <?php if ($_smarty_tpl->tpl_vars['shipping']->value['delivery_time']) {?>
                                    <?php echo $_smarty_tpl->__("geo_maps.shipping_about");?>

                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['delivery_time'], ENT_QUOTES, 'UTF-8');?>
,
                                <?php }?>
                                <?php echo $_smarty_tpl->__("geo_maps.shipping_from");?>

                                <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['rate'],'class'=>"ty-geo-maps-shipping__price"), 0);?>

                            </div>
                        </div>
                    <?php } ?>
                <?php } elseif ($_smarty_tpl->tpl_vars['no_shippings_available']->value) {?>
                    <?php echo $_smarty_tpl->__("geo_maps.no_shippings");?>

                <?php } else { ?>
                    <div class="ty-geo-maps-shipping__loader"></div>
                <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"geo_maps:shipping_estimation"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    <!--geo_maps_shipping_estimation_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

    <div class="hidden" title="<?php echo $_smarty_tpl->__("shipping_methods");?>
" id="geo_maps_shipping_methods_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['shipping_methods']->value) {?>
            <div class="ty-geo-maps-shipping__popup">
                <div class="ty-geo-maps-shipping__list-city">
                    <?php echo $_smarty_tpl->__("geo_maps.shipping_time_and_rates");?>
: <?php echo $_smarty_tpl->getSubTemplate ("addons/geo_maps/blocks/customer_location.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"shipping_estimation_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'location'=>$_smarty_tpl->tpl_vars['location']->value,'location_detected'=>true,'block'=>null), 0);?>

                </div>
                <table class="ty-table ty-geo-maps-shipping__list">
                    <thead>
                    <tr>
                        <th class="ty-geo-maps-shipping__list-head"><?php echo $_smarty_tpl->__("shipping_method");?>
</th>
                        <th class="ty-geo-maps-shipping__list-head"><?php echo $_smarty_tpl->__("geo_maps.shipping_time");?>
</th>
                        <th class="ty-geo-maps-shipping__list-head ty-geo-maps-shipping__list-head--price"><?php echo $_smarty_tpl->__("cost");?>
</th>
                    </tr>
                    </thead>
                    <?php  $_smarty_tpl->tpl_vars['shipping'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shipping']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipping_methods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->key => $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->_loop = true;
?>
                        <tr class="ty-geo-maps-shipping__list-item">
                            <td class="ty-geo-maps-shipping__list-col"><?php if ($_smarty_tpl->tpl_vars['shipping']->value['number_of_pickup_points']) {
echo $_smarty_tpl->__("geo_maps.from_pickup_points",array($_smarty_tpl->tpl_vars['shipping']->value['number_of_pickup_points'],"[shipping]"=>$_smarty_tpl->tpl_vars['shipping']->value['shipping']));
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');
}?></td>
                            <td class="ty-geo-maps-shipping__list-col"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['shipping']->value['service_delivery_time'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shipping']->value['delivery_time'] : $tmp), ENT_QUOTES, 'UTF-8');?>
</td>
                            <td class="ty-geo-maps-shipping__list-col ty-geo-maps-shipping__list-col--price"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['rate'],'class'=>"ty-geo-maps-shipping__price"), 0);?>
</td>
                        </tr>
                    <?php } ?>
                </table>
                <div class="buttons-container">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"ty-btn__primary cm-form-dialog-closer cm-dialog-closer"), 0);?>

                </div>
            </div>
        <?php }?>
    <!--geo_maps_shipping_methods_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/shipping_estimation.js"),$_smarty_tpl);?>

<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/geo_maps/views/geo_maps/shipping_estimation.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/geo_maps/views/geo_maps/shipping_estimation.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['geo_maps']['show_shippings_on_product']===smarty_modifier_enum("YesNo::YES")&&($_smarty_tpl->tpl_vars['product']->value['is_edp']!==smarty_modifier_enum("YesNo::YES")||$_smarty_tpl->tpl_vars['product']->value['edp_shipping']===smarty_modifier_enum("YesNo::YES"))) {?>
    <div data-ca-geo-maps-shippings-methods-list-id="geo_maps_shipping_methods_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
         data-ca-geo-maps-shipping-estimation-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
         id="geo_maps_shipping_estimation_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="ty-geo-maps-shipping__wrapper" id="shipping_methods_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <div class="ty-geo-maps-shipping__title">
                <?php echo $_smarty_tpl->__("geo_maps.shipping_time_and_rates");?>
: <?php echo $_smarty_tpl->getSubTemplate ("addons/geo_maps/blocks/customer_location.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"shipping_estimation_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'location'=>$_smarty_tpl->tpl_vars['location']->value,'location_detected'=>true,'block'=>null), 0);?>

            </div>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"geo_maps:shipping_estimation")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"geo_maps:shipping_estimation"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['shippings_summary']->value) {?>
                    <?php  $_smarty_tpl->tpl_vars['shipping'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shipping']->_loop = false;
 $_smarty_tpl->tpl_vars['shipping_type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shippings_summary']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->key => $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->_loop = true;
 $_smarty_tpl->tpl_vars['shipping_type']->value = $_smarty_tpl->tpl_vars['shipping']->key;
?>
                        <div class="ty-geo-maps-shipping__item">
                            <div class="ty-geo-maps-shipping__label">
                                <a class="cm-dialog-opener cm-dialog-auto-size ty-geo-maps-shipping__link" data-ca-target-id="geo_maps_shipping_methods_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['shipping_type']->value=="pickup") {?><i class="ty-icon-pointer"></i><?php } elseif ($_smarty_tpl->tpl_vars['shipping_type']->value=="courier") {?><i class="ty-icon-courier"></i><?php } else { ?><i class="ty-icon-shipping"></i><?php }?><span class="ty-geo-maps-shipping__link-text"><?php echo $_smarty_tpl->__("geo_maps.shipping_group_".((string)$_smarty_tpl->tpl_vars['shipping_type']->value));?>
</span></a><?php if ($_smarty_tpl->tpl_vars['shipping']->value['number_of_pickup_points']) {
echo $_smarty_tpl->__("geo_maps.from_pickup_points",array($_smarty_tpl->tpl_vars['shipping']->value['number_of_pickup_points'],"[shipping]"=>$_smarty_tpl->tpl_vars['shipping']->value['shipping']));
}?><span class="ty-geo-maps-shipping__value-separator">:</span>
                            </div>
                            <div class="ty-geo-maps-shipping__value">
                                <?php if ($_smarty_tpl->tpl_vars['shipping']->value['delivery_time']) {?>
                                    <?php echo $_smarty_tpl->__("geo_maps.shipping_about");?>

                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['delivery_time'], ENT_QUOTES, 'UTF-8');?>
,
                                <?php }?>
                                <?php echo $_smarty_tpl->__("geo_maps.shipping_from");?>

                                <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['rate'],'class'=>"ty-geo-maps-shipping__price"), 0);?>

                            </div>
                        </div>
                    <?php } ?>
                <?php } elseif ($_smarty_tpl->tpl_vars['no_shippings_available']->value) {?>
                    <?php echo $_smarty_tpl->__("geo_maps.no_shippings");?>

                <?php } else { ?>
                    <div class="ty-geo-maps-shipping__loader"></div>
                <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"geo_maps:shipping_estimation"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    <!--geo_maps_shipping_estimation_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

    <div class="hidden" title="<?php echo $_smarty_tpl->__("shipping_methods");?>
" id="geo_maps_shipping_methods_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['shipping_methods']->value) {?>
            <div class="ty-geo-maps-shipping__popup">
                <div class="ty-geo-maps-shipping__list-city">
                    <?php echo $_smarty_tpl->__("geo_maps.shipping_time_and_rates");?>
: <?php echo $_smarty_tpl->getSubTemplate ("addons/geo_maps/blocks/customer_location.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"shipping_estimation_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'location'=>$_smarty_tpl->tpl_vars['location']->value,'location_detected'=>true,'block'=>null), 0);?>

                </div>
                <table class="ty-table ty-geo-maps-shipping__list">
                    <thead>
                    <tr>
                        <th class="ty-geo-maps-shipping__list-head"><?php echo $_smarty_tpl->__("shipping_method");?>
</th>
                        <th class="ty-geo-maps-shipping__list-head"><?php echo $_smarty_tpl->__("geo_maps.shipping_time");?>
</th>
                        <th class="ty-geo-maps-shipping__list-head ty-geo-maps-shipping__list-head--price"><?php echo $_smarty_tpl->__("cost");?>
</th>
                    </tr>
                    </thead>
                    <?php  $_smarty_tpl->tpl_vars['shipping'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shipping']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipping_methods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->key => $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->_loop = true;
?>
                        <tr class="ty-geo-maps-shipping__list-item">
                            <td class="ty-geo-maps-shipping__list-col"><?php if ($_smarty_tpl->tpl_vars['shipping']->value['number_of_pickup_points']) {
echo $_smarty_tpl->__("geo_maps.from_pickup_points",array($_smarty_tpl->tpl_vars['shipping']->value['number_of_pickup_points'],"[shipping]"=>$_smarty_tpl->tpl_vars['shipping']->value['shipping']));
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');
}?></td>
                            <td class="ty-geo-maps-shipping__list-col"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['shipping']->value['service_delivery_time'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shipping']->value['delivery_time'] : $tmp), ENT_QUOTES, 'UTF-8');?>
</td>
                            <td class="ty-geo-maps-shipping__list-col ty-geo-maps-shipping__list-col--price"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['rate'],'class'=>"ty-geo-maps-shipping__price"), 0);?>
</td>
                        </tr>
                    <?php } ?>
                </table>
                <div class="buttons-container">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"ty-btn__primary cm-form-dialog-closer cm-dialog-closer"), 0);?>

                </div>
            </div>
        <?php }?>
    <!--geo_maps_shipping_methods_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/shipping_estimation.js"),$_smarty_tpl);?>

<?php }?>
<?php }?><?php }} ?>
