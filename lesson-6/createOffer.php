<?
include("config.php");
include("add.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (!empty($_POST["title"]) && !empty($_POST["teaser"])) {

		$title = mysqli_real_escape_string($connect, (string)htmlspecialchars(strip_tags($_POST["title"])));
		$teaser = mysqli_real_escape_string($connect, (string)htmlspecialchars(strip_tags($_POST["teaser"])));
		$desc = mysqli_real_escape_string($connect, (string)htmlspecialchars(strip_tags($_POST["desc"])));
		$price = mysqli_real_escape_string($connect, (string)htmlspecialchars(strip_tags($_POST["price"])));
		
		$path = "files/original/" . $_FILES["photo"]["name"];
		if(move_uploaded_file($_FILES["photo"]["tmp_name"], $path)) {
			$img = resizeImage("files/original/" . $_FILES["photo"]["name"], 400, 400);
			imagejpeg($img, "files/small/" . $_FILES["photo"]["name"]);
			imagedestroy($img);

			$sql = "INSERT INTO product(title, teaser, `desc`, img, price)
					VALUES('" . $title . "', '" . $teaser . "', '" . $desc . "', '" . $_FILES["photo"]["name"] . "', $price)";
			
			if (!mysqli_query($connect, $sql)) {
				echo "Что-то пошло не так: " . mysqli_error($connect);
			} else {
				echo '<div class="alert alert-success" role="alert">';
				echo 'Огонь! Всё отлично сохранилось.';
				echo '</div>';
				echo '<a href="admin.php" class="mt-5 mr-5">В админку</a><a href="index.php">На главную</a>';
			}

		} else {
			echo "Что-то пошло не так с загрузкой файла";
		}
	}
}