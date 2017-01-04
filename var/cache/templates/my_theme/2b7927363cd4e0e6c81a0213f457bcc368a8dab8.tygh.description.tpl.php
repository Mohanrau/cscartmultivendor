<?php /* Smarty version Smarty-3.1.21, created on 2017-01-03 21:08:14
         compiled from "/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/themes/responsive/templates/blocks/product_tabs/description.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1299338847586be88e3481c5-44154864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b7927363cd4e0e6c81a0213f457bcc368a8dab8' => 
    array (
      0 => '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/themes/responsive/templates/blocks/product_tabs/description.tpl',
      1 => 1483462471,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1299338847586be88e3481c5-44154864',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586be88e4bed67_01192602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586be88e4bed67_01192602')) {function content_586be88e4bed67_01192602($_smarty_tpl) {?><?php if (!is_callable('smarty_function_live_edit')) include '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/app/functions/smarty_plugins/function.live_edit.php';
if (!is_callable('smarty_function_set_id')) include '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['full_description']) {?>
    <div <?php echo smarty_function_live_edit(array('name'=>"product:full_description:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['product']->value['full_description'];?>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['short_description']) {?>
    <div <?php echo smarty_function_live_edit(array('name'=>"product:short_description:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['product']->value['short_description'];?>
</div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_tabs/description.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_tabs/description.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['full_description']) {?>
    <div <?php echo smarty_function_live_edit(array('name'=>"product:full_description:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['product']->value['full_description'];?>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['short_description']) {?>
    <div <?php echo smarty_function_live_edit(array('name'=>"product:short_description:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['product']->value['short_description'];?>
</div>
<?php }?>
<?php }?><?php }} ?>
