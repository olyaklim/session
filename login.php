<?php
session_start();
$user_name = '';
$comment  = '';

if (isset($_POST['user_name'])) {
	$user_name = (string) $_POST['user_name'];	
}

if ($user_name) {
	$_SESSION['user_name'] = $user_name;
	$comment = 'Привет '. $user_name;
}
else {
	$comment = 'Имя пустое!';
}

$result = array(
	'user_name' => $user_name,
	'comment' => $comment
	);

echo json_encode($result);

?>

