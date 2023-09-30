<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory, HasUuids;
    // biar namo tablenyo tetep single
    protected $table = 'fakultas';
    protected $fillable=['nama_fakultas','nama_dekan','nama_wakil_dekan'];
}