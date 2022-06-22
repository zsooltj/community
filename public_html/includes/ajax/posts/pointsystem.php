<?php

/**
 * ajax -> posts -> reaction
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
//is_ajax();

// user access
//user_access(true);

// check demo account
if ($user->_data['user_demo']) {
	modal("ERROR", __("Demo Restriction"), __("You can't do this with demo account"));
}

// valid inputs
if (!isset($_POST['id']) || !is_numeric($_POST['id'])) {
	_error(400);
}

try {

	// initialize the return array
	$return = array();

	switch ($_POST['do']) {
		
		case 'add':
			$user->update_user_point('add', $_POST['id'], $_POST['amount']);
			$return = $user->get_balance($_POST['id']);
			break;
        case 'remove':
            $user->update_user_point('remove', $_POST['id'], $_POST['amount']);
            $return = $user->get_balance($_POST['id']);
            break;
		
	}

	// return & exit
	return_json($return);
} catch (Exception $e) {
	modal("ERROR", __("Error"), $e->getMessage());
}
