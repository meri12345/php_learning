<?php

require 'views/names.view.php';
$query->insertRow('names',$_POST['name']);

$query ? 'DA' : 'NE';