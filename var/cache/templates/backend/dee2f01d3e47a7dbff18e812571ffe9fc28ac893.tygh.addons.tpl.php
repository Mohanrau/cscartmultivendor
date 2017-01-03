<?php /* Smarty version Smarty-3.1.21, created on 2017-01-03 20:00:41
         compiled from "/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/backend/templates/views/settings_wizard/components/addons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:503023669586bd8b9a1e6a0-66847997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dee2f01d3e47a7dbff18e812571ffe9fc28ac893' => 
    array (
      0 => '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/backend/templates/views/settings_wizard/components/addons.tpl',
      1 => 1479968570,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '503023669586bd8b9a1e6a0-66847997',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wizard_addons_list' => 0,
    'addon' => 0,
    'images_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586bd8b9a78f76_80482536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586bd8b9a78f76_80482536')) {function content_586bd8b9a78f76_80482536($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('install'));
?>
<?php  $_smarty_tpl->tpl_vars["addon"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["addon"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wizard_addons_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["addon"]->key => $_smarty_tpl->tpl_vars["addon"]->value) {
$_smarty_tpl->tpl_vars["addon"]->_loop = true;
?>
	<table class="table table-addons table-wizard">
	    <tr>
	        <td class="addon-icon">
	            <div class="bg-icon">
	                <?php if ($_smarty_tpl->tpl_vars['addon']->value['has_icon']) {?>
	                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
/icon.png" width="38" height="38" border="0" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
" >
	                <?php }?>
	            </div>
	        </td>
	        <td width="95%">
	            <div class="object-group-link-wrap">
	                <span class="unedited-element block"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span><br>
	                <span class="row-status object-group-details"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['description'], ENT_QUOTES, 'UTF-8');?>
</span>
	            </div>
	        </td>
	        <td width="5%">
	            <input type="hidden" name="addons[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
]" value="N">
	            <label for="addon_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox">
	                <input id="addon_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="addons[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
]" value="Y">
	                <?php echo $_smarty_tpl->__("install");?>

	            </label>     
	        </td>
	    </tr>
	</table>
<?php } ?><?php }} ?>
