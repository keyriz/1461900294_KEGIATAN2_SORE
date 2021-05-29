<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SemesterController extends Controller
{
    /**
     * Show the profile for a given siswa.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $semester = DB::table('semester')
        ->select('*')
        ->get();

        return view('semester', ['semester' => $semester]);
    }
}
