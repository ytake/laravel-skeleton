<?php
declare(strict_types=1);

namespace App\Http\Responder;

use Illuminate\Contracts\Routing\ResponseFactory;

/**
 * Class AbstractResponder
 */
abstract class AbstractResponder implements ResponderInterface
{
    /** @var ResponseFactory */
    protected $response;

    /**
     * @param ResponseFactory $response
     */
    public function __construct(ResponseFactory $response)
    {
        $this->response = $response;
    }
}
