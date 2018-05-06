<?php
declare(strict_types=1);

namespace App\Http\Routes;

use Illuminate\Routing\Router;

/**
 * Interface RouteRegister
 */
interface RouteRegister
{
    /**
     * @param Router $router
     */
    public function register(Router $router): void;
}
