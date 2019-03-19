<? include ("getOfferById.php"); ?>

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
				<div class="col-xl-6">
					<form method="post" action="save.php">
						<div class="form-group">
							<label>Название</label>
							<input type="text" name="title" value="<?=$title?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Тизер</label>
							<input type="text" name="teaser" value="<?=$teaser?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Описание</label>
							<textarea name="desc" class="form-control" rows=3><?=$desc?></textarea>
						</div>
						<div class="form-group">
							<label>Стоимость</label>
							<input type="number" name="price" value="<?=$price?>" class="form-control">
						</div>
						<input type="hidden" name="id" value="<?=$id?>">
						<button type="submit" class="btn btn-primary">Сохранить</button>
					</form>
				</div>
			</div>
		</div>
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	</body>
</html>