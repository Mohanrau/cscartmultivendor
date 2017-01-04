<?php /* Smarty version Smarty-3.1.21, created on 2017-01-03 21:08:13
         compiled from "/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/themes/responsive/templates/addons/social_buttons/providers/facebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1166655317586be88d3d20e5-77232479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '702aa408a74d65b24c6bebf1e07c921a651838fb' => 
    array (
      0 => '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/themes/responsive/templates/addons/social_buttons/providers/facebook.tpl',
      1 => 1483463253,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1166655317586be88d3d20e5-77232479',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'provider_settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586be88d578f71_83975759',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586be88d578f71_83975759')) {function content_586be88d578f71_83975759($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable']=="Y"&&$_smarty_tpl->tpl_vars['provider_settings']->value['facebook']['data']) {?>
<div id="fb-root"></div>
<div class="fb-like" <?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['facebook']['data'];?>
></div>
<?php echo '<script'; ?>
 class="cm-ajax-force">
    (function(_, $) {
        if ($(".fb-like").length > 0) {
            if (typeof (FB) != 'undefined') {
                FB.init({ status: true, cookie: true, xfbml: true });
            } else {
                $.getScript("//connect.facebook.net/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_lang'], ENT_QUOTES, 'UTF-8');?>
/all.js#xfbml=1&appId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_app_id'], ENT_QUOTES, 'UTF-8');?>
", function () {
                    FB.init({ status: true, cookie: true, xfbml: true });
                });
            }
        }
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/social_buttons/providers/facebook.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/social_buttons/providers/facebook.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable']=="Y"&&$_smarty_tpl->tpl_vars['provider_settings']->value['facebook']['data']) {?>
<div id="fb-root"></div>
<div class="fb-like" <?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['facebook']['data'];?>
></div>
<?php echo '<script'; ?>
 class="cm-ajax-force">
    (function(_, $) {
        if ($(".fb-like").length > 0) {
            if (typeof (FB) != 'undefined') {
                FB.init({ status: true, cookie: true, xfbml: true });
            } else {
                $.getScript("//connect.facebook.net/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_lang'], ENT_QUOTES, 'UTF-8');?>
/all.js#xfbml=1&appId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_app_id'], ENT_QUOTES, 'UTF-8');?>
", function () {
                    FB.init({ status: true, cookie: true, xfbml: true });
                });
            }
        }
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }?>
<?php }?><?php }} ?>
