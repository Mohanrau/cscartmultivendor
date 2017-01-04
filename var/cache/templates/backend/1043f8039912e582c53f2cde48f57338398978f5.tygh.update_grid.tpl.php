<?php /* Smarty version Smarty-3.1.21, created on 2017-01-03 21:20:27
         compiled from "/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/backend/templates/views/block_manager/update_grid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:678338754586beb6b21d016-34119473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1043f8039912e582c53f2cde48f57338398978f5' => 
    array (
      0 => '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/backend/templates/views/block_manager/update_grid.tpl',
      1 => 1479968570,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '678338754586beb6b21d016-34119473',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'grid' => 0,
    'id' => 0,
    'grid_params' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586beb6b54e420_43305028',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586beb6b54e420_43305028')) {function content_586beb6b54e420_43305028($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('general','width','content_alignment','full_width','left','right','offset','user_class'));
?>

<?php if ($_smarty_tpl->tpl_vars['grid']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['grid']->value['grid_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<div id="grid_properties_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" class="form-horizontal form-edit " name="grid_update_form">
<input type="hidden" name="grid_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

<input type="hidden" name="container_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_params']->value['container_id'], ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="parent_id" value="<?php echo htmlspecialchars((($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['grid_params']->value['parent_id'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['grid']->value['parent_id'] : $tmp))===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
" />

<div class="tabs cm-j-tabs">
    <ul class="nav nav-tabs">
        <li class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
    </ul>
</div>

<div class="cm-tabs-content">
    <div class="control-group cm-no-hide-input">
        <label class="control-label" for="elm_grid_width_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("width");?>
</label>
        <div class="controls">
        <select id="elm_grid_width_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="width">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["width"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["width"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['name'] = "width";
$_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['start'] = (int) (($tmp = @$_smarty_tpl->tpl_vars['grid_params']->value['min_width'])===null||$tmp==='' ? 1 : $tmp)-(($tmp = @1)===null||$tmp==='' ? 0 : $tmp);
$_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['loop'] = is_array($_loop=(($tmp = @$_smarty_tpl->tpl_vars['grid_params']->value['max_width'])===null||$tmp==='' ? 24 : $tmp)) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['total']);
?>
                <?php $_smarty_tpl->tpl_vars["index"] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['section']['width']['index']+1, null, 0);?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['index']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['index']->value==$_smarty_tpl->tpl_vars['grid']->value['width']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['index']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php endfor; endif; ?>
        </select>
        </div>
    </div>

    <div class="control-group cm-no-hide-input">
        <label class="control-label" for="elm_grid_content_align_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("content_alignment");?>
</label>
        <div class="controls">
        <select id="elm_grid_content_align_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="content_align">
            <option value="FULL_WIDTH" <?php if ($_smarty_tpl->tpl_vars['grid']->value['content_align']=="FULL_WIDTH") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("full_width");?>
</option>            
            <option value="LEFT" <?php if ($_smarty_tpl->tpl_vars['grid']->value['content_align']=="LEFT") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("left");?>
</option>
            <option value="RIGHT" <?php if ($_smarty_tpl->tpl_vars['grid']->value['content_align']=="RIGHT") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("right");?>
</option>
        </select>
        </div>
    </div>

    <div class="control-group cm-no-hide-input">
        <label class="control-label" for="elm_grid_offset_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("offset");?>
</label>
        <div class="controls">
        <select id="elm_grid_offset_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="offset">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["offset"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['name'] = "offset";
$_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['loop'] = is_array($_loop=(($tmp = @$_smarty_tpl->tpl_vars['grid_params']->value['max_width'])===null||$tmp==='' ? 24 : $tmp)) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['total']);
?>
                <?php $_smarty_tpl->tpl_vars["index"] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['section']['offset']['index'], null, 0);?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['index']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['index']->value==$_smarty_tpl->tpl_vars['grid']->value['offset']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['index']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php endfor; endif; ?>
        </select>
        </div>
    </div>

    <div class="control-group cm-no-hide-input">
        <label class="control-label" for="elm_grid_user_class_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("user_class");?>
</label>
        <div class="controls">
        <input id="elm_grid_user_class_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="user_class" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
" type="text" />
        </div>
    </div>

</div>

<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[block_manager.update_location]",'cancel_action'=>"close",'but_meta'=>"cm-dialog-closer",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

</div>
</form>
<!--grid_properties_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }} ?>
