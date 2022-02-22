<?php /* Smarty version Smarty-3.1.21, created on 2021-10-24 13:50:35
         compiled from "C:\xampp\htdocs\cscart_v4.13.2.SP2_b2b\design\backend\templates\views\debugger\components\sql_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43337678461753a7b6fc295-25376049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '963e628e258fb6af92f11577fbcdeddb164106d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart_v4.13.2.SP2_b2b\\design\\backend\\templates\\views\\debugger\\components\\sql_tab.tpl',
      1 => 1628148888,
      2 => 'backend',
    ),
  ),
  'nocache_hash' => '43337678461753a7b6fc295-25376049',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'order_by' => 0,
    'direction' => 0,
    'debugger_hash' => 0,
    'query' => 0,
    'long_query_time' => 0,
    'medium_query_time' => 0,
    'color' => 0,
    'key' => 0,
    'backtrace_item' => 0,
    'warnings' => 0,
    'average_time' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61753a7c08e270_17196409',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61753a7c08e270_17196409')) {function content_61753a7c08e270_17196409($_smarty_tpl) {?><div class="deb-tab-content" id="DebugToolbarTabSQLContent">
    <?php $_smarty_tpl->tpl_vars['warnings'] = new Smarty_variable(array(), null, 0);?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("sql_tabs", null, null); ob_start(); ?>
    <div class="deb-sub-tab-content" id="DebugToolbarSubTabSQLList">
        <?php $_smarty_tpl->_capture_stack[0][] = array("sql_list_table", null, null); ob_start(); ?>
        <div class="table-wrapper">
            <table class="deb-table" id="DebugToolbarSubTabSQLListTable">
                <caption>Queries
                    <small class="deb-font-gray">total time: <?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['data']->value['totals']['time'],"5"), ENT_QUOTES, 'UTF-8');?>
 s.</small>
                </caption>
                <tr>
                    <th style="width: 35px;"><?php echo $_smarty_tpl->getSubTemplate ("backend:views/debugger/components/sorter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('url'=>"debugger.sql",'text'=>"№",'field'=>"number",'order_by'=>$_smarty_tpl->tpl_vars['order_by']->value,'direction'=>$_smarty_tpl->tpl_vars['direction']->value,'debugger_hash'=>$_smarty_tpl->tpl_vars['debugger_hash']->value,'target_id'=>"DebugToolbarTabSQLContent"), 0);?>
</th>
                    <th>Query</th>
                    <th style="width: 60px;"><?php echo $_smarty_tpl->getSubTemplate ("backend:views/debugger/components/sorter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('url'=>"debugger.sql",'text'=>"Time",'field'=>"time",'order_by'=>$_smarty_tpl->tpl_vars['order_by']->value,'direction'=>$_smarty_tpl->tpl_vars['direction']->value,'debugger_hash'=>$_smarty_tpl->tpl_vars['debugger_hash']->value,'target_id'=>"DebugToolbarTabSQLContent"), 0);?>
</th>
                    <th style="width: 70px;">Actions</th>
                </tr>

                <?php  $_smarty_tpl->tpl_vars["query"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["query"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["query"]->key => $_smarty_tpl->tpl_vars["query"]->value) {
$_smarty_tpl->tpl_vars["query"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["query"]->key;
?>
                    <?php if ($_smarty_tpl->tpl_vars['query']->value['time']>$_smarty_tpl->tpl_vars['long_query_time']->value) {?>
                        <?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("deb-light-red", null, 0);?>
                        <?php $_smarty_tpl->createLocalArrayVariable('warnings', null, 0);
$_smarty_tpl->tpl_vars['warnings']->value['list'] = true;?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['query']->value['time']>$_smarty_tpl->tpl_vars['medium_query_time']->value) {?>
                        <?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("deb-light2-red", null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable(false, null, 0);?>
                    <?php }?>
                    <tr>
                        <td <?php if ($_smarty_tpl->tpl_vars['color']->value) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value+1, ENT_QUOTES, 'UTF-8');?>
</strong></td>
                        <td class="<?php if ($_smarty_tpl->tpl_vars['color']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');
}?>">
                                <pre><code><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['query']->value['query'], ENT_QUOTES, 'UTF-8');?>
</code></pre>
                                <ul class="deb-backtrace"
                                    data-ca-query-backtrace="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <h4>Backtrace</h4>
                                    <?php  $_smarty_tpl->tpl_vars["backtrace_item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["backtrace_item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['query']->value['backtrace']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["backtrace_item"]->key => $_smarty_tpl->tpl_vars["backtrace_item"]->value) {
$_smarty_tpl->tpl_vars["backtrace_item"]->_loop = true;
?>
                                        <li class="deb-backtrace__item">
                                            <code class="deb-backtrace-item_who"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['backtrace_item']->value['who'], ENT_QUOTES, 'UTF-8');?>
</code>
                                            <span class="deb-backtrace-item_where"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['backtrace_item']->value['where'], ENT_QUOTES, 'UTF-8');?>
</span>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </td>
                        <td <?php if ($_smarty_tpl->tpl_vars['color']->value) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><strong><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['query']->value['time'],"5"), ENT_QUOTES, 'UTF-8');?>
</strong></td>
                        <td class="deb-table__actions-cell">
                            <a href="<?php echo htmlspecialchars(fn_url("debugger.sql_parse?debugger_hash=".((string)$_smarty_tpl->tpl_vars['debugger_hash']->value)."&sql_id=".((string)$_smarty_tpl->tpl_vars['key']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="DebugToolbarSubTabSQLParse" class="cm-ajax cm-ajax-cache query deb-table__action-link">Re-run</a>
                            <a href="#" data-ca-query-backtrace-trigger="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="deb-table__action-link">Backtrace</td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php if ($_smarty_tpl->tpl_vars['warnings']->value['list']) {?>
            <p class="deb-notice">
                <strong>Warning</strong>
                Some queries are taking longer than <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['long_query_time']->value, ENT_QUOTES, 'UTF-8');?>
 seconds to execute
            </p>
        <?php }?>
        <?php echo Smarty::$_smarty_vars['capture']['sql_list_table'];?>

    </div>

    <div class="deb-sub-tab-content" id="DebugToolbarSubTabSQLCount">
        <?php $_smarty_tpl->_capture_stack[0][] = array("sql_count_table", null, null); ob_start(); ?>
        <div class="table-wrapper">
            <table class="deb-table">
                <caption>Queries
                    <small class="deb-font-gray">max count: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['totals']['rcount'], ENT_QUOTES, 'UTF-8');?>
</small>
                </caption>
                <tr>
                    <th>Query</th>
                    <th>Count</th>
                    <th>Min time</th>
                    <th>Max time</th>
                    <th>Average time</th>
                </tr>

                <?php  $_smarty_tpl->tpl_vars["query"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["query"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['count']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["query"]->key => $_smarty_tpl->tpl_vars["query"]->value) {
$_smarty_tpl->tpl_vars["query"]->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['query']->value['count']>1) {?>
                        <?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("deb-light-red", null, 0);?>
                        <?php $_smarty_tpl->createLocalArrayVariable('warnings', null, 0);
$_smarty_tpl->tpl_vars['warnings']->value['count'] = true;?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable(false, null, 0);?>
                    <?php }?>
                    <?php $_smarty_tpl->tpl_vars["average_time"] = new Smarty_variable($_smarty_tpl->tpl_vars['query']->value['total_time']/$_smarty_tpl->tpl_vars['query']->value['count_time'], null, 0);?>
                    <tr <?php if ($_smarty_tpl->tpl_vars['query']->value['backtrace']) {?>title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['query']->value['backtrace'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                        <td class="sql <?php if ($_smarty_tpl->tpl_vars['color']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');
}?>">
                            <pre><code><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['query']->value['query'], ENT_QUOTES, 'UTF-8');?>
</code></pre>
                        </td>
                        <td <?php if ($_smarty_tpl->tpl_vars['color']->value) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> style="width: 60px;"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['query']->value['count'], ENT_QUOTES, 'UTF-8');?>
</strong></td>
                        <td <?php if ($_smarty_tpl->tpl_vars['color']->value) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> style="width: 60px;"><strong><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['query']->value['min_time'],"5"), ENT_QUOTES, 'UTF-8');?>
</strong></td>
                        <td <?php if ($_smarty_tpl->tpl_vars['color']->value) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> style="width: 60px;"><strong><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['query']->value['max_time'],"5"), ENT_QUOTES, 'UTF-8');?>
</strong></td>
                        <td <?php if ($_smarty_tpl->tpl_vars['color']->value) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> style="width: 120px;"><strong><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['average_time']->value,"5"), ENT_QUOTES, 'UTF-8');?>
</strong></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php if ($_smarty_tpl->tpl_vars['warnings']->value['count']) {?>
            <p class="deb-notice">
                <strong>Warning</strong>
                Some queries are being executed multiple times
            </p>
        <?php }?>
        <?php echo Smarty::$_smarty_vars['capture']['sql_count_table'];?>

    </div>

    <div class="deb-sub-tab-content" id="DebugToolbarSubTabSQLParse">
        <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="cm-ajax" id="DebugToolbarSqlParce">
            <input type="hidden" name="result_ids" value="DebugToolbarSubTabSQLParse" />
            <input type="hidden" name="dispatch[debugger.sql_parse]" value="save" />
            <input type="hidden" name="exec" value="N" />
            <div class="table-wrapper">
                <table width="100%">
                    <tr>
                        <td colspan="2"><textarea cols="100" rows="20" name="query"></textarea></td>
                    </tr>
                    <tr>
                        <td style="width: 100px; padding-top: 10px;"><?php echo $_smarty_tpl->getSubTemplate ("backend:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>"Send",'but_id'=>"DebugToolbarSubTabSQLParseSubmit",'id'=>"DebugToolbarSubTabSQLParseSubmit",'but_name'=>"submit",'but_role'=>"submit",'but_meta'=>"btn-primary"), 0);?>
</td>
                        <td valign="middle">
                            <label><input type="checkbox" name="exec" value="Y" checked="checked" /> Sandbox</label>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <div class="deb-sub-tab">
        <ul>
            <li class="active"><a data-sub-tab-id="DebugToolbarSubTabSQLList">Queries list<?php if ($_smarty_tpl->tpl_vars['warnings']->value['list']) {?> <span class="deb-warning">!</span><?php }?></a></li>
            <li><a data-sub-tab-id="DebugToolbarSubTabSQLCount">Queries count<?php if ($_smarty_tpl->tpl_vars['warnings']->value['count']) {?> <span class="deb-warning">!</span><?php }?></a></li>
            <li><a data-sub-tab-id="DebugToolbarSubTabSQLParse">Queries parse</a></li>
        </ul>
    </div>
    <?php echo Smarty::$_smarty_vars['capture']['sql_tabs'];?>

    <!--DebugToolbarTabSQLContent--></div>
<?php }} ?>
