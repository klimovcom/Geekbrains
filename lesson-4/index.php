<?

function resizeImage($file, $w, $h, $crop=true) {
	list($width, $height) = getimagesize($file);
	$r = $width / $height;
	if ($crop) {
		if ($width > $height) {
			$width = ceil($width-($width*abs($r-$w/$h)));
		} else {
			$height = ceil($height-($height*abs($r-$w/$h)));
		}
		$newwidth = $w;
		$newheight = $h;
	} else {
		if ($w/$h > $r) {
			$newwidth = $h*$r;
			$newheight = $h;
		} else {
			$newheight = $w/$r;
			$newwidth = $w;
		}
	}
	$src = imagecreatefromjpeg($file);
	$dst = imagecreatetruecolor($newwidth, $newheight);
	imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

	return $dst;
}

for ($i=0; $i < count($_FILES["photo"]["tmp_name"]); $i++) { 
	$path = "files/original/" . $_FILES["photo"]["name"][$i];
	if(move_uploaded_file($_FILES["photo"]["tmp_name"][$i], $path)) {
		$img = resizeImage("files/original/" . $_FILES["photo"]["name"][$i], 200, 200);
		imagejpeg($img, "files/small/" . $_FILES["photo"]["name"][$i]);
		imagedestroy($img);
	} else {
		echo "Что-то пошло не так";
	}
}

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
				<?
				$photos = scandir("files/small/");
				foreach ($photos as $key => $value) {
					if ($key > 2) {
						echo "<div class='col-xl-2 my-3'><a data-fancybox='gallery' href='files/original/" . $value . "'><img src='files/small/" . $value . "' class='img-fluid'></a></div>";
					}
				}
				?>
			</div>
			<h4 class="text-center">Добавьте ваши фотографии</h4>
			<form class="col-xl-6 offset-xl-3 mt-5" action="#" method="POST" enctype="multipart/form-data">
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