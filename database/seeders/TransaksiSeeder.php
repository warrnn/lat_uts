<?php

namespace Database\Seeders;

use App\Models\Transaksi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transaksi = [];

        for ($i = 0; $i < 2; $i++) {
            $transaksi[] = [
                'id' => fake()->uuid(),
                'resi' => "RS-00" . ($i + 1),
                'tanggal_resi' => fake()->date(),
                'jenis' => fake()->randomElement(['COD', 'Kurir', 'Lainnya']),
            ];
        }

        Transaksi::insert($transaksi);
    }
}
