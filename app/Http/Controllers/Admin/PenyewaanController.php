<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Penyewaan;

class PenyewaanController extends Controller
{
    public function index()
    {
        $penyewaan = Penyewaan::all();
        return view('Pages.Admin.Penyewaan.Index', compact('penyewaan'));
    }

    public function detail($id)
    {
        $penyewaan = Penyewaan::findOrFail($id);
        return view('Pages.Admin.Penyewaan.Detail', compact('penyewaan'));
    }
}
