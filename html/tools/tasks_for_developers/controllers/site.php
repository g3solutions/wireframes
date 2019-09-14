<?php

$documentRoot = $_SERVER['DOCUMENT_ROOT'];

$index = !empty($_GET['content']) ? $_GET['content'] : 'search';

$map = [
	'search' => [
		'view' => 'views/search.php',
		'model' => 'models/attributes.php'
	],
];

$data = $map[$index]['view'];
$content = $map[$index]['view'];

require_once 'views/site.php';