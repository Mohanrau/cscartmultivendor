<?php /* Smarty version Smarty-3.1.21, created on 2017-01-03 20:37:09
         compiled from "/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/themes/responsive/templates/common/view_tools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1632298695586be1458f7696-54528286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4566537d0bc250bca6164141313f432255dbeec8' => 
    array (
      0 => '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/themes/responsive/templates/common/view_tools.tpl',
      1 => 1483462471,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1632298695586be1458f7696-54528286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'view_tools' => 0,
    'quick_view' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586be145d4cba7_47886223',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586be145d4cba7_47886223')) {function content_586be145d4cba7_47886223($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('prev_page','quick_product_viewer','of','next','quick_product_viewer','prev_page','quick_product_viewer','of','next','quick_product_viewer'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['view_tools']->value) {?>
	<div class="ty-product-switcher">
	    <a class="ty-product-switcher__a ty-product-switcher__a-left <?php if (!$_smarty_tpl->tpl_vars['view_tools']->value['prev_id']) {?>disabled<?php } elseif ($_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-dialog-opener cm-dialog-auto-size<?php }?>" <?php if ($_smarty_tpl->tpl_vars['view_tools']->value['prev_id']) {?>href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['prev_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['links_label']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['links_label'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['view_tools']->value['show_item_id']) {?> #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['prev_id'], ENT_QUOTES, 'UTF-8');
}
} else {
echo $_smarty_tpl->__("prev_page");
}?>" <?php if ($_smarty_tpl->tpl_vars['quick_view']->value) {?>data-ca-view-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['prev_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="product_quick_view" data-ca-dialog-title="<?php echo $_smarty_tpl->__("quick_product_viewer");?>
" rel="nofollow"<?php }
}?>><i class="ty-product-switcher__icon ty-icon-left-circle"></i></a>
	        <span class="switcher-selected-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['current'], ENT_QUOTES, 'UTF-8');?>
</span>
	        <span><?php echo $_smarty_tpl->__("of");?>
</span>
	        <span class="switcher-total"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['total'], ENT_QUOTES, 'UTF-8');?>
</span>
	    <a class="ty-product-switcher__a ty-product-switcher__a-right <?php if (!$_smarty_tpl->tpl_vars['view_tools']->value['next_id']) {?>disabled<?php } elseif ($_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-dialog-opener cm-dialog-auto-size<?php }?>" <?php if ($_smarty_tpl->tpl_vars['view_tools']->value['next_id']) {?>href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['next_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['links_label']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['links_label'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['view_tools']->value['show_item_id']) {?> #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['next_id'], ENT_QUOTES, 'UTF-8');
}
} else {
echo $_smarty_tpl->__("next");
}?>" <?php if ($_smarty_tpl->tpl_vars['quick_view']->value) {?>data-ca-view-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['next_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="product_quick_view" data-ca-dialog-title="<?php echo $_smarty_tpl->__("quick_product_viewer");?>
" rel="nofollow"<?php }
}?>><i class="ty-product-switcher__icon ty-icon-right-circle"></i></a>
	</div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/view_tools.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/view_tools.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['view_tools']->value) {?>
	<div class="ty-product-switcher">
	    <a class="ty-product-switcher__a ty-product-switcher__a-left <?php if (!$_smarty_tpl->tpl_vars['view_tools']->value['prev_id']) {?>disabled<?php } elseif ($_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-dialog-opener cm-dialog-auto-size<?php }?>" <?php if ($_smarty_tpl->tpl_vars['view_tools']->value['prev_id']) {?>href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['prev_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['links_label']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['links_label'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['view_tools']->value['show_item_id']) {?> #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['prev_id'], ENT_QUOTES, 'UTF-8');
}
} else {
echo $_smarty_tpl->__("prev_page");
}?>" <?php if ($_smarty_tpl->tpl_vars['quick_view']->value) {?>data-ca-view-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['prev_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="product_quick_view" data-ca-dialog-title="<?php echo $_smarty_tpl->__("quick_product_viewer");?>
" rel="nofollow"<?php }
}?>><i class="ty-product-switcher__icon ty-icon-left-circle"></i></a>
	        <span class="switcher-selected-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['current'], ENT_QUOTES, 'UTF-8');?>
</span>
	        <span><?php echo $_smarty_tpl->__("of");?>
</span>
	        <span class="switcher-total"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['total'], ENT_QUOTES, 'UTF-8');?>
</span>
	    <a class="ty-product-switcher__a ty-product-switcher__a-right <?php if (!$_smarty_tpl->tpl_vars['view_tools']->value['next_id']) {?>disabled<?php } elseif ($_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-dialog-opener cm-dialog-auto-size<?php }?>" <?php if ($_smarty_tpl->tpl_vars['view_tools']->value['next_id']) {?>href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['next_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['links_label']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['links_label'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['view_tools']->value['show_item_id']) {?> #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['next_id'], ENT_QUOTES, 'UTF-8');
}
} else {
echo $_smarty_tpl->__("next");
}?>" <?php if ($_smarty_tpl->tpl_vars['quick_view']->value) {?>data-ca-view-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['next_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="product_quick_view" data-ca-dialog-title="<?php echo $_smarty_tpl->__("quick_product_viewer");?>
" rel="nofollow"<?php }
}?>><i class="ty-product-switcher__icon ty-icon-right-circle"></i></a>
	</div>
<?php }?>
<?php }?><?php }} ?>
