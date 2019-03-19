<?
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "GET") {
	if (!empty($_GET["id"])) {
		$id = mysqli_real_escape_string($connect, (string)htmlspecialchars(strip_tags($_GET["id"])));

		$sql = "DELETE FROM product WHERE id=$id";
		$res = mysqli_query($connect, $sql);
		
		if(mysqli_query($connect, $sql)) :
			echo '<div class="alert alert-success mb-4" role="alert">';
			echo 'Запись удалена успешно';
			echo '</div>';
		else :
			echo '<div class="alert alert-danger mb-4" role="alert">';
			echo 'Что-то пошло не так. Попробуйте ещё раз.';
			echo '</div>';
		endif;
	}
}