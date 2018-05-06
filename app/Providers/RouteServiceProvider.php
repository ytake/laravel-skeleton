<?php
declare(strict_types=1);

namespace App\Providers;

use App\Http\Routes\WebRoute;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;

/**
 * Class RouteServiceProvider
 */
final class RouteServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    protected function loadRoutes(): void
    {
        /** @var Router $router */
        $router = $this->app[Router::class];
        $router->group(['middleware' => ['web']], function (Router $router) {
            (new WebRoute())->register($router);
        });
    }
}
