<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory; //tambah baris ini didalam class

    protected $fillable = ['nama', 'nim', 'jurusan'];
}
