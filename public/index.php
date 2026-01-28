<?php

use App\Controllers\AnimalController;
use App\Models\Animal\Cachorro;

require __DIR__ .  '/../vendor/autoload.php';

$controller = new AnimalController();
$animal = new Cachorro();

$som = $controller->emitirSom($animal);


require __DIR__ . '/../app/Views/animal.php';
