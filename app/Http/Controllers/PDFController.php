<?php

namespace App\Http\Controllers;

use App\Http\Controllers\MemberController;
use App\Models\Member;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public $memberController;
    public function __construct(){
        $this->memberController = new MemberController(new Member());
    }
    public function generateKontrak($member_id)
    {
        $member = $this->memberController->getById($member_id);
        $data = $member->toArray();
        $data['tanggal_hari_ini'] = date('d-m-Y');
        $dompdf = Pdf::loadView('kontrak-pdf',$data);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->setOption('font-family', 'times new roman');
        $dompdf->render();
        $hash = md5(date('d-m-y'));
        $name = "KONTRAK_".$data['nama']."_".$hash.".pdf";
        $dompdf->save("kontrak/".$name, 'public');
        return $name;
    }
}
