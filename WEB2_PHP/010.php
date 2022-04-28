<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>배열의 형식</title>
</head>
<body>
	<h1>Array</h1>
	<?php 
		$coworkers = array('dreamboy', 'ddre', 'july', 
			'tywq');
		echo $coworkers[1].'<br>';
		echo $coworkers[3].'<br>';
		var_dump(count($coworkers));
		array_push($coworkers, 'jgdh');
		var_dump($coworkers);
	?>
</body>
</html>