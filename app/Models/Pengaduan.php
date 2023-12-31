<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduan';

    protected $primaryKey = 'id_pengaduan';

    protected $fillable = [
        'tgl_pengaduan',
        'nik',
        'isi_laporan',
        'nama_ruangan',
        'foto',
        'status'
    ];

    protected $dates = ['tgl_pengaduan'];

    public function user ()
    {
        return $this->hasOne(Rumahsakit::class,'nik', 'nik');
    }
}
