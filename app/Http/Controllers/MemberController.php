<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Models\Member;

class MemberController extends BaseController
{
    public function __construct(Member $model)
    {
        parent::__construct($model);
    }

    /*
        Add new controllers
        OR
        Override existing controller here...
    */
}