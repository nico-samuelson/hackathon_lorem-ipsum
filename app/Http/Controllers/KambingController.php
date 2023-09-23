<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Models\Kambing;
use App\Models\KambingDetail;

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

    public function kambing() {
        $kambing = $this->getAll();
        return view('kambing', [
            'title' => 'Detail Kambing',
            'kambing' => $kambing
        ]);
    }

    public function setMeninggal($id) {
        $this->delete($id);
        return redirect()->route('all-kambing');
    }
}