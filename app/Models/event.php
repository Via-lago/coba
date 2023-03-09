<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;

    protected $table = "events";

    protected $fillable = [
    'id_event',
    'id_paket',
    'nama_event',
    'nama_pengelola',
    'isi_paket',
    'harga',
    'tanggal'];
}
