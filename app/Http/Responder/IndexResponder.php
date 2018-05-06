<?php
declare(strict_types=1);

namespace App\Http\Responder;

use Symfony\Component\HttpFoundation\Response;

/**
 * Class IndexResponder
 */
class IndexResponder extends AbstractResponder
{
    /**
     * @param mixed ...$args
     *
     * @return Response
     */
    public function handle(...$args): Response
    {
        return $this->response->json(['message' => 'strict laravel']);
    }
}
