<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>XSS</title>
</head>
<body>
	<h1>Cross site scripting</h1>
	<?php 
		echo htmlspecialchars('<script>alert("babo")</script>')
	?>
</body>
</html>