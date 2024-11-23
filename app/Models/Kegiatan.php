<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
     /**
     * fillable
     *
     * @var array
     */
    use HasFactory;
    protected $table = 'kegiatans';
    protected $fillable = [
        'bulan',
        'minggu',
        'hari',
        'tanggal',
        'kegiatan',
    ];
}
