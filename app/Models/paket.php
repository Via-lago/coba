<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paket extends Model
{
    use HasFactory;

    protected $table = "pakets";

    protected $fillable = [
    'id_paket',
    'nama_paket',
    'isi_paket',
    'harga'];
}
