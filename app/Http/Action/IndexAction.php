<?php
declare(strict_types=1);

namespace App\Http\Action;

use App\Http\Responder\AbstractResponder;
use App\Http\Responder\IndexResponder;
use Illuminate\Routing\Controller;

/**
 * Class IndexAction
 */
final class IndexAction extends Controller
{
    /** @var IndexResponder */
    private $responder;

    /**
     * @param IndexResponder|AbstractResponder $responder
     */
    public function __construct(AbstractResponder $responder)
    {
        $this->responder = $responder;
    }

    /**
     * @return mixed
     */
    public function __invoke()
    {
        return $this->responder->handle();
    }
}
