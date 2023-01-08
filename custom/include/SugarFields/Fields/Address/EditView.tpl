<script src='{sugar_getjspath file="include/SugarFields/Fields/Address/SugarFieldAddress.js"}'></script>
{{assign var="key" value=$displayParams.key|upper}}
{{assign var="street" value=$displayParams.key|cat:'_address_street'}}
{{assign var="city" value=$displayParams.key|cat:'_address_city'}}
{{assign var="state" value=$displayParams.key|cat:'_address_state'}}
{{assign var="country" value=$displayParams.key|cat:'_address_country'}}
{{assign var="postalcode" value=$displayParams.key|cat:'_address_postalcode'}}
<fieldset id='{{$key}}_address_fieldset' style="margin: 0;">
    <table border="0" cellspacing="1" cellpadding="0" class="edit" width="100%">
        <tr>
            <td valign="top" id="{{$street}}_label" width='25%' scope='row'>
                <label for="{{$street}}">{sugar_translate label='LBL_{{$key}}_ADDRESS' module='{{$module}}'}</label>
            </td>
            <td width="*">
                {if $displayParams.maxlength}
                    <textarea id="{{$street}}" name="{{$street}}" title='{{$vardef.help}}' maxlength="{{$displayParams.maxlength}}"
                              style="height: 45px;margin: 0 0 5px;padding: 5px;font-size: 13px;"
                              rows="{{$displayParams.rows|default:2}}" cols="{{$displayParams.cols|default:60}}"
                              tabindex="{{$tabindex}}" placeholder="{sugar_translate label='LBL_STREET' module='{{$module}}'}">{$fields.{{$street}}.value}</textarea>
                {else}
                    <textarea id="{{$street}}" name="{{$street}}" title='{{$vardef.help}}' rows="{{$displayParams.rows|default:2}}"
                              style="height: 45px;margin: 0 0 5px;padding: 5px;font-size: 13px;"
                              cols="{{$displayParams.cols|default:60}}"
                              tabindex="{{$tabindex}}" placeholder="{sugar_translate label='LBL_STREET' module='{{$module}}'}">{$fields.{{$street}}.value}</textarea>
                {/if}
            </td>
        </tr>
        <tr>
            <td id="{{$postalcode}}_label"
                width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].label}}%' scope='row'>
            </td>
            <td>
                <input type="text" name="{{$postalcode}}" id="{{$postalcode}}" title='{$fields.{{$postalcode}}.help}' size="{{$displayParams.size|default:30}}"
                       {if !empty($vardef.len)}maxlength='{{$vardef.len}}'{/if}
                       value='{$fields.{{$postalcode}}.value}' tabindex="{{$tabindex}}" placeholder="{sugar_translate label='LBL_POSTAL_CODE' module='{{$module}}'}">
            </td>
        </tr>
        <tr>
            <td id="{{$state}}_label" width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].label}}%'
                scope='row'>
            </td>
            <td>
                <input type="text" name="{{$state}}" id="{{$state}}" title='{$fields.{{$state}}.help}' size="{{$displayParams.size|default:30}}"
                       {if !empty($vardef.len)}maxlength='{{$vardef.len}}'{/if} value='{$fields.{{$state}}.value}'
                       tabindex="{{$tabindex}}" placeholder="{sugar_translate label='LBL_STATE' module='{{$module}}'}">
            </td>
        </tr>
        <tr>
            <td id="{{$city}}_label" width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].label}}%'
                scope='row'>
            </td>
            <td>
                <input type="text" name="{{$city}}" id="{{$city}}" title='{$fields.{{$city}}.help}' size="{{$displayParams.size|default:30}}"
                       {if !empty($vardef.len)}maxlength='{{$vardef.len}}'{/if} value='{$fields.{{$city}}.value}'
                       tabindex="{{$tabindex}}" placeholder="{sugar_translate label='LBL_CITY' module='{{$module}}'}">
            </td>
        </tr>
        <tr>
            <td id="{{$country}}_label" width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].label}}%'
                scope='row'>
            </td>
            <td>
                <input type="text" name="{{$country}}" id="{{$country}}" title='{$fields.{{$country}}.help}' size="{{$displayParams.size|default:30}}"
                       {if !empty($vardef.len)}maxlength='{{$vardef.len}}'{/if} value='{$fields.{{$country}}.value}'
                       tabindex="{{$tabindex}}" placeholder="{sugar_translate label='LBL_COUNTRY' module='{{$module}}'}">
            </td>
        </tr>
        {if $displayParams.copy}
            <tr>
                <td scope='row' NOWRAP>
                    {sugar_translate label='LBL_COPY_ADDRESS_FROM_LEFT' module=''}:
                </td>
                <td>
                    <input id="{{$displayParams.key}}_checkbox" name="{{$displayParams.key}}_checkbox" type="checkbox"
                           onclick="{{$displayParams.key}}_address.syncFields();">
                </td>
            </tr>
        {else}
            <tr>
                <td colspan='2' NOWRAP>&nbsp;</td>
            </tr>
        {/if}
    </table>
</fieldset>
<script type="text/javascript">
    SUGAR.util.doWhen("typeof(SUGAR.AddressField) != 'undefined'", function () {ldelim}
        {{$displayParams.key}}_address = new SUGAR.AddressField("{{$displayParams.key}}_checkbox", '{{$displayParams.copy}}', '{{$displayParams.key}}');
        {rdelim});
</script>