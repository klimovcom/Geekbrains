<?
include ("config.php");

function resizeImage($file, $w, $h, $crop=true) {
	list($width, $height) = getimagesize($file);
	$r = $width / $height;
	if ($crop) {
		if ($width > $height) {
			$width = ceil($width-($width*abs($r-$w/$h)));
		} else {
			$height = ceil($height-($height*abs($r-$w/$h)));
		}
		$newwidth = $w;
		$newheight = $h;
		$newwh = $w / $h;
	} else {
		if ($newwh > $r) {
			$newwidth = $h*$r;
			$newheight = $h;
		} else {
			$newheight = $w/$r;
			$newwidth = $w;
		}
	}
	$src = imagecreatefromjpeg($file);
	$dst = imagecreatetruecolor($newwidth, $newheight);
	imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

	return $dst;
}

for ($i=0; $i < count($_FILES["photo"]["tmp_name"]); $i++) { 
	$path = "files/original/" . $_FILES["photo"]["name"][$i];
	if(move_uploaded_file($_FILES["photo"]["tmp_name"][$i], $path)) {
		$img = resizeImage("files/original/" . $_FILES["photo"]["name"][$i], 200, 200);
		imagejpeg($img, "files/small/" . $_FILES["photo"]["name"][$i]);
		imagedestroy($img);

		$sql = "INSERT INTO photo(name) VALUES('" . $_FILES["photo"]["name"][$i] . "')";
		if (!mysqli_query($connect, $sql)) {
			echo "Что-то пошло не так: " . mysqli_error($connect);
		}

	} else {
		echo "Что-то пошло не так";
	}
}