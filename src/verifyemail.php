<?php
/**
 * Script for verifying user's backpack email.
 */

define('AJAX_SCRIPT', true);

require_once(__DIR__ . '/../../config.php');
require_once(__DIR__ . '/class/backpack.php');
require_once($CFG->libdir . '/filelib.php');

$assertion = required_param('assertion', PARAM_TEXT);
$backpack = obf_backpack::get_instance_by_userid($USER->id, $DB);

if ($backpack === false) {
    $backpack = new obf_backpack();
    $backpack->set_user_id($USER->id);
}

$curl = new curl();
$email = $backpack->verify($assertion, $curl);

if ($email === false) {
    die(json_encode(array('error' => get_string('verification_failed', 'local_obf'))));
}

try {
    $backpack->connect($email);
}
catch (Exception $e) {
    die(json_encode(array('error' => $e->getMessage())));
}

echo json_encode(array('error' => ''));