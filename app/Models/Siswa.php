<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    /**
     * fillable
     *
     * @var array
     */
    use HasFactory;
    protected $table = 'siswas';
    protected $fillable = [
        'foto',
        'nama',
        'panggilan',
        'no_induk',
        'nisn',
        'kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'anak_ke',
        'ayah',
        'ibu',
        'pekerjaan_ayah',
        'pekerjaan_ibu',
        'kelurahan',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'no',

    ];

    public function absensis()
    {
        return $this->hasMany(Absensi::class);
    }

}
