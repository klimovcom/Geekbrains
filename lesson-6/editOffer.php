<?
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "GET") {
	if (!empty($_GET["id"])) {
		$id = mysqli_real_escape_string($connect, (string)htmlspecialchars(strip_tags($_GET["id"])));

		$sql = "SELECT * FROM product WHERE id=$id";
		$res = mysqli_query($connect, $sql);

		while ($data = mysqli_fetch_assoc($res)) :
			$title = $data["title"];
			$teaser = $data["teaser"];
			$desc = $data["desc"];
			$price = $data["price"];
		endwhile;
	}
}