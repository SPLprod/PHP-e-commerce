<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// $baseUri = '/PHP_POLES/01-Cours/01-Cours/08_Site_boutique';
echo 'Test d\'inclusion';
require_once __DIR__ . '/controllers/router.php';
