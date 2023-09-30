<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\BaseController;
use App\Models\Fakultas;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $prodi = Prodi::with('fakultas')->get();
        // return view('prodi.index') -> with('prodi', $prodi);
        return $this->sendSuccess($prodi, 'Data Prodi', 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fakultas = Fakultas::all();
        return view('prodi.create') -> with ('fakultas', $fakultas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validasi = $request -> validate ([
            
            'fakultas_id' => 'required',
            'nama_prodi' => 'required'
            
        ]);

        $result=Prodi::create($validasi);

        if($result){
            return $this->sendSuccess($result, 'Prodi berhasil ditambahkan',201);
        }else{
            return $this->sendError('','Data Gagal Disimpan',400);
        }

        // $prodi = new Prodi();
        // $prodi -> fakultas_id = $validasi['fakultas_id'];
        // $prodi -> nama_prodi = $validasi['nama_prodi'];

        // $prodi->save();
        // return redirect() -> route('prodi.index') -> with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prodi $prodi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $fakultas=Prodi::where('id',$id);

        
        if($fakultas->delete()){
            return $this->sendSuccess([],'Data Program Studi berhasil dihapus',303);
        }else{
            return$this->sendError('','Data Program studi gagal dihapus',400);
        }
        //
    }
}