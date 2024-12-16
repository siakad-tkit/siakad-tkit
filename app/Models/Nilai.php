<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $table = 'nilais';
    protected $fillable = [
        'siswa_id',
        'kelas_id',
        'akademik_id',
        'file',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class,'siswa_id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function akademik()
    {
        return $this->belongsTo(Akademik::class, 'akademik_id');
    }
}