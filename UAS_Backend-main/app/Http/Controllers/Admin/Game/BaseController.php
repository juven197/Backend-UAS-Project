<?php

namespace App\Http\Controllers\Admin\Game;

use App\Http\Controllers\Controller;
use App\Services\Admin\Game\Service;

class BaseController extends Controller
{
    public Service $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
