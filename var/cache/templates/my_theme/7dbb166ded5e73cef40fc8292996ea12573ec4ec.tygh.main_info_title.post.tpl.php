<?php /* Smarty version Smarty-3.1.21, created on 2017-01-03 21:08:12
         compiled from "/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/themes/responsive/templates/addons/discussion/hooks/products/main_info_title.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1375512289586be88c9678f7-22560918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dbb166ded5e73cef40fc8292996ea12573ec4ec' => 
    array (
      0 => '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/themes/responsive/templates/addons/discussion/hooks/products/main_info_title.post.tpl',
      1 => 1483463253,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1375512289586be88c9678f7-22560918',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'obj_id' => 0,
    'rating' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586be88cb5ed56_63046013',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586be88cb5ed56_63046013')) {function content_586be88cb5ed56_63046013($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('reviews','write_review','reviews','write_review'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['discussion_type']&&$_smarty_tpl->tpl_vars['product']->value['discussion_type']!='D') {?>
    <div class="ty-discussion__rating-wrapper" id="average_rating_product">
        <?php $_smarty_tpl->tpl_vars["rating"] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value];?>


        <?php if ($_smarty_tpl->tpl_vars['product']->value['discussion']['posts']) {?>
        <a class="ty-discussion__review-a cm-external-click" data-ca-scroll="content_discussion" data-ca-external-click-id="discussion"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("reviews",array($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items']));?>
</a>
        <?php }?>
        <a class="ty-discussion__review-write cm-dialog-opener cm-dialog-auto-size" data-ca-target-id="new_post_dialog_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("write_review");?>
</a>
    <!--average_rating_product--></div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/hooks/products/main_info_title.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/hooks/products/main_info_title.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['discussion_type']&&$_smarty_tpl->tpl_vars['product']->value['discussion_type']!='D') {?>
    <div class="ty-discussion__rating-wrapper" id="average_rating_product">
        <?php $_smarty_tpl->tpl_vars["rating"] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value];?>


        <?php if ($_smarty_tpl->tpl_vars['product']->value['discussion']['posts']) {?>
        <a class="ty-discussion__review-a cm-external-click" data-ca-scroll="content_discussion" data-ca-external-click-id="discussion"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("reviews",array($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items']));?>
</a>
        <?php }?>
        <a class="ty-discussion__review-write cm-dialog-opener cm-dialog-auto-size" data-ca-target-id="new_post_dialog_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("write_review");?>
</a>
    <!--average_rating_product--></div>
<?php }?>
<?php }?><?php }} ?>
