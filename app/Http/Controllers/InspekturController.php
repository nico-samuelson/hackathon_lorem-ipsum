<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Models\Inspektur;

class InspekturController extends BaseController
{
    public function __construct(Inspektur $model)
    {
        parent::__construct($model);
    }

    /*
        Add new controllers
        OR
        Override existing controller here...
    */
}