<?php
require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'core/Router.php';
$config=require 'config.php';

return new QueryBuilder(Connection::connect($config['database']));