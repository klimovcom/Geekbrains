<?
	/*Задание 1*/

	$a = -5;
	$b = 7;

	if ($a > 0 && $b > 0) {
		echo $a - $b;
	} elseif ($a < 0 && $b < 0) {
		echo $a * $b;
	} elseif ($a * $b < 0) {
		echo $a + $b . "<hr>";
	}

	/*Задание 2*/

	/*Не знаю, как использовать case в данном случае. 15 дублирующихся строк писать неправильно. По-другому не додумался.*/

	$a = mt_rand(0,15);

	switch ($a) {
		case a <= 15:
			for ($i=$a; $i < 16; $i++) { 
				echo $i . "<br>";
			}
		break;
	}

	/*Задание 3*/

	function sum($x,$y) {
		$res = $x + $y;
		return $res;
	}

	function div($x,$y) {
		$res = $x / $y;
		return $res;
	}

	function mult($x,$y) {
		$res = $x * $y;
		return $res;
	}

	function ded($x,$y) {
		$res = $x - $y;
		return $res;
	}

	/*Задание 4*/

	echo "<hr>";

	function mathOperation($arg1,$arg2,$operation) {
		switch ($operation) {
			case 'sum':
				return sum($arg1,$arg2);
				break;
			case 'div':
				return div($arg1,$arg2);
				break;
			case 'mult':
				return mult($arg1,$arg2);
				break;
			case 'ded':
				return ded($arg1,$arg2);
				break;
		}
	}

	echo mathOperation(3,12,mult);

	/*Задание 6*/

	echo "<hr>";

	function power($val, $pow) {
		if ($val == 0) {
			return 0;
		} elseif ($pow == 0) {
			return 1;
		} elseif ($pow == 1) {
			return $val;
		} else {
			return $val * power($val, $pow - 1);
		}
	}

	echo power(10,10);

	/*Задание 7*/

	echo "<hr>";

	$time = date("G:i");

	$hour = mb_substr($time, 0, 2);
	$min = mb_substr($time, 3, 2);
	
	function currhour($hour) {

		if ($hour == 1 || $hour == 21) {
			return "час";
		} elseif ($hour == 2 || $hour == 3 || $hour == 4 || $hour == 22 || $hour == 23) {
			return "часа";
		} elseif ($hour >= 5 && $hour <= 20) {
			return "часов";
		}
		
	}

	function currmin($min) {

		if (mb_substr($min, -1, 1) == 0 || (mb_substr($min, -1, 1) >= 5 && mb_substr($min, -1, 1) <= 10)) {
			return "минут";
		} elseif (mb_substr($min, -1, 1) == 1) {
			return "минута";
		} elseif (mb_substr($min, -1, 1) >= 2 && mb_substr($min, -1, 1) <= 4) {
			return "минуты";
		}
		
	}

	echo $hour . "&nbsp;" . currhour($hour) . "&nbsp;" . $min . "&nbsp;" . currmin($min);

?>