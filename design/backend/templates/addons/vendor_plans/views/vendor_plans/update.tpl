{assign var="id" value=0}
{if $plan.plan_id}
    {assign var="id" value=$plan.plan_id}
{/if}

<div id="content_plan_{$id}">

<form action="{""|fn_url}" method="post" enctype="multipart/form-data" name="update_plan_form_{$id}" class="form-horizontal form-edit ">
<input type="hidden" name="plan_id" value="{$id}" />

{capture name="tabsbox"}
    
    <div id="content_general_{$id}">
        {hook name="vendor_plans:details_general_content"}

        <div class="control-group">
            <label class="control-label cm-required" for="elm_plan_{$id}">{__("name")}:</label>
            <div class="controls">
                <input type="text" id="elm_plan_{$id}" name="plan_data[plan]" size="35" value="{$plan.plan}" class="input-large" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_is_default_{$id}">{__("vendor_plans.best_choise")}:</label>
            <div class="controls">
                <input type="hidden" name="plan_data[is_default]" value="0" />
                <input type="checkbox" id="elm_is_default_{$id}" name="plan_data[is_default]" size="10" value="1"{if $plan.is_default} checked="checked"{/if} />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_plan_description_{$id}">{__("description")}:</label>
            <div class="controls">
                <textarea id="elm_plan_description_{$id}" name="plan_data[description]" cols="55" rows="2" class="input-large">{$plan.description}</textarea>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_position_{$id}">{__("position")}:</label>
            <div class="controls">
                <input type="text" id="elm_position_{$id}" name="plan_data[position]" size="10" value="{$plan.position}" class="input-text-short" />
            </div>
        </div>

        {include file="common/select_status.tpl" input_name="plan_data[status]" id="plan_data_`$id`" obj=$plan hidden=true}

        {/hook}
    </div>

    <div id="content_commission_{$id}">
        
        <div class="control-group">
            <label class="control-label" for="elm_price_{$id}">{__("price")} ({$currencies.$primary_currency.symbol}):</label>
            <div class="controls">
                <input type="text" id="elm_price_{$id}" name="plan_data[price]" size="10" value="{$plan.price}" class="input-text-short" />
                <select name="plan_data[periodicity]" class="input-small">
                    {foreach from=$periodicities key=key item=item}
                        <option value="{$key}"{if $key == $plan.periodicity} selected="selected"{/if}>{$item}</option>
                    {/foreach}
                </select>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_commission_{$id}">{__("vendor_plans.transaction_fee")} (%):</label>
            <div class="controls">
                <input type="text" id="elm_commission_{$id}" name="plan_data[commission]" size="10" value="{$plan.commission}" class="input-text-short" />
            </div>
        </div>

    </div>

    <div id="content_restrictions_{$id}">
        
        <div class="control-group">
            <label class="control-label" for="elm_products_limit_{$id}">{__("vendor_plans.products_limit")}{include file="common/tooltip.tpl" tooltip=__("vendor_plans.products_limit_tooltip")}:</label>
            <div class="controls">
                <input type="text" id="elm_products_limit_{$id}" name="plan_data[products_limit]" size="10" value="{$plan.products_limit}" class="input-text-short" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_revenue_limit_{$id}">{__("vendor_plans.revenue_up_to")}{include file="common/tooltip.tpl" tooltip=__("vendor_plans.revenue_up_to_tooltip")} ({$currencies.$primary_currency.symbol}):</label>
            <div class="controls">
                <input type="text" id="elm_revenue_limit_{$id}" name="plan_data[revenue_limit]" size="10" value="{$plan.revenue_limit}" class="input-text-short" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_vendor_store_{$id}">{__("vendor_plans.vendor_store")}{include file="common/tooltip.tpl" tooltip=__("vendor_plans.vendor_store_tooltip")}:</label>
            <div class="controls">
                <input type="hidden" name="plan_data[vendor_store]" value="0" />
                <input type="checkbox" id="elm_vendor_store_{$id}" name="plan_data[vendor_store]" size="10" value="1"{if $plan.vendor_store} checked="checked"{/if} />
            </div>
        </div>

    </div>
    
    <div id="content_categories_{$id}" class="hidden">
        {hook name="vendor_plans:details_categories"}
            {include file="pickers/categories/picker.tpl"
                multiple=true
                input_name="plan_data[categories]"
                item_ids=$plan.categories
                data_id="category_ids"
                no_item_text=__("text_all_categories_included")
                use_keys="N"
                but_meta="pull-right"
            }
        {/hook}
    </div>

    {hook name="vendor_plans:details_tabs_content"}{/hook}

{/capture}
{include file="common/tabsbox.tpl" content=$smarty.capture.tabsbox}

<div class="buttons-container">
    {include file="buttons/save_cancel.tpl" but_name="dispatch[vendor_plans.update]" cancel_action="close" save=$id}
</div>

</form>

<!--content_plan_{$id}--></div>
