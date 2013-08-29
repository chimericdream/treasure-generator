{% extends '/home/chimericdream/worldofpannotia.com/views/pages/main.tpl' %}
{% block pagetitle %}Known Issues &bull; Treasure Generator &bull; Tools &bull; {{ parent() }}{% endblock %}
{% block content %}
<h2>Treasure Generator</h2>
<small>
    <span class="center">
        <a href="index.php">Back to the generator</a>
    </span>
</small>
<p>
    This is more for me than anyone else, but in case you were curious...
</p>
<h3>Known Issues</h3>
<ul>
    <li>Double weapons currently only get one bonus generated</li>
    <li>Size adjustments don't work right for specific weapons &amp; armor</li>
    <li>There is something odd going on with the footer... probably a negative margin gone wrong or something</li>
</ul>
<h3>Future Additions</h3>
<ul>
    <li>Add epic item generation for high CRs</li>
    <li>Come up with prices for Draconomicon materials and objects</li>
    <li>Add book/page number references for items from the Magic Item Compendium</li>
    <li>Link to spells/items/etc in the SRD or on the Pannotia website</li>
</ul>
<small>
    <span class="center">
        <a href="index.php">Back to the generator</a>
    </span>
</small>
{% endblock %}