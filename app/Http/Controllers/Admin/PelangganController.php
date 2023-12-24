<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

class PelangganController extends Controller
{
    // Method untuk menampilkan datatable pengguna
    public function index()
    {
        $users = User::where('role_id', '!=', 1)->get();
        return view('Pages.Admin.Pelanggan.Index', compact('users'));
    }

    public function detail(string $id)
    {
        $user = User::findOrFail($id);
        return view('Pages.Admin.Pelanggan.Detail', compact('user'));
    }

    // method untuk menonaktifkan pengguna
    public function aktif(string $id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'status' => true,
        ]);

        return redirect()->route('admin.pelanggan');
    }

    // method untuk mengaktifkan pengguna
    public function nonaktif(string $id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'status' => false,
        ]);

        return redirect()->route('admin.pelanggan');
    }

    public function download($id)
    {
        $user = User::findOrFail($id);
        $pdf = Pdf::loadView('Pages.Admin.Pelanggan.Cetak', compact('user'));
        return $pdf->download('pelanggan.pdf');
    }
}
