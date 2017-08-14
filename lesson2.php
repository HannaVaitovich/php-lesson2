<DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>PHP: Lesson 2</title>
</head>
<body>
<?php
$x = rand(0,100);
echo "Число ".$x;
echo "<br>";

$var1 = 1;
$var2 = 1;
$var3 = 0;

while ($var1 < $x) {
$var3 = $var1;
$var1 += $var2;
$var2 = $var3;
	}
	if ($var1 > $x) {
		echo "задуманное число НЕ входит в числовой ряд";
	}
	if ($var1 === $x) {
		echo "задуманное число входит в числовой ряд";
	}

?>
	
</body>
</html>
