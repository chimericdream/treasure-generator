<div id="tgenresults">
    <h3>Treasure hoard</h3>
    <h4>Total Value</h4>
    <p>{$totalValue}</p>
    <p>(GP value: {math equation="x / 100" x=$cpValue format="%.2f"})</p>
    <h4>Coins</h4>
    {if $coins.pp gt 0}<p>Platinum: {$coins.pp|number_format} pieces</p>{/if}
    {if $coins.gp gt 0}<p>Gold: {$coins.gp|number_format} pieces</p>{/if}
    {if $coins.sp gt 0}<p>Silver: {$coins.sp|number_format} pieces</p>{/if}
    {if $coins.cp gt 0}<p>Copper: {$coins.cp|number_format} pieces</p>{/if}
    {if $coins.pp eq 0 && $coins.gp eq 0 && $coins.sp eq 0 && $coins.cp eq 0}<p>No Coins</p>{/if}
    <h4>Goods</h4>
    <ul>
    {foreach from=$goods item=good}
        <li>{$good}</li>
    {foreachelse}
        <li>No Goods</li>
    {/foreach}
    </ul>
    <h4>Items</h4>
    <ul>
    {foreach from=$items item=item}
        <li>{$item}</li>
    {foreachelse}
        <li>No Items</li>
    {/foreach}
    </ul>
    <h4>Trade Goods</h4>
    <ul>
    {foreach from=$tradeGoods item=good}
        <li>{$good}</li>
    {foreachelse}
        <li>No Trade Goods</li>
    {/foreach}
    </ul>
</div>
