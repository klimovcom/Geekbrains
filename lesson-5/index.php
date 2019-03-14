<?
include("add.php");
include("config.php");

$sql = "SELECT id, name FROM photo ORDER BY views DESC";
$res = mysqli_query($connect, $sql);
?>

<!doctype html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
		<title>Фотогаллерея</title>
	</head>
	<body>
		<div class="container">
			<div class="row py-5">
				<? while ($data = mysqli_fetch_assoc($res)) : ?>
					<div class="col-xl-2 col-xs-6 my-3">
						<!-- <a data-fancybox="gallery" href="files/original/<?=$data['name']; ?>"><img src="files/small/<?=$data['name']; ?>" class="img-fluid"></a> -->
						<a href="view/?id=<?=$data['id']; ?>"><img src="files/small/<?=$data['name']; ?>" class="img-fluid"></a>
					</div>
				<? endwhile; ?>
			</div>
			<h4 class="text-center">Добавьте ваши фотографии</h4>
			<form class="col-xl-6 offset-xl-3 my-5" action="" method="POST" enctype="multipart/form-data">
				<div class="custom-file">
					<input type="file" class="custom-file-input" name="photo[]" multiple="" required="">
					<label class="custom-file-label" for="customFile">Выбрать файлы</label>
				</div>
				<div class="text-center">
					<button type="submit" class="btn btn-primary mt-4">Загрузить</button>
				</div>
			</form>
		</div>
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	</body>
</html>