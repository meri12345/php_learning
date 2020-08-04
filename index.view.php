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

			<li><strong><?= ucwords($key) . ': ' ?></strong><?= $value ?></li>

		<?php endforeach ?>

		<li><strong>Can enter club?: </strong>
		<?php if(oldEnough($person)) : ?>
		true
		<?php else : ?>
		false
		<?php endif ?>

	</ul>

	<hr>

	<h3>To do list</h3>
	<h5>Task:</h5>

	<ul>
		<?php foreach ($task as $key => $value) : ?>
			<li><strong><?= ucwords($key) . ': ' ?></strong><?= $value ?></li>
		<?php endforeach ?>
	</ul>
	
	<hr>

	<h3>To do list</h3>
	<h5>Task:</h5>
	<ul>
		<li><strong>Title: </strong> <?= $task['name'] ?></li>

		<li><strong>Due Date: </strong> <?= $task['due'] ?></li>

		<li><strong>Responsible: </strong> <?= $task['assigned_to'] ?></li>

		<li><strong>Status: </strong> 
			<?php if($task['completed']) : ?>
			<span>Finished</span>
			<?php else : ?>
			<span>Not Finished</span>
			<?php endif ?>
		</li>
	</ul>

</body>
</html>