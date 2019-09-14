<?php

$documentRoot = $_SERVER['DOCUMENT_ROOT'];

$index = !empty($_GET['content']) ? $_GET['content'] : 'dashboard';

$map = [
	'dashboard' => 'views/dashboard.php',
];

$content = $map[$index];

require_once 'views/site.php';