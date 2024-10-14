<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_transaksi extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'detail_transaksi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'tanggal',
        'kota',
        'keterangan'
    ];

    public function transaksi() {
        return $this->belongsTo(Transaksi::class, 'transaksi_id', 'id');
    }
}
