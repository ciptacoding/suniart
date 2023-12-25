<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        $modifiedData = [];
        foreach ($kategori as $ktgr) {
            $truncatedDeskripsi = Str::limit(strip_tags($ktgr->deskripsi), $limit = 60, $end = '...');

            $modifiedData[] = [
                'id' => $ktgr->id,
                'nama' => $ktgr->nama,
                'truncatedDeskripsi' => $truncatedDeskripsi,
            ];
        }
        return view('Pages.Admin.Kategori.Index', compact('modifiedData'));
    }

    public function tambah()
    {
        return view('Pages.Admin.Kategori.Tambah');
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'deskripsi' => 'required|min:10'
        ]);

        Kategori::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.kategori');
    }

    public function detail($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('Pages.Admin.Kategori.Detail', compact('kategori'));
    }

    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('Pages.Admin.Kategori.Edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'deskripsi' => 'required|min:10'
        ]);

        $kategori = Kategori::findOrFail($id);

        $kategori->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.kategori');
    }

    public function delete($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        return redirect()->route('admin.kategori');
    }

    public function download($id)
    {
        $kategori = Kategori::findOrFail($id);
        $pdf = Pdf::loadView('Pages.Admin.Kategori.Cetak', compact('kategori'));
        return $pdf->download('kategori.pdf');
    }
}
