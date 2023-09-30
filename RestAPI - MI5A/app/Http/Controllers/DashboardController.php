<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function index(){
        $data['fakultas'] = Fakultas::all();
        $data['prodi'] = Prodi::all();
        $data['mahasiswa'] = Mahasiswa::all();

        $data['mahasiswaprodi'] = DB::select('select 
        p.nama_prodi, count(*) as jumlah from mahasiswas m 
        join prodis p on m.prodi_id = p.id 
        GROUP BY p.nama_prodi');

        // dd($data['mahasiswaprodi']);
        return view('dashboardapp', $data);
    }
   
}