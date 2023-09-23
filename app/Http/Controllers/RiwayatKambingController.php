<?php

namespace App\Http\Controllers;

use App\Models\CheckingHistory;
use Illuminate\Http\Request;

class RiwayatKambingController extends Controller
{
    private $controller;
    public function __construct() {
        $this->controller = new CheckingHistoryController(new CheckingHistory());
    }
    
    public function index() {
        $data['title'] = "Riwayat Kambing";
        
        $data['kambingHistories'] = $this->controller->getAll();
        
        return view('riwayat-kambing', $data);
    }
}
