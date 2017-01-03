<?php /* Smarty version Smarty-3.1.21, created on 2017-01-03 19:55:00
         compiled from "/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/backend/templates/common/license.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1370022168586bd76420d9e7-47176611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cd2defb6fa45237f2ce426637e98f2299eea7b4' => 
    array (
      0 => '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/backend/templates/common/license.tpl',
      1 => 1479968570,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1370022168586bd76420d9e7-47176611',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'store_mode' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586bd764274564_16948206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586bd764274564_16948206')) {function content_586bd764274564_16948206($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('ultimate_license_required','text_ultimate_license_required','text_license_required_storefronts','text_license_required_mobile','upgrade_license'));
?>
<?php if (fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['store_mode']->value!="ultimate") {?>
    <div id="restriction_promo_dialog" title="<?php echo $_smarty_tpl->__("ultimate_license_required",array("[product]"=>@constant('PRODUCT_NAME')));?>
" class="hidden cm-dialog-auto-size">
        <?php echo $_smarty_tpl->__("text_ultimate_license_required",array("[product]"=>@constant('PRODUCT_NAME'),"[ultimate_license_url]"=>$_smarty_tpl->tpl_vars['config']->value['resources']['ultimate_license_url']));?>

        <div class="restriction-features">
            <div class="restriction-feature restriction-feature_storefronts">
                <h2><?php echo $_smarty_tpl->__("text_license_required_storefronts-title");?>
</h2>
                <?php echo $_smarty_tpl->__("text_license_required_storefronts");?>

            </div>
            <div class="restriction-feature restriction-feature_mobile-app">
                <h2><?php echo $_smarty_tpl->__("text_license_required_mobile-title");?>
</h2>
                <?php echo $_smarty_tpl->__("text_license_required_mobile");?>

            </div>
        </div>
        <div class="center">
            <a class="restriction-update-btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['resources']['ultimate_license_url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->__("upgrade_license");?>
</a>
        </div>
    </div>
<?php }?><?php }} ?>
