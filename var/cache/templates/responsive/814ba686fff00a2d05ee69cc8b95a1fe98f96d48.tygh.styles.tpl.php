<?php /* Smarty version Smarty-3.1.21, created on 2017-01-03 20:07:59
         compiled from "/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/themes/responsive/templates/common/styles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:379563960586bda6f43d225-65407887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '814ba686fff00a2d05ee69cc8b95a1fe98f96d48' => 
    array (
      0 => '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/themes/responsive/templates/common/styles.tpl',
      1 => 1483462471,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '379563960586bda6f43d225-65407887',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'reflect_less' => 0,
    'language_direction' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586bda6f4dbd04_33081950',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586bda6f4dbd04_33081950')) {function content_586bda6f4dbd04_33081950($_smarty_tpl) {?><?php if (!is_callable('smarty_block_styles')) include '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/app/functions/smarty_plugins/block.styles.php';
if (!is_callable('smarty_block_hook')) include '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_style')) include '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/app/functions/smarty_plugins/function.style.php';
if (!is_callable('smarty_function_set_id')) include '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('styles', array('use_scheme'=>true,'reflect_less'=>$_smarty_tpl->tpl_vars['reflect_less']->value)); $_block_repeat=true; echo smarty_block_styles(array('use_scheme'=>true,'reflect_less'=>$_smarty_tpl->tpl_vars['reflect_less']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:styles")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:styles"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    
    <?php echo smarty_function_style(array('src'=>"styles.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"tygh/responsive.less"),$_smarty_tpl);?>


    
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']||$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']) {?>
        <?php echo smarty_function_style(array('src'=>"tygh/design_mode.css",'area'=>"A"),$_smarty_tpl);?>

    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['theme_editor']) {?>
        <?php echo smarty_function_style(array('src'=>"tygh/theme_editor.css",'area'=>"A"),$_smarty_tpl);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['language_direction']->value=='rtl') {?>
        <?php echo smarty_function_style(array('src'=>"tygh/rtl.less"),$_smarty_tpl);?>

    <?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:styles"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_styles(array('use_scheme'=>true,'reflect_less'=>$_smarty_tpl->tpl_vars['reflect_less']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/styles.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/styles.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('styles', array('use_scheme'=>true,'reflect_less'=>$_smarty_tpl->tpl_vars['reflect_less']->value)); $_block_repeat=true; echo smarty_block_styles(array('use_scheme'=>true,'reflect_less'=>$_smarty_tpl->tpl_vars['reflect_less']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:styles")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:styles"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    
    <?php echo smarty_function_style(array('src'=>"styles.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"tygh/responsive.less"),$_smarty_tpl);?>


    
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']||$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']) {?>
        <?php echo smarty_function_style(array('src'=>"tygh/design_mode.css",'area'=>"A"),$_smarty_tpl);?>

    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['theme_editor']) {?>
        <?php echo smarty_function_style(array('src'=>"tygh/theme_editor.css",'area'=>"A"),$_smarty_tpl);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['language_direction']->value=='rtl') {?>
        <?php echo smarty_function_style(array('src'=>"tygh/rtl.less"),$_smarty_tpl);?>

    <?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:styles"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_styles(array('use_scheme'=>true,'reflect_less'=>$_smarty_tpl->tpl_vars['reflect_less']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?><?php }} ?>
