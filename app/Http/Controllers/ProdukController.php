<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Models\Produk;

class ProdukController extends BaseController
{
    public function __construct(Produk $model)
    {
        parent::__construct($model);
    }

    /*
        Add new controllers
        OR
        Override existing controller here...
    */
}