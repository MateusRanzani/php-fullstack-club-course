<?php

use App\Controllers\AnimalController;
use App\Models\Animal\Cachorro;
use App\Models\Animal\Gato;
use PHPUnit\Framework\TestCase;

class AnimalTest extends TestCase
{
    public static AnimalController $controller;


    public static function setUpBeforeClass(): void
    {
        self::$controller = new AnimalController();
    }

    public function testCachorroFalaAuAu()
    {
        $animal = new Cachorro();

        $this->assertEquals('au au', self::$controller->emitirSom($animal));
    }

    public function testGatoFalaMiau()
    {
        $animal = new Gato();

        $this->assertEquals('miau', self::$controller->emitirSom($animal));
    }
}
