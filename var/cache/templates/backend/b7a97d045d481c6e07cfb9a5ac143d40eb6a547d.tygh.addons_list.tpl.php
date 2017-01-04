<?php /* Smarty version Smarty-3.1.21, created on 2017-01-03 20:22:52
         compiled from "/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/backend/templates/views/addons/components/addons_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1173654581586bddecd7dc22-43503492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7a97d045d481c6e07cfb9a5ac143d40eb6a547d' => 
    array (
      0 => '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/backend/templates/views/addons/components/addons_list.tpl',
      1 => 1479968570,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1173654581586bddecd7dc22-43503492',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_installed' => 0,
    'runtime' => 0,
    'addons_list' => 0,
    'suffix' => 0,
    'a' => 0,
    'non_editable' => 0,
    'addon_classes' => 0,
    'additional_class' => 0,
    'key' => 0,
    'settings' => 0,
    'images_dir' => 0,
    'href' => 0,
    'link_text' => 0,
    'btn_class' => 0,
    'act' => 0,
    'hide_for_vendor' => 0,
    'status_meta' => 0,
    'display' => 0,
    'has_available' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586bdded0ec5d9_18245980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586bdded0ec5d9_18245980')) {function content_586bdded0ec5d9_18245980($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/app/functions/smarty_plugins/modifier.date_format.php';
?><?php
fn_preload_lang_vars(array('manage','settings','version','settings','licensing_and_upgrades','licensing_and_upgrades','uninstall','install','installed','no_data'));
?>
<?php $_smarty_tpl->tpl_vars['suffix'] = new Smarty_variable('', null, 0);?>
<?php $_smarty_tpl->tpl_vars['has_available'] = new Smarty_variable(false, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['show_installed']->value) {?>
    <?php $_smarty_tpl->tpl_vars['suffix'] = new Smarty_variable("installed", null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <?php $_smarty_tpl->tpl_vars["hide_for_vendor"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['addons_list']->value) {?>
    <table class="table table-addons cm-filter-table" data-ca-input-id="elm_addon" data-ca-clear-id="elm_addon_clear" data-ca-empty-id="elm_addon_no_items<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php  $_smarty_tpl->tpl_vars["a"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["a"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['addons_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["a"]->key => $_smarty_tpl->tpl_vars["a"]->value) {
$_smarty_tpl->tpl_vars["a"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["a"]->key;
?>

    <?php $_smarty_tpl->tpl_vars["non_editable"] = new Smarty_variable(false, null, 0);?>
    <?php $_smarty_tpl->tpl_vars["display"] = new Smarty_variable("text", null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['a']->value['status']=="N") {?>
        <?php $_smarty_tpl->tpl_vars["non_editable"] = new Smarty_variable(true, null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["display"] = new Smarty_variable("popup", null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['a']->value['has_options']) {?>
            <?php $_smarty_tpl->tpl_vars["act"] = new Smarty_variable("edit", null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["act"] = new Smarty_variable("none", null, 0);?>
            <?php $_smarty_tpl->tpl_vars["non_editable"] = new Smarty_variable(true, null, 0);?>
        <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['a']->value['separate']&&!$_smarty_tpl->tpl_vars['non_editable']->value) {?>
        <?php $_smarty_tpl->tpl_vars["href"] = new Smarty_variable(fn_url("addons.update?addon=".((string)$_smarty_tpl->tpl_vars['a']->value['addon'])), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["link_text"] = new Smarty_variable($_smarty_tpl->__("manage"), null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['a']->value['status']!="N") {?>
        <?php $_smarty_tpl->tpl_vars["link_text"] = new Smarty_variable($_smarty_tpl->__("settings"), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["link_text"] = new Smarty_variable("&nbsp;", null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars["addon_classes"] = new Smarty_variable("filter_status_".((string)$_smarty_tpl->tpl_vars['a']->value['status']), null, 0);?>

    <?php if (($_smarty_tpl->tpl_vars['a']->value['is_core_addon'])) {?>
        <?php $_smarty_tpl->tpl_vars["addon_classes"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['addon_classes']->value)." filter_source_built_in", null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["addon_classes"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['addon_classes']->value)." filter_source_third_party", null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("addons_row", null, null); ob_start(); ?>
        <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['a']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['additional_class']->value, ENT_QUOTES, 'UTF-8');?>
 cm-row-item <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon_classes']->value, ENT_QUOTES, 'UTF-8');?>
" id="addon_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
            <td class="addon-icon">
                <div class="bg-icon" <?php if ($_smarty_tpl->tpl_vars['a']->value['status']!="N"&&$_smarty_tpl->tpl_vars['a']->value['install_datetime']) {?>title="<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['a']->value['install_datetime'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                    <?php if ($_smarty_tpl->tpl_vars['a']->value['has_icon']) {?>
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
/icon.png" width="38" height="38" border="0" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['name'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['name'], ENT_QUOTES, 'UTF-8');?>
"/>
                    <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['a']->value['status']=="N") {?>
                            <i class="icon-puzzle-piece"></i>
                        <?php } else { ?>
                            <i class="icon-puzzle-piece icon-blue"></i>
                        <?php }?>
                    <?php }?>
                </div>
            </td>
            <td width="80%">
                <div class="object-group-link-wrap">
                <?php if (!$_smarty_tpl->tpl_vars['non_editable']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['a']->value['separate']) {?>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['a']->value['snapshot_correct']) {?> class="cm-promo-popup"<?php }?>><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['a']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['key']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
</a>
                    <?php } else { ?>
                        <a class="row-status cm-external-click<?php if ($_smarty_tpl->tpl_vars['non_editable']->value) {?> no-underline<?php }?> <?php if (!$_smarty_tpl->tpl_vars['a']->value['snapshot_correct']) {?>cm-promo-popup<?php }?>" <?php if ($_smarty_tpl->tpl_vars['a']->value['snapshot_correct']) {?>data-ca-external-click-id="opener_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
installed"<?php }?>><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['a']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['key']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
</a>
                    <?php }?>
                <?php } else { ?>
                    <span class="unedited-element block"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['a']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['key']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>
                <?php }?>
                <br><span class="row-status object-group-details"><?php echo $_smarty_tpl->tpl_vars['a']->value['description'];?>
</span>
                <div class="addon-info">
                    <small class="muted addon-version"><?php echo $_smarty_tpl->__("version");?>
 <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['a']->value['version'])===null||$tmp==='' ? 0.1 : $tmp), ENT_QUOTES, 'UTF-8');?>
</small>
                    <?php if ($_smarty_tpl->tpl_vars['a']->value['supplier']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['a']->value['supplier_link']) {?>
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['supplier_link'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" class="muted addon-supplier"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['supplier'], ENT_QUOTES, 'UTF-8');?>
</a>
                        <?php } else { ?>
                            <small class="muted addon-supplier"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['supplier'], ENT_QUOTES, 'UTF-8');?>
</small>
                        <?php }?>
                    <?php }?>
                </div>
                </div>
            </td>
            <td width="10%" class="right nowrap addon-action">

                <?php if ($_smarty_tpl->tpl_vars['show_installed']->value&&$_smarty_tpl->tpl_vars['a']->value['status']!='N') {?>
                    <div class="pull-right">
                    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                        <?php if ($_smarty_tpl->tpl_vars['a']->value['separate']) {?>
                            <?php if (!$_smarty_tpl->tpl_vars['non_editable']->value) {?>
                                <?php if (!$_smarty_tpl->tpl_vars['a']->value['snapshot_correct']) {
$_smarty_tpl->tpl_vars['btn_class'] = new Smarty_variable("cm-promo-popup", null, 0);
} else {
$_smarty_tpl->tpl_vars['btn_class'] = new Smarty_variable('', null, 0);
}?>
                                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->tpl_vars['link_text']->value,'href'=>$_smarty_tpl->tpl_vars['href']->value,'class'=>$_smarty_tpl->tpl_vars['btn_class']->value));?>
</li>
                            <?php } else { ?>
                                <li class="disabled"><a><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_text']->value, ENT_QUOTES, 'UTF-8');?>
</a></li>
                            <?php }?>
                        <?php } else { ?>
                            <li><?php ob_start();
echo $_smarty_tpl->__("settings");
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"group".((string)$_smarty_tpl->tpl_vars['key']->value).((string)$_smarty_tpl->tpl_vars['suffix']->value),'text'=>$_tmp1.": ".((string)$_smarty_tpl->tpl_vars['a']->value['name']),'act'=>(($tmp = @$_smarty_tpl->tpl_vars['act']->value)===null||$tmp==='' ? "link" : $tmp),'link_text'=>$_smarty_tpl->tpl_vars['link_text']->value,'href'=>$_smarty_tpl->tpl_vars['a']->value['url'],'is_promo'=>!$_smarty_tpl->tpl_vars['a']->value['snapshot_correct']), 0);?>
</li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['a']->value['licensing_url']) {?>
                            <li><?php ob_start();
echo $_smarty_tpl->__("licensing_and_upgrades");
$_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('text'=>$_tmp2.": ".((string)$_smarty_tpl->tpl_vars['a']->value['name']),'act'=>"link",'link_text'=>$_smarty_tpl->__("licensing_and_upgrades"),'href'=>$_smarty_tpl->tpl_vars['a']->value['licensing_url']), 0);?>
</li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['a']->value['delete_url']) {?>
                            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'text'=>$_smarty_tpl->__("uninstall"),'data'=>array('data-ca-target-id'=>'addons_list,header_navbar,header_subnav'),'href'=>$_smarty_tpl->tpl_vars['a']->value['delete_url'],'method'=>"POST"));?>
</li>
                        <?php }?>
                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                    </div>
                <?php }?>

            </td>
            <td width="15%" class="addon-action">
                <?php if ($_smarty_tpl->tpl_vars['a']->value['status']=='N') {?>
                    <?php if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>
                    <div class="pull-right">
                        <a class="btn lowercase cm-post <?php if ($_smarty_tpl->tpl_vars['a']->value['snapshot_correct']) {?>cm-ajax cm-ajax-full-render<?php } else { ?>cm-promo-popup<?php }?>" href="<?php echo htmlspecialchars(fn_url("addons.install?addon=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="addons_list,header_navbar,header_subnav,addons_counter"><?php echo $_smarty_tpl->__("install");?>
</a>
                    </div>
                    <?php }?>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['show_installed']->value) {?>
                        <div class="pull-right nowrap">
                            <?php if (!$_smarty_tpl->tpl_vars['a']->value['snapshot_correct']) {
$_smarty_tpl->tpl_vars['status_meta'] = new Smarty_variable("cm-promo-popup", null, 0);
} else {
$_smarty_tpl->tpl_vars['status_meta'] = new Smarty_variable('', null, 0);
}?>
                            <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('popup_additional_class'=>"dropleft",'id'=>$_smarty_tpl->tpl_vars['key']->value,'status'=>$_smarty_tpl->tpl_vars['a']->value['status'],'hide_for_vendor'=>$_smarty_tpl->tpl_vars['hide_for_vendor']->value,'non_editable'=>false,'status_meta'=>$_smarty_tpl->tpl_vars['status_meta']->value,'display'=>$_smarty_tpl->tpl_vars['display']->value,'update_controller'=>"addons",'status_target_id'=>"addons_list,header_navbar,header_subnav,addons_counter",'ajax_full_render'=>true), 0);?>

                        </div>
                    <?php } else { ?>
                        <span class="pull-right label label-info"><?php echo $_smarty_tpl->__("installed");?>
</span>
                    <?php }?>
                <?php }?>
            </td>
        <!--addon_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
--></tr>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php if ($_smarty_tpl->tpl_vars['show_installed']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['a']->value['status']=='A'||$_smarty_tpl->tpl_vars['a']->value['status']=='D') {?>
            <?php echo Smarty::$_smarty_vars['capture']['addons_row'];?>

            <?php $_smarty_tpl->tpl_vars['has_available'] = new Smarty_variable(true, null, 0);?>
        <?php }?>
    <?php } else { ?>
        <?php echo Smarty::$_smarty_vars['capture']['addons_row'];?>

        <?php $_smarty_tpl->tpl_vars['has_available'] = new Smarty_variable(true, null, 0);?>
    <?php }?>

<?php } ?>
</table>
<?php }?>

<p id="elm_addon_no_items<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="no-items <?php if ($_smarty_tpl->tpl_vars['has_available']->value) {?>hidden<?php }?>"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }} ?>
