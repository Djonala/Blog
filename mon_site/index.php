<?php
require __DIR__ . '/vendor/autoload.php';

use App\Controller\HomeController;

$homeController = new HomeController();
$homeController->homePage();