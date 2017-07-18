<?php
	session_start();

	if (isset($_SESSION['user_name'])) {
		session_destroy();
	}
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>login</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Bootstrap -->
	<link href="stylesheet/bootstrap.min.css" rel="stylesheet">
	<link href="stylesheet/my.css" rel="stylesheet">
</head>

<html>
<body>

<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-10">
				<div class="converter-wrap">
					<h1>Вы не зарегистрированы</h1>					
					<a href="index.php"><u>На главную</u></a>														
				</div>
			</div>
		</div>
	</div>

	<script src="js/bootstrap.min.js"></script>

</body>
</html>





