<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    /**
     * Show the profile for a given siswa.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $siswa = DB::table('siswa')
        ->join('kelas', 'siswa.id_kelas', '=', 'kelas.id_kelas')
        ->select('siswa.*', 'kelas.kelas')
        ->get();

        return view('siswa', ['siswa' => $siswa]);
    }
}
