<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Models\Kambing;

class KambingController extends BaseController
{
    public function __construct(Kambing $model)
    {
        parent::__construct($model);
    }

    /*
        Add new controllers
        OR
        Override existing controller here...
    */
}