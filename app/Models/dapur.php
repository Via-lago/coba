<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dapur extends Model
{
    use HasFactory;

    protected $table = "dapurs";

    protected $fillable = [
    'id_bahanbaku',
    'nama_bahanbaku',
    'jenis_bahanbaku',
    'jumlah_stok'];
}
