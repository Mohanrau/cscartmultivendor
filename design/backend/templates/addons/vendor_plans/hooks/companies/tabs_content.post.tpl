<div id="content_plan" class="hidden">

    {if $runtime.company_id}
        <p>{__("vendor_plans.choose_your_plan")}</p>
        {include file="addons/vendor_plans/views/vendor_plans/components/plans_selector.tpl" plans=$vendor_plans current_plan_id=$company_data.plan_id name="company_data[plan_id]"}
    {else}
        <div class="control-group">
            <label class="control-label" for="elm_company_plan">{__("vendor_plans.plan")}:</label>
            <div class="controls">
                <select name="company_data[plan_id]" id="elm_company_plan" class="cm-object-selector">
                    {foreach from=$vendor_plans item="plan"}
                        {strip}
                        <option value="{$plan.plan_id}"{if ($plan.plan_id == $company_data.plan_id) || (!$company_data.plan_id && $plan.is_default)} selected="selected"{/if}>{$plan->plan} ({include file="common/price.tpl" value=$plan->price})</option>
                        {/strip}
                    {/foreach}
                </select>
            </div>
        </div>
    {/if}

</div>
