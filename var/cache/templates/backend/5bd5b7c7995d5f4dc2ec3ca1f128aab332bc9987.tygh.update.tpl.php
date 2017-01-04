<?php /* Smarty version Smarty-3.1.21, created on 2017-01-03 20:32:40
         compiled from "/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/backend/templates/views/addons/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:579101291586be0383f8541-46763405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bd5b7c7995d5f4dc2ec3ca1f128aab332bc9987' => 
    array (
      0 => '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/backend/templates/views/addons/update.tpl',
      1 => 1479968570,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '579101291586be0383f8541-46763405',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'separate' => 0,
    '_addon' => 0,
    'subsections' => 0,
    'section' => 0,
    'tab_id' => 0,
    'subs' => 0,
    'options' => 0,
    'field_item' => 0,
    'data' => 0,
    'parent_item' => 0,
    'parent_item_html_id' => 0,
    'sep_sections' => 0,
    'breadcrumbs' => 0,
    'addon_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586be03859dfb1_09119363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586be03859dfb1_09119363')) {function content_586be03859dfb1_09119363($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/app/functions/smarty_plugins/function.script.php';
?><?php $_smarty_tpl->tpl_vars["_addon"] = new Smarty_variable($_REQUEST['addon'], null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['separate']->value) {?>
    <?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('states'=>fn_get_all_states(1)), 0);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['separate']->value) {
$_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start();
}?>
<div id="content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_addon']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_addon']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="tabs cm-j-tabs <?php if ($_smarty_tpl->tpl_vars['separate']->value) {?>cm-track<?php }?> <?php if (count($_smarty_tpl->tpl_vars['subsections']->value)==1) {?>hidden<?php }?>">
        <ul class="nav nav-tabs">
            <?php  $_smarty_tpl->tpl_vars["subs"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["subs"]->_loop = false;
 $_smarty_tpl->tpl_vars["section"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['subsections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["subs"]->key => $_smarty_tpl->tpl_vars["subs"]->value) {
$_smarty_tpl->tpl_vars["subs"]->_loop = true;
 $_smarty_tpl->tpl_vars["section"]->value = $_smarty_tpl->tpl_vars["subs"]->key;
?>
                <?php $_smarty_tpl->tpl_vars["tab_id"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['_addon']->value)."_".((string)$_smarty_tpl->tpl_vars['section']->value), null, 0);?>
                <li class="cm-js <?php if ($_REQUEST['selected_section']==$_smarty_tpl->tpl_vars['tab_id']->value) {?>active<?php }?>" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
"><a><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subs']->value['description'], ENT_QUOTES, 'UTF-8');?>
</a></li>
            <?php } ?>
        </ul>
    </div>
    <div class="cm-tabs-content" id="tabs_content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_addon']->value, ENT_QUOTES, 'UTF-8');?>
">
        <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="update_addon_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_addon']->value, ENT_QUOTES, 'UTF-8');?>
_form" class=" form-edit form-horizontal" enctype="multipart/form-data">

        <input type="hidden" name="selected_section" value="<?php echo htmlspecialchars($_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="addon" value="<?php echo htmlspecialchars($_REQUEST['addon'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php if ($_REQUEST['return_url']) {?>
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_REQUEST['return_url'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>
        
        <?php  $_smarty_tpl->tpl_vars["field_item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field_item"]->_loop = false;
 $_smarty_tpl->tpl_vars["section"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field_item"]->key => $_smarty_tpl->tpl_vars["field_item"]->value) {
$_smarty_tpl->tpl_vars["field_item"]->_loop = true;
 $_smarty_tpl->tpl_vars["section"]->value = $_smarty_tpl->tpl_vars["field_item"]->key;
?>
        
        <?php if ($_smarty_tpl->tpl_vars['subsections']->value[$_smarty_tpl->tpl_vars['section']->value]['type']=="SEPARATE_TAB") {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("separate_section", null, null); ob_start(); ?>
        <?php }?>

        <div id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_addon']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8');?>
" class="settings<?php if ($_smarty_tpl->tpl_vars['subsections']->value[$_smarty_tpl->tpl_vars['section']->value]['type']=="SEPARATE_TAB") {?> cm-hide-save-button<?php }?>">
            <?php $_smarty_tpl->_capture_stack[0][] = array("header_first", null, null); ob_start(); ?>false<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field_item']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["data"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["fe_addons"]['total'] = $_smarty_tpl->tpl_vars["data"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["fe_addons"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value) {
$_smarty_tpl->tpl_vars["data"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["data"]->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["fe_addons"]['iteration']++;
?>

                <?php if ($_smarty_tpl->tpl_vars['data']->value['parent_id']&&$_smarty_tpl->tpl_vars['field_item']->value[$_smarty_tpl->tpl_vars['data']->value['parent_id']]) {?>
                    <?php $_smarty_tpl->tpl_vars['parent_item'] = new Smarty_variable($_smarty_tpl->tpl_vars['field_item']->value[$_smarty_tpl->tpl_vars['data']->value['parent_id']], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['parent_item_html_id'] = new Smarty_variable("addon_option_".((string)$_smarty_tpl->tpl_vars['_addon']->value)."_".((string)$_smarty_tpl->tpl_vars['parent_item']->value['name']), null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['parent_item'] = new Smarty_variable(array(), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['parent_item_html_id'] = new Smarty_variable('', null, 0);?>
                <?php }?>

                <?php echo $_smarty_tpl->getSubTemplate ("common/settings_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item'=>$_smarty_tpl->tpl_vars['data']->value,'section'=>$_smarty_tpl->tpl_vars['_addon']->value,'html_id'=>"addon_option_".((string)$_smarty_tpl->tpl_vars['_addon']->value)."_".((string)$_smarty_tpl->tpl_vars['data']->value['name']),'html_name'=>"addon_data[options][".((string)$_smarty_tpl->tpl_vars['data']->value['object_id'])."]",'index'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['fe_addons']['iteration'],'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['fe_addons']['total'],'class'=>"setting-wide",'parent_item'=>$_smarty_tpl->tpl_vars['parent_item']->value,'parent_item_html_id'=>$_smarty_tpl->tpl_vars['parent_item_html_id']->value), 0);?>

            <?php } ?>
        </div>
        
        <?php if ($_smarty_tpl->tpl_vars['subsections']->value[$_smarty_tpl->tpl_vars['section']->value]['type']=="SEPARATE_TAB") {?>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php $_smarty_tpl->tpl_vars["sep_sections"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['sep_sections']->value)." ".((string)Smarty::$_smarty_vars['capture']['separate_section']), null, 0);?>
        <?php }?>
        <?php } ?>

        <?php if ($_smarty_tpl->tpl_vars['separate']->value) {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[addons.update]",'but_target_form'=>"update_addon_".((string)$_smarty_tpl->tpl_vars['_addon']->value)."_form",'hide_second_button'=>true,'breadcrumbs'=>$_smarty_tpl->tpl_vars['breadcrumbs']->value,'save'=>true), 0);?>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php } else { ?>
            <div class="buttons-container<?php if ($_smarty_tpl->tpl_vars['separate']->value) {?> buttons-bg<?php }?> cm-toggle-button">
                <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/addon_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[addons.update]",'cancel_action'=>"close",'save'=>true), 0);?>

            </div>
        <?php }?>

        </form> 
        <?php if ($_smarty_tpl->tpl_vars['subsections']->value[$_smarty_tpl->tpl_vars['section']->value]['type']=="SEPARATE_TAB") {?>
            <?php echo $_smarty_tpl->tpl_vars['sep_sections']->value;?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['separate']->value) {?>
            <div class="buttons-container">
                <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/addon_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        <?php }?>
    </div>
    <!--content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_addon']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<!--content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_addon']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php if ($_smarty_tpl->tpl_vars['separate']->value) {?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['addon_name']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }?>
<?php }} ?>
