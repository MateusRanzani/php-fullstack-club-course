<?php

namespace App\Models\Animal;

use App\Models\Animal\Animal;

class Cachorro extends Animal
{
    public function falar(): string
    {
        return 'au au';
    }
}
