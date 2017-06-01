<?php

namespace Yish\Generators\Tests\Illuminate\Blog\Custom;

use Illuminate\Http\Response;
use Yish\Generators\Foundation\Format\FormatContract;
use Yish\Generators\Foundation\Format\Statusable;

class FailedCode implements FormatContract
{
    use Statusable;

    protected $status = false;

    public function code()
    {
        return Response::HTTP_INTERNAL_SERVER_ERROR;
    }
}