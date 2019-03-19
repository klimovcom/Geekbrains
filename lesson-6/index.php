<? include("sendFeedback.php"); ?>

<!doctype html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
		<link rel="stylesheet" type="text/css" href="css/site.css">
		<title>Фотогаллерея</title>
	</head>
	<body>
		<? include("navbar.php"); ?>
		<div class="container py-5">
			<div class="row">
				<? include("showOffer.php"); ?>
			</div>
			<h3 class="my-5 text-center">Отзывы</h3>
			<? include ("showFeedback.php"); ?>
			<h4 class="my-5 text-center">Оставьте комментарий</h4>
			<form method="POST" class="mt-5">
				<div class="form-group">
					<label>Ваше имя</label>
					<input type="text" class="form-control" name="name" required="">
				</div>
				<div class="form-group">
					<label>Комментарий</label>
					<textarea class="form-control" name="comment" required=""></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Отправить</button>
			</form>
		</div>
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	</body>
</html>