<?php /* Smarty version Smarty-3.1.21, created on 2017-01-03 20:22:52
         compiled from "/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/backend/templates/views/addons/components/addons_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1358450285586bddecbcb0f6-33146850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fd7752fefbda3ea197d5b8763941cc53fbccea7' => 
    array (
      0 => '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/design/backend/templates/views/addons/components/addons_search_form.tpl',
      1 => 1479968570,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1358450285586bddecbcb0f6-33146850',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_meta' => 0,
    'extra' => 0,
    'search' => 0,
    'hide_for_vendor' => 0,
    'dispatch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586bddecc81c24_26225733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586bddecc81c24_26225733')) {function content_586bddecc81c24_26225733($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/Users/nguyenkim/Documents/svn01/SourceCode/Web/multivendor_v4.4.2/app/functions/smarty_plugins/block.inline_script.php';
?><?php
fn_preload_lang_vars(array('search','name','remove','status','any','not_installed','installed','active','disabled','addons_source','any','addon_built_in','addon_third_party','search'));
?>
<div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("search");?>
</h6>

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="addons_search_form" method="get" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
 addons-search-form">
        <?php echo $_smarty_tpl->tpl_vars['extra']->value;?>

        
        <div class="sidebar-field ">
            <label for="elm_addon"><?php echo $_smarty_tpl->__("name");?>
</label>
            <input type="text" name="q" id="elm_addon" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
" size="30" />
            <i class="icon icon-remove hidden" id="elm_addon_clear" title="<?php echo $_smarty_tpl->__("remove");?>
"></i>
        </div>
        <?php if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>
        <div class="sidebar-field">
            <label for="elm_addon_status"><?php echo $_smarty_tpl->__("status");?>
</label>

            <select id="elm_addon_status" name="type">
                <option value="any" <?php if (empty($_smarty_tpl->tpl_vars['search']->value['type'])||$_smarty_tpl->tpl_vars['search']->value['type']=='any') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("any");?>
</option>
                <option value="not_installed" <?php if ($_smarty_tpl->tpl_vars['search']->value['type']=='not_installed') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("not_installed");?>
</option>
                <option value="installed" <?php if ($_smarty_tpl->tpl_vars['search']->value['type']=='installed') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("installed");?>
</option>
                <option value="active" <?php if ($_smarty_tpl->tpl_vars['search']->value['type']=='active') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("active");?>
</option>
                <option value="disabled" <?php if ($_smarty_tpl->tpl_vars['search']->value['type']=='disabled') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("disabled");?>
</option>
            </select>
        </div>
        <div class="sidebar-field">
            <label for="elm_addon_source"><?php echo $_smarty_tpl->__("addons_source");?>
</label>
            <select id="elm_addon_source" name="source">
                <option value="" <?php if (empty($_smarty_tpl->tpl_vars['search']->value['source'])) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("any");?>
</option>
                <option value="core" <?php if ($_smarty_tpl->tpl_vars['search']->value['source']=='core') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("addon_built_in");?>
</option>
                <option value="third_party" <?php if ($_smarty_tpl->tpl_vars['search']->value['source']=='third_party') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("addon_third_party");?>
</option>
            </select>
        </div>
        <?php }?>

        <div class="sidebar-field">
            <input class="btn" type="submit" name="dispatch[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dispatch']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo $_smarty_tpl->__("search");?>
">
        </div>
    </form>
</div>
<?php if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
    (function(_, $) {
        $(document).ready(function() {
            var
                $tables = $('.table-addons.cm-filter-table'),
                $addon_status = $('#elm_addon_status'),
                $addon_source = $('#elm_addon_source');

            $.ceEvent('on', 'ce.commoninit', function(context) {
                var $temp_tables = context.find('.table-addons.cm-filter-table');

                if ($temp_tables.length) {
                    $tables = $temp_tables;
                }
            });

            $.ceEvent('on', 'ce.filter_table_show_items', function (container, data) {
                if (!container.hasClass('table-addons')) {
                    return;
                }

                var status = $addon_status.val(),
                    source = $addon_source.val();

                switch (status) {
                    case 'not_installed':
                        data.items = data.items.filter('.filter_status_N');
                        break;
                    case 'installed':
                        data.items = data.items.filter('.filter_status_A,.filter_status_D');
                        break;
                    case 'active':
                        data.items = data.items.filter('.filter_status_A');
                        break;
                    case 'disabled':
                        data.items = data.items.filter('.filter_status_D');
                        break;
                }

                switch (source) {
                    case 'core':
                        data.items = data.items.filter('.filter_source_built_in');
                        break;
                    case 'third_party':
                        data.items = data.items.filter('.filter_source_third_party');
                        break;
                }
            });

            $addon_status.on('change', function() {
                $tables.ceFilterTable('filter');
            });
            $addon_source.on('change', function() {
                $tables.ceFilterTable('filter');
            });
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
