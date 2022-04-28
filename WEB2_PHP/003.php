<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP와 문자열</title>
</head>
<body>
	<h1>String &amp; String Operator</h1>
	<?php 
		echo 'Hello world<br>';
		echo "Hello world<br>";
		echo "Hello 'w'orld<br>";
		echo 'Hello "w"orld<br>';
		echo "Hello \"w\"orld<br>";
	?>
	<h2>Concatenation Operator</h2>
	<?php 
		echo "Hello "."world<br>";
	?>
	<h2>String length Function</h2>
	<?php 
		echo strlen("Hello world");
	?>
</body>
</html>