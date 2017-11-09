<?php

namespace Raw\Leaves\Style;

use Rhubarb\Crown\Response\FileResponse;
use Rhubarb\Crown\Response\GeneratesResponseInterface;

class Main implements GeneratesResponseInterface
{
    public function generateResponse($request = null)
    {
        $res = new FileResponse(__DIR__ .'/../../../static/css/site.css', 'site.css');
        $res->setHeader('Content-Type', 'text/css');
        return $res;
    }
}
