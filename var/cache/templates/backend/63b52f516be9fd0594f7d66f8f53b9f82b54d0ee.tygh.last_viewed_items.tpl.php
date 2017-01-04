<?php /* Smarty version Smarty-3.1.21, created on 2017-01-03 20:06:31
         compiled from "/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/backend/templates/common/last_viewed_items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1413022544586bda17b6dad8-33522620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63b52f516be9fd0594f7d66f8f53b9f82b54d0ee' => 
    array (
      0 => '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/backend/templates/common/last_viewed_items.tpl',
      1 => 1479968570,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1413022544586bda17b6dad8-33522620',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'breadcrumbs' => 0,
    'bc' => 0,
    'last_edited_items' => 0,
    'lnk' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586bda17bcefa5_02327811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586bda17bcefa5_02327811')) {function content_586bda17bcefa5_02327811($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/app/functions/smarty_plugins/modifier.truncate.php';
?><?php
fn_preload_lang_vars(array('no_items'));
?>
<div class="btn-group" id="last_edited_items">
    <a class="btn cm-back-link"><i class="icon-arrow-left "></i></a>
    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
    <ul class="dropdown-menu">
    <?php if (sizeof($_smarty_tpl->tpl_vars['breadcrumbs']->value)>=1) {?>
        <?php  $_smarty_tpl->tpl_vars["bc"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["bc"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["bc"]->key => $_smarty_tpl->tpl_vars["bc"]->value) {
$_smarty_tpl->tpl_vars["bc"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["bc"]->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['bc']->value['link']) {?>
                <li><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['bc']->value['link']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bc']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a></li>
            <?php } else { ?>
                <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bc']->value['title'], ENT_QUOTES, 'UTF-8');?>
</li>
            <?php }?>
        <?php } ?>
        <li class="divider"></li>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['last_edited_items']->value) {?>
        <?php  $_smarty_tpl->tpl_vars['lnk'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lnk']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['last_edited_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lnk']->key => $_smarty_tpl->tpl_vars['lnk']->value) {
$_smarty_tpl->tpl_vars['lnk']->_loop = true;
?>
            <li><a <?php if ($_smarty_tpl->tpl_vars['lnk']->value['icon']) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lnk']->value['icon'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['lnk']->value['url']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['lnk']->value['name']), ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['lnk']->value['name']),40);?>
</a></li>
        <?php } ?>
    <?php } else { ?>
        <li><a><?php echo $_smarty_tpl->__("no_items");?>
</a></li>
    <?php }?>
    </ul>
<!--last_edited_items--></div><?php }} ?>
