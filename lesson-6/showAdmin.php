<?
include("config.php");

$sql = "SELECT * FROM product";
$res = mysqli_query($connect, $sql);

while ($data = mysqli_fetch_assoc($res)) :
	echo '<tr id="row_' . $data["id"] . '">';
	echo '<td>'. $data["title"] . '</td>';
	echo '<td><a href="edit.php?id='. $data["id"] . '">Редактировать</a></td>';
	echo '<td><a href="#" class="text-danger delete" id="' . $data["id"] . '">Удалить</a></td>';
	echo '</tr>';
endwhile;