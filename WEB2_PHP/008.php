<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>조건문의 형식</title>
</head>
<body>
	<h1>Conditional</h1>
	<h2>if</h2>
	<?php 
		echo '1<br>';
		if(true) {
			echo '2<br>';
		}
		echo '3<br>';

		echo '1<br>';
		if(false) {
			echo '2<br>';
		}
		echo '3<br>';

		echo '1<br>';
		if(true) {
			echo '2-1<br>';
		} else {
			echo '2-2<br>';
		}
		echo '3<br>';

		echo '1<br>';
		if(false) {
			echo '2-1<br>';
		} else {
			echo '2-2<br>';
		}
		echo '3<br>';
	?>
</body>
</html>