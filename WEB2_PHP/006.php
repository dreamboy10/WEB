<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>함수의 사용</title>
</head>
<body>
	<h1>Function</h1>
	<?php 
		$str = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 


		Minus earum omnis illum qui! Tempora fugiat minima necessitatibus, repellendus hic doloribus veniam ad. Sunt quo similique fuga nihil architecto! Sapiente, perspiciatis!";
		echo $str;
	?>
	<h2>Strlen()</h2>
	<?php
		echo strlen($str);
	?>
	<h2>nl2br</h2>
	<?php 
		echo nl2br($str);
	?>
</body>
</html>