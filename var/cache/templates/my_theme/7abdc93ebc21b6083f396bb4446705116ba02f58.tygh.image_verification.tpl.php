<?php /* Smarty version Smarty-3.1.21, created on 2017-01-03 20:23:41
         compiled from "/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/themes/responsive/templates/common/image_verification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:727947296586bde1d9a5403-31086629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7abdc93ebc21b6083f396bb4446705116ba02f58' => 
    array (
      0 => '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/themes/responsive/templates/common/image_verification.tpl',
      1 => 1483462471,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '727947296586bde1d9a5403-31086629',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'option' => 0,
    'settings' => 0,
    'sidebox' => 0,
    'id' => 0,
    'is' => 0,
    'align' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586bde1da98ec5_15552044',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586bde1da98ec5_15552044')) {function content_586bde1da98ec5_15552044($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('image_verification_label','image_verification_body','image_verification_label','image_verification_body'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (fn_needs_image_verification($_smarty_tpl->tpl_vars['option']->value)==true) {?>
    <?php $_smarty_tpl->tpl_vars["is"] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Image_verification'], null, 0);?>
    
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(uniqid("iv_"), null, 0);?>
    <div class="captcha ty-control-group">
        <?php if ($_smarty_tpl->tpl_vars['sidebox']->value) {?>
            <p>
                <img id="verification_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-captcha__img" src="<?php echo htmlspecialchars(fn_url("image.captcha?verification_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
" alt="" onclick="this.src += '|1' ;" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is']->value['height'], ENT_QUOTES, 'UTF-8');?>
" />
                <i class="ty-icon-refresh ty-captcha__refresh" onclick="document.getElementById('verification_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
').src += '|1';"></i>
            </p>
        <?php }?>
            <label for="verification_answer_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required ty-captcha__label"><?php echo $_smarty_tpl->__("image_verification_label");?>
</label>
        <?php if (!$_smarty_tpl->tpl_vars['sidebox']->value) {?>
            <div class="cm-field-container">
        <?php }?>
            <input class="ty-captcha__input cm-autocomplete-off" type="text" id="verification_answer_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="verification_answer" value= "" />
            <input type="hidden" name="verification_id" value= "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php if (!$_smarty_tpl->tpl_vars['sidebox']->value) {?>
            <div class="ty-captcha__code">
                <img id="verification_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-captcha__img" src="<?php echo htmlspecialchars(fn_url("image.captcha?verification_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&no_session=Y&".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
" alt="" onclick="this.src += '|1' ;"  width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is']->value['height'], ENT_QUOTES, 'UTF-8');?>
" />
                <i class="ty-icon-refresh ty-captcha__refresh" onclick="document.getElementById('verification_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
').src += '|1';"></i>
            </div>
            </div><!-- close .cm-field-container  -->
        <?php }?>
        <div <?php if ($_smarty_tpl->tpl_vars['align']->value) {?> class="ty-captcha__txt <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['align']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo $_smarty_tpl->__("image_verification_body");?>
</div>
    </div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/image_verification.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/image_verification.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (fn_needs_image_verification($_smarty_tpl->tpl_vars['option']->value)==true) {?>
    <?php $_smarty_tpl->tpl_vars["is"] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Image_verification'], null, 0);?>
    
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(uniqid("iv_"), null, 0);?>
    <div class="captcha ty-control-group">
        <?php if ($_smarty_tpl->tpl_vars['sidebox']->value) {?>
            <p>
                <img id="verification_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-captcha__img" src="<?php echo htmlspecialchars(fn_url("image.captcha?verification_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
" alt="" onclick="this.src += '|1' ;" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is']->value['height'], ENT_QUOTES, 'UTF-8');?>
" />
                <i class="ty-icon-refresh ty-captcha__refresh" onclick="document.getElementById('verification_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
').src += '|1';"></i>
            </p>
        <?php }?>
            <label for="verification_answer_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required ty-captcha__label"><?php echo $_smarty_tpl->__("image_verification_label");?>
</label>
        <?php if (!$_smarty_tpl->tpl_vars['sidebox']->value) {?>
            <div class="cm-field-container">
        <?php }?>
            <input class="ty-captcha__input cm-autocomplete-off" type="text" id="verification_answer_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="verification_answer" value= "" />
            <input type="hidden" name="verification_id" value= "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php if (!$_smarty_tpl->tpl_vars['sidebox']->value) {?>
            <div class="ty-captcha__code">
                <img id="verification_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-captcha__img" src="<?php echo htmlspecialchars(fn_url("image.captcha?verification_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&no_session=Y&".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
" alt="" onclick="this.src += '|1' ;"  width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is']->value['height'], ENT_QUOTES, 'UTF-8');?>
" />
                <i class="ty-icon-refresh ty-captcha__refresh" onclick="document.getElementById('verification_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
').src += '|1';"></i>
            </div>
            </div><!-- close .cm-field-container  -->
        <?php }?>
        <div <?php if ($_smarty_tpl->tpl_vars['align']->value) {?> class="ty-captcha__txt <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['align']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo $_smarty_tpl->__("image_verification_body");?>
</div>
    </div>
<?php }
}?><?php }} ?>
