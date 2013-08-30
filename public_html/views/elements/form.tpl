<style>
.btn {
  display: inline-block;
  *display: inline;
  /* IE7 inline-block hack */

  *zoom: 1;
  padding: 4px 12px;
  margin-bottom: 0;
  font-size: 14px;
  line-height: 20px;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  color: #333333;
  text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
  background-color: #f5f5f5;
  background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6));
  background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: -o-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: linear-gradient(to bottom, #ffffff, #e6e6e6);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe6e6e6', GradientType=0);
  border-color: #e6e6e6 #e6e6e6 #bfbfbf;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  *background-color: #e6e6e6;
  /* Darken IE7 buttons by default so they stand out more given they won't have borders */

  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  border: 1px solid #cccccc;
  *border: 0;
  border-bottom-color: #b3b3b3;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  *margin-left: .3em;
  -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);
  -moz-box-shadow: inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);
  box-shadow: inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);
}
.btn:hover,
.btn:focus,
.btn:active,
.btn.active,
.btn.disabled,
.btn[disabled] {
  color: #333333;
  background-color: #e6e6e6;
  *background-color: #d9d9d9;
}
.btn:active,
.btn.active {
  background-color: #cccccc \9;
}
.btn:first-child {
  *margin-left: 0;
}
.btn:hover,
.btn:focus {
  color: #333333;
  text-decoration: none;
  background-position: 0 -15px;
  -webkit-transition: background-position 0.1s linear;
  -moz-transition: background-position 0.1s linear;
  -o-transition: background-position 0.1s linear;
  transition: background-position 0.1s linear;
}
.btn:focus {
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.btn.active,
.btn:active {
  background-image: none;
  outline: 0;
  -webkit-box-shadow: inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);
  -moz-box-shadow: inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);
  box-shadow: inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);
}
.btn.disabled,
.btn[disabled] {
  cursor: default;
  background-image: none;
  opacity: 0.65;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
}
.btn-large {
  padding: 11px 19px;
  font-size: 17.5px;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
}
.btn-large [class^="icon-"],
.btn-large [class*=" icon-"] {
  margin-top: 4px;
}
.btn-small {
  padding: 2px 10px;
  font-size: 11.9px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}
.btn-small [class^="icon-"],
.btn-small [class*=" icon-"] {
  margin-top: 0;
}
.btn-mini [class^="icon-"],
.btn-mini [class*=" icon-"] {
  margin-top: -1px;
}
.btn-mini {
  padding: 0 6px;
  font-size: 10.5px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}
