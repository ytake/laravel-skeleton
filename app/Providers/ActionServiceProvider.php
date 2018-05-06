<?php
declare(strict_types=1);

namespace App\Providers;

use App\Http\Action\IndexAction;
use App\Http\Responder\IndexResponder;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Support\ServiceProvider;

/**
 * Class ActionServiceProvider
 */
final class ActionServiceProvider extends ServiceProvider
{
    /** @var bool */
    protected $defer = true;

    /**
     *
     */
    public function register(): void
    {
        $this->app->bind(IndexAction::class, function (Application $app) {
            return new IndexAction(
                new IndexResponder($app->get(ResponseFactory::class))
            );
        });
    }

    /**
     * @return array
     */
    public function provides(): array
    {
        return [
            IndexAction::class,
        ];
    }
}
