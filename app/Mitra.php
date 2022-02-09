<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'jenis_kelamin',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'umur',
        'status_perkawinan',
        'domisili',
        'kelurahan',
        'pendidikan',
        'nowa',
        'email',
        'pekerjaan',
        'motor',
        'hp',
        'zoom',
        'spek_hp',
        'pas_foto',
        'ktp',
    ];
}
