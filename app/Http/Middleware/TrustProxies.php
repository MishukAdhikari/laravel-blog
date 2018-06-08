<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Fideloper\Proxy\TrustProxies as Middleware;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
<<<<<<< HEAD
     * @var int
=======
     * @var string
>>>>>>> 9b8ca521c2671dfd74452a2dea105d099a30c5fb
     */
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
}
