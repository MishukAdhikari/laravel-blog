<?php

namespace Tests;

<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Hash;
>>>>>>> 9b8ca521c2671dfd74452a2dea105d099a30c5fb
use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

<<<<<<< HEAD
=======
        Hash::driver('bcrypt')->setRounds(4);

>>>>>>> 9b8ca521c2671dfd74452a2dea105d099a30c5fb
        return $app;
    }
}
