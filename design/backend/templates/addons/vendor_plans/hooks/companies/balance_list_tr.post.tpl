<td>
    {if $payout.commission_type == "A"}
        {include file="common/price.tpl" value=$payout.commission}{* Backward compatibility *}
    {else}
        {$payout.commission}%
    {/if}
</td>
