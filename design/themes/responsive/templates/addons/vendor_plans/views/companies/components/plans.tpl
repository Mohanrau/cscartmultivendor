<ul class="ty-vendor-plans{if $as_info} ty-vendor-plans-info cm-vendor-plans-info{/if}">
    {foreach from=$plans item=plan}
        {$hide = false}
        {if $as_info}
            {$hide = true}
            {if (!$plan_id && $plan.is_default) || $plan.plan_id == $plan_id}
                {$hide = false}
            {/if}
        {/if}
        <li class="ty-vendor-plans__item {if $plan.is_default} active{/if}{if $hide} hidden{/if}" data-ca-plan-id="{$plan.plan_id}">
            {if $plan.is_default}
                <div class="ty-vendor-plan-current-plan">
                   {__("vendor_plans.best_choice")}
                </div>
            {/if}
            <div class="ty-vendor-plan-content{if $plan.is_default} vendor-plan-current{/if}">
                
                {if $plan.description}
                    <p class="ty-vendor-plan-descr">{$plan.description|default:"&nbsp;" nofilter}</p>
                {/if}
                
                <h3 class="ty-vendor-plan-header">{$plan.plan}</h3>
                
                {strip}
                <span class="ty-vendor-plan-price">
                    {if floatval($plan.price)}
                        {include file="common/price.tpl" value=$plan.price}
                    {else}
                        {__('free')}
                    {/if}
                </span>
                {if $plan.periodicity != 'onetime'}
                    <span class="ty-vendor-plan-price-period">/&nbsp;{__("vendor_plans.{$plan.periodicity}")}</span>
                {/if}
                {/strip}

                {if !$as_info}
                <div class="ty-vendor-plan-link">
                    {include file="buttons/button.tpl" but_text=__("vendor_plans.choose") but_href="companies.apply_for_vendor?plan_id={$plan.plan_id}" but_role="text" but_meta="ty-btn__secondary"}
                </div>
                {/if}
                
                <div class="ty-vendor-plan-params">
                    <p>
                        {if $plan.products_limit}
                            {__("vendor_plans.products_limit_value", ["[products]" => $plan.products_limit])}
                        {else}
                            {__("vendor_plans.products_limit_unlimited")}
                        {/if}
                    </p>
                    <p>
                        {if floatval($plan.revenue_limit)}
                            {capture name="revenue"}
                                {include file="common/price.tpl" value=$plan.revenue_limit}
                            {/capture}
                            {__("vendor_plans.revenue_up_to_value", ["[revenue]" => $smarty.capture.revenue])}
                        {else}
                            {__("vendor_plans.revenue_up_to_unlimited")}
                        {/if}
                    </p>
                    <p>
                        {__("vendor_plans.transaction_fee_value", ["[value]" => "{$plan->commissionRound()}%"])}
                    </p>
                    {if $plan.vendor_store}
                        <p>{__("vendor_plans.vendor_store")}</p>
                    {/if}
                </div>

            </div>
        </li>
    {/foreach}
</ul>
