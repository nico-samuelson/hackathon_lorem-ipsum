<?php

namespace App\Http\Controllers;

use App\Models\Kambing;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $kambing;

    public function __construct()
    {
        $this->kambing = new Kambing();
    }

    public function index() {
        $kambing = $this->kambing->select(DB::raw('COUNT(*) AS count'), 'gender')->groupBy('gender')->get();
        $kambingHamil = $this->kambing->select(DB::raw('COUNT(*) AS count'), 'hamil')->groupBy('hamil')->get();

        $kambingUrip = DB::select("SELECT
            CONCAT(YEAR(start_date), '-', YEAR(start_date) + 2) AS `Year Interval`,
            COUNT(*) AS `count`
        FROM (
            SELECT
                tanggal_lahir,
                tanggal_lahir - INTERVAL (YEAR(tanggal_lahir) % 3) YEAR AS start_date
            FROM
                kambings
            WHERE
                tanggal_lahir >= DATE_SUB(CURDATE(), INTERVAL 12 YEAR)
        ) AS interval_subquery
        GROUP BY
            `Year Interval`
        ORDER BY
            start_date;
        ");

        return view('admin.dashboard', [
            'title' => 'Dashboard',
            'kambingByJenisKelamin' => $kambing,
            'kambingUrip' => $kambingUrip,
            'kambingHamil' => $kambingHamil,
        ]);
    }
}
