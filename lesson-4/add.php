<?
for ($i=0; $i < count($_FILES["photo"]["tmp_name"]); $i++) { 
	$path = "files/" . $_FILES["photo"]["name"][$i];
	if(move_uploaded_file($_FILES["photo"]["tmp_name"][$i], $path)) {
		echo $_FILES["photo"]["name"][$i]." успешно загружен!<br>";
	}
}