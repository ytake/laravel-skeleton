<?php
declare(strict_types=1);

namespace App\Http\Routes;

use App\Http\Action\IndexAction;
use Illuminate\Routing\Router;

/**
 * Class WebRoute
 */
class WebRoute implements RouteRegister
{
    /**
     * @param Router $router
     */
    public function register(Router $router): void
    {
        $router->get('/', IndexAction::class);
    }
}
