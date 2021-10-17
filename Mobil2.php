<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil2 extends Model
{
    use HasFactory;

    protected $primaryKey = 'id'; //jika primary field name bukan id, wajib diubah disini
    public $incrementing = true; //jika primary tidak auto increment ubah menjadi folder
    protected $table = 'mobil2s';
    protected $fillable = ['kode_mobil', 'merk', 'type', 'warna', 'harga_mobil', 'gambar'];
}
