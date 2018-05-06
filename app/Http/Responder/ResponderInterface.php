<?php
declare(strict_types=1);

namespace App\Http\Responder;

use Symfony\Component\HttpFoundation\Response;

/**
 * Interface ResponderInterface
 */
interface ResponderInterface
{
    /**
     * @param mixed ...$args
     *
     * @return Response
     */
    public function handle(...$args): Response;
}
