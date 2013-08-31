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
                <select name="DnD_35_MIC_CR" id="DnD_35_MIC_CR">
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
                    This will allow items to be of non-standard sizes <small>(i.e. Huge, Gargantuan, Fine, Diminutive, etc.)</small>.
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
