<?
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (!empty($_POST["name"]) && !empty($_POST["comment"])) {
		$name = mysqli_real_escape_string($connect, (string)htmlspecialchars(strip_tags($_POST["name"])));
		$comment = mysqli_real_escape_string($connect, (string)htmlspecialchars(strip_tags($_POST["comment"])));

		$sql = "INSERT INTO feedback (name, comment)
				VALUES ('" . $name . "', '" . $comment . "')";

		if(!mysqli_query($connect, $sql)) :
			echo '<div class="alert alert-danger" role="alert">';
			echo 'Что-то пошло не так';
			echo '</div>';
		endif;
	}
}