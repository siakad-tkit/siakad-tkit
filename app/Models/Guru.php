<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
     /**
     * fillable
     *
     * @var array
     */
    use HasFactory;
    protected $table = 'gurus';
    protected $fillable = [
        'foto',
        'status',
        'bagian',
        'nama',
        'nip',
        'nuptk',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'status_nikah',
        'kelamin',
        'alamat',
        'no',
        'email',
        'mulai_kerja',

    ];
}
