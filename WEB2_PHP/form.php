<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>form과 POST</title>
</head>
<body>
	<?php
		file_put_contents('data/'.$_POST['title'], 
			$_POST['description']);
	?>
</body>
</html>