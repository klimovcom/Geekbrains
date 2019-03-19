<?
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (!empty($_POST["title"]) && !empty($_POST["teaser"])) {

		$id = mysqli_real_escape_string($connect, (string)htmlspecialchars(strip_tags($_POST["id"])));
		$title = mysqli_real_escape_string($connect, (string)htmlspecialchars(strip_tags($_POST["title"])));
		$teaser = mysqli_real_escape_string($connect, (string)htmlspecialchars(strip_tags($_POST["teaser"])));
		$desc = mysqli_real_escape_string($connect, (string)htmlspecialchars(strip_tags($_POST["desc"])));
		$price = mysqli_real_escape_string($connect, (string)htmlspecialchars(strip_tags($_POST["price"])));

		$sql = "UPDATE product
				SET title = '" . $title . "',
					teaser = '" . $teaser . "',
					`desc` = '" . $desc . "',
					price = $price
				WHERE id=$id";

		if(mysqli_query($connect, $sql)) :
			echo '<div class="alert alert-success" role="alert">';
			echo 'Огонь! Всё отлично сохранилось.';
			echo '</div>';
			echo '<a href="admin.php" class="mt-3 mr-5">В админку</a><a href="index.php">На главную</a>';
		else :
			echo '<div class="alert alert-danger" role="alert">';
			echo 'Что-то пошло не так. Попробуйте ещё раз.';
			echo '</div>';
			echo '<a href="admin.php" class="mt-3 mr-5">В админку</a><a href="index.php">На главную</a>';
		endif;
	}
}