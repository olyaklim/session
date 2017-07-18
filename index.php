<?php
  session_start();

$head = 'Форма входа';
  if (isset($_SESSION['user_name'])) {
  		$head = 'Привет, '.$_SESSION['user_name']."<br>";
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

					<h1><?php echo $head; ?></h1>					

					<form id="form" class="form-inline" >

						<br><br>
						<label class="control-label" for="user_name">Имя:</label>
						
						<input id="user_name" class="form-control" type="text" name="user_name" placeholder="имя"  >						
						<br><br>
						
						<button type="submit" value="send" class="btn btn-success">Зарегистрироваться</button>
						<br><br>

					</form>

					<a href="logout.php">Выйти</a>

					<br><hr><br>
					<div id="comment"></div> 
					<br>					
					<div id="result"></div>
										
				</div>
			</div>
		</div>
	</div>

	<script>

		$("#form").submit(function(e) {

			var user_name = $("#user_name").val();			
			console.log(user_name);
			
			$.ajax({
				type: "POST",
				url: "login.php",
				data:{user_name:user_name
				},
				dataType: 'json',
					error: function(data) {
						$('#result').html('<p class="text-error" style="color:#f5345f">Ошибка чтения!</p>'); 
						$('#comment').html('');
					},
					success: function(data) {
 
						//$('#result').html(data.user_name);
						$('#comment').html(data.comment);				
					}
				});
			e.preventDefault();
		});

	</script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>


