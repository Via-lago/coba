<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;

    protected $table = "karyawans";

    protected $fillable = [
    'id_karyawan',
    'nama_karyawan',
    'jabatan',
    'email',
    'no_hp',
    'alamat'];
}
