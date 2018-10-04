<?php
	$h = date('H');
	$h = 4;
	$img = $h/6 - ($h % 6)/6;
?>


<!doctype html>
<html>
	<head>
		<title> AkarShadow </title>
		<style>
			body{
				background: url(img/<?php echo $img; ?>.jpg);
				background-size: cover;
				color: #0f0;
		</style>
	</head>
	<body>
		<h1><?php echo $h ?></h1>
		<p>We are learning to write html and php codes</p>
		<p>test test test</p>
		<p>test test test</p>
		<p>test test test</p>
		<p>test test test</p>
		<p>test test test</p>
	</body>
</html>	