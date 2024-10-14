<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'transaksi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'resi',
        'tanggal_resi',
        'jenis',
    ];

    public function detail_transaksi() {
        return $this->hasMany(Detail_transaksi::class, 'transaksi_id', 'id');
    }
}
