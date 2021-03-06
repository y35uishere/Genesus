<?php
$cfg['debug'] = false;

// This is the email address where you will receive the notification message
$cfg['email_address'] = 'alek@genesus.co';

$cfg['email_from'] = '';

// The recipients in CC and BCC will receive a copy of the data collected in the form
// Use commas to separate mutiple e-mail addresses (no spaces allowed)
// Example: youraddress1@yourdomain.com,youraddress2@yourdomain.com
$cfg['email_address_cc'] = '';

$cfg['email_address_bcc'] = '';

$cfg['emailsendingmethod'] = 'smtp';

$cfg['smtp_host'] = 'smtp.gmail.com';

$cfg['smtp_port'] = '2525';

$cfg['smtp_encryption'] = '';

$cfg['smtp_username'] = 'alek@genesus.co';

$cfg['smtp_password'] = '$100kin4m';

$cfg['database_host'] = '127.0.0.1';

$cfg['database_name'] = 'chisel';

$cfg['database_login'] = 'root';

$cfg['database_password'] = 'davol350';

$cfg['database_table'] = 'Contact';

$cfg['database_table_charset'] = 'utf8';

$cfg['database_table_fields'][] = array('element_id'=>'cfgen-element-1-3', 'table_field_id'=>'Email','table_field_default_value'=>'');

$cfg['database_table_fields'][] = array('element_id'=>'cfgen-element-1-4', 'table_field_id'=>'Message','table_field_default_value'=>'NULL');

$cfg['database_table_fields'][] = array('preset_id'=>'datetime', 'table_field_id'=>'Time',);

$cfg['timezone'] = 'Europe/Berlin';

$cfg['form_id'] = '1';

$cfg['form_name'] = 'My Contact Form';

$cfg['form_validationmessage'] = 'Thank you, your message has been sent to us.<br />We will get back to you as soon as possible.';

$cfg['form_errormessage_captcha'] = '';

$cfg['form_errormessage_emptyfield'] = 'This field cannot be left blank';

$cfg['form_errormessage_invalidemailaddress'] = 'Invalid email address';

$cfg['form_errormessage_invalidurl'] = '';

$cfg['form_errormessage_terms'] = '';

$cfg['form_redirecturl'] = '';

$cfg['adminnotification_subject'] = 'New message sent from your website';

$cfg['adminnotification_hideemptyvalues'] = false;

$cfg['adminnotification_hideformurl'] = true;

$cfg['usernotification_inputid'] = 'cfgen-element-1-3';

$cfg['usernotification_activate'] = false;

$cfg['usernotification_insertformdata'] = false;

$cfg['usernotification_format'] = '';

$cfg['usernotification_subject'] = '';

$cfg['usernotification_message'] = '';

$cfg['usernotification_hideemptyvalues'] = false;

$cfg['formvalidation_required'] = array('cfgen-element-1-3');

$cfg['formvalidation_email'] = array('cfgen-element-1-3');

// MailChimp
$cfg['mailchimp']['apikey'] = '65e6150b52bd637a4020281759a266bf-us14';

$cfg['mailchimp']['lists'][0]['list_id'] = '4361d5f00a';

$cfg['mailchimp']['lists'][0]['doubleoptin'] = false;

$cfg['mailchimp']['lists'][0]['updateexistingcontact'] = true;

$cfg['mailchimp']['lists'][0]['sendwelcomeemail'] = false;

$cfg['mailchimp']['lists'][0]['fields'][] = array('list_field_id' => 'EMAIL', 'element_id' => 'cfgen-element-1-3');

$cfg['mailchimp']['lists'][0]['fields'][] = array('list_field_id' => 'FNAME', 'element_id' => 'cfgen-element-1-4');

$cfg['mailchimp']['lists'][0]['fields_by_id']['EMAIL'] = 'cfgen-element-1-3';

$cfg['mailchimp']['lists'][0]['fields_by_id']['FNAME'] = 'cfgen-element-1-4';

?>