<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
	<style type="text/css">
		h1{
			background-color:#eee;
			border-radius: 35%;
			text-align: center;
			width:50%;
			margin:auto;
		}
	</style>
</head>
<body>
	<h1>PHP Learning</h1>

	<ul>
		<?php foreach ($person as $key => $value) : ?>

			<li><strong><?= $key . ': ' ?></strong><?= $value ?></li>

		<?php endforeach ?>
	</ol>
</body>
</html>