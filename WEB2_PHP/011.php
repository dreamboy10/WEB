<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>함수의 형식</title>
</head>
<body>
	<h1>Function</h1>
	<h2>Basic</h2>
	<?php 
		function basic() {
			print("Lorem ipsum dolor1<br>");
			print("Lorem ipsum dolor2<br>");
		}

		basic();
	?>
	<h2>Parameter &amp; Argument</h2>
	<?php
		function sum($left, $right) {
			print($left + $right);
			print("<br>");
		}
		sum(2, 4);
		sum(4, 6);
	?>
	<h2>Return</h2>
	<?php 
		function sum2($left, $right) {
			return $left + $right;
		}
		print(sum2(2, 4));
		file_put_contents('result.txt', sum2(2, 4));
		// email('ddre@ddre.net', sum2(2, 4));
		// upload('ddre.net', sum2(2, 4));
	?>
</body>
</html>