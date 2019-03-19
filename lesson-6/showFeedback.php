<?
include("config.php");

$sql = "SELECT * FROM feedback ORDER BY date_published DESC";
$res = mysqli_query($connect, $sql);
while ($data = mysqli_fetch_assoc($res)) :
	echo '<p><strong>' . $data["name"] . '</strong></p>';
	echo '<p>' . $data["comment"] . '</p>';
	echo '<hr>';
endwhile;