<?php

namespace App\Faker;

use Faker\Provider\Base;

class FrameworkProvider extends Base
{
    protected static $categoriesDB = [
        'Blouses',
        'T-shirts',
        'Jackets',
        'Sweaters',
    ];

    public function framework(): string
    {
        return static::randomElement(static::$categoriesDB);
    }

}

