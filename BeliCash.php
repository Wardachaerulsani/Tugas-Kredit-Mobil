<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeliCash extends Model
{
    use HasFactory;
    use HasFactory;
    protected $primaryKey = 'kode_cash';
    public $incrementing = false;
    protected $table = 'beli_cash';
    protected $fillable = ['kode_cash', 'ktp_pembeli', 'kode_mobil', 'cash_tgl', 'cash_bayar'];

    public function mobil()
    {
        return $this->hasOne(Mobil::class, 'kode_mobil', 'kode_mobil');
    }
    public function pembeli()
    {
        return $this->hasOne(Pembeli::class, 'ktp_pembeli', 'ktp_pembeli');
    }
}
