<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class AdminPendaftaranController extends Controller
{
    public function index() {
        $memberController = new MemberController(new Member());
        $data['title'] = "Admin Pendaftaran";
        $data['members'] = $memberController->getAll()->toArray();
        return view('admin-pendaftaran', $data);
    }
}
