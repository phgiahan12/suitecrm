<?php
$dictionary['Opportunity']['fields']['currency_id']['default'] = '-99';
$dictionary['Opportunity']['fields']['amount']['default'] = 0.00;
$dictionary['Opportunity']['fields']['lead_source']['required'] = true;
$dictionary['Opportunity']['fields']['probability']['calculated'] = true;
$dictionary['Opportunity']['fields']['probability']['formula'] = 'getDropdownValue("sales_probability_dom",$sales_status)';