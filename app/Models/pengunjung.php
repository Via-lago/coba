<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengunjung extends Model
{
    use HasFactory;

    protected $table = "pengunjungs";

    protected $fillable = [
    'id_pengunjung',
    'id_menu',
    'nama_pengunjung',
    'jenis_pengunjung',
    'nama_menu',
    'harga',
    'tanggal'];
}
