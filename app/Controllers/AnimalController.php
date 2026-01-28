<?php

namespace App\Controllers;

use App\Models\Animal\Animal;

class AnimalController
{
    public function emitirSom(Animal $animal): string
    {
        return $animal->falar();
    }
}
