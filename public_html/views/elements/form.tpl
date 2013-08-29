<form action="index.php" method="post" id="tgenform">
    <fieldset>
        <legend>Rule Set &amp; Generation Tables</legend>
        <label for="edition">Edition:</label>
        <div class="noteBox">
            <select name="edition" id="edition">
                <!--option value="30">3.0</option-->
                <option value="35"{if $options.edition eq "35" or $options.edition eq "35MIC"} selected="selected"{/if}>3.5</option>
                <!--option value="40">4.0</option-->
            </select><br class="clear" />
            <span class="note">
                Please select which edition of
                <acronym title="Dungeons and Dragons">D&amp;D</acronym> you
                would like to generate treasure for.<br />
                <small>
                    (Currently only 3.5 edition is supported.  Eventually,
                    3.0-4.0 will be supported along with other rulesets such
                    as the Pannotia and Pathfinder RPG variants.  If you
                    would like to suggest a variant method,
                    <a href="mailto:contact@worldofpannotia.com">contact me</a>.)
                </small>
            </span><br class="clear" />
        </div><br class="clear" />

        <div id="mode35_box">
            <label for="mode35">Generation Method:</label>
            <div class="noteBox">
                <select name="mode35" id="mode35">
                    <option value="DMG"{if $options.mode35 == "DMG"} selected="selected"{/if}>DMG</option>
                    <option value="MIC"{if $options.mode35 == "MIC"} selected="selected"{/if}>MIC</option>
                </select><br class="clear" />
                <span class="note">
                    *Please select the tables to be used for rolling the treasure.<br />
                    <small>
                        If you would like to suggest a variant set of tables,
                        <a href="mailto:contact@worldofpannotia.com">contact me</a>.)
                    </small>
                </span><br class="clear" />
            </div><br class="clear" />
        </div>
    </fieldset>
    <fieldset id="dnd3">
        <legend>Encounter Information</legend>
        <label for="ed3CR">Challenge Rating</label>
        <select name="ed3CR" id="ed3CR">
            <option value="1"{if $options.cr eq "1"} selected="selected"{/if}>1</option>
            <option value="2"{if $options.cr eq "2"} selected="selected"{/if}>2</option>
            <option value="3"{if $options.cr eq "3"} selected="selected"{/if}>3</option>
            <option value="4"{if $options.cr eq "4"} selected="selected"{/if}>4</option>
            <option value="5"{if $options.cr eq "5"} selected="selected"{/if}>5</option>
            <option value="6"{if $options.cr eq "6"} selected="selected"{/if}>6</option>
            <option value="7"{if $options.cr eq "7"} selected="selected"{/if}>7</option>
            <option value="8"{if $options.cr eq "8"} selected="selected"{/if}>8</option>
            <option value="9"{if $options.cr eq "9"} selected="selected"{/if}>9</option>
            <option value="10"{if $options.cr eq "10"} selected="selected"{/if}>10</option>
            <option value="11"{if $options.cr eq "11"} selected="selected"{/if}>11</option>
            <option value="12"{if $options.cr eq "12"} selected="selected"{/if}>12</option>
            <option value="13"{if $options.cr eq "13"} selected="selected"{/if}>13</option>
            <option value="14"{if $options.cr eq "14"} selected="selected"{/if}>14</option>
            <option value="15"{if $options.cr eq "15"} selected="selected"{/if}>15</option>
            <option value="16"{if $options.cr eq "16"} selected="selected"{/if}>16</option>
            <option value="17"{if $options.cr eq "17"} selected="selected"{/if}>17</option>
            <option value="18"{if $options.cr eq "18"} selected="selected"{/if}>18</option>
            <option value="19"{if $options.cr eq "19"} selected="selected"{/if}>19</option>
            <option value="20"{if $options.cr eq "20"} selected="selected"{/if}>20</option>
        </select><br class="clear" />

        <label for="ed3Mult">Treasure Multiplier</label>
        <div class="noteBox">
            <input type="text" name="ed3Mult" id="ed3Mult" value="{if $options.multiplier}{$options.multiplier}{else}1{/if}" size="5" />
            <br class="clear" />
            <span class="note">
                *1 = Standard, 2 = Double, etc up to 100... if you want to get ridiculous.
            </span><br class="clear" />
        </div><br class="clear" />

        <label for="ed3ExtSize">Use Extended Sizes</label>
        <div class="noteBox">
            <input class="checkbox" type="checkbox" value="true" id="ed3ExtSize" name="ed3ExtSize" {if $options.ed3ExtSize}checked="checked" {/if}/>
            <br class="clear" />
            <span class="note">
                *DMG Only.  This will allow items to be of non-standard sizes.<br />
                <small>(Huge, Gargantuan, Fine, Diminutive, etc.)</small>
            </span><br class="clear" />
        </div><br class="clear" />

        <label for="ed3Cursed">Include Cursed items</label>
        <div class="noteBox">
            <input class="checkbox" type="checkbox" value="true" id="ed3Cursed" name="ed3Cursed" {if $options.cursed}checked="checked" {/if}/>
            <br class="clear" />
            <span class="note">
                *This adds a 5% chance that any particular magic item in the
                hoard will be cursed.
            </span><br class="clear" />
        </div><br class="clear" />

        <label for="ed3TradeGoods">Include Trade Goods</label>
        <div class="noteBox">
            <input class="checkbox" type="checkbox" value="true" id="ed3TradeGoods" name="ed3TradeGoods" {if $options.trade}checked="checked" {/if}/>
            <br class="clear" />
            <span class="note"><span class="note">
                *Include trade goods generated using the tables in the
                Draconomicon.
            </span></span><br class="clear" />
        </div><br class="clear" />

        <label for="ed3DracGoods">Include Goods from the Draconomicon</label>
        <div class="noteBox">
            <input class="checkbox" type="checkbox" value="true" id="ed3DracGoods" name="ed3DracGoods" {if $options.drac}checked="checked" {/if}/>
            <br class="clear" />
            <span class="note"><span class="note">*DMG Only</span></span><br class="clear" />
        </div><br class="clear" />
    </fieldset>

    <div class="formButtons">
        <input class="button" type="submit" value="Generate Treasure" /><br class="clear" />
    </div><br class="clear" />
</form><br class="clear" />
