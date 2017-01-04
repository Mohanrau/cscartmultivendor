<?php /* Smarty version Smarty-3.1.21, created on 2017-01-03 21:18:25
         compiled from "/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/backend/templates/views/menus/components/block_settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1977131291586beaf1209164-29270444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17c02221baf6f8fae153bde1781cd54c106466f8' => 
    array (
      0 => '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/backend/templates/views/menus/components/block_settings.tpl',
      1 => 1479968570,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1977131291586beaf1209164-29270444',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'option' => 0,
    'html_id' => 0,
    'name' => 0,
    'html_name' => 0,
    'k' => 0,
    'value' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586beaf135e054_37879394',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586beaf135e054_37879394')) {function content_586beaf135e054_37879394($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('no_menus','manage_menus'));
?>
<?php if ($_smarty_tpl->tpl_vars['option']->value['values']) {?>
    <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['option']->value['required']) {?> class="cm-required"<?php }?>><?php if ($_smarty_tpl->tpl_vars['option']->value['option_name']) {
echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['option']->value['option_name']);
} else {
echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['name']->value);
}?>:</label>

    <select id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php  $_smarty_tpl->tpl_vars["v"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["v"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['option']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["v"]->key => $_smarty_tpl->tpl_vars["v"]->value) {
$_smarty_tpl->tpl_vars["v"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["v"]->key;
?>
        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value&&$_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['k']->value||!$_smarty_tpl->tpl_vars['value']->value&&$_smarty_tpl->tpl_vars['option']->value['default_value']==$_smarty_tpl->tpl_vars['k']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
</option>
    <?php } ?>
    </select>    
<?php } else { ?>
    <?php echo $_smarty_tpl->__("no_menus");?>

<?php }?>
<div>
    <a href="<?php echo htmlspecialchars(fn_url("menus.manage"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("manage_menus");?>
</a>
</div><?php }} ?>
