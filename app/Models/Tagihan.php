<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    use HasFactory;

    protected $table = 'tagihans';
    protected $fillable = [
        'siswa_id',
        'kelas_id',
        'bulan',
        'jenis',
        'nominal',
        'status',
        'tanggal',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class,'siswa_id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
}