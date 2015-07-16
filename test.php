<?php 

// process client url
if ( !empty($_GET['id'])	){
	$id = $_GET['id'];
	
	switch ($id){
		case 1:
		$first_name = 'Sade';
		$last_name = 'Samuel';
		$email = 'info@aol.com';
		break;
		case 2:
		$first_name = 'Victor';
		$last_name = 'Buari';
		$email = 'info@yahoo.com';
		break;
		default:
		$first_name = null;
		$last_name = null;
		$email = null;
	}

	deliver_response($email, $first_name, $last_name);
}

function deliver_response($email, $first_name, $last_name){
	header("HTTP/1.1 ");
	$json_response = json_encode([ 'first_name' => $first_name,
	'last_name' => $last_name,
	'email' => $email]);
	echo $json_response;
}




?>
