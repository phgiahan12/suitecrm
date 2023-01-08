<?php
$dictionary["Contact"]["relationships"]["account_accountant"] = array (
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'accountant_id',
    'relationship_type' => 'one-to-many'
);
$dictionary["Contact"]["relationships"]["account_director"] = array (
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'director_id',
    'relationship_type' => 'one-to-many'
);
$dictionary["Contact"]["relationships"]["referral_contacts"] = array (
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'referral_id',
    'relationship_type' => 'one-to-many'
);