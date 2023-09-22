<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Testing;
use App\Http\Controllers\BaseController;

class HomeController extends BaseController
{
    public function __construct(Testing $model)
    {
        parent::__construct($model);
    }

    /*
        Add new controllers
        OR
        Override existing controller here...
    */
    public function alur() {
        return Inertia::render('Alur');
    }
}