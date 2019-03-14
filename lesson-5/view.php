<?
include ("config.php");

$id = $_GET["id"];

$sql = "UPDATE photo SET views = views + 1 WHERE id = $id";
mysqli_query($connect, $sql);

$sql = "SELECT name, views FROM photo WHERE id = $id";
$res = mysqli_query($connect, $sql);