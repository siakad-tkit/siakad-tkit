<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    /**
     * fillable
     *
     * @var array
     */
    use HasFactory;
    protected $table = 'kelas';
    protected $fillable = [
        'nama',
        'jml_siswa',
    ];
    public function penugasans()
    {
        return $this->hasMany(Penugasan::class);
    }

    public function absensis()
    {
        return $this->hasMany(Absensi::class);
    }

}
