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
	</ul>

	<hr>

	<h3>To do list</h3>
	<h5>Task:</h5>

	<?php foreach ($task as $key => $value) : ?>
		<li><strong><?= $key . ': ' ?></strong><?= $value ?></li>
	<?php endforeach ?>

</body>
</html>