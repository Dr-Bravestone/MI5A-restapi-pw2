<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'mahasiswas';
    // protected $fillable=['nama_fakultas','nama_dekan','nama_wakil_dekan'];

    protected $fillable=['prodi_id','nama','npm','tanggal','foto'];

    public function prodi(){
        return $this->belongsTo(Prodi::class, 'prodi_id');
    }
}