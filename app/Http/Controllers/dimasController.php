<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class dimasController extends Controller
{
    function index(){

        $judul = "Selamat Datang";
        $pengaduan = DB::table('pengaduan')->get();

        return view('home', ['TextJudul' => $judul, 'pengaduan' => $pengaduan]);

    }

    function hapus($id){
      $pengaduan = DB :: table('pengaduan')->where('id_pengaduan', '=', $id)->delete();

       return redirect()->back();
    }

    function tampil_pengaduan(){
        return view('isi');
    }

    function detail($id){
        $pengaduan = DB :: table('pengaduan')->where('id_pengaduan', '=', $id)->first();
    }

    function isi_pengaduan(Request $request){

        $request->validate([
            'isi_laporan' => 'required|min:10'
        ]);
        $isi = $request->isi_laporan;

        DB::table('pengaduan')->insert([
            'tgl_pengaduan' => date('Y-m-d'),
            'nik' => '01',
            'isi_laporan' => $isi,
            'foto' => '',
            'status' => '0'
        ]);
        return redirect('home');


   
   } 

   function detail_pengaduan($id){
    $pengaduan = DB::table('pengaduan')
            ->where('id_pengaduan')
            ->first();
    return view("detail-pengaduan", ["data" => $pengaduan]);
}
}