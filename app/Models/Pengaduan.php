<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $primarykey = 'id_pengaduan';

    protected $fillable = [
        'tgl_pengaduan',
        'nik',
        'judul_laporan',
        'isi_laporan',
        'tgl_kejadian',
        'lokasi',
        'kategori_kejadian',
        'photo_path',
        'status',
    ];
}
