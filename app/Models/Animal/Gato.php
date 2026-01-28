<?php

namespace App\Models\Animal;

class Gato extends Animal
{
    public function falar(): string
    {
        return 'miau';
    }
}
