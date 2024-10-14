<?php

namespace Database\Seeders;

use App\Models\Detail_transaksi;
use App\Models\Transaksi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailTransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $detail_transaksi = [];

        for ($i = 0; $i < 10; $i++) {
            $detail_transaksi[] = [
                'id' => fake()->uuid(),
                'resi' => fake()->ean8(),
                'tanggal' => fake()->date(),
                'kota' => fake()->city(),
                'keterangan' => fake()->sentence(),
                'transaksi_id' => Transaksi::all()->random()->id,
            ];
        }

        Detail_transaksi::insert($detail_transaksi);
    }
}
