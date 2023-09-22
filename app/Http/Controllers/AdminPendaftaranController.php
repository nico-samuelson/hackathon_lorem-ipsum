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

    public function updateStatus(Request $request) {
        $memberController = new MemberController(new Member());
        $memberController->updatePartial(['status' => $request->status], $request->id);
        return response()->json(['message' => 'Berhasil mengubah status member!']);
    }
}
