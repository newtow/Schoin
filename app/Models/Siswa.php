<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = ['kelas','jurusan','angkatan','absen','tempat_lahir','tanggal_lahir','nama_siswa','nisn','nis','kelamin'];
}
