<div id="tgenresults">
    <h3>Treasure hoard</h3>
    <h4>Total Value</h4>
    <p>{{ totalValue }}</p>
    {% set gpValue = cpValue / 100 %}
    <p>(GP value: {{ gpValue|number_format }}gp)</p>
    <h4>Coins</h4>
    {% if coins.pp > 0 %}<p>Platinum: {{coins.pp|number_format}} pieces</p>{% endif %}
    {% if coins.gp > 0 %}<p>Gold: {{coins.gp|number_format}} pieces</p>{% endif %}
    {% if coins.sp > 0 %}<p>Silver: {{coins.sp|number_format}} pieces</p>{% endif %}
    {% if coins.cp > 0 %}<p>Copper: {{coins.cp|number_format}} pieces</p>{% endif %}
    {% if (coins.pp == 0) and (coins.gp == 0) and (coins.sp == 0) and (coins.cp == 0) %}<p>No Coins</p>{% endif %}
    <h4>Goods</h4>
    <ul>
    {% for good in goods %}
        <li>{{ good }}</li>
    {% else	 %}
        <li>No Goods</li>
    {% endfor %}
    </ul>
    <h4>Items</h4>
    <ul>
    {% for item in items %}
        <li>{{ item }}</li>
    {% else	 %}
        <li>No Items</li>
    {% endfor %}
    </ul>
    <h4>Trade Goods</h4>
    <ul>
    {% for good in tradeGoods %}
        <li>{{ good }}</li>
    {% else	 %}
        <li>No Trade Goods</li>
    {% endfor %}
    </ul>
</div>
