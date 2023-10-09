<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class masyarakatController extends Controller
{
    function rakyat(){

        $masyarakat = DB::table('masyarakat')->get();

        return view('masyarakat', ['masyarakat' => $masyarakat]);

    }

    function register()
    {

        $register = "Login Masyarakat";

        return view('regis', ['regis' => $register]);
    }
}
