<?php
declare(strict_types=1);

namespace App\Providers;

/**
 * Class ArtisanServiceProvider
 */
final class ArtisanServiceProvider extends \Illuminate\Foundation\Providers\ArtisanServiceProvider
{
    /** @var array */
    protected $commands = [
        'CacheClear'      => 'command.cache.clear',
        'CacheForget'     => 'command.cache.forget',
        'ClearCompiled'   => 'command.clear-compiled',
        'ConfigCache'     => 'command.config.cache',
        'ConfigClear'     => 'command.config.clear',
        'Environment'     => 'command.environment',
        'KeyGenerate'     => 'command.key.generate',
        'PackageDiscover' => 'command.package.discover',
        'QueueFailed'     => 'command.queue.failed',
        'QueueFlush'      => 'command.queue.flush',
        'QueueForget'     => 'command.queue.forget',
        'QueueListen'     => 'command.queue.listen',
        'QueueRestart'    => 'command.queue.restart',
        'QueueRetry'      => 'command.queue.retry',
        'QueueWork'       => 'command.queue.work',
        'RouteCache'      => 'command.route.cache',
        'RouteClear'      => 'command.route.clear',
        'RouteList'       => 'command.route.list',
        'ViewCache'       => 'command.view.cache',
        'ViewClear'       => 'command.view.clear',
    ];

    /** @var array */
    protected $devCommands = [
        'Serve'         => 'command.serve',
        'VendorPublish' => 'command.vendor.publish',
    ];
}
