<?php /* Smarty version Smarty-3.1.21, created on 2017-01-03 20:22:52
         compiled from "/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/backend/templates/views/addons/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:582207764586bddeca41c23-34127461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bc6e6d6cb9ffe111a839a5619d63bd10ba03179' => 
    array (
      0 => '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/backend/templates/views/addons/manage.tpl',
      1 => 1479968570,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '582207764586bddeca41c23-34127461',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'config' => 0,
    'snapshot_exist' => 0,
    'hide_for_vendor' => 0,
    'addons_counter' => 0,
    'settings' => 0,
    'search' => 0,
    'show_installed_tab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586bddecba51e7_89393725',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586bddecba51e7_89393725')) {function content_586bddecba51e7_89393725($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('marketplace','marketplace_find_more','change_addons_initialization','tools_addons_installed_count','tools_addons_activated_count','tools_addons_other_addons_count','change_addons_initialization_description','tools_addons_disable_all','tools_addons_disable_third_party','installed_addons','browse_all_available_addons','tools_addons_disabled_msg','tools_re_enable_add_ons','upload_addon','upload_addon','addons'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('states'=>fn_get_all_states(1)), 0);?>


<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <?php $_smarty_tpl->tpl_vars["hide_for_vendor"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/filter_table.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/addons_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"addons.manage"), 0);?>

    <div class="sidebar-row marketplace">
        <h6><?php echo $_smarty_tpl->__("marketplace");?>
</h6>
        <p class="marketplace-link"><?php echo $_smarty_tpl->__("marketplace_find_more",array("[href]"=>$_smarty_tpl->tpl_vars['config']->value['resources']['marketplace_url']));?>
</p>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['snapshot_exist']->value&&!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>
        <div class="sidebar-row">
            <h6><?php echo $_smarty_tpl->__("change_addons_initialization");?>
</h6>
            <ul class="unstyled sidebar-stat" id="addons_counter">
                <li><?php echo $_smarty_tpl->__("tools_addons_installed_count");?>
 <span><a href="<?php echo htmlspecialchars(fn_url("addons.manage&type=installed"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons_counter']->value['installed'], ENT_QUOTES, 'UTF-8');?>
</a></span></li>
                <li><?php echo $_smarty_tpl->__("tools_addons_activated_count");?>
 <span><a href="<?php echo htmlspecialchars(fn_url("addons.manage&type=active"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons_counter']->value['activated'], ENT_QUOTES, 'UTF-8');?>
</a></span></li>
                
                <li><?php echo $_smarty_tpl->__("tools_addons_other_addons_count");?>
 <span><a href="<?php echo htmlspecialchars(fn_url("addons.manage&source=third_party"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons_counter']->value['other'], ENT_QUOTES, 'UTF-8');?>
</a></span></li>
            <!--addons_counter--></ul>
        </div>
        <hr>
        <div class="sidebar-row">
            <p><?php echo $_smarty_tpl->__("change_addons_initialization_description");?>
</p>
            <div>
                <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
                    <input type="hidden" name="dispatch" value="addons.tools">
                    <button type="submit" class="btn btn-block <?php if ($_smarty_tpl->tpl_vars['settings']->value['init_addons']=="none") {?>disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['settings']->value['init_addons']=="none") {?>disabled="disabled" <?php }?>name="init_addons" value="none"><?php echo $_smarty_tpl->__("tools_addons_disable_all");?>
</button>
                    <button type="submit" class="btn btn-block <?php if ($_smarty_tpl->tpl_vars['settings']->value['init_addons']=="core") {?>disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['settings']->value['init_addons']=="core") {?>disabled="disabled" <?php }?>name="init_addons" value="core"><?php echo $_smarty_tpl->__("tools_addons_disable_third_party");?>
</button>
                </form>
            </div>
        </div>
    <?php }?>
    
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("upload_addon", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/upload_addon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div class="items-container" id="addons_list">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"addons:manage")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"addons:manage"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<?php if (($_smarty_tpl->tpl_vars['search']->value['type']=='any'&&empty($_smarty_tpl->tpl_vars['search']->value['source']))||in_array($_smarty_tpl->tpl_vars['search']->value['type'],array('installed','active','disabled'))) {?>
    <?php $_smarty_tpl->tpl_vars['show_installed_tab'] = new Smarty_variable(true, null, 0);?>
<?php }?>

<div class="tabs cm-j-tabs clear">
    <ul class="nav nav-tabs">
        <li id="tab_installed_addons" class="cm-js<?php if ($_smarty_tpl->tpl_vars['show_installed_tab']->value) {?> active<?php }?>"><a><?php echo $_smarty_tpl->__("installed_addons");?>
</a></li>
        <li id="tab_browse_all_available_addons" class="cm-js<?php if (!$_smarty_tpl->tpl_vars['show_installed_tab']->value) {?> active<?php }?>"><a><?php echo $_smarty_tpl->__("browse_all_available_addons");?>
</a></li>
    </ul>
</div>

<div class="cm-tabs-content">
    <div id="content_tab_installed_addons" <?php if (!$_smarty_tpl->tpl_vars['show_installed_tab']->value) {?>class="hidden"<?php }?>>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['init_addons']) {?>
            <div class="alert alert-block addon-info-msg">
                <span><?php echo $_smarty_tpl->__("tools_addons_disabled_msg");?>
</span>
                <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
                    <input type="hidden" name="dispatch" value="addons.tools">
                    <button type="submit" class="btn btn-warning" name="init_addons" value="restore"><?php echo $_smarty_tpl->__("tools_re_enable_add_ons");?>
</button>
                </form>
            </div>
        <?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/addons_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_installed'=>true), 0);?>

    </div>
    <div id="content_tab_browse_all_available_addons" <?php if ($_smarty_tpl->tpl_vars['show_installed_tab']->value) {?>class="hidden"<?php }?>>
        <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/addons_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</div>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"addons:manage"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<!--addons_list--></div>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"addons:adv_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"addons:adv_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&!defined("RESTRICTED_ADMIN")) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"upload_addon",'text'=>$_smarty_tpl->__("upload_addon"),'title'=>$_smarty_tpl->__("upload_addon"),'content'=>Smarty::$_smarty_vars['capture']['upload_addon'],'act'=>"general",'link_class'=>"cm-dialog-auto-size",'icon'=>"icon-plus",'link_text'=>''), 0);?>

    <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"addons:adv_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("addons"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons']), 0);?>

<?php }} ?>
