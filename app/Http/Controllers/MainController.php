<?php

namespace App\Http\Controllers;

use App\Models\Detail_transaksi;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $data['title'] = 'Cek Pengiriman';
        $data['detail_transaksis'] = Detail_transaksi::all();
        return view('user.index', $data);
    }

    public function login() {
        $data['title'] = 'Login Admin';
        return view('admin.login', $data);
    }

    public function admin_index() {
        $data['title'] = 'Halaman Admin';
        $data['transaksis'] = Transaksi::all();
        return view('admin.index', $data);
    }
}
