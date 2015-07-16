<?php 
header("Content-type: application/json");
$email = $_GET['email'];
$id = $_GET['id'];

// perform any operations you want to perform
$result = ['email' => $email,
	'id' => $id,
	'first_name' => 'Jane',
	'last_name' => 'Jone'] ;

echo json_encode($result)

?>