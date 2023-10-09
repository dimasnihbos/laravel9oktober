<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class petugasController extends Controller
{
    function petugas(){

        $petugas = DB::table('petugas')->get();

        return view('petugas', ['petugas' => $petugas]);

    }

    function loginpetugas()
    {

        $login = "Login Petugas";

        return view('logpetugas', ['logpetugas' => $login]);
    }
}