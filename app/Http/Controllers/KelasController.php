<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    /**
     * Show the profile for a given siswa.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $kelas = DB::table('kelas')
        ->select('*')
        ->get();

        return view('kelas', ['kelas' => $kelas]);
    }
}
