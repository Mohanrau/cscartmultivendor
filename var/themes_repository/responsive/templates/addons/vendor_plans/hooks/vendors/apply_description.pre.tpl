{if $vendor_plans}
    <div class="ty-control-group ty-apply-for-vendor-plan">
        <label class="ty-control-group__title" for="company_plan">{__("vendor_plans.plan")}</label>
        <select name="company_data[plan_id]" id="company_plan" class="ty-apply-for-vendor-plan__select cm-vendor-plans-selector">
            {$default_plan = $company_data.plan_id}
            {if !$default_plan}
                {$default_plan = $smarty.request.plan_id}
            {/if}
            {foreach from=$vendor_plans item="plan"}
                <option value="{$plan.plan_id}"{if (!$default_plan && $plan.is_default) || $plan.plan_id == $default_plan} selected="selected"{/if}>{$plan.plan} ({include file="common/price.tpl" value=$plan.price})</option>
            {/foreach}
        </select>
    </div>
{/if}
