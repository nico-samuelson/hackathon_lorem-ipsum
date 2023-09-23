<?php

namespace App\Http\Controllers;

use App\Models\Kambing;
use App\Models\KambingDetail;
use App\Models\Member;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminPendaftaranController extends Controller
{
    protected $kambingDetail;
    protected $kambing;

    public function __construct()
    {
        $this->kambingDetail = new KambingDetailController(new KambingDetail());
        $this->kambing = new KambingController(new Kambing());
    }

    public function index() {
        $memberController = new MemberController(new Member());
        $data['title'] = "Admin Pendaftaran";
        $data['members'] = $memberController->getAll()->toArray();
        return view('admin-pendaftaran', $data);
    }

    public function updateStatus(Request $request) {
        // dd($request);
        DB::beginTransaction();
        
        try {
            $memberController = new MemberController(new Member());
            // dd($request->status);
            if ($memberController->getById($request->id)->status == 1 && $request->status == 2) {
                // dd('tes');
                return response()->json(['error' => 'Member tidak bisa dibatalkan!']);
            }

            $validated['status'] = $request->status;
            $memberController->updatePartial($validated, $request->id);
    
            if ($request->status == 1) {
                $jantan = $this->kambing->getAll(['gender' => 'Jantan']);
                $this->kambing = new KambingController(new Kambing());
                $betina = $this->kambing->getAll(['gender' => "Betina"]);
                $req = new Request();
        
                $kambingDipilih = array();
                if ($jantan) {
                    $kambingDipilih[] = $jantan[array_rand($jantan->toArray(), 1)];
                }
                if ($betina) {
                    $betinaDipilih = array_rand($betina->toArray(), $betina->count() > 1 ? 2 : $betina->count());
                    $kambingDipilih[] = $betina[$betinaDipilih[0]];
                    if (count($betinaDipilih) > 1) {
                        $kambingDipilih[] = $betina[$betinaDipilih[1]];
                    }
                }
                foreach($kambingDipilih as $k) {
                    $this->kambingDetail->store($req->merge([
                        'kambing_id' => $k['id'],
                        'member_id' => $request->id,
                        'status' => 0,
                        'file_kontrak' => '/kontrak', // iki gantien atek file mu ngkok je
                    ]));
                }
            }

            DB::commit();
        }
        catch (Exception $e) {
            dd($e);
            DB::rollback();
        }

        return response()->json(['message' => 'Berhasil mengubah status member!']);
    }
}
