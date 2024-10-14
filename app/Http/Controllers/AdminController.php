<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function entryResi(Request $request) {
        try {
            $request->validate([
                'tanggal' => 'required',
                'resi' => 'required'
            ]);
        } catch (\Throwable $th) {
            return redirect()->route('admin.index');
        }
        
        $getTanggal = $request->tanggal;
        $getResi = $request->resi;

        Transaksi::create([
            'resi' => $getResi,
            'tanggal_resi' => $getTanggal,
            'jenis' => 'Lainnya'
        ]);

        return redirect()->route('admin.index');
    }

    public function deleteResi($id) {
        Transaksi::where('id', $id)->delete();
        return redirect()->route('admin.index');
    }
}