.btn-block {
  display: block;
  width: 100%;
  padding-left: 0;
  padding-right: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.btn-block + .btn-block {
  margin-top: 5px;
}
input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%;
}
.btn-primary.active,
.btn-warning.active,
.btn-danger.active,
.btn-success.active,
.btn-info.active,
.btn-inverse.active {
  color: rgba(255, 255, 255, 0.75);
}
.btn-primary {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #006dcc;
  background-image: -moz-linear-gradient(top, #0088cc, #0044cc);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0044cc));
  background-image: -webkit-linear-gradient(top, #0088cc, #0044cc);
  background-image: -o-linear-gradient(top, #0088cc, #0044cc);
  background-image: linear-gradient(to bottom, #0088cc, #0044cc);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0044cc', GradientType=0);
  border-color: #0044cc #0044cc #002a80;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  *background-color: #0044cc;
  /* Darken IE7 buttons by default so they stand out more given they won't have borders */

  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active,
.btn-primary.active,
.btn-primary.disabled,
.btn-primary[disabled] {
  color: #ffffff;
  background-color: #0044cc;
  *background-color: #003bb3;
}
.btn-primary:active,
.btn-primary.active {
  background-color: #003399 \9;
}
.btn-warning {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #faa732;
  background-image: -moz-linear-gradient(top, #fbb450, #f89406);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#fbb450), to(#f89406));
  background-image: -webkit-linear-gradient(top, #fbb450, #f89406);
  background-image: -o-linear-gradient(top, #fbb450, #f89406);
  background-image: linear-gradient(to bottom, #fbb450, #f89406);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fffbb450', endColorstr='#fff89406', GradientType=0);
  border-color: #f89406 #f89406 #ad6704;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  *background-color: #f89406;
  /* Darken IE7 buttons by default so they stand out more given they won't have borders */

  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.btn-warning:hover,
.btn-warning:focus,
.btn-warning:active,
.btn-warning.active,
.btn-warning.disabled,
.btn-warning[disabled] {
  color: #ffffff;
  background-color: #f89406;
  *background-color: #df8505;
}
.btn-warning:active,
.btn-warning.active {
  background-color: #c67605 \9;
}
.btn-danger {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #da4f49;
  background-image: -moz-linear-gradient(top, #ee5f5b, #bd362f);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ee5f5b), to(#bd362f));
  background-image: -webkit-linear-gradient(top, #ee5f5b, #bd362f);
  background-image: -o-linear-gradient(top, #ee5f5b, #bd362f);
  background-image: linear-gradient(to bottom, #ee5f5b, #bd362f);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffee5f5b', endColorstr='#ffbd362f', GradientType=0);
  border-color: #bd362f #bd362f #802420;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  *background-color: #bd362f;
  /* Darken IE7 buttons by default so they stand out more given they won't have borders */

  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.btn-danger:hover,
.btn-danger:focus,
.btn-danger:active,
.btn-danger.active,
.btn-danger.disabled,
.btn-danger[disabled] {
  color: #ffffff;
  background-color: #bd362f;
  *background-color: #a9302a;
}
.btn-danger:active,
.btn-danger.active {
  background-color: #942a25 \9;
}
.btn-success {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #5bb75b;
  background-image: -moz-linear-gradient(top, #62c462, #51a351);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#62c462), to(#51a351));
  background-image: -webkit-linear-gradient(top, #62c462, #51a351);
  background-image: -o-linear-gradient(top, #62c462, #51a351);
  background-image: linear-gradient(to bottom, #62c462, #51a351);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff62c462', endColorstr='#ff51a351', GradientType=0);
  border-color: #51a351 #51a351 #387038;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  *background-color: #51a351;
  /* Darken IE7 buttons by default so they stand out more given they won't have borders */

  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.btn-success:hover,
.btn-success:focus,
.btn-success:active,
.btn-success.active,
.btn-success.disabled,
.btn-success[disabled] {
  color: #ffffff;
  background-color: #51a351;
  *background-color: #499249;
}
.btn-success:active,
.btn-success.active {
  background-color: #408140 \9;
}
.btn-info {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #49afcd;
  background-image: -moz-linear-gradient(top, #5bc0de, #2f96b4);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#5bc0de), to(#2f96b4));
  background-image: -webkit-linear-gradient(top, #5bc0de, #2f96b4);
  background-image: -o-linear-gradient(top, #5bc0de, #2f96b4);
  background-image: linear-gradient(to bottom, #5bc0de, #2f96b4);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bc0de', endColorstr='#ff2f96b4', GradientType=0);
  border-color: #2f96b4 #2f96b4 #1f6377;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  *background-color: #2f96b4;
  /* Darken IE7 buttons by default so they stand out more given they won't have borders */

  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.btn-info:hover,
.btn-info:focus,
.btn-info:active,
.btn-info.active,
.btn-info.disabled,
.btn-info[disabled] {
  color: #ffffff;
  background-color: #2f96b4;
  *background-color: #2a85a0;
}
.btn-info:active,
.btn-info.active {
  background-color: #24748c \9;
}
.btn-inverse {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #363636;
  background-image: -moz-linear-gradient(top, #444444, #222222);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#444444), to(#222222));
  background-image: -webkit-linear-gradient(top, #444444, #222222);
  background-image: -o-linear-gradient(top, #444444, #222222);
  background-image: linear-gradient(to bottom, #444444, #222222);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff444444', endColorstr='#ff222222', GradientType=0);
  border-color: #222222 #222222 #000000;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  *background-color: #222222;
  /* Darken IE7 buttons by default so they stand out more given they won't have borders */

  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.btn-inverse:hover,
.btn-inverse:focus,
.btn-inverse:active,
.btn-inverse.active,
.btn-inverse.disabled,
.btn-inverse[disabled] {
  color: #ffffff;
  background-color: #222222;
  *background-color: #151515;
}
.btn-inverse:active,
.btn-inverse.active {
  background-color: #080808 \9;
}
button.btn,
input[type="submit"].btn {
  *padding-top: 3px;
  *padding-bottom: 3px;
}
button.btn::-moz-focus-inner,
input[type="submit"].btn::-moz-focus-inner {
  padding: 0;
  border: 0;
}
button.btn.btn-large,
input[type="submit"].btn.btn-large {
  *padding-top: 7px;
  *padding-bottom: 7px;
}
button.btn.btn-small,
input[type="submit"].btn.btn-small {
  *padding-top: 3px;
  *padding-bottom: 3px;
}
button.btn.btn-mini,
input[type="submit"].btn.btn-mini {
  *padding-top: 1px;
  *padding-bottom: 1px;
}
.btn-link,
.btn-link:active,
.btn-link[disabled] {
  background-color: transparent;
  background-image: none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
}
.btn-link {
  border-color: transparent;
  cursor: pointer;
  color: #0088cc;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.btn-link:hover,
.btn-link:focus {
  color: #005580;
  text-decoration: underline;
  background-color: transparent;
}
.btn-link[disabled]:hover,
.btn-link[disabled]:focus {
  color: #333333;
  text-decoration: none;
}
</style>

<form action="index.php" method="post" id="tgenform" class="form-horizontal">
    <fieldset>
        <legend>Rule Set &amp; Generation Tables</legend>

        <div class="control-group">
            <label class="control-label" for="ruleset">Rule Set:</label>
            <div class="controls">
                <select name="ruleset" id="ruleset">
                    <option value=""{% if tgenoptions.ruleset == "" %} selected="selected"{% endif %}>Select rule set...</option>
                    <option value="DnD"{% if (tgenoptions.ruleset == "DnD") %} selected="selected"{% endif %}>D&amp;D</option>
                    <option value="Pannotia"{% if (tgenoptions.ruleset == "Pannotia") %} selected="selected"{% endif %}>Pannotia</option>
                    <option value="Pathfinder"{% if (tgenoptions.ruleset == "Pathfinder") %} selected="selected"{% endif %}>Pathfinder</option>
                </select>
            </div>
        </div>

        <div class="control-group DnD">
            <label class="control-label" for="DnD_edition">Edition:</label>
            <div class="controls">
                <select name="DnD_edition" id="DnD_edition">
                    <option value=""{% if tgenoptions.DnD_edition == "" %} selected="selected"{% endif %}>Select edition...</option>
                    <option value="30">3.0</option>
                    <option value="35_DMG"{% if tgenoptions.DnD_edition == "35_DMG" %} selected="selected"{% endif %}>3.5 DMG</option>
                    <option value="35_MIC"{% if tgenoptions.DnD_edition == "35_MIC" %} selected="selected"{% endif %}>3.5 MIC</option>
                    <option value="40">4.0</option>
                </select>
                <p><small>If you would like to suggest a variant set of tables for an edition of D&amp;D, feel free to <a href="mailto:contact@worldofpannotia.com">contact me</a>.</small></p>
            </div>
        </div>
    </fieldset>

    <fieldset class="DnD_30">
        <legend>Not Yet Supported</legend>
        <p>Sorry, but treasure generation for D&amp;D 3.0 is not yet supported. No promises on when it will be available, but it is a planned edition.</p>
    </fieldset>

    <fieldset class="DnD_35_DMG">
        <legend>Encounter Information</legend>

        <div class="control-group">
            <label class="control-label" for="DnD_35_DMG_CR">Challenge Rating</label>
            <div class="controls">
                <select name="DnD_35_DMG_CR" id="DnD_35_DMG_CR">
                    <option value="1"{% if tgenoptions.cr == "1" %} selected="selected"{% endif %}>1</option>
                    <option value="2"{% if tgenoptions.cr == "2" %} selected="selected"{% endif %}>2</option>
                    <option value="3"{% if tgenoptions.cr == "3" %} selected="selected"{% endif %}>3</option>
                    <option value="4"{% if tgenoptions.cr == "4" %} selected="selected"{% endif %}>4</option>
                    <option value="5"{% if tgenoptions.cr == "5" %} selected="selected"{% endif %}>5</option>
                    <option value="6"{% if tgenoptions.cr == "6" %} selected="selected"{% endif %}>6</option>
                    <option value="7"{% if tgenoptions.cr == "7" %} selected="selected"{% endif %}>7</option>
                    <option value="8"{% if tgenoptions.cr == "8" %} selected="selected"{% endif %}>8</option>
                    <option value="9"{% if tgenoptions.cr == "9" %} selected="selected"{% endif %}>9</option>
                    <option value="10"{% if tgenoptions.cr == "10" %} selected="selected"{% endif %}>10</option>
                    <option value="11"{% if tgenoptions.cr == "11" %} selected="selected"{% endif %}>11</option>
                    <option value="12"{% if tgenoptions.cr == "12" %} selected="selected"{% endif %}>12</option>
                    <option value="13"{% if tgenoptions.cr == "13" %} selected="selected"{% endif %}>13</option>
                    <option value="14"{% if tgenoptions.cr == "14" %} selected="selected"{% endif %}>14</option>
                    <option value="15"{% if tgenoptions.cr == "15" %} selected="selected"{% endif %}>15</option>
                    <option value="16"{% if tgenoptions.cr == "16" %} selected="selected"{% endif %}>16</option>
                    <option value="17"{% if tgenoptions.cr == "17" %} selected="selected"{% endif %}>17</option>
                    <option value="18"{% if tgenoptions.cr == "18" %} selected="selected"{% endif %}>18</option>
                    <option value="19"{% if tgenoptions.cr == "19" %} selected="selected"{% endif %}>19</option>
                    <option value="20"{% if tgenoptions.cr == "20" %} selected="selected"{% endif %}>20</option>
                </select>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="DnD_35_DMG_Mult">Treasure Multiplier</label>
            <div class="controls">
                <input type="text" name="DnD_35_DMG_Mult" id="DnD_35_DMG_Mult" value="{% if tgenoptions.multiplier %}{{ tgenoptions.multiplier }}{% else %}1{% endif %}" size="5" />
                <p>*1 = Standard, 2 = Double, etc up to 100... if you want to get ridiculous.</p>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="DnD_35_DMG_ExtSize">Use Extended Sizes</label>
            <div class="controls">
                <input class="checkbox" type="checkbox" value="true" id="DnD_35_DMG_ExtSize" name="DnD_35_DMG_ExtSize" {% if tgenoptions.extSize %}checked="checked" {% endif %}/>
                <p>This will allow items to be of non-standard sizes <small>(i.e. Huge, Gargantuan, Fine, Diminutive, etc.)</small>.</p>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="DnD_35_DMG_Cursed">Include Cursed items</label>
            <div class="controls">
                <input class="checkbox" type="checkbox" value="true" id="DnD_35_DMG_Cursed" name="DnD_35_DMG_Cursed" {% if tgenoptions.cursed %}checked="checked" {% endif %}/>
                <p>*This adds a 5% chance that any particular magic item in the hoard will be cursed.</p>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="DnD_35_DMG_TradeGoods">Include Trade Goods</label>
            <div class="controls">
                <input class="checkbox" type="checkbox" value="true" id="DnD_35_DMG_TradeGoods" name="DnD_35_DMG_TradeGoods" {% if tgenoptions.trade %}checked="checked" {% endif %}/>
                <p>*Include trade goods generated using the tables in the Draconomicon.</p>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="DnD_35_DMG_DracGoods">Include Goods from the Draconomicon</label>
            <div class="controls">
                <input class="checkbox" type="checkbox" value="true" id="DnD_35_DMG_DracGoods" name="DnD_35_DMG_DracGoods" {% if tgenoptions.drac %}checked="checked" {% endif %}/>
                <p>*DMG Only</p>
            </div>
        </div>
    </fieldset>

    <fieldset class="DnD_35_MIC">
        <legend>Encounter Information</legend>

        <div class="control-group">
            <label class="control-label" for="DnD_35_MIC_CR">Challenge Rating</label>
            <div class="controls">
                <select name="DnD_35_DMG_CR" id="DnD_35_MIC_CR">
                    <option value="1"{% if tgenoptions.cr == "1" %} selected="selected"{% endif %}>1</option>
                    <option value="2"{% if tgenoptions.cr == "2" %} selected="selected"{% endif %}>2</option>
                    <option value="3"{% if tgenoptions.cr == "3" %} selected="selected"{% endif %}>3</option>
                    <option value="4"{% if tgenoptions.cr == "4" %} selected="selected"{% endif %}>4</option>
                    <option value="5"{% if tgenoptions.cr == "5" %} selected="selected"{% endif %}>5</option>
                    <option value="6"{% if tgenoptions.cr == "6" %} selected="selected"{% endif %}>6</option>
                    <option value="7"{% if tgenoptions.cr == "7" %} selected="selected"{% endif %}>7</option>
                    <option value="8"{% if tgenoptions.cr == "8" %} selected="selected"{% endif %}>8</option>
                    <option value="9"{% if tgenoptions.cr == "9" %} selected="selected"{% endif %}>9</option>
                    <option value="10"{% if tgenoptions.cr == "10" %} selected="selected"{% endif %}>10</option>
                    <option value="11"{% if tgenoptions.cr == "11" %} selected="selected"{% endif %}>11</option>
                    <option value="12"{% if tgenoptions.cr == "12" %} selected="selected"{% endif %}>12</option>
                    <option value="13"{% if tgenoptions.cr == "13" %} selected="selected"{% endif %}>13</option>
                    <option value="14"{% if tgenoptions.cr == "14" %} selected="selected"{% endif %}>14</option>
                    <option value="15"{% if tgenoptions.cr == "15" %} selected="selected"{% endif %}>15</option>
                    <option value="16"{% if tgenoptions.cr == "16" %} selected="selected"{% endif %}>16</option>
                    <option value="17"{% if tgenoptions.cr == "17" %} selected="selected"{% endif %}>17</option>
                    <option value="18"{% if tgenoptions.cr == "18" %} selected="selected"{% endif %}>18</option>
                    <option value="19"{% if tgenoptions.cr == "19" %} selected="selected"{% endif %}>19</option>
                    <option value="20"{% if tgenoptions.cr == "20" %} selected="selected"{% endif %}>20</option>
                </select>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="DnD_35_MIC_Mult">Treasure Multiplier</label>
            <div class="controls">
                <input type="text" name="DnD_35_MIC_Mult" id="DnD_35_MIC_Mult" value="{% if tgenoptions.multiplier %}{{ tgenoptions.multiplier }}{% else %}1{% endif %}" size="5" />
                <p>*1 = Standard, 2 = Double, etc up to 100... if you want to get ridiculous.</p>
            </div>
        </div>

        <!--div class="control-group">
            <label class="control-label" for="DnD_35_MIC_ExtSize">Use Extended Sizes</label>
            <div class="controls">
                <input class="checkbox" type="checkbox" value="true" id="DnD_35_MIC_ExtSize" name="DnD_35_MIC_ExtSize" {% if tgenoptions.extSize %}checked="checked" {% endif %}/>
                <p>This will allow items to be of non-standard sizes <small>(i.e. Huge, Gargantuan, Fine, Diminutive, etc.)</small>.</p>
            </div>
        </div-->

        <div class="control-group">
            <label class="control-label" for="DnD_35_MIC_Cursed">Include Cursed items</label>
            <div class="controls">
                <input class="checkbox" type="checkbox" value="true" id="DnD_35_MIC_Cursed" name="DnD_35_MIC_Cursed" {% if tgenoptions.cursed %}checked="checked" {% endif %}/>
                <p>*This adds a 5% chance that any particular magic item in the hoard will be cursed.</p>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="DnD_35_MIC_TradeGoods">Include Trade Goods</label>
            <div class="controls">
                <input class="checkbox" type="checkbox" value="true" id="DnD_35_MIC_TradeGoods" name="DnD_35_MIC_TradeGoods" {% if tgenoptions.trade %}checked="checked" {% endif %}/>
                <p>*Include trade goods generated using the tables in the Draconomicon.</p>
            </div>
        </div>

        <!--div class="control-group">
            <label class="control-label" for="DnD_35_MIC_DracGoods">Include Goods from the Draconomicon</label>
            <div class="controls">
                <input class="checkbox" type="checkbox" value="true" id="DnD_35_MIC_DracGoods" name="DnD_35_MIC_DracGoods" {% if tgenoptions.drac %}checked="checked" {% endif %}/>
            </div>
        </div-->
    </fieldset>

    <fieldset class="DnD_40">
        <legend>Not Yet Supported</legend>
        <p>Sorry, but treasure generation for D&amp;D 4.0 is not yet supported. No promises on when it will be available, but it is a planned edition.</p>
    </fieldset>

    <fieldset class="Pannotia">
        <legend>Encounter Information</legend>

        <div class="control-group">
            <label class="control-label" for="Pannotia_CR">Challenge Rating</label>
            <div class="controls">
                <select name="Pannotia_CR" id="Pannotia_CR">
                    <option value="1"{% if tgenoptions.cr == "1" %} selected="selected"{% endif %}>1</option>
                    <option value="2"{% if tgenoptions.cr == "2" %} selected="selected"{% endif %}>2</option>
                    <option value="3"{% if tgenoptions.cr == "3" %} selected="selected"{% endif %}>3</option>
                    <option value="4"{% if tgenoptions.cr == "4" %} selected="selected"{% endif %}>4</option>
                    <option value="5"{% if tgenoptions.cr == "5" %} selected="selected"{% endif %}>5</option>
                    <option value="6"{% if tgenoptions.cr == "6" %} selected="selected"{% endif %}>6</option>
                    <option value="7"{% if tgenoptions.cr == "7" %} selected="selected"{% endif %}>7</option>
                    <option value="8"{% if tgenoptions.cr == "8" %} selected="selected"{% endif %}>8</option>
                    <option value="9"{% if tgenoptions.cr == "9" %} selected="selected"{% endif %}>9</option>
                    <option value="10"{% if tgenoptions.cr == "10" %} selected="selected"{% endif %}>10</option>
                    <option value="11"{% if tgenoptions.cr == "11" %} selected="selected"{% endif %}>11</option>
                    <option value="12"{% if tgenoptions.cr == "12" %} selected="selected"{% endif %}>12</option>
                    <option value="13"{% if tgenoptions.cr == "13" %} selected="selected"{% endif %}>13</option>
                    <option value="14"{% if tgenoptions.cr == "14" %} selected="selected"{% endif %}>14</option>
                    <option value="15"{% if tgenoptions.cr == "15" %} selected="selected"{% endif %}>15</option>
                    <option value="16"{% if tgenoptions.cr == "16" %} selected="selected"{% endif %}>16</option>
                    <option value="17"{% if tgenoptions.cr == "17" %} selected="selected"{% endif %}>17</option>
                    <option value="18"{% if tgenoptions.cr == "18" %} selected="selected"{% endif %}>18</option>
                    <option value="19"{% if tgenoptions.cr == "19" %} selected="selected"{% endif %}>19</option>
                    <option value="20"{% if tgenoptions.cr == "20" %} selected="selected"{% endif %}>20</option>
                </select>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="Pannotia_Mult">Treasure Multiplier</label>
            <div class="controls">
                <input type="text" name="Pannotia_Mult" id="Pannotia_Mult" value="{% if tgenoptions.multiplier %}{{ tgenoptions.multiplier }}{% else %}1{% endif %}" size="5" />
                <p>*1 = Standard, 2 = Double, etc up to 100... if you want to get ridiculous.</p>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="Pannotia_ExtSize">Use Extended Sizes</label>
            <div class="controls">
                <input class="checkbox" type="checkbox" value="true" id="Pannotia_ExtSize" name="Pannotia_ExtSize" {% if tgenoptions.extSize %}checked="checked" {% endif %}/>
                <p>
                    *DMG Only.  This will allow items to be of non-standard sizes <small>(i.e. Huge, Gargantuan, Fine, Diminutive, etc.)</small>.
                </p>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="Pannotia_Cursed">Include Cursed items</label>
            <div class="controls">
                <input class="checkbox" type="checkbox" value="true" id="Pannotia_Cursed" name="Pannotia_Cursed" {% if tgenoptions.cursed %}checked="checked" {% endif %}/>
                <p>*This adds a 5% chance that any particular magic item in the hoard will be cursed.</p>
            </div>
        </div>
    </fieldset>

    <fieldset class="Pathfinder">
        <legend>Encounter Information</legend>
    </fieldset>

    <div class="control-group">
        <div class="controls">
            <button class="btn btn-inverse" type="submit" id="generate-treasure">Generate Treasure</button>
        </div>
    </div>
</form>
