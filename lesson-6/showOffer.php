<?
include("config.php");

$sql = "SELECT * FROM product";
$res = mysqli_query($connect, $sql);

while ($data = mysqli_fetch_assoc($res)) :
	echo '<div class="col-xl-4">';
	echo '<div class="card my-3">';
	echo '<img class="card-img-top" src="files/small/' . $data["img"] . '" alt="Card image cap">';
	echo '<div class="card-body">';
	echo '<h4>' . $data["title"] . '</h4>';
	echo '<p class="card-text">' . $data["teaser"] . '</p>';
	echo '<a href="offer.php?id=' . $data['id'] . '" class="btn btn-lg btn-primary btn-block">Купить за ' . number_format($data["price"],0,","," ") . ' ₽</a>';
	echo '</div></div></div>';
endwhile;