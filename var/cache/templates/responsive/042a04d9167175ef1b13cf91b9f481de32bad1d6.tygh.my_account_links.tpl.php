<?php /* Smarty version Smarty-3.1.21, created on 2017-01-03 20:08:10
         compiled from "/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/themes/responsive/templates/blocks/static_templates/my_account_links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175060952586bda7a667308-26859557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '042a04d9167175ef1b13cf91b9f481de32bad1d6' => 
    array (
      0 => '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/themes/responsive/templates/blocks/static_templates/my_account_links.tpl',
      1 => 1483462471,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '175060952586bda7a667308-26859557',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586bda7a707f24_23403967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586bda7a707f24_23403967')) {function content_586bda7a707f24_23403967($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('orders','profile_details','sign_in','create_account','orders','profile_details','sign_in','create_account'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><ul id="account_info_links_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
">
<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("orders.search"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("orders");?>
</a></li>
    <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("profiles.update"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("profile_details");?>
</a></li>
<?php } else { ?>
    <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("auth.login_form"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("sign_in");?>
</a></li>
    <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("profiles.add"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("create_account");?>
</a></li>
<?php }?>
<!--account_info_links_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
--></ul><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/my_account_links.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/my_account_links.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><ul id="account_info_links_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
">
<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("orders.search"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("orders");?>
</a></li>
    <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("profiles.update"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("profile_details");?>
</a></li>
<?php } else { ?>
    <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("auth.login_form"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("sign_in");?>
</a></li>
    <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("profiles.add"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("create_account");?>
</a></li>
<?php }?>
<!--account_info_links_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
--></ul><?php }?><?php }} ?>
