<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Models\KambingDetail;

class KambingDetailController extends BaseController
{
    public function __construct(KambingDetail $model)
    {
        parent::__construct($model);
    }

    /*
        Add new controllers
        OR
        Override existing controller here...
    */
}